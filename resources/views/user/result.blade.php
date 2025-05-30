@extends('user.app1')
@section('content1')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Tận hưởng kỳ nghỉ của bạn với chúng tôi</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Hãy sẵn sàng cho cuộc phiêu lưu tiếp theo của bạn
                    </p>
                    <div class="position-relative w-75 mx-auto animated slideInDown">

                        <form action="{{ route('searchUser') }}" method="get">
                            <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Search by name..." name="searchUser" id="searchInput" maxlength="100"
                                oninput="checkCharCount()">
                            <div id="error-message" style="color: red;font-size: 20px; display: none;">
                                Đã nhập tối đa 100 ký tự!
                            </div>
                            <button type="submit"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Tìm kiếm</button>
                        </form>

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
            <div class="text-center pb-2 wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Kết quả tìm kiếm</h1>
            </div>

            <div class="row g-4 justify-content-center">
                @if ($tours->isNotEmpty())
                    <div class="text-center pb-2 wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-2">Danh sách tour cho: <b>{{ $search }}</b></h1>
                    </div>
                    @foreach ($tours as $row)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-fluid" style="width: 600px; height: 250px"
                                        src="{{ asset('img/' . $row->tour_image) }}" alt="">
                                    <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                        {{ $row->tour_sale }}</div>
                                </div>
                                <div class="d-flex border-bottom" style="height: 50px;">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-calendar-alt text-primary me-2"></i>{{ $row->start_day }}</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-clock text-primary me-2"></i>{{ $row->time }}</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-plane-departure text-primary me-2"></i>{{ $row->star_from }}</small>
                                </div>
                                <h4 class=" text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">
                                    {{ $row->tour_name }}</h4>
                                <div class="text-center pt-2">

                                    <h5 class="mb-0 mt-3 text-danger">{{ number_format($row->price, 0, ',', '.') }} vnđ</h5>

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
                                    <p style="height: 130px;">{{ $mota }} ... </p>
                                    <div class="d-flex justify-content-center mb-2 pb-2">
                                        <a href="{{ route('user.tour.readmore', $row->tour_id) }}"
                                            class="btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;width: 150px">Xem thêm</a>
                                        {{-- <a href="{{ route('user.tour.readmore', $row->tour_id) }}"
                                        class="btn btn-sm btn-primary px-3 border-end {{ $row->total_seats - $row->booked_seats <= 0 ? 'disabled' : '' }}"
                                        style="border-radius: 0 0 0 0;"
                                        {{ $row->total_seats - $row->booked_seats <= 0 ? 'title="Tour đã hết chỗ"' : '' }}>
                                        Đặt ngay
                                    </a> --}}
                                        <form class="favorite-form" action="{{ route('favorite.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="tour_id" value="{{ $row->tour_id }}">
                                            <button type="submit" class="btn btn-sm btn-primary px-3 favorite-btn"
                                                style="border-radius: 0 30px 30px 0;width: 60px"
                                                data-tour-id="{{ $row->tour_id }}">
                                                <i class="far fa-heart" id="favorite-btn-{{ $row->tour_id }}"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h4 class=" text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">
                            Không tìm thấy kết quả cho: <b>{{ $search }}</b></h4>
                    </div>
                @endif
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
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
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
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
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
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">Còn chần chờ gì nữa, xách balo và tận hưởng chuyến đi của bạn cùng chúng tôi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Process Start -->
    <!-- Favorite tour javascript -->
    <script>
        $(document).ready(function() {
            // Lấy danh sách tour yêu thích khi tải trang
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('favorite.favoriteList') }}",
                method: 'POST',
                dataType: 'json',
                success: function(response) {
                    // Duyệt qua danh sách tour yêu thích và cập nhật biểu tượng trái tim
                    $.each(response, function(index, tour) {
                        const fav_btn = $("#favorite-btn-" + tour.tour_id);
                        if (fav_btn.length) {
                            fav_btn.removeClass("far").addClass("fas");
                        }
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error fetching favorite list:', error);
                }
            });

            // Xử lý sự kiện submit form yêu thích
            $(".favorite-form").on("submit", function(e) {
                e.preventDefault(); // Ngăn chặn submit form mặc định
                const form = $(this);
                const tour_id = form.find('input[name="tour_id"]').val();
                const fav_btn = $("#favorite-btn-" + tour_id);
                const button = form.find('button[type="submit"]');

                // Vô hiệu hóa nút để ngăn click liên tiếp
                button.prop('disabled', true);

                // Lưu trạng thái ban đầu để hoàn tác nếu lỗi
                const isInitiallyFar = fav_btn.hasClass("far");

                // Tạm thời cập nhật giao diện
                if (isInitiallyFar) {
                    fav_btn.removeClass("far").addClass("fas");
                } else {
                    fav_btn.removeClass("fas").addClass("far");
                }

                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: "{{ route('favorite.add') }}",
                    method: 'POST',
                    data: form.serialize(),
                    dataType: 'json',
                    success: function(response) {
                        // Xác nhận trạng thái từ server
                        if (response.status === 'added') {
                            fav_btn.removeClass("far").addClass("fas");
                        } else if (response.status === 'removed') {
                            fav_btn.removeClass("fas").addClass("far");
                        }
                        // Kích hoạt lại nút sau khi xử lý
                        button.prop('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        // Hoàn tác thay đổi giao diện nếu lỗi
                        if (isInitiallyFar) {
                            fav_btn.removeClass("fas").addClass("far");
                        } else {
                            fav_btn.removeClass("far").addClass("fas");
                        }
                        console.error('Error toggling favorite:', error);
                        // Kích hoạt lại nút
                        button.prop('disabled', false);
                    }
                });
            });
        });

        function checkCharCount() {
            const input = document.getElementById('searchInput');
            const errorMessage = document.getElementById('error-message');
            if (input.value.length >= 100) {
                errorMessage.style.display = 'block';
                input.value = input.value.substring(0, 100); // Cắt bớt nếu vượt quá 100 ký tự
            } else {
                errorMessage.style.display = 'none';
            }
        }
    </script>

@endsection
