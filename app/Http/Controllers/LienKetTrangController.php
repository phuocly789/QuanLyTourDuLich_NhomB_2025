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
        $tours = Tour::orderByRaw('CAST(REPLACE(tour_sale, "%", "") AS UNSIGNED) DESC')->paginate(6);

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
         $tours = Tour::orderByRaw('CAST(tour_sale AS UNSIGNED) DESC')->get();
        $tour = Tour::findOrFail($id);
        return view('booking', ['value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }
    public function hienThiUser($id)
    {
         $tours = Tour::orderByRaw('CAST(tour_sale AS UNSIGNED) DESC')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['value' => $tour, 'data' => $tours]);
    }


    public function userHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
         $tours = Tour::orderByRaw('CAST(tour_sale AS UNSIGNED) DESC')->get();
        $tour = Tour::findOrFail($id);
        return view('user.booking', ['user_main' => $user_main, 'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }


    // AMIN


    public function adminHienThiChiTietTuor($id)
    {
        $client = Client::orderBy('client_id')->get();
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
         $tours = Tour::orderByRaw('CAST(tour_sale AS UNSIGNED) DESC')->get();
        $tour = Tour::findOrFail($id);
        return view('admin.booking', ['user_main' => $user_main, 'value' => $tour, 'data' => $tours, 'data_comment' => $client]);
    }

    //search
    public function userSearch(Request $request)
    {
        $search = $request->usersearch;
        $tours = Tour::where(function ($query) use ($search) {
            $query->where('tour_name', 'like', "%$search%");
        })->get();
        return view('user.result', compact('tours'));
    }
    public function adminSearch(Request $request)
    {
        $search = $request->input('adminsearch');
        $tours = $search
            ? Tour::where('tour_name', 'like', "%$search%")->paginate(9)
            : Tour::paginate(9);

        return view('admin.result', compact('tours'));
    }
    public function search(Request $request)
    {
        $search = $request->search;
        $tours = Tour::where(function ($query) use ($search) {
            $query->where('tour_name', 'like', "%$search%");
        })->get();
        return view('search', compact('tours'));
    }

}
