<?php

use App\Http\Controllers\AddTourController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Tour;
use App\Http\Controllers\LienKetTrangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\NoticeController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FavoriteTourController;
use App\Http\Controllers\AddLocationController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi đăng ký các tuyến đường web cho ứng dụng. Các tuyến đường này
| được tải bởi RouteServiceProvider và tất cả sẽ thuộc nhóm middleware "web".
| Hãy tạo ra một ứng dụng tuyệt vời!
|
*/

// Nhập file xác thực
require __DIR__ . '/auth.php';

// Tuyến đường xác thực (Yêu cầu đăng nhập)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit'); // Chỉnh sửa hồ sơ
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); // Cập nhật hồ sơ
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy'); // Xóa hồ sơ
    Route::get('/user/home', [UserController::class, 'index'])->name('user.home'); // Trang chủ người dùng
});

// Tuyến đường khôi phục mật khẩu
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request'); // Hiển thị form quên mật khẩu
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email'); // Gửi email đặt lại mật khẩu
Route::get('/auth/otp', [ForgotPasswordController::class, 'showOtpForm'])->name('auth.otp'); // Hiển thị form nhập OTP
Route::get('/auth/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset'); // Hiển thị form đặt lại mật khẩu
Route::post('/check-otp', [ForgotPasswordController::class, 'checkOtp'])->name('password.checkOtp'); // Kiểm tra mã OTP
Route::post('/auth/reset-password', [ForgotPasswordController::class, 'update'])->name('password.updated'); // Cập nhật mật khẩu mới

// Tuyến đường chung (Không yêu cầu xác thực)
Route::get('/{page?}', [LienKetTrangController::class, 'index']); // Trang mặc định
Route::get('/search', [LienKetTrangController::class, 'search']); // Tìm kiếm
Route::get('/package', [AddTourController::class, 'hienThiTour'])->name('package'); // Hiển thị danh sách tour
Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking'); // Hiển thị thông tin tour để đặt
Route::get('/tour_location/{location_id}', [LienKetTrangController::class, 'hienThiTourTheoDiaDiem'])->name('tour.location'); // Hiển thị tour theo địa điểm
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore'); // Xem chi tiết tour

// Tuyến đường cho người dùng đã đăng nhập
Route::get('/user/package', [AddTourController::class, 'userHienThiTour'])->name('user.package'); // Hiển thị danh sách tour cho người dùng
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking'); // Hiển thị tour để đặt cho người dùng
Route::get('/user/tour_location/{location_id}', [LienKetTrangController::class, 'userHienThiTourTheoDiaDiem'])->name('user.tour.location'); // Hiển thị tour theo địa điểm cho người dùng
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore'); // Xem chi tiết tour cho người dùng
Route::get('/user/result', [LienKetTrangController::class, 'userSearch'])->name('searchUser'); // Kết quả tìm kiếm cho người dùng
Route::get('/user/favorite', [UserController::class, 'favorite'])->name('user.favorite'); // Danh sách tour yêu thích
Route::get('/history/{user_id}', [BookingController::class, 'history'])->name('history'); // Lịch sử đặt tour

// Tuyến đường cho quản trị viên
Route::get('/admin/home', [UserController::class, 'index'])->name('home'); // Trang chủ quản trị
Route::get('/admin/crud', [AddTourController::class, 'showCRUD'])->name('admin.showcrud'); // Hiển thị trang CRUD
Route::get('/admin/history', [AddTourController::class, 'history'])->name('admin.history'); // Hiển thị trang History
Route::get('/admin/crudtour', [AddTourController::class, 'S'])->name('admin.tour'); // Hiển thị danh sách tour quản trị
Route::get('/admin/information', [AddTourController::class, 'showInformation'])->name('admin.information'); // Hiển thị thông tin quản trị
Route::get('/admin/tour_location/{location_id}', [LienKetTrangController::class, 'adminHienThiTourTheoDiaDiem'])->name('admin.tour.location'); // Hiển thị tour theo địa điểm cho quản trị
Route::get('/admin/booking/{tour_id}', [LienKetTrangController::class, 'adminHienThiChiTietTuor'])->name('admin.tour.readmore'); // Xem chi tiết tour cho quản trị
Route::get('/admin/result', [LienKetTrangController::class, 'adminSearch'])->name('searchAdmin'); // Kết quả tìm kiếm cho quản trị
Route::get('/guide/crud', [AddTourController::class, 'showCRUDGuide'])->name('admin.guide'); // Hiển thị trang CRUD hướng dẫn viên

// Tuyến đường quản lý tour
Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store'); // Thêm tour
Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy'); // Xóa tour
Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit'); // Chỉnh sửa tour
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update'); // Cập nhật tour

// Tuyến đường quản lý hướng dẫn viên
Route::post('/guide', [AddTourController::class, 'storeGuide'])->name('guide.store'); // Thêm hướng dẫn viên
Route::delete('/guide/{id}', [AddTourController::class, 'destroyGuide'])->name('guide.destroy'); // Xóa hướng dẫn viên
Route::get('/guide/{id}/edit', [AddTourController::class, 'editGuide'])->name('guide.edit'); // Chỉnh sửa hướng dẫn viên
Route::put('/guide/{id}', [AddTourController::class, 'updateGuide'])->name('guide.update'); // Cập nhật hướng dẫn viên

// Tuyến đường quản lý người dùng
Route::delete('/xoaUser/{id}', [AdminController::class, 'xoaUser'])->name('tours.xoaUser'); // Xóa người dùng
Route::post('/update-usertype', [AdminController::class, 'updateUsertype'])->name('tours.suaUser'); // Cập nhật quyền người dùng

// Tuyến đường bình luận
Route::post('/submit-comment', [ClientController::class, 'store'])->name('submit_comment'); // Gửi bình luận

// Tuyến đường đặt tour
Route::post('/user/{booking_tour_id}/{booking_user_id?}', [BookingController::class, 'store'])->name('booking.store'); // Đặt tour

// Tuyến đường yêu thích
Route::post('/favorite/add', [FavoriteTourController::class, 'add'])->name('favorite.add'); // Thêm tour vào yêu thích
Route::post('/favorite/saveData', [FavoriteTourController::class, 'saveData'])->name('favorite.saveData'); // Lưu dữ liệu yêu thích
Route::post('/favorite/favoriteList', [FavoriteTourController::class, 'favoriteList'])->name('favorite.favoriteList'); // Hiển thị danh sách yêu thích
