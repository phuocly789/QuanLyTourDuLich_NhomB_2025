<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Tour;
use App\Models\Notification;
use App\Models\Guide;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\FavoriteTour;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        if (Auth::id()) {
            $userType = Auth()->user()->usertype;

            if ($userType == 'user') {
                $user_main = Auth::user();
                $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
                $guides = Guide::orderBy('guide_Id')->get();
                $footerTours = Tour::orderBy('tour_id', 'asc')->take(12)->get();
                // $clients = Client::orderBy('client_id')->get();
                $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

                return view('user.home', [
                    // 'user_main' => $user_main,
                    'user_main' => $user_main,
                    'data' => $tours,
                    'data_guide' => $guides,
                    'footerTours' => $footerTours,
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
        return view('index');
    }
}
