<!-- 

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str; // Cần thiết để tạo mật khẩu ngẫu nhiên

class SocialAuthController extends Controller
{
    /**
     * Chuyển hướng người dùng đến trang xác thực của Google.
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Xử lý callback từ Google sau khi xác thực.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
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
                    ]);
                }
            }

            // Đăng nhập người dùng
            Auth::login($user);

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
