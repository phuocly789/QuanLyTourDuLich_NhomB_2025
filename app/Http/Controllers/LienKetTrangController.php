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
                $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();
                $guides = Guide::orderBy('guide_Id')->get();
                // $clients = Client::orderBy('client_id')->get();
                $location = Location::orderBy('location_id')->get();
                $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

                return view($page, [
                    'user_main' => $user_main,
                    'data' => $tours,
                    'data_guide' => $guides,
                    'data_location' => $location,
                    'footerTours' => $footerTours,
                    // 'data_comment' => $clients,
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

        $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
        $guides = Guide::orderBy('guide_Id')->get();
        $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();
        // $clients = Client::orderBy('client_id')->get();
        $location = Location::orderBy('location_id')->get();
        return view($page, [
            'data' => $tours,
            'data_guide' => $guides,
            'footerTours' => $footerTours,
            // 'data_comment' => $clients,
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
        $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();
        return view('tour_location', compact('tours', 'location', 'footerTours'));
    }
    public function userHienThiTourTheoDiaDiem($id)
    {
        $tours = Tour::where('location_id', $id)->get();
        $location = Location::findOrFail($id);
        $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();
        return view('user.tour_location', compact('tours', 'location', 'footerTours'));
    }

    public function userHienThiChiTietTuor(Request $request, $id)
    {
        // Kiểm tra tour tồn tại
        $tour = Tour::find($id);
        if (!$tour) {
            return redirect()->route('user.package')->with('error', 'Tour không tồn tại!');
        }

        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập

        $tours = Tour::orderBy('tour_id')->get();
        $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();

        // Bình luận - phân trang và kiểm tra trang hợp lệ
        $perPage = 5;
        $totalComments = Client::where('tour_id', $tour->tour_id)->count();
        $maxPages = ceil($totalComments / $perPage);

        $page = $request->input('page', 1);
        if (!is_numeric($page) || $page < 1 || ($maxPages > 0 && $page > $maxPages)) {
            return redirect()->route('user.package')->with('error', 'Trang bình luận không hợp lệ!');
        }

        $data_comment = Client::where('tour_id', $tour->tour_id)->latest()->paginate($perPage, ['*'], 'page', $page);

        // Danh sách tour yêu thích nếu đã đăng nhập
        $favoriteTours = collect(); // Khởi tạo rỗng
        if ($user_main) {
            $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();
        }

        return view('user.booking', [
            'user_main' => $user_main,
            'value' => $tour,
            'data' => $tours,
            'data_comment' => $data_comment,
            'favoriteTours' => $favoriteTours,
            'footerTours' => $footerTours
        ]);
    }


    public function userSearch(Request $request)
    {
        $search = $request->searchUser ?? '';
        $tours = collect();
        $error = null;

        if (empty($search)) {
            $error = 'Vui lòng nhập từ khóa tìm kiếm!';
        } elseif (strlen($search) > 100) { // Kiểm tra độ dài ký tự
            $error = 'Chuỗi tìm kiếm không được vượt quá 100 ký tự!';
        } else {
            $tours = Tour::where('tour_name', 'like', "%$search%")
                ->orderByRaw("CAST(REPLACE(tour_sale, '%', '') AS UNSIGNED) DESC")
                ->get();
        }

        return view('user.result', compact('tours', 'search', 'error'));
    }


    public function search(Request $request)
    {
        $search = $request->search ?? '';
        $tours = collect();
        $error = null;

        if (empty($search)) {
            $error = 'Vui lòng nhập từ khóa tìm kiếm!';
        } elseif (strlen($search) > 100) { // Kiểm tra độ dài ký tự
            $error = 'Chuỗi tìm kiếm không được vượt quá 100 ký tự!';
        } else {
            $tours = Tour::where('tour_name', 'like', "%$search%")
                ->orderByRaw("CAST(REPLACE(tour_sale, '%', '') AS UNSIGNED) DESC")
                ->get();
        }

        return view('search', compact('tours', 'search', 'error'));
    }


    public function loadMoreTours(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', 10);

        $tours = Tour::orderBy('tour_id', 'asc')
            ->skip($skip)
            ->take($take)
            ->get();
        $total = Tour::count();

        return response()->json([
            'tours' => $tours,
            'total' => $total
        ]);
    }
    public function loadMoreGuides(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', 8);

        $guides = Guide::orderBy('guide_Id', 'asc')
            ->skip($skip)
            ->take($take)
            ->get();
        $total = Guide::count();

        return response()->json([
            'guides' => $guides,
            'total' => $total
        ]);
    }

    public function loadMoreUsers(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', 8);

        $users = User::orderBy('id', 'asc')
            ->skip($skip)
            ->take($take)
            ->get();
        $total = User::count();

        return response()->json([
            'users' => $users,
            'total' => $total
        ]);
    }

    public function loadMoreBookings(Request $request)
    {
        $skip = $request->input('skip', 0);
        $take = $request->input('take', 10);

        $bookings = Booking::with('tour')->skip($skip)->take($take)->get();
        $total = Booking::count();

        return response()->json([
            'bookings' => $bookings,
            'total' => $total
        ]);
    }
}
