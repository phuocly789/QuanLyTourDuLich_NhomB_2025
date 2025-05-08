<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\FavoriteTour;
use Illuminate\Support\Facades\Auth;

class FavoriteTourController extends Controller
{
    public function add(Request $request)
    {
        $tourId = $request->input('tour_id');
        $userId = Auth::id();

        $existingFavorite = FavoriteTour::where('tour_id', $tourId)
            ->where('user_id', $userId)
            ->first();

        if (!$existingFavorite) {
            $favorite = new FavoriteTour();
            $favorite->tour_id = $tourId;
            $favorite->user_id = $userId;
            $favorite->save();

            return response()->json(['status' => 'added']);
        }

        $existingFavorite->delete();
        return response()->json(['status' => 'removed']);
    }


    public function saveData(Request $request)
    {
        $tour_id = $request->input('tourId');
        $tourId = $tour_id;

        // Lấy ID của người dùng hiện đang đăng nhập
        $userId = Auth::id();

        // Kiểm tra xem mục yêu thích đã tồn tại chưa
        $existingFavorite = FavoriteTour::where('tour_id', $tourId)
            ->where('user_id', $userId)
            ->first();

        // Nếu mục yêu thích chưa tồn tại, thêm nó vào CSDL
        if (!$existingFavorite) {
            $favorite = new FavoriteTour();
            $favorite->tour_id = $tourId;
            $favorite->user_id = $userId;
            $favorite->save();

            // Chuyển hướng người dùng trở lại trang trước đó
            return response()->json($favorite);
        }
        $existingFavorite->delete();
        return response()->json(['message' => 'false']);
    }

    public function favoriteList()
    {
        $favorite = FavoriteTour::where('user_id', Auth::id())->get();
        return response()->json($favorite);
    }
}
