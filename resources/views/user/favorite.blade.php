@extends('user.app1')
@section('content1')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Tour yêu thích</h1>
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
                <h1 class="text-center text-primary px-3">Tour yêu thích của bạn </h1>
            </div>
            <div class="row g-4 justify-content-center favoriteList-content">
                @if (!empty($favoriteTours) && $favoriteTours->count() > 0)
                    @foreach ($favoriteTours as $favoriteTour)
                        @if ($favoriteTour->tour && $favoriteTour->tour->tour_image)
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="package-item">
                                    <div class="position-relative overflow-hidden">
                                        <img class="img-fluid" style="width: 600px; height: 250px"
                                            src="{{ asset('img/' . $favoriteTour->tour->tour_image) }}" alt="">
                                        <div
                                            class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                            {{ $favoriteTour->tour->tour_sale }}</div>
                                    </div>

                                    <div class="d-flex border-bottom" style="height: 50px;">
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-calendar-alt text-primary me-2"></i>{{ $favoriteTour->tour->start_day }}</small>
                                        <small class="flex-fill text-center border-end py-2"><i
                                                class="fa fa-clock text-primary me-2"></i>{{ $favoriteTour->tour->time }}</small>
                                        <small class="flex-fill text-center py-2"><i
                                                class="fa fa-plane-departure text-primary me-2"></i>{{ $favoriteTour->tour->star_from }}</small>
                                    </div>
                                    <h4 class=" text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">
                                        {{ $favoriteTour->tour->tour_name }}</h4>
                                    <div class="text-center pt-2">

                                        <h5 class="mb-0 mt-3 text-danger">
                                            {{ number_format($favoriteTour->tour->price, 0, ',', '.') }} vnđ</h5>

                                        <div class="mb-3">
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                            <small class="fa fa-star text-primary"></small>
                                        </div>
                                        <?php
                                        $tourDescription = $favoriteTour->tour->tour_description;

                                        // Chia chuỗi thành mảng các từ
                                        $words = explode(' ', $tourDescription);

                                        // Lấy 100 từ đầu tiên
                                        $mota = implode(' ', array_slice($words, 0, 50));
                                        ?>
                                        <p style="height: 130px;">{{ $mota }} ... </p>

                                        <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống:
                                            {{ $favoriteTour->tour->total_seats - $favoriteTour->tour->booked_seats }} chỗ
                                        </p>

                                        <div class="d-flex justify-content-center mb-2 pb-2">
                                            <a href="{{ route('user.tour.readmore', $favoriteTour->tour->tour_id) }}"
                                                class="btn btn-sm btn-primary px-3 border-end"
                                                style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                                            <a href="{{ route('user.tour.readmore', $favoriteTour->tour->tour_id) }}"
                                                class="btn btn-sm btn-primary px-3 border-end"
                                                style="border-radius: 0 0 0 0;">Đặt ngay</a>
                                            <!-- <form class="favorite-form" action="{{ route('favorite.add') }}" method="POST">
                                   @csrf
                                   <input type="hidden" name="tour_id" value="{{ $favoriteTour->tour->tour_id }}">

                               </form> -->

                                            {{-- <div class="btn-sm btn-primary px-3 border-end btn-far"
                                                style="border-radius: 0 30px 30px 0;"
                                                data-tour-id="{{ $favoriteTour->tour_id }}">
                                                <i class="fas fa-heart " style="color: white"
                                                    id="favorite-btn-{{ $favoriteTour->tour_id }}"></i>
                                            </div> --}}
                                            <div class="btn-sm btn-primary px-3 border-end btn-far"
                                                style="border-radius: 0 30px 30px 0;"
                                                data-tour-id="{{ $favoriteTour->tour_id }}">
                                                <i class="fas fa-heart " style="color: white"
                                                    id="favorite-btn-{{ $favoriteTour->tour_id }}"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                @else
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <p class="text-center text-grey px-3 mt-4">Hiện chưa có tour yêu thích nào </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <!-- Package End -->



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Favorite tour javascript -->
    <script>
        $(document).ready(function() {

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
                        url: "{{ route('favorite.saveData') }}", // Route của Laravel
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
                    $(this).parent().parent().parent().parent().remove();
                });
            });
        });
    </script>
@endsection
