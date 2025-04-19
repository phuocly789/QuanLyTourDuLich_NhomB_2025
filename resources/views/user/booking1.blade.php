@extends('user.app1')
@section('content1')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">HHTP</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Giới thiệu</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                <div class="position-relative h-100">
                    <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/'.$value->tour_image) }}" alt="" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <h1 class="mb-4 text-primary">{{ $value->tour_name }} </h1>
                <p class="mb-4">{{ $value->tour_description }}</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-calendar-alt text-primary me-2"></i>Ngày bắt đầu: {{ $value->start_day}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-clock text-primary me-2"></i>Thời gian: {{ $value->time}}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-plane-departure text-primary me-2"></i>Nơi khởi hành: {{ $value->star_from }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-bus text-primary me-2"></i>Phương tiện: {{ $value->vehicle }}</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-hotel text-primary me-2"></i>Khách sạn: Khách sạn 5 sao </p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-gifts text-primary me-2"></i>Đã bao gồm ưu đãi trong giá tour</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Giá tour / 1 người</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0 text-danger"><i class=""></i>{{ number_format($value->price, 0, ',', '.')}} vnd</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người: </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="quantity buttons_added">
                            <input id="#" style="text-align: center;" type="number" size="4" class="input-text qty text border-1" title="Qty" value="1" min="0" step="1">
                        </div>
                    </div>
                </div>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-2" href="">Đặt ngay</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Lịch trình cụ thể</h1>
        </div>
    </div>
    <div style="color: black; font-weight: 400; font-size: 17px;">
    {!! $value->tour_schedule !!}
    </div>
</div>
<!-- Team End -->

<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Gói</h6>
            <h1 class="mb-5">Gói tuyệt vời</h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($data as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="position-relative package-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->tour_image) }}" alt="">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{$row->tour_sale}}</div>
                    </div>
                    <div class="d-flex border-bottom">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $row->time}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-plane-departure text-primary me-2"></i>{{$row->star_from}}</small>
                    </div>
                    <div class="text-center p-1">
                        <div class=" text-sm text-primary fw-bold flex-fill text-center py-2" style="font-size: 20px;"></i>{{ $row->tour_name}}</div>
                        <h3 class="mb-0">{{ $row->price}} vnd</h3>
                        <div class="mb-3">
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                            <small class="fa fa-star text-primary"></small>
                        </div>
                        <?php
                        $tourDescription = $row->tour_description;

                        // Chia chuỗi thành mảng các từ
                        $words = explode(' ', $tourDescription);

                        // Lấy 100 từ đầu tiên
                        $mota = implode(' ', array_slice($words, 0, 50));
                        ?>
                        <p style="height: 150px;">{{$mota}} ... </p>

                        <div class="d-flex justify-content-center mb-2">
                            <a href="{{ route('tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                            <a href="{{ route('tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Package End -->

@endsection