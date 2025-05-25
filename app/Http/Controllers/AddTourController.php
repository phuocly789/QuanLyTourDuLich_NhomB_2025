<?php

namespace App\Http\Controllers;

use App\Exports\BookingsExport;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Client;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\Guide;
use App\Models\Location;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddTourController extends Controller
{
    //lọc tour
    public function showTourLocation($locationId, Request $request)
    {
        // Lấy thông tin địa điểm
        $location = Location::findOrFail($locationId);

        // Xây dựng query để lấy danh sách tour
        $query = Tour::where('location_id', $locationId);

        // Lọc theo giá
        if ($request->has('min_price') && is_numeric($request->min_price)) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->has('max_price') && is_numeric($request->max_price)) {
            $query->where('price', '<=', $request->max_price);
        }

        // Lọc theo ngày bắt đầu
        if ($request->has('start_day') && !empty($request->start_day)) {
            $query->where('start_day', '>=', $request->start_day);
        }

        // Lọc theo thời gian tour
        if ($request->has('time') && !empty($request->time)) {
            switch ($request->time) {
                case '1 ngày':
                    $query->where('time', '1 ngày');
                    break;
                case '2-3 ngày':
                    $query->whereIn('time', ['2 ngày', '3 ngày']);
                    break;
                case '4-7 ngày':
                    $query->where('time', 'like', '%ngày%')
                        ->whereRaw('CAST(REGEXP_REPLACE(time, "[^0-9]", "") AS UNSIGNED) BETWEEN 4 AND 7');
                    break;
                case '7 ngày trở lên':
                    $query->where('time', 'like', '%ngày%')
                        ->whereRaw('CAST(REGEXP_REPLACE(time, "[^0-9]", "") AS UNSIGNED) > 7');
                    break;
            }
        }

        // Lấy danh sách tour
        $tours = $query->get();

        // Trả về view với dữ liệu
        return view('user.tour_location', compact('location', 'tours'));
    }

    // add tour
    public function store(Request $request)
    {
        $request->merge([
            'price' => $this->normalizeNumber($request->input('price')),
            'tour_sale' => $this->normalizeNumber($request->input('tour_sale')),
            'total_seats' => $this->normalizeNumber($request->input('total_seats')),
        ]);

        // Validate form data
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            'tour_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'start_day' => 'required|date|after_or_equal:today', // Kiểm tra ngày không được trong quá khứ
            'time' => 'required|string',
            'star_from' => 'required|string',
            'price' => 'required|numeric',
            'vehicle' => 'required|string',
            'tour_description' => 'required|string',
            'tour_schedule' => 'required|string',
            'tour_sale' => 'required|string',
            'guide_id' => 'required|integer',
            'location_id' => 'required|integer|exists:locations,location_id',
            'total_seats' => 'required|integer|min:1',
        ], [
            'start_day.after_or_equal' => 'Ngày bắt đầu tour không được trong quá khứ!',
        ]);

        // Handle image upload
        $get_image = $request->file('tour_image');
        $path = 'img/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move(public_path($path), $new_image);

        // Create a new tour instance
        $tour = new Tour;
        $tour->tour_name = $validatedData['tour_name'];
        $tour->tour_image = $new_image;
        $tour->location_id = $validatedData['location_id'];
        $tour->start_day = $validatedData['start_day'];
        $tour->time = $validatedData['time'];
        $tour->star_from = $validatedData['star_from'];
        $tour->price = $validatedData['price'];
        $tour->vehicle = $validatedData['vehicle'];
        $tour->tour_description = $validatedData['tour_description'];
        $tour->tour_schedule = $validatedData['tour_schedule'];
        $tour->tour_sale = $validatedData['tour_sale'];
        $tour->guide_id = $validatedData['guide_id'];
        $tour->total_seats = $validatedData['total_seats'];
        $tour->booked_seats = 0;

        $tour->save();

        // Redirect back with success message
        return redirect()->back()->with('success', 'Tour đã được thêm thành công!');
    }

    private function normalizeNumber($value)
    {
        // Nếu không phải chuỗi thì trả lại như cũ
        if (!is_string($value))
            return $value;

        // Chuyển full-width digits (U+FF10 - U+FF19) thành half-width (0-9)
        return preg_replace_callback('/[\x{FF10}-\x{FF19}]/u', function ($matches) {
            // Dùng mb_ord để lấy mã unicode, trừ đi FF10, cộng 0x30 để ra mã ASCII tương ứng
            return chr(mb_ord($matches[0], 'UTF-8') - 0xFF10 + 0x30);
        }, $value);
    }



    public function destroy($id)
    {
        $tour = Tour::findOrFail($id);
        $path = 'img/';
        if (File::exists(public_path($path . $tour->tour_image))) {
            File::delete(public_path($path . $tour->tour_image));
        }

        $tour->delete();

        return redirect()->back()->with('success', 'Tour đã được xóa thành công!');
    }

    // edit tour
    public function edit($id)
    {
        $tour = Tour::findOrFail($id);
        return view('admin.editTour', compact('tour'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'tour_name' => 'required|string|max:255',
            // 'tour_image' => 'required',
            'start_day' => 'required|date',
            'time' => 'required|string',
            'star_from' => 'required|string',
            'price' => 'required|numeric',
            'vehicle' => 'required|string',
            'tour_description' => 'required|string',
            'tour_schedule' => 'required|string',
            'tour_sale' => 'required|string',
            'guide_id' => 'required|integer',
            'total_seats' => 'required|integer|min:1',
            'tour_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $tour = Tour::findOrFail($id);
        $get_imgae = $request->tour_image;
        if ($get_imgae) {
            $path = 'img/';
            if (File::exists(public_path($path . $tour->tour_image))) {
                File::delete(public_path($path . $tour->tour_image));
            }
            $get_name_image = $get_imgae->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 999) . '.' . $get_imgae->getClientOriginalExtension();
            $get_imgae->move($path, $new_image);
            $tour->tour_image = $new_image;
        } else {
            $tour->tour_image = $tour->tour_image;
        }
        $tour->tour_name = $validatedData['tour_name'];
        $tour->start_day = $validatedData['start_day'];
        $tour->time = $validatedData['time'];
        $tour->star_from = $validatedData['star_from'];
        $tour->price = $validatedData['price'];
        $tour->vehicle = $validatedData['vehicle'];
        $tour->tour_description = $validatedData['tour_description'];
        $tour->tour_schedule = $validatedData['tour_schedule'];
        $tour->tour_sale = $validatedData['tour_sale'];
        $tour->guide_id = $validatedData['guide_id'];
        $tour->total_seats = $validatedData['total_seats'];


        $tour->save();

        return redirect()->route('admin.showcrud')->with('success', 'Tour đã được cập nhật thành công!');
    }
    private function toHalfWidth($str): array|string|null
    {
        return preg_replace_callback('/[０-９]/u', function ($matches) {
            return chr(ord($matches[0]) - 0xFF10 + ord('0'));
        }, $str);
    }

    public function showCrud()
    {
        $user_main = Auth::user(); // Lấy thông tin người dùng đã đăng nhập
        $tours = Tour::orderByDesc('tour_id')->paginate(6);
        $user = User::orderBy('id')->get();
        $guide = Guide::orderBy('guide_Id')->get();
        $location = Location::orderBy('location_id')->get();
        // $client = Client::orderBy('client_id')->get();

        // Lấy các tour yêu thích của người dùng hiện tại
        // $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

        return view('admin.crud', [
            'user_main' => $user_main,
            'data' => $tours,
            'data_guide' => $guide,
            'decentralization' => $user,
            'data_location' => $location
            // 'data_comment' => $client,
            // 'favoriteTours' => $favoriteTours, // Truyền danh sách các tour yêu thích vào view
        ]);
    }
    //-------------------------------------------------------------------------------------
    public function showInformation()
    {
        $decentralization = User::all(); // Lấy danh sách users
        return view('admin.information', compact('decentralization'));
    }

  public function storeGuide(Request $request)
    {
        // Validate form data
        $validatedData = $request->validate([
            'guide_name' => 'required|string|max:255',
            'guide_pno' => 'required|string|regex:/^0[0-9]{9}$/|unique:guides,guide_Pno',
            'guide_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'guide_mail' => 'required|email|max:255|unique:guides,guide_Mail',
            'guide_intro' => 'required|string',
        ]);

        // Handle image upload
        $get_image = $request->file('guide_image');
        $path = public_path('img/');
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.', $get_name_image));
        $new_image = $name_image . rand(0, 999) . '.' . $get_image->getClientOriginalExtension();
        $get_image->move($path, $new_image);

        // Create a new guide instance
        $guide = new Guide;
        $guide->guide_Name = $validatedData['guide_name'];
        $guide->guide_Pno = $validatedData['guide_pno'];
        $guide->guide_Img = $new_image;
        $guide->guide_Mail = $validatedData['guide_mail'];
        $guide->guide_Intro = $validatedData['guide_intro'];
        $guide->save();

        return redirect()->back()->with('success', 'Đã thêm hướng dẫn viên mới!');
    }


    public function destroyGuide($id)
    {
        $guide = Guide::findOrFail($id);
        $path = 'img/';
        if (File::exists(public_path($path . $guide->guide_Img))) {
            File::delete(public_path($path . $guide->guide_Img));
        }
        $guide->delete();

        return redirect()->back()->with('success', 'Đã xóa hướng dẫn viên ra khỏi danh sách');
    }

    public function editGuide($id)
    {
        $guide = Guide::findOrFail($id);
        return view('admin.editGuide', compact('guide'));
    }

    public function showCRUDGuide()
    {
        $guide = Guide::orderByDesc('guide_Id')->get();

        // Lấy các tour yêu thích của người dùng hiện tại
        // $favoriteTours = FavoriteTour::where('user_id', $user_main->id)->get();

        return view('admin.crudGuide', [
            'data_guide' => $guide,
        ]);
    }

    public function updateGuide(Request $request, $id)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'guide_Name' => 'required|string|max:255',
            'guide_Pno' => 'required|string',
            'guide_Mail' => 'required|string',
            'guide_Intro' => 'required|string',
        ]);
        // Tìm guide dựa trên id hoặc trả về null nếu không tìm thấy
        $guide = Guide::findOrFail($id);
        $get_imgae = $request->guide_image;
        if ($get_imgae) {
            $path = 'img/';
            if (File::exists(public_path($path . $guide->guide_Img))) {
                File::delete(public_path($path . $guide->guide_Img));
            }
            $get_name_image = $get_imgae->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 999) . '.' . $get_imgae->getClientOriginalExtension();
            $get_imgae->move($path, $new_image);
            $guide->guide_Img = $new_image;
        } else {
            $guide->guide_Img = $guide->guide_Img;
        }

        $guide->guide_Name = $validatedData['guide_Name'];
        $guide->guide_Pno = $validatedData['guide_Pno'];
        $guide->guide_Mail = $validatedData['guide_Mail'];
        $guide->guide_Intro = $validatedData['guide_Intro'];

        $guide->save();

        return redirect()->route('admin.guide')->with('success', 'Thông tin hướng dẫn viên đã được cập nhật thành công!');
    }
    public function userHienThiTour(Request $request)
    {
        $query = Tour::query();

        // Filter by destination (search in tour_name or tour_description)
        if ($request->filled('destination')) {
            $destination = $request->input('destination');
            $query->where(function ($q) use ($destination) {
                $q->where('tour_name', 'like', '%' . $destination . '%')
                    ->orWhere('tour_description', 'like', '%' . $destination . '%');
            });
        }

        // Filter by price range
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->input('price_min'));
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->input('price_max'));
        }

        // Filter by start date
        if ($request->filled('start_date')) {
            $query->whereDate('start_day', '>=', $request->input('start_date'));
        }

        // Paginate the results
        $data = $query->paginate(6); // Adjust per-page value as needed

        return view('user.package', compact('data'));
    }
    public function hienThiTour(Request $request)
    {
        $query = Tour::query();

        // Filter by destination (search in tour_name or tour_description)
        if ($request->filled('destination')) {
            $destination = $request->input('destination');
            $query->where(function ($q) use ($destination) {
                $q->where('tour_name', 'like', '%' . $destination . '%')
                    ->orWhere('tour_description', 'like', '%' . $destination . '%');
            });
        }

        // Filter by price range
        if ($request->filled('price_min')) {
            $query->where('price', '>=', $request->input('price_min'));
        }
        if ($request->filled('price_max')) {
            $query->where('price', '<=', $request->input('price_max'));
        }

        // Filter by start date
        if ($request->filled('start_date')) {
            $query->whereDate('start_day', '>=', $request->input('start_date'));
        }

        // Paginate the results
        $data = $query->paginate(6); // Adjust per-page value as needed

        return view('package', compact('data'));
    }
    public function history(Request $request)
    {
        $query = Booking::query();

        // Tìm kiếm theo tên khách hàng
        if ($search = $request->search) {
            $query->where('booking_customer_name', 'like', "%$search%");
        }

        // Lọc theo tour
        if ($tour_id = $request->tour_id) {
            if (\App\Models\Tour::where('tour_id', $tour_id)->exists()) {
                $query->where('booking_tour_id', $tour_id);
            }
        }

        // Lọc theo khoảng ngày
        if ($date_from = $request->date_from) {
            $query->whereDate('created_at', '>=', $date_from);
        }
        if ($date_to = $request->date_to) {
            $query->whereDate('created_at', '<=', $date_to);
        }

        // Sắp xếp
        if ($sort = $request->sort) {
            $order = $request->order ?? 'asc';
            $query->orderBy($sort, $order);
        } else {
            $query->orderBy('created_at', 'desc');
        }

        $bookings = $query->with('tour')->paginate(10);

        // Cache danh sách tour
        $tours = \Illuminate\Support\Facades\Cache::remember('booked_tours', 3600, function () {
            return \App\Models\Booking::distinct()->pluck('booking_tour_id')
                ->map(function ($tour_id) {
                    return \App\Models\Tour::find($tour_id);
                })->filter()->sortBy('tour_name');
        });

        return view('admin.history', compact('bookings', 'tours'));
    }
    public function checkDuplicate(Request $request)
    {
        $field = $request->input('field');
        $value = $request->input('value');

        $exists = Guide::where($field, $value)->exists();

        return response()->json(['exists' => $exists]);
    }
}
