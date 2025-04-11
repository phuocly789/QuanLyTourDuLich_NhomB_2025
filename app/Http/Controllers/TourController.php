<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tour;

class TourController extends Controller
{
    // Hiển thị form thêm tour và danh sách tour
    public function create()
    {
        $tours = Tour::all();
        return view('crud_user.login', compact('tours')); // Dùng login.blade.php để hiển thị luôn danh sách
    }

    // Lưu tour vào database
    public function store(Request $request)
    {
        $request->validate([
            'ten_tour' => 'required|string|max:255',
            'dia_diem' => 'required|string|max:255',
            'gia' => 'required|numeric',
        ]);

        if ($request->hasFile('hinh_anh')) {
            $imagePath = $request->file('hinh_anh')->store('tours', 'public');
        } else {
            $imagePath = null;
        }
        
        Tour::create([
            'ten_tour' => $request->ten_tour,
            'dia_diem' => $request->dia_diem,
            'gia' => $request->gia,
            'thoi_gian' => $request->thoi_gian,
            'hinh_anh' => $imagePath,
            'mo_ta' => $request->mo_ta
        ]);
        

        return redirect()->route('tour.create')->with('success', 'Đã thêm tour thành công!');
    }

    // Dành riêng nếu muốn hiển thị danh sách tour độc lập
    public function index()
    {
        $tours = Tour::all();
        return view('tour.index', compact('tours'));
    }
    public function edit($id)
{
    $tour = Tour::findOrFail($id);
    return view('tour.edit', compact('tour')); // bạn cần tạo view tour/edit.blade.php
}

public function destroy($id)
{
    $tour = Tour::findOrFail($id);

    if ($tour->hinh_anh && \Storage::disk('public')->exists($tour->hinh_anh)) {
        \Storage::disk('public')->delete($tour->hinh_anh);
    }

    $tour->delete();
    return redirect()->route('login')->with('success', 'Xóa tour thành công!');
}
}
