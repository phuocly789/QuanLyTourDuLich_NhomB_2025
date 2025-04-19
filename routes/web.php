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


//USER ĐÃ CÓ TÀI KHOẢN

//-------Hiển thị tour theo địa điểm - user
Route::get('/user/tour_location/{location_id}', [LienKetTrangController::class, 'userHienThiTourTheoDiaDiem'])->name('user.tour.location');


//-------Hiển thị chi tiết tour - user
Route::get('/user/booking/{tour_id}', [LienKetTrangController::class, 'userHienThiChiTietTuor'])->name('user.tour.readmore');


//-------Tìm và hiển thị kết quả tìm kiếm - admin
Route::get('/user/result', [LienKetTrangController::class, 'userSearch'])->name('searchUser');


// Route::get('/booking/{tour_id}', [BookingController::class, 'showBooking'])->name('booking');

Route::get('/tour/{tour_id}', [LienKetTrangController::class, 'hienThi'])->name('tourShow.booking');
Route::get('/user/tour/{tour_id}', [LienKetTrangController::class, 'show'])->name('tour.booking');


Route::get('/history/{user_id}', [BookingController::class, 'history'])->name('history');

// booking
// Route::get('/user/{id}', [BookingController::class, 'show'])->name('booking.show');
Route::post('/user/{booking_tour_id}/{booking_user_id?}', [BookingController::class, 'store'])->name('booking.store');

Route::post('/vnpay_payment', [CheckoutController::class, 'vnpay_payment']);

Route::get('/package', [LienKetTrangController::class, 'index'])->defaults('page', 'user.package');

