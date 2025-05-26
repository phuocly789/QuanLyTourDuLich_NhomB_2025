```php
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

        /* CSS cho tour hết chỗ */
        .fully-booked {
            opacity: 0.5;
            position: relative;
        }

        .fully-booked::after {
            content: "Hết chỗ";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(255, 0, 0, 0.7);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            font-size: 18px;
        }
    </style>
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Tour</h1>

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
                <h1 class="text-center text-primary px-3">Danh sách tour tại {{ $location->location_name }}</h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($tours as $tour)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="package-item {{ $tour->total_seats - $tour->booked_seats <= 0 ? 'fully-booked' : '' }}">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" style="width: 600px; height: 250px"
                                    src="{{ asset('img/' . $tour->tour_image) }}" alt="">
                                <div class="bg-white text-danger fw-bold position-absolute top-0 start-0 m-3 py-1 px-2">
                                    {{ $tour->tour_sale }}</div>
                            </div>
                            <div class="d-flex border-bottom" style="height: 50px;">
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-calendar-alt text-primary me-2"></i>{{ $tour->start_day }}</small>
                                <small class="flex-fill text-center border-end py-2"><i
                                        class="fa fa-clock text-primary me-2"></i>{{ $tour->time }}</small>
                                <small class="flex-fill text-center py-2"><i
                                        class="fa fa-plane-departure text-primary me-2"></i>{{ $tour->star_from }}</small>
                            </div>
                            <h4 class="text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">
                                {{ $tour->tour_name }}</h4>
                            <div class="text-center pt-2">
                                <h5 class="mb-2 mt-3 text-danger">{{ number_format($tour->price, 0, ',', '.') }} vnđ</h5>
                                <div class="mb-3">
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                    <small class="fa fa-star text-primary"></small>
                                </div>
                                <?php
                                $tourDescription = $tour->tour_description;
                                $words = explode(' ', $tourDescription);
                                $mota = implode(' ', array_slice($words, 0, 50));
                                ?>
                                <p style="height: 130px;text-align: justify;padding: 10px">{{ $mota }} ... </p>
                                <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống:
                                    {{ $tour->total_seats - $tour->booked_seats }} chỗ</p>
                                <div class="d-flex justify-content-center mb-2 pb-2">
                                    <a href="{{ route('user.tour.readmore', $tour->tour_id) }}"
                                        class="btn btn-sm btn-primary px-3 border-end"
                                        style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                                    <a href="{{ route('user.tour.readmore', $tour->tour_id) }}"
                                        class="btn btn-sm btn-primary px-3 border-end {{ $tour->total_seats - $tour->booked_seats <= 0 ? 'disabled' : '' }}"
                                        style="border-radius: 0 0 0 0;"
                                        {{ $tour->total_seats - $tour->booked_seats <= 0 ? 'title="Tour đã hết chỗ"' : '' }}>
                                        Đặt ngay
                                    </a>
                                    <div class="btn-sm btn-primary px-3 border-end btn-far"
                                        style="border-radius: 0 30px 30px 0; display: flex; align-items: center; justify-content: center; height: 36px;"
                                        data-tour-id="{{ $tour->tour_id }}">
                                        <i class="far fa-heart" style="color: white; font-size: 16px;"
                                            id="favorite-btn-{{ $tour->tour_id }}"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
    <!-- Process End -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Favorite tour javascript -->
    <script>
        $(document).ready(function() {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('favorite.favoriteList') }}",
                method: 'POST',
                dataType: 'json',
                success: function(response) {
                    $.each(response, function(index, element) {
                        $("#favorite-btn-" + element.tour_id).removeClass("far").addClass(
                        "fas");
                    });
                },
                error: function(xhr, status, error) {
                    console.error('Error:', error);
                }
            });

            $(".btn-far").each(function() {
                $(this).on("click", function() {
                    const id = $(this).data("tourId");
                    const fav_btn = $("#favorite-btn-" + id);
                    const dataToSend = {
                        tourId: id,
                    };
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('favorite.saveData') }}",
                        method: 'POST',
                        data: dataToSend,
                        dataType: 'json',
                        success: function(response) {
                            console.log(response);
                            if (response.tour_id != null) {
                                fav_btn.removeClass("far").addClass("fas");
                            } else {
                                fav_btn.removeClass("fas").addClass("far");
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error('Error:', error);
                        }
                    });
                });
            });
        });
    </script>
@endsection
```
