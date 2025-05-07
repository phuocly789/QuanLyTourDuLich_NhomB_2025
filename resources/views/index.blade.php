@extends('app')
@section('content')
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Tận hưởng kỳ nghỉ của bạn với chúng tôi</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Hãy sẵn sàng cho cuộc phiêu lưu tiếp theo của bạn</p>
                <div class="position-relative w-75 mx-auto animated slideInDown">

                    <form action="/search" method="get">
                        <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text" placeholder="Search by name..." name="search">
                        <button type="submit" class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2" style="margin-top: 7px;">Tìm kiếm</button>
                    </form>

                </div>
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
                <div class="position-relative h-100" id="imageDiv">
                    <img class="img-fluid position-absolute w-100 h-100" src="img/about_us.jpg" alt="" style="object-fit: cover;">
                </div>
            </div>

            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                <!-- <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6> -->
                <h1 class="mb-4">Chào mừng bạn đến với <span class="text-primary">Discovery</span></h1>
                <p class="mb-4">Đưa bạn đến với những vùng đất mới lạ trên thế giới, Discovery hứa hẹn sẽ là điểm đến lý tưởng cho những ai đam mê du lịch.</p>Tại đây, bạn sẽ khám phá hàng loạt điểm đến hấp dẫn trên khắp thế giới, từ những thành phố sôi động đến vùng nông thôn yên bình. Discovery sẽ cung cấp dịch vụ đặt phòng khách sạn tiện lợi, hướng dẫn du lịch chi tiết và các hoạt động xã hội tích cực. Với Discovery, hành trình của bạn sẽ bắt đầu từ đây. Chào mừng đến với thế giới của chúng tôi, nơi những giấc mơ trở thành hiện thực.</p>
                <div class="row gy-2 gx-4 mb-4">
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Chuyến bay hạng nhất</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Khách sạn được lựa chọn cẩn thận</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>chỗ ở 5*</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Phương tiện di chuyển mới nhất</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 chuyến tham quan thành phố cao cấp</p>
                    </div>
                    <div class="col-sm-6">
                        <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Dịch vụ 24/7</p>
                    </div>
                </div>
                <a class="btn btn-primary py-3 px-5 mt-2" href="{{ url('/about') }}">Đọc tiếp ...</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Dịch vụ của chúng tôi</h1>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                        <h5>Vòng quanh thế giới</h5>
                        <p>Đưa bạn đến với những địa điểm mới lạ trên toàn thế giới</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-hotel text-primary mb-4"></i>
                        <h5>Đặt phòng khách sạn</h5>
                        <p>Khách sạn 5* được đánh giá tốt nhất trên thế giới</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-user text-primary mb-4"></i>
                        <h5>Hướng dẫn viên du lịch</h5>
                        <p>Thân thiện, hòa đồng và đồng hành trong suốt hành trình của bạn</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="service-item rounded pt-3">
                    <div class="p-4">
                        <i class="fa fa-3x fa-cog text-primary mb-4"></i>
                        <h5>Quản lý sự kiện</h5>
                        <p>Những sự kiện, hoạt động trong suốt hành trình của bạn</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Service End -->


<!-- Destination Start -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Điểm đến phổ biến</h1>
        </div>

        <div class="row g-3">
            @foreach($data_location as $row)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="{{ route('tour.location', ['location_id' => $row->location_id])}}">
                    <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->location_image) }}" alt="">
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{$row->location_name}}</div>
                </a>
            </div>@endforeach

            <!-- <div class="row justify-content-center">
                <div class="col-auto">
                    <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/destination') }}">Show more ...</a>
                </div>
            </div> -->


        </div>

    </div>
</div>
<!-- Destination Start -->


<!-- Package Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Tour phổ biến </h1>
        </div>
        <div class="row g-4 justify-content-center">
            @foreach($data->take(6) as $row)
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="package-item">
                    <div class="position-relative overflow-hidden">
                        <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->tour_image) }}" alt="">
                        <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">{{$row->tour_sale}}</div>
                    </div>
                    <div class="d-flex border-bottom" style="height: 50px;">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>{{ $row->time}}</small>
                        <small class="flex-fill text-center py-2"><i class="fa fa-plane-departure text-primary me-2"></i>{{$row->star_from}}</small>
                    </div>
                    <h4 class=" text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">{{ $row->tour_name}}</h4>
                    <div class="text-center pt-2">

                        <h5 class="mb-0 text-danger">{{number_format($row->price, 0, ',', '.')}} vnđ</h5>

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
                        <p style="height: 110px;">{{$mota}} ... </p>

                        <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống: {{$row->total_seats - $row->booked_seats}} chỗ</p>

                        <div class="d-flex justify-content-center mb-2 pb-2">
                            <a href="{{ route('tourShow.booking', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                            <a href="{{ route('tourShow.booking', $row->tour_id) }}" class="btn btn-sm btn-primary px-3" style="border-radius: 0 30px 30px 0;">Đặt ngay</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--nút show danh sách -->
        <div class="row justify-content-center py-3">
            <div class="col-auto">
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/package') }}">Xem thêm ...</a>
            </div>
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
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-globe fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Chọn điểm đến</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Lựa chọn điểm đến phù với với yêu cầu và mong muốn của bạn</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-dollar-sign fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Thanh toán trực tuyến</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Bạn có thể thanh toán ngay để chắc rằng bạn sẽ tham gia cuộc hành trình</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                        <i class="fa fa-plane fa-3x text-white"></i>
                    </div>
                    <h5 class="mt-4">Bay ngay hôm nay</h5>
                    <hr class="w-25 mx-auto bg-primary mb-1">
                    <hr class="w-50 mx-auto bg-primary mt-0">
                    <p class="mb-0">Còn chần chờ gì nữa, xách balo và tận hưởng chuyến đi của bạn cùng chúng tôi</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Process Start -->


<!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Hướng dẫn viên du lịch</h1>
        </div>
        <div class="row g-4">
            @foreach($data_guide->take(4) as $row)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid img-guide" src="{{asset('img/' . $row->guide_Img)}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{$row->guide_Name}}</h5>
                    </div>
                    <div class="d-flex border ">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-phone text-primary me-2"></i>{{ $row->guide_Pno}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-envelope text-primary me-2"></i>{{ $row->guide_Mail}}</small>
                    </div>
                    <div class="text-center">
                        <?php
                        $guideIntro = $row->guide_Intro;

                        // Chia chuỗi thành mảng các từ
                        $words = explode(' ', $guideIntro);

                        // Lấy 100 từ đầu tiên
                        $motaGuide = implode(' ', array_slice($words, 0, 50));
                        ?>
                        <p style="height: auto;">{{$motaGuide}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!--nút show danh sách -->
        <div class="row justify-content-center py-3">
            <div class="col-auto">
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/team') }}">Xem thêm ...</a>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const images = ["img/about_us.jpg", "img/duLich1.jpg", "img/duLich2.jpg","img/duLich3.jpg","img/duLich4.jpg","img/duLich5.jpg"];
        let currentIndex = 0;

        function changeImage() {
            currentIndex = (currentIndex + 1) % images.length;
            $('#imageDiv img').fadeOut(400, function() {
                $(this).attr('src', images[currentIndex]).fadeIn(400);
            });
        }

        setInterval(changeImage, 2000);
    });
</script>


@endsection