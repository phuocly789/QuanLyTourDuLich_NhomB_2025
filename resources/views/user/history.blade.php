<?php

use Illuminate\Support\Facades\Auth;

session_start();

if (isset($_GET['vnp_ResponseCode']) && $_GET['vnp_ResponseCode'] === '00') {
    // Lấy thông tin đặt phòng từ session
    $booking_session = $_SESSION['booking_session'];
    $tour_session = $_SESSION['tour_session'];
    $booking_session->save();
    $tour_session->save();
    session_destroy();
    echo '<script type="text/javascript">
        let url = "http://127.0.0.1:8000/history/' .
        Auth::user()->id .
        '";
        alert("Đặt tour thành công.");
        window.history.replaceState({}, {}, url);
        location.reload();
        </script>';
}
// if (isset($_GET['vnp_ResponseCode'])) {
//     if ($_GET['vnp_ResponseCode'] === "00") {
//         $booking_session = new Booking();
//         $booking_session = session('booking');
//         // $booking_session->save();
//         dd($booking_session);

//         echo $booking_session->booking_customer_name;
//     }
// }
?>
@extends('user.app1')
@section('content1')

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">History</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->



    <div class="container-xxl py-5">
        @if ($data->isNotEmpty())
            <div class="list-group ">
                @foreach ($data as $value)
                    <div class="row list-group-item d-flex list-group-item-action mb-4"
                        style="margin: auto; border-top-width: 1px;">
                        <div class="col-sm-3">
                            <img class="img-fluid w-100 h-100"
                                src="{{ asset('img/' . $tours[$value->booking_tour_id - 1]->tour_image) }}" alt=""
                                style="object-fit: cover;">
                        </div>
                        <div class="col-sm-9">

                            <div class="row gy-2 gx-4 mb-2">
                                <div class="col-sm-9">

                                    <h3 class="mb-2 text-primary"> <a
                                            href="{{ route('user.tour.readmore', $tours[$value->booking_tour_id - 1]->tour_id) }}">
                                            {{ $tours[$value->booking_tour_id - 1]->tour_name }}</a>
                                    </h3>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0 "><i class="fa fa-history text-primary me-2"></i>Ngày đặt:
                                        {{ date_format($value->created_at, 'd/m/Y ') }} </p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fa fa-calendar-alt text-primary me-2"></i>Ngày bắt đầu:
                                        {{ $tours[$value->booking_tour_id - 1]->start_day }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fa fa-clock text-primary me-2"></i>Thời gian:
                                        {{ $tours[$value->booking_tour_id - 1]->time }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fa fa-plane-departure text-primary me-2"></i>Nơi khởi hành:
                                        {{ $tours[$value->booking_tour_id - 1]->star_from }}</p>
                                </div>
                                <div class="col-sm-3">
                                    <p class="mb-0"><i class="fa fa-bus text-primary me-2"></i>Phương tiện:
                                        {{ $tours[$value->booking_tour_id - 1]->vehicle }}</p>
                                </div>
                            </div>
                            <p class="mb-2">{{ $tours[$value->booking_tour_id - 1]->tour_description }}</p>
                            <div class="row gy-2 gx-4 mb-2">
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người:
                                        {{ $value->booking_customer_quantity }}</p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Thành tiền:
                                        {{ number_format($value->booking_amount, 0, ',', '.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Bạn chưa có đơn hàng nào</h1>
            </div>
        @endif
    </div>

    <!-- Phần phân trang -->

    <div class="row justify-content-center">
        <div class="col-auto">
            <ul class="pagination">
                {{-- Nút Previous --}}
                @if ($data->onFirstPage())
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&laquo;</span>
                    </li>
                @else
                    <li class="page-item">
                        <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                        </a>
                    </li>
                @endif

                {{-- Các nút số --}}
                @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                    <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                    </li>
                @endforeach

                {{-- Nút Next --}}
                @if ($data->hasMorePages())
                    <li class="page-item">
                        <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled">
                        <span class="page-link" aria-hidden="true">&raquo;</span>
                    </li>
                @endif
            </ul>
        </div>
    </div>
    </div>
    <!-- Package End -->

    <!-- Process Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Quá trình đặt vé với 3 bước ...</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Chọn điểm đến</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1 mt-3">
                        <hr class="w-50 mx-auto bg-primary mt-0 mb-3">
                        <p class="mb-0">Lựa chọn điểm đến phù với với yêu cầu và mong muốn của bạn</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-dollar-sign fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Thanh toán trực tuyến</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1 mt-3">
                        <hr class="w-50 mx-auto bg-primary mt-0 mb-3">
                        <p class="mb-0">Bạn có thể thanh toán ngay để chắc rằng bạn sẽ tham gia cuộc hành trình</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow"
                            style="width: 100px; height: 100px;">
                            <i class="fa fa-plane fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">Bay ngay hôm nay</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1 mt-3">
                        <hr class="w-50 mx-auto bg-primary mt-0 mb-3">
                        <p class="mb-0">Còn chần chờ gì nữa, xách balo và tận hưởng chuyến đi của bạn cùng chúng tôi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->


@endsection
