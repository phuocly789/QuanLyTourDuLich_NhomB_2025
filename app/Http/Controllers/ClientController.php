<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function store(Request $request)
    {
       // Validate form data
    $validatedData = $request->validate([
        'client_comment' => 'required|string',
        'client_address' => 'required|string',
        'client_image' => 'nullable',
        'tour_id'=>'required|integer',
    ]);

    // Kiểm tra nếu người dùng không chọn ảnh
    if (empty($validatedData['client_image'])) {
        $validatedData['client_image'] = 'noAvatar.jpg';
    }

    $get_imgae = $request->client_image;
        $path = 'img/';
        $get_name_image = $get_imgae->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 999) . '.' . $get_imgae->getClientOriginalExtension();
        $get_imgae->move($path, $new_image);

    // Create a new client instance
    $client = new Client;
    $client->client_comment = $validatedData['client_comment'];
    $client->client_name = Auth::user()->name; // Lấy tên của người dùng đăng nhập
    
    $client->client_address = $validatedData['client_address'];
    $client->client_image = $new_image;
    $client->user_id = Auth::user()->id; // Lấy tên của người dùng đăng nhập
    $client->tour_id = $validatedData['tour_id'];

    // Lưu bình luận vào cơ sở dữ liệu
    $client->save();

    // Redirect back or to a success page
    return redirect()->back()->with('success', 'Bình luận đã được gửi thành công!');
    }
}
