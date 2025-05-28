@extends('user.app1')
@section('content1')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Discovery</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href={{ "/user.home" }}>Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
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
            </div>
        </div>
    </div>
</div>
<!-- About End -->

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
                        <img class="img-fluid" src="{{asset('img/' . $row->guide_Img)}}" alt="">
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
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/user.team') }}">Xem thêm ...</a>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const images = ["img/about_us.jpg", "img/duLich1.jpg", "img/duLich2.jpg", "img/duLich3.jpg", "img/duLich4.jpg", "img/duLich5.jpg"];
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