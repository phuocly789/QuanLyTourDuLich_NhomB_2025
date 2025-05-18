<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Booking; // Giả sử bạn có model Booking

class ClientController extends Controller
{
    public function store(Request $request)
    {
        // Kiểm tra đăng nhập
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'Vui lòng đăng nhập để bình luận.');
        }

        // Validate form data
        $validatedData = $request->validate([
            'client_comment' => 'required|string',
            'client_address' => 'required|string',
            'client_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tour_id' => 'required|integer|exists:tours,tour_id',
        ]);

        // Kiểm tra xem người dùng đã đặt tour chưa
        $bookingExists = Booking::where('booking_user_id', Auth::id())
            ->where('booking_tour_id', $validatedData['tour_id'])
            ->exists();

        if (!$bookingExists) {
            return redirect()->back()->with('error', 'Bạn cần đặt tour này để có thể bình luận.');
        }

        // Xử lý ảnh
        $new_image = 'noAvatar.jpg';
        if ($request->hasFile('client_image') && $request->file('client_image')->isValid()) {
            $get_imgae = $request->file('client_image');
            $get_name_image = $get_imgae->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 999) . '.' . $get_imgae->getClientOriginalExtension();
            $get_imgae->move(public_path('img/'), $new_image);
        }

        // Tạo và lưu bình luận
        $client = new Client;
        $client->client_comment = $validatedData['client_comment'];
        $client->client_name = Auth::user()->name;
        $client->client_address = $validatedData['client_address'];
        $client->client_image = $new_image;
        $client->user_id = Auth::user()->id;
        $client->tour_id = $validatedData['tour_id'];
        $client->save();

        // Chuyển hướng với thông báo thành công và tham số cuộn
        return redirect()->back()->with([
            'success' => 'Bình luận đã được gửi thành công!',
            'scroll_to_comments' => true
        ]);
    }
}
