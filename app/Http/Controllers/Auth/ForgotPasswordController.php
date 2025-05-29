<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class ForgotPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showLinkRequestForm()
    {
        return view('auth.forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        $request->validate([
            'email' => ['required', 'email', function ($attribute, $value, $fail) {
                if (!User::where('email', $value)->exists()) {
                    $fail(__('Email không tồn tại.'));
                }
            }],
        ]);

        // Gửi mã OTP đến địa chỉ email đã cung cấp
        $status = $this->sendOTP($request->email);

        if ($status === 'success') {
            // Lưu email vào session
            Session::put('password_reset_email', $request->email);
            return redirect()->route('auth.otp')->with(['status' => __('Gửi gmail mã OTP thành công.')]);
        } else {
            return back()->withErrors(['email' => __('Failed to send reset link.')]);
        }
    }

    public function showOtpForm(Request $request)
    {
        // Lấy giá trị email từ session flash
        $email = $request->session()->get('password_reset_email');

    // Trả về view với giá trị email để sử dụng trong form nhập mã OTP
        return view('auth.otp')->with('email', $email);
    }


    protected function sendOTP($email)
    {
        // Tạo mã OTP ngẫu nhiên
        $otp = mt_rand(100000, 999999);

        // Lưu mã OTP, địa chỉ email, thời gian tạo và thời gian hết hạn vào cơ sở dữ liệu
        $now = now();
        $expiry = $now->addMinutes(15); // Thêm 15 phút vào thời gian hiện tại
        DB::table('password_resets')->updateOrInsert(
            ['email' => $email],
            ['email' => $email, 'otp' => $otp, 'created_at' => $now, 'expiry' => $expiry]
        );

        // Gửi email chứa mã OTP đến địa chỉ email
        Mail::to($email)->send(new ResetPasswordMail($otp));

        // Trả về 'success' nếu gửi email thành công
        return 'success';
    }
    public function checkOtp(Request $request)
    {
        $request->validate([
            'otp' => 'required|digits:6',
        ]);

        // Lấy email từ session
        $email = Session::get('password_reset_email');

        // Lấy thông tin của địa chỉ email từ cơ sở dữ liệu
        $passwordReset = DB::table('password_resets')
            ->where('email', $email)
            ->first();

        if ($passwordReset && $passwordReset->otp == $request->otp && now() <= $passwordReset->expiry) {
            // Mã OTP hợp lệ, chuyển hướng đến trang đặt lại mật khẩu và truyền giá trị email
            return redirect()->route('password.reset', ['email' => $passwordReset->email]);
        } else {
            // Mã OTP không hợp lệ, trả về với thông báo lỗi
            return back()->withErrors(['otp' => __('Mã OTP không hợp lệ.')]);
        }
    }
    public function showResetForm(Request $request)
    {
        $email = $request->email;
        return view('auth.reset-password')->with('email', $email);
    }
    public function update(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required|confirmed|min:8',
    ]);

    // Tìm người dùng với địa chỉ email đã cho
    $user = User::where('email', $request->email)->first();

    if ($user) {
        // Cập nhật mật khẩu
        $user->password = Hash::make($request->password);
        $user->save();

        // Xóa thông tin reset password
        DB::table('password_resets')->where('email', $request->email)->delete();

        // Đăng nhập người dùng tự động
        Auth::login($user);

        // Chuyển hướng người dùng đến trang đăng nhập hoặc thông báo cập nhật thành công
        return redirect()->route('login')->with('success', 'Password updated successfully.');
    } else {
        // Không tìm thấy người dùng với địa chỉ email đã cho
        return back()->withErrors(['email' => 'Invalid email address.']);
    }
}

}
    
