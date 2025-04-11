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
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/trangchu', function () {
//     return view('home');
// })->middleware(['auth', 'verified'])->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
Route::get('/admin/home', [UserController::class, 'index'])->name('home');

//USER CHƯA CÓ TÀI KHOẢN

//-------Hiển thị chi tiết tour
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore');

//USER ĐÃ CÓ TÀI KHOẢN

//-------Hiển thị chi tiết tour - user
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore');





//ADMIN



// -------Hiển thị chi tiết tour - admin
Route::get('/admin/booking/{tour_id}', [LienKetTrangController::class, 'adminHienThiChiTietTuor'])->name('admin.tour.readmore');

//-------Quay lại trang CRUD sau khi edit tour - admin
// Route::get('/admin/crud', [LienKetTrangController::class, 'index'])->name('crud');
// 
Route::get('/admin/crudtour', [AddTourController::class, 'S'])->name('admin.tour');





// Route::get('/booking/{tour_id}', [BookingController::class, 'showBooking'])->name('booking');

Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');


// thêm tour
Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store');
// xóa tour
Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy');
// chỉnh sửa tour
Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit');
// cập nhật tour
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update');

Route::get('/admin/crud', [AddTourController::class, 'showCRUD'])->name('admin.showcrud');

// thêm guide
Route::post('/guide', [AddTourController::class, 'storeGuide'])->name('guide.store');
// xóa guide
Route::delete('/guide/{id}', [AddTourController::class, 'destroyGuide'])->name('guide.destroy');
// chỉnh sửa guide
Route::get('/guide/{id}/edit', [AddTourController::class, 'editGuide'])->name('guide.edit');
// cập nhật guide
Route::put('/guide/{id}', [AddTourController::class, 'updateGuide'])->name('guide.update');
Route::get('/guide/crud', [AddTourController::class, 'showCRUDGuide'])->name('admin.guide');


// Xóa thông tin user
Route::delete('/xoaUser/{id}', [AdminController::class, 'xoaUser'])->name('tours.xoaUser');
// Sửa quyền user
Route::post('/update-usertype',  [AdminController::class, 'updateUsertype'])->name('tours.suaUser');
// Đăng ký thông báo user

// comment
Route::post('/submit-comment', [ClientController::class, 'store'])->name('submit_comment');

// booking
// Route::get('/user/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::post('/user/{booking_tour_id}/{booking_user_id?}', [BookingController::class, 'store'])->name('booking.store');



Route::get('/{page?}', [LienKetTrangController::class, 'index']);

Route::get('/user/home', [UserController::class, 'index'])->name('user.home')->middleware('auth');


use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// Route cho trang quên mật khẩu
Route::get('/auth/otp', [ForgotPasswordController::class, 'showOtpForm'])->name('auth.otp');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])
    ->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])
    ->name('password.email');

// Route cho trang nhập mã OTP
Route::get('/auth/reset-password', [ForgotPasswordController::class, 'showResetForm'])
    ->name('password.reset');
Route::post('/check-otp', [ForgotPasswordController::class, 'checkOtp'])
    ->name('password.checkOtp');

// Route cho trang đặt lại mật khẩu
Route::post('/auth/reset-password', [ForgotPasswordController::class, 'update'])
    ->name('password.updated');



Route::get('/user/favorite', [UserController::class, 'favorite'])->name('user.favorite');

