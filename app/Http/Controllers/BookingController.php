<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Models\Tour;
use App\Models\User;
use App\Http\Controllers\CheckoutController;


class BookingController extends Controller
{



    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {}
    public function total($booking_quantity, $tour_price)
    {

        if ($booking_quantity == 1) {
            $voucher = 0.9;
        } else if ($booking_quantity == 2) {
            $voucher = 0.85;
        } else {
            $voucher = 0.8;
        }
        $amount = $tour_price * $booking_quantity * $voucher;
        return $amount;
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $booking_tour_id, $booking_user_id)
    {
        $user = User::findOrFail($booking_user_id);
        $tour = Tour::findOrFail($booking_tour_id);
        $booking_quantity = $request->input('booking_quantity');

        // Kiểm tra số chỗ còn lại
        $available_seats = $tour->total_seats - $tour->booked_seats;
        if ($booking_quantity > $available_seats) {
            return redirect()->back()->with('error', 'Không đủ chỗ cho số lượng yêu cầu!');
        }

        // Tính tổng tiền
        $amount = self::total($booking_quantity, $tour->price);

        // Tạo booking
        $booking = new Booking();
        $booking->booking_customer_name = $user->name;
        $booking->booking_customer_email = $user->email;
        $booking->booking_customer_quantity = $booking_quantity;
        $booking->booking_customer_phone = $request->input('booking_customer_phone');
        $booking->booking_amount = $amount;
        $booking->booking_tour_id = $booking_tour_id;
        $booking->booking_user_id = $booking_user_id;

        // Cập nhật booked_seats
        $tour->booked_seats += $booking_quantity;

        // Lưu vào session để xử lý sau khi thanh toán
        session_start();
        $_SESSION['booking_session'] = $booking;
        $_SESSION['tour_session'] = $tour;

        // Chuyển sang thanh toán VNPay
        $checkoutController = new CheckoutController();
        return $checkoutController->vnpay_payment($booking);
    }
    public function history(Request $request, $user_id)
    {
        // session_start();
        $data = Booking::where('booking_user_id', $user_id)
            ->orderByDesc('booking_id')
            ->paginate(6);
        $tours = Tour::orderBy('tour_id')->get();
        // $booking_session = Session::get('booking');
        // $booking_session = $_SESSION['booking_session'];
        // dd($booking_session);
        return view('user.history', compact('data', 'tours'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tour = Tour::findOrFail($id);;
        return view('user.checkout', compact('tour'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
