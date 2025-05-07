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

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
Route::get('/admin/home', [UserController::class, 'index'])->name('home');

// USER CHƯA CÓ TÀI KHOẢN
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore');

// USER ĐÃ CÓ TÀI KHOẢN
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore');
Route::get('/user/result', [LienKetTrangController::class, 'userSearch'])->name('searchUser');
Route::get('/search', [LienKetTrangController::class, 'search']);

// ADMIN
Route::get('/admin/booking/{tour_id}', [LienKetTrangController::class, 'adminHienThiChiTietTuor'])->name('admin.tour.readmore');
Route::get('/admin/crudtour', [AddTourController::class, 'S'])->name('admin.tour');
Route::get('/admin/result', [LienKetTrangController::class, 'adminSearch'])->name('searchadmin');

Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');

// Thêm tour
Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store');
Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy');
Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update');
Route::get('/admin/crud', [AddTourController::class, 'showCRUD'])->name('admin.showcrud');

// Thêm guide
Route::post('/guide', [AddTourController::class, 'storeGuide'])->name('guide.store');
Route::delete('/guide/{id}', [AddTourController::class, 'destroyGuide'])->name('guide.destroy');
Route::get('/guide/{id}/edit', [AddTourController::class, 'editGuide'])->name('guide.edit');
Route::put('/guide/{id}', [AddTourController::class, 'updateGuide'])->name('guide.update');
Route::get('/guide/crud', [AddTourController::class, 'showCRUDGuide'])->name('admin.guide');

// Xóa và sửa quyền user
Route::delete('/xoaUser/{id}', [AdminController::class, 'xoaUser'])->name('tours.xoaUser');
Route::post('/update-usertype', [AdminController::class, 'updateUsertype'])->name('tours.suaUser');

// Comment
Route::post('/submit-comment', [ClientController::class, 'store'])->name('submit_comment');

// Booking
Route::post('/user/{booking_tour_id}/{booking_user_id?}', [BookingController::class, 'store'])->name('booking.store');

Route::get('/{page?}', [LienKetTrangController::class, 'index']);

Route::get('/user/home', [UserController::class, 'index'])->name('user.home')->middleware('auth');

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\ResetPasswordController;

// Route cho quên mật khẩu
Route::get('/auth/otp', [ForgotPasswordController::class, 'showOtpForm'])->name('auth.otp');
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/auth/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/check-otp', [ForgotPasswordController::class, 'checkOtp'])->name('password.checkOtp');
Route::post('/auth/reset-password', [ForgotPasswordController::class, 'update'])->name('password.updated');

Route::get('/user/favorite', [UserController::class, 'favorite'])->name('user.favorite');