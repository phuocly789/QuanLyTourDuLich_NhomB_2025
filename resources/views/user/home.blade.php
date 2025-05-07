@extends('user.app1')
@section('content1')
<style>
    .favorite-icon {
        color: grey;
        /* Màu mặc định */
    }

    .favorite-icon.active {
        color: red;
        /* Màu đỏ khi được yêu thích */
    }
</style>
<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">Tận hưởng kỳ nghỉ của bạn với chúng tôi</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Hãy sẵn sàng cho cuộc phiêu lưu tiếp theo của bạn</p>
                <div class="position-relative w-75 mx-auto animated slideInDown">

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Navbar & Hero End -->

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

                        <h5 class="mb-0 mt-3 text-danger">{{number_format($row->price, 0, ',', '.')}} vnđ</h5>

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
                        <p style="height: 130px;">{{$mota}} ... </p>

                        <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống: {{$row->total_seats - $row->booked_seats}} chỗ</p>

                        <div class="d-flex justify-content-center mb-2 pb-2">
                            <a href="{{ route('user.tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                            <a href="{{ route('user.tour.readmore', $row->tour_id) }}" class="btn btn-sm btn-primary px-3 border-end" style="border-radius: 0 0 0 0;">Đặt ngay</a>

                            <div class="btn-sm btn-primary px-3 border-end btn-far" style="border-radius: 0 30px 30px 0;" data-tour-id="{{ $row->tour_id }}">
                                <i class="far fa-heart text-white" id="favorite-btn-{{$row->tour_id}}"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


        <!--nút show danh sách -->
        <div class="row justify-content-center py-3">
            <div class="col-auto">
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/user.package') }}">Xem thêm ...</a>
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
                    <hr class="w-25 mx-auto bg-primary mb-1 mt-3">
                    <hr class="w-50 mx-auto bg-primary mt-0 mb-3">
                    <p class="mb-0">Lựa chọn điểm đến phù với với yêu cầu và mong muốn của bạn</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="position-relative border border-primary pt-5 pb-4 px-4">
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
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
                    <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
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
                <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/team') }}">Xem thêm ...</a>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        const images = [
            "{{ asset('img/about_us.jpg') }}",
            "{{ asset('img/duLich1.jpg') }}",
            "{{ asset('img/duLich2.jpg') }}",
            "{{ asset('img/duLich3.jpg') }}",
            "{{ asset('img/duLich4.jpg') }}",
            "{{ asset('img/duLich5.jpg') }}"
        ];
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

<!-- Favorite tour javascript -->
<script>
    $(document).ready(function() {
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "#", // Route của Laravel
            method: 'POST', // Phương thức HTTP
            dataType: 'json', // Loại dữ liệu trả về
            success: function(response) {
                // const fav_btn = $("#favorite-btn-" + response.tour_id);
                // Xử lý phản hồi từ máy chủ;
                $.each(response, function(index, element) {
                    $("#favorite-btn-" + element.tour_id).removeClass("far").addClass("fas");
                });
            },
            error: function(xhr, status, error) {
                // Xử lý lỗi nếu có
                console.error('Error:', error);
            }
        });
        // Sự kiện click hoặc sự kiện khác để kích hoạt Ajax
        $(".btn-far").each(function() {

            $(this).on("click", function() {
                const id = $(this).data("tourId");
                const fav_btn = $("#favorite-btn-" + id);
                const dataToSend = {
                    tourId: id,
                    // Các dữ liệu khác nếu cần
                };
                // Gửi yêu cầu Ajax khi button được click
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "#", // Route của Laravel
                    method: 'POST', // Phương thức HTTP
                    data: dataToSend,
                    dataType: 'json', // Loại dữ liệu trả về
                    success: function(response) {

                        // Xử lý phản hồi từ máy chủ;
                        console.log(response);
                        if (response.tour_id != null) {
                            fav_btn.removeClass("far").addClass("fas");

                        } else {
                            console.log("cmm")
                            fav_btn.removeClass("fas").addClass("far");
                        }
                    },
                    error: function(xhr, status, error) {
                        // Xử lý lỗi nếu có
                        console.error('Error:', error);
                    }
                });
            });
        });
    });
</script>
<!-- Thêm Font Awesome -->
<!-- <script>
$(document).ready(function() {
    $('.favorite-btn').on('click', function(event) {
        event.preventDefault(); // Ngăn chặn hành động mặc định của nút submit

        var $icon = $(this).find('.heart-icon'); // Chọn biểu tượng trái tim
        $icon.toggleClass('active'); // Thêm hoặc xoá lớp active
    });
});
</script> -->





@endsection