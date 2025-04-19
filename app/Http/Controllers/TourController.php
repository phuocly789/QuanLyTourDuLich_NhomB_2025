<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TourController extends Controller
{
    public function index()
    {
        $tours = Tour::all();
        return view('themtour', compact('tours'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'ten_tour' => 'required|string|max:255',
            'dia_diem' => 'required|string|max:255',
            'noi_xuat_phat' => 'required|string|max:255',
            'cho_nghi' => 'required|string|max:255',
            'mo_ta' => 'required|string',
            'lich_trinh' => 'required|string',
            'gia' => 'required|numeric|min:0',
            'so_cho_trong' => 'required|integer|min:1',
            'ngay_bat_dau' => 'required|date',
            'thoi_gian' => 'required|string',
            'giam_gia' => 'nullable|integer|min:0',
            'anh' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('anh')) {
            $data['anh'] = $request->file('anh')->store('tours', 'public');
        }

        Tour::create($data);

        return redirect()->route('tours.index')->with('success', 'Đã thêm tour thành công!');
    }

    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('edittour', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $tour = Tour::findOrFail($id);

        $data = $request->validate([
            'ten_tour' => 'required|string|max:255',
            'dia_diem' => 'required|string|max:255',
            'noi_xuat_phat' => 'required|string|max:255',
            'cho_nghi' => 'required|string|max:255',
            'mo_ta' => 'required|string',
            'lich_trinh' => 'required|string',
            'gia' => 'required|numeric|min:0',
            'so_cho_trong' => 'required|integer|min:1',
            'ngay_bat_dau' => 'required|date',
            'thoi_gian' => 'required|string',
            'giam_gia' => 'nullable|integer|min:0',
            'anh' => 'nullable|image|max:2048',
        ]);

        if ($request->hasFile('anh')) {
            // Xóa ảnh cũ nếu có
            if ($tour->anh) {
                Storage::disk('public')->delete($tour->anh);
            }
            $data['anh'] = $request->file('anh')->store('tours', 'public');
        }

        $tour->update($data);

        return redirect()->route('tours.index')->with('success', 'Cập nhật tour thành công!');
    }

    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);

        if ($tour->anh) {
            Storage::disk('public')->delete($tour->anh);
        }

        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Xóa tour thành công!');
    }
}
