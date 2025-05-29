<<<<<<< HEAD
<!-- 
=======
<?php
// app/Http/Controllers/Auth/SocialiteController.php
>>>>>>> hiepDev

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str; // Cần thiết để tạo mật khẩu ngẫu nhiên
=======
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
>>>>>>> hiepDev

class SocialAuthController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang xác thực của Google.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
<<<<<<< HEAD
    public function redirectToGoogle()
=======
    public function redirect()
>>>>>>> hiepDev
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Xử lý callback từ Google sau khi xác thực.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
<<<<<<< HEAD
    public function handleGoogleCallback()
    {
        try {
            // Lấy thông tin người dùng từ Google (sử dụng stateless để tránh lỗi nếu không có session)
            $googleUser = Socialite::driver('google')->user();

            // 1. Tìm người dùng trong database bằng google_id
            $user = User::where('google_id', $googleUser->getId())->first();

            // 2. Nếu không tìm thấy bằng google_id, thử tìm bằng email
            if (!$user) {
                $user = User::where('email', $googleUser->getEmail())->first();

                if ($user) {
                    // Nếu tìm thấy người dùng bằng email nhưng chưa có google_id,
                    // cập nhật google_id cho tài khoản hiện có.
                    // Điều này liên kết tài khoản truyền thống với tài khoản Google.
                    $user->google_id = $googleUser->getId();
                    $user->save();
                } else {
                    // Nếu không tìm thấy bằng cả google_id và email, tạo người dùng mới.
                    $user = User::create([
                        'name' => $googleUser->getName(),
                        'email' => $googleUser->getEmail(),
                        'google_id' => $googleUser->getId(),
                        // Tạo mật khẩu ngẫu nhiên và mã hóa. User sẽ không dùng mật khẩu này
                        // để đăng nhập bằng email/pass, mà chỉ để đảm bảo cột password không null.
                        'password' => Hash::make(Str::random(16)),
                        // Bạn có thể lưu thêm các trường khác nếu muốn, ví dụ: 'avatar' => $googleUser->getAvatar(),
=======
    public function callback()
    {
        try {
            // Lấy thông tin người dùng từ Google
            $googleUser = Socialite::driver('google')->user();

            // Tìm kiếm người dùng hiện có bằng google_id
            // $user = User::where('google_id', $googleUser->id)->first();

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
>>>>>>> hiepDev
                    ]);
                }
            }

            // Đăng nhập người dùng
            Auth::login($user);

<<<<<<< HEAD
            // Chuyển hướng đến trang dashboard hoặc trang mong muốn sau khi đăng nhập
            return redirect()->intended('user.home');

        } catch (\Exception $e) {
            // Xử lý lỗi nếu có vấn đề trong quá trình xác thực Google
            // Luôn ghi log lỗi để dễ dàng debug
            \Log::error('Google login failed: ' . $e->getMessage());
            return redirect('/login')->with('error', 'Đăng nhập Google thất bại. Vui lòng thử lại.');
        }
    }
} -->
=======
            // Chuyển hướng đến trang dashboard hoặc trang mong muốn
            return redirect()->intended('login'); // Thay /dashboard bằng route của bạn

        } catch (\Exception $e) {
            // Xử lý lỗi (ví dụ: ghi log, hiển thị thông báo lỗi)
            \Log::error('Google OAuth Error: ' . $e->getMessage());
            return redirect('login')->withErrors(['google_auth_error' => 'Đăng nhập Google thất bại. Vui lòng thử lại.']);
        }
    }
}
>>>>>>> hiepDev
