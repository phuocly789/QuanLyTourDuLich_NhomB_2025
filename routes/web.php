
<?php 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

// Route để hiển thị danh sách tour
Route::get('/', [TourController::class, 'index'])->name('tours.index');

// Route để hiển thị form thêm tour mới
Route::get('/tours/create', [TourController::class, 'create'])->name('tours.create');

// Route để lưu tour mới vào cơ sở dữ liệu
Route::post('/tours', [TourController::class, 'store'])->name('tours.store');

// Route để hiển thị form chỉnh sửa tour
Route::get('/tours/{tour}/edit', [TourController::class, 'edit'])->name('tours.edit');

// Route để cập nhật thông tin tour đã chỉnh sửa
Route::put('/tours/{tour}', [TourController::class, 'update'])->name('tours.update');

// Route để xóa tour
Route::delete('/tours/{tour}', [TourController::class, 'destroy'])->name('tours.destroy');
