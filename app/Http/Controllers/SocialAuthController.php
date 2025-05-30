<?php
// app/Http/Controllers/Auth/SocialiteController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Booking;
use App\Models\Tour;
use App\Models\Notification;
use App\Models\Guide;
use App\Models\Location;
use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\FavoriteTour;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang xác thực của Google.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Xử lý callback từ Google sau khi xác thực.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function callback()
    {
        try {
            // Lấy thông tin người dùng từ Google
            $googleUser = Socialite::driver('google')->user();

            // Tìm kiếm người dùng hiện có bằng google_id
            $user = User::where('google_id', $googleUser->id)->first();

            // Nếu không tìm thấy, tạo người dùng mới
            if (!$user) {
                // Kiểm tra xem email đã tồn tại chưa
                $existingUser = User::where('email', $googleUser->email)->first();

                if ($existingUser) {
                    // Nếu email đã tồn tại, hãy liên kết tài khoản Google với người dùng hiện có
                    $existingUser->google_id = $googleUser->id;
                    $existingUser->google_avatar = $googleUser->avatar;
                    $existingUser->save();
                    $user = $existingUser; // Gán lại user để đăng nhập
                } else {
                    // Tạo người dùng mới hoàn toàn
                    $user = User::create([
                        'name' => $googleUser->name,
                        'email' => $googleUser->email,
                        'google_id' => $googleUser->id,
                        'google_avatar' => $googleUser->avatar,
                        'password' => \Hash::make(\Str::random(20)), // Tạo mật khẩu ngẫu nhiên hoặc có thể để null nếu bạn không yêu cầu đăng nhập bằng email/mật khẩu
                    ]);
                }
            }

            // Đăng nhập người dùng
            Auth::login($user);

            // Chuyển hướng đến trang dashboard hoặc trang mong muốn
            return redirect()->intended('login'); // Thay /dashboard bằng route của bạn

        } catch (\Exception $e) {
            // Xử lý lỗi (ví dụ: ghi log, hiển thị thông báo lỗi)
            \Log::error('Google OAuth Error: ' . $e->getMessage());
            return redirect('login')->withErrors(['google_auth_error' => 'Đăng nhập Google thất bại. Vui lòng thử lại.']);
        }
    }
}
