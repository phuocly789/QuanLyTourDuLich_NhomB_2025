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

class LienKetTrangController extends Controller
{

    public function index($page = "index")
    {
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->paginate(6);
        $user = User::orderBy('id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $client = Client::orderBy('client_id')->get();

        // Lấy các tour yêu thích của người dùng hiện tại
        // $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

        return view($page, [
            'user_main' => $user_main,
            'data' => $tours,
            'data_guide' => $guide,
            'decentralization' => $user,
            'data_comment' => $client,
            // 'favoriteTours' => $favoriteTours, // Truyền danh sách các tour yêu thích vào view
        ]);
    }
    public function hienThi($id)
    {
        $client = Client::orderBy('client_id')->get();
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('booking', ['value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }
    public function hienThiUser($id)
    {
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['value' => $tour, 'data' => $tours]);
    }


    public function userHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['user_main' => $user_main, 'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }


    // AMIN


    public function adminHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderBy('tour_id')->get();
        $tour = Tour::findOrFail($id);
        return view('admin.booking', ['user_main' => $user_main, 'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }


}
