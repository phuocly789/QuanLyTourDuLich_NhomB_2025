<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\Tour;
use App\Models\User;
use App\Models\Guide;
use App\Models\Location;
use App\Models\Client;
use App\Models\Booking;
use Illuminate\Http\Request;
use Ramsey\Uuid\Guid\Guid;

// use Ramsey\Uuid\Guid\Guide;
use App\Models\FavoriteTour;
use Carbon\Carbon;

class LienKetTrangController extends Controller
{


    public function index($page = "index")
    {
        $user = Auth::user();
        if ($user) {
            $userType =  $user->usertype;

            if ($userType == 'user') {
                $user_main = Auth::user();
                $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
                $guides = Guide::orderBy('guide_Id')->get();
                $clients = Client::orderBy('client_id')->get();
                $location = Location::orderBy('location_id')->get();
                $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

                return view($page, [
                    'user_main' => $user_main,
                    'data' => $tours,
                    'data_guide' => $guides,
                    'data_location' => $location,
                    'data_comment' => $clients,
                    'favoriteTours' => $favoriteTours
                ]);
            } elseif ($userType == 'admin') {
                $total_tours = Tour::count();
                $total_users = User::count();
                $total_guides = Guide::count();
                $total_bookings = Booking::count();
                $bookings_today = Booking::whereDate('created_at', today())->count();
                $tours = Tour::orderBy('tour_id')->paginate(10);
                $guides = Guide::orderBy('guide_Id')->paginate(10);
                $users = User::orderBy('id')->paginate(10);
                $bookings = Booking::orderBy('created_at', 'desc')->paginate(10);

                // Lấy dữ liệu lịch sử đơn hàng
                $booking_history = Booking::with('tour')->orderBy('created_at', 'desc')->paginate(10);

                // Thống kê doanh thu
                $revenue_daily = Booking::whereDate('created_at', today())->sum('booking_amount');
                $revenue_weekly = Booking::whereBetween('created_at', [
                    Carbon::now()->startOfWeek(),
                    Carbon::now()->endOfWeek()
                ])->sum('booking_amount');
                $revenue_monthly = Booking::whereMonth('created_at', Carbon::now()->month)
                    ->whereYear('created_at', Carbon::now()->year)
                    ->sum('booking_amount');
                $revenue_yearly = Booking::whereYear('created_at', Carbon::now()->year)
                    ->sum('booking_amount');

                return view('admin.home', compact(
                    'total_tours',
                    'total_users',
                    'total_guides',
                    'total_bookings',
                    'bookings_today',
                    'tours',
                    'users',
                    'guides',
                    'bookings',
                    'booking_history',
                    'revenue_daily',
                    'revenue_weekly',
                    'revenue_monthly',
                    'revenue_yearly'
                ));
            }
        }

        // Trường hợp không đăng nhập: trả về view index.blade.php
        $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
        $guides = Guide::orderBy('guide_Id')->get();
        $clients = Client::orderBy('client_id')->get();
        $location = Location::orderBy('location_id')->get();
        return view($page, [
            'data' => $tours,
            'data_guide' => $guides,
            'data_comment' => $clients,
            'data_location' => $location
        ]);
    }

    public function hienThi($id)
    {
        $client = Client::orderBy('client_id')->get();
        $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
        $tour = Tour::findOrFail($id);
        return view('booking', ['value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }
    public function hienThiUser($id)
    {
        $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['value' => $tour, 'data' => $tours]);
    }


    public function hienThiTourTheoDiaDiem($id)
    {
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::findOrFail($id);
        return view('tour_location', compact('tours', 'location'));
    }
    public function userHienThiTourTheoDiaDiem($id)
    {
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::findOrFail($id);
        return view('user.tour_location', compact('tours', 'location'));
    }

    public function userHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);

        // Khởi tạo mảng rỗng cho favoriteTours
        $favoriteTours = collect();

        // Kiểm tra nếu người dùng đã đăng nhập
        if ($user_main) {
            $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();
        }

        return view('user.booking', [
            'user_main' => $user_main,
            'value' => $tour,
            'data' => $tours,
            'data_comment' => $client,
            'favoriteTours' => $favoriteTours
        ]);
    }

    public function userSearch(Request $request)
    {
        $search = $request->usersearch;
        $tours = Tour::where('tour_name', 'like', "%$search%")
            ->orderByRaw("CAST(REPLACE(tour_sale, '%', '') AS UNSIGNED) DESC")
            ->get();
        return view('user.result', compact('tours', 'search'));
    }

    public function search(Request $request)
    {

        $search = $request->search;
        $tours = Tour::where('tour_name', 'like', "%$search%")
            ->orderByRaw("CAST(REPLACE(tour_sale, '%', '') AS UNSIGNED) DESC")
            ->get();
        return view('result', compact('tours', 'search'));
    }

    // AMIN
    public function adminHienThiTourTheoDiaDiem($id)
    {
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::findOrFail($id);
        return view('admin.tour_location', compact('tours', 'location'));
    }

    public function adminHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('admin.booking', ['user_main' => $user_main, 'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }

    public function adminSearch(Request $request)
    {
        $search = $request->searchadmin;
        $tours = Tour::where('tour_name', 'like', "%$search%")
            ->orderByRaw("CAST(REPLACE(tour_sale, '%', '') AS UNSIGNED) DESC")
            ->get();
        return view('admin.result', compact('tours', 'search'));
    }
}
