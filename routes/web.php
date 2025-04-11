<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudUserController;

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
use App\Http\Controllers\TourController;
 
Route::get('tours/{id}/edit', [TourController::class, 'edit'])->name('tour.edit');
Route::delete('tours/{id}', [TourController::class, 'destroy'])->name('tour.destroy');
Route::post('tours', [TourController::class, 'store'])->name('tour.store');
Route::post('tour/store', [TourController::class, 'store'])->name('tour.store');

// ...

// ROUTES CHO TOUR
Route::get('/tour/create', [TourController::class, 'create'])->name('tour.create');
Route::post('/tour/store', [TourController::class, 'store'])->name('tour.store');
Route::get('/tour/list', [TourController::class, 'index'])->name('tour.index');


Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'login'])->name('login');
Route::post('login', [CrudUserController::class, 'authUser'])->name('user.authUser');

Route::get('create', [CrudUserController::class, 'createUser'])->name('user.createUser');
Route::post('create', [CrudUserController::class, 'postUser'])->name('user.postUser');

Route::get('read', [CrudUserController::class, 'readUser'])->name('user.readUser');

Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('update', [CrudUserController::class, 'updateUser'])->name('user.updateUser');
Route::post('update', [CrudUserController::class, 'postUpdateUser'])->name('user.postUpdateUser');

Route::get('list', [CrudUserController::class, 'listUser'])->name('user.list');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');

Route::get('/', function () {
    return view('welcome');
});
