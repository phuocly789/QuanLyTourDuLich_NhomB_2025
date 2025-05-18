<?php

use App\Http\Controllers\AddTourController;
use App\Http\Controllers\ProfileController;
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
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\AdminReviewController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Đây là nơi đăng ký các tuyến đường web cho ứng dụng.
|
*/

// Nhập file xác thực
require __DIR__ . '/auth.php';

// Tuyến đường xác thực (Yêu cầu đăng nhập)
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/user/home', [UserController::class, 'index'])->name('user.home');
});

// Tuyến đường khôi phục mật khẩu
Route::get('/forgot-password', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/forgot-password', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/auth/otp', [ForgotPasswordController::class, 'showOtpForm'])->name('auth.otp');
Route::get('/auth/reset-password', [ForgotPasswordController::class, 'showResetForm'])->name('password.reset');
Route::post('/check-otp', [ForgotPasswordController::class, 'checkOtp'])->name('password.checkOtp');
Route::post('/auth/reset-password', [ForgotPasswordController::class, 'update'])->name('password.updated');

// Tuyến đường chung (Không yêu cầu xác thực)
Route::get('/{page?}', [LienKetTrangController::class, 'index']);
Route::get('/search', [LienKetTrangController::class, 'search']);
Route::get('/package', [AddTourController::class, 'hienThiTour'])->name('package');
Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/tour_location/{location_id}', [LienKetTrangController::class, 'hienThiTourTheoDiaDiem'])->name('tour.location');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'hienThiUser'])->name('tour.readmore');

// Tuyến đường cho người dùng đã đăng nhập
Route::get('/user/package', [AddTourController::class, 'userHienThiTour'])->name('user.package');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');
Route::get('/user/tour_location/{location_id}', [LienKetTrangController::class, 'userHienThiTourTheoDiaDiem'])->name('user.tour.location');
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore');
Route::get('/user/result', [LienKetTrangController::class, 'userSearch'])->name('searchUser');
Route::get('/user/favorite', [UserController::class, 'favorite'])->name('user.favorite');
Route::get('/history/{user_id}', [BookingController::class, 'history'])->name('history');

// Tuyến đường cho quản trị viên
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', [UserController::class, 'index'])->name('home');
    Route::get('/admin/reviews', [ReplyController::class, 'index'])->name('admin.reviews');
    Route::get('/admin/crud', [AddTourController::class, 'showCRUD'])->name('admin.showcrud');
    Route::get('/admin/history', [AddTourController::class, 'history'])->name('admin.history');
    Route::get('/admin/crudtour', [AddTourController::class, 'S'])->name('admin.tour');
    Route::get('/admin/information', [AddTourController::class, 'showInformation'])->name('admin.information');
    Route::get('/admin/tour_location/{location_id}', [LienKetTrangController::class, 'adminHienThiTourTheoDiaDiem'])->name('admin.tour.location');
    Route::get('/admin/booking/{tour_id}', [LienKetTrangController::class, 'adminHienThiChiTietTuor'])->name('admin.tour.readmore');
    Route::get('/admin/result', [LienKetTrangController::class, 'adminSearch'])->name('searchAdmin');
    Route::get('/guide/crud', [AddTourController::class, 'showCRUDGuide'])->name('admin.guide');
});

// Tuyến đường quản lý tour
Route::post('/tours', [AddTourController::class, 'store'])->name('tours.store');
Route::delete('/tours/{id}', [AddTourController::class, 'destroy'])->name('tours.destroy');
Route::get('/tours/{id}/edit', [AddTourController::class, 'edit'])->name('tours.edit');
Route::put('/tours/{id}', [AddTourController::class, 'update'])->name('tours.update');

// Tuyến đường quản lý hướng dẫn viên
Route::post('/guide', [AddTourController::class, 'storeGuide'])->name('guide.store');
Route::delete('/guide/{id}', [AddTourController::class, 'destroyGuide'])->name('guide.destroy');
Route::get('/guide/{id}/edit', [AddTourController::class, 'editGuide'])->name('guide.edit');
Route::put('/guide/{id}', [AddTourController::class, 'updateGuide'])->name('guide.update');

// Tuyến đường quản lý người dùng
Route::delete('/xoaUser/{id}', [AdminController::class, 'xoaUser'])->name('tours.xoaUser');
Route::post('/update-usertype', [AdminController::class, 'updateUsertype'])->name('tours.suaUser');

// Tuyến đường bình luận
Route::post('/submit-comment', [ClientController::class, 'store'])->name('submit_comment');
Route::post('/clients', [ClientController::class, 'store'])->name('clients.store');
Route::post('/replies/store', [ReplyController::class, 'store'])->name('replies.store');

// Tuyến đường đặt tour
Route::post('/user/{booking_tour_id}/{booking_user_id?}', [BookingController::class, 'store'])->name('booking.store');

// Tuyến đường yêu thích
Route::post('/favorite/add', [FavoriteTourController::class, 'add'])->name('favorite.add');
Route::post('/favorite/saveData', [FavoriteTourController::class, 'saveData'])->name('favorite.saveData');
Route::post('/favorite/favoriteList', [FavoriteTourController::class, 'favoriteList'])->name('favorite.favoriteList');

// Tuyến đường load thêm danh sách
Route::post('/admin/load-more-tours', [LienKetTrangController::class, 'loadMoreTours'])->name('admin.loadMoreTours');
Route::post('/admin/load-more-guides', [LienKetTrangController::class, 'loadMoreGuides'])->name('admin.loadMoreGuides');
Route::post('/admin/load-more-users', [LienKetTrangController::class, 'loadMoreUsers'])->name('admin.loadMoreUsers');
Route::post('/admin/load-more-bookings', [LienKetTrangController::class, 'loadMoreBookings'])->name('admin.loadMoreBookings');

