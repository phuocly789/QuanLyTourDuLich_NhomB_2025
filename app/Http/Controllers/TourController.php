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
        // $data = $request->validate([
        //     'ten_tour' => 'required|string|max:255',
        //     'dia_diem' => 'required|string|max:255',
        //     'noi_xuat_phat' => 'required|string|max:255',
        //     'cho_nghi' => 'required|string|max:255',
        //     'mo_ta' => 'required|string',
        //     'lich_trinh' => 'required|string',
        //     'gia' => 'required|numeric|min:0',
        //     'so_cho_trong' => 'required|integer|min:1',
        //     'ngay_bat_dau' => 'required|date',
        //     'thoi_gian' => 'required|string',
        //     'giam_gia' => 'nullable|integer|min:0',
        //     'anh' => 'nullable|image|max:2048',
        // ]);


        // if ($request->hasFile('anh')) {
        //     $data['anh'] = $request->file('anh')->store('tours', 'public');
        // }

        // Tour::create($data);

        // return redirect()->route('tours.index')->with('success', 'Đã thêm tour thành công!');
        // add tour
   
        // Validate form data
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            'tour_image' => 'required',
            'start_day' => 'required|date',
            'time' => 'required|string',
            'star_from' => 'required|string',
            'price' => 'required|numeric',
            'vehicle' => 'required|string',
            'tour_description' => 'required|string',
            'tour_schedule' => 'required|string',
            'tour_sale' => 'required|string',
            'location_id' => 'required|integer',
            'guide_id' => 'required|integer',
        ]);

        $get_imgae = $request->tour_image;
        $path = 'img/';
        $get_name_image = $get_imgae->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 999) . '.' . $get_imgae->getClientOriginalExtension();
        $get_imgae->move($path, $new_image);


        // Create a new tour instance
        $tour = new Tour;
        $tour->tour_name = $validatedData['tour_name'];
        $tour->tour_image = $new_image;
        $tour->start_day = $validatedData['start_day'];
        $tour->time = $validatedData['time'];
        $tour->star_from = $validatedData['star_from'];
        $tour->price = $validatedData['price'];
        $tour->vehicle = $validatedData['vehicle'];
        $tour->tour_description = $validatedData['tour_description'];
        $tour->tour_schedule = $validatedData['tour_schedule'];
        $tour->tour_sale = $validatedData['tour_sale'];
        $tour->location_id = $validatedData['location_id'];
        $tour->guide_id = $validatedData['guide_id'];

        // Set total_seats and booked_seats
        $tour->total_seats = 45;
        $tour->booked_seats = 0;

        $tour->save();

        // Redirect back or to a success page
        return redirect()->back()->with('success', 'Tour đã được thêm thành công!');
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

        $path = 'img/';
        if(File::exists(public_path($path.$tour->anh))){
            File::delete(public_path($path.$tour->anh));
        }
        $tour->delete();

        return redirect()->route('tours.index')->with('success', 'Xóa tour thành công!');
    }
}
