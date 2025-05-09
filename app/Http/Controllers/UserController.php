<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Notification;
use App\Models\Guide;
use App\Models\Location;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\FavoriteTour;

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
                $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
                $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
                $guide = Guide::orderBy('guide_Id')->get();
                $client = Client::orderBy('client_id')->get();
                return view('user.home', ['user_main' => $user_main, 'data' => $tours, 'data_guide' => $guide, 'data_comment' => $client]);
            } else if ($userType == 'admin') {
                $tours = Tour::orderByRaw('CAST(tour_sale AS DECIMAL) DESC')->paginate(6);
                $guide = Guide::orderBy('guide_Id')->get();
                $client = Client::orderBy('client_id')->get();
                return view('admin.home', ['data' => $tours, 'data_guide' => $guide, 'data_comment' => $client]);
            }
        }
    }
    public function favorite()
    {

        $user_main = Auth::user();
        $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();
        // Sau đó, chuyển hướng người dùng đến trang "Tour yêu thích"
        return view('user.favorite', ['favoriteTours' => $favoriteTours,]);
    }
}
