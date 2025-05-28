@extends('user.app1')
@section('content1')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Tour đang triển khai</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href={{ '/user.home' }}>Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Tour đang triển khai</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Filter Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="text-primary fw-bold">Lọc Tour Du Lịch</h3>
                <p class="text-muted">Tìm tour phù hợp với nhu cầu của bạn</p>
            </div>
            <form method="GET" action="{{ route('user.package') }}" class="row g-4 justify-content-center">
                <div class="col-lg-3 col-md-6">
                    <label for="destination" class="form-label fw-medium text-dark">Điểm đến</label>
                    <input type="text" name="destination" id="destination" class="form-control shadow-sm"
                        placeholder="Nhập điểm đến" value="{{ request('destination') }}" aria-describedby="destinationHelp">
                    <small id="destinationHelp" class="form-text text-muted">Ví dụ: Đà Lạt, Phú Quốc</small>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="price_min" class="form-label fw-medium text-dark">Giá tối thiểu (VNĐ)</label>
                    <input type="number" name="price_min" id="price_min" class="form-control shadow-sm"
                        placeholder="Giá tối thiểu" value="{{ request('price_min') }}" min="0"
                        aria-describedby="priceMinHelp">
                    <small id="priceMinHelp" class="form-text text-muted">Nhập giá thấp nhất</small>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="price_max" class="form-label fw-medium text-dark">Giá tối đa (VNĐ)</label>
                    <input type="number" name="price_max" id="price_max" class="form-control shadow-sm"
                        placeholder="Giá tối đa" value="{{ request('price_max') }}" min="0"
                        aria-describedby="priceMaxHelp">
                    <small id="priceMaxHelp" class="form-text text-muted">Nhập giá cao nhất</small>
                </div>
                <div class="col-lg-3 col-md-6">
                    <label for="start_date" class="form-label fw-medium text-dark">Ngày khởi hành</label>
                    <input type="date" name="start_date" id="start_date" class="form-control shadow-sm"
                        value="{{ request('start_date') }}" aria-describedby="startDateHelp">
                    <small id="startDateHelp" class="form-text text-muted">Chọn ngày khởi hành</small>
                </div>
                <div class="col-auto align-self-end mt-4">
                    <button type="submit" class="btn btn-primary px-4 py-2 fw-medium me-2"
                        style="transition: all 0.3s ease;">
                        <i class="bi bi-funnel me-1"></i> Lọc
                    </button>
                    <a href="{{ route('user.package') }}" class="btn btn-outline-secondary px-4 py-2 fw-medium"
                        style="transition: all 0.3s ease;">
                        <i class="bi bi-x-circle me-1"></i> Xóa bộ lọc
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Filter End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Tour đang triển khai </h1>
            </div>
            @if (isset($data) && !$data->isEmpty())
                <div class="row g-4 justify-content-center">
                    @foreach ($data->take(6) as $row)
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div
                                class="package-item {{ $row->total_seats - $row->booked_seats <= 0 ? 'fully-booked' : '' }}">
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
                                <h4 class="text-primary fw-bold flex-fill text-center py-2" style="height: 50px;">
                                    {{ $row->tour_name }}</h4>
                                <div class="text-center pt-2">
                                    <h5 class="mb-0 mt-3 text-danger">{{ number_format($row->price, 0, ',', '.') }} vnđ
                                    </h5>
                                    <div class="mb-3">
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                        <small class="fa fa-star text-primary"></small>
                                    </div>
                                    <?php
                                    $tourDescription = $row->tour_description;
                                    $words = explode(' ', $tourDescription);
                                    $mota = implode(' ', array_slice($words, 0, 50));
                                    ?>
                                    <p style="height: 130px;">{{ $mota }} ... </p>
                                    <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống:
                                        {{ $row->total_seats - $row->booked_seats }} chỗ</p>
                                    <div class="d-flex justify-content-center mb-2 pb-2">
                                        <a href="{{ route('user.tour.readmore', $row->tour_id) }}"
                                            class="btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;">Xem thêm</a>
                                        <a href="{{ route('user.tour.readmore', $row->tour_id) }}"
                                            class="btn btn-sm btn-primary px-3 border-end {{ $row->total_seats - $row->booked_seats <= 0 ? 'disabled' : '' }}"
                                            style="border-radius: 0 0 0 0;"
                                            {{ $row->total_seats - $row->booked_seats <= 0 ? 'title="Tour đã hết chỗ"' : '' }}>
                                            Đặt ngay
                                        </a>
                                        <form class="favorite-form" action="{{ route('favorite.add') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="tour_id" value="{{ $row->tour_id }}">
                                            <button type="submit" class="btn btn-sm btn-primary px-3 favorite-btn"
                                                style="border-radius: 0 30px 30px 0;" data-tour-id="{{ $row->tour_id }}">
                                                <i class="far fa-heart" id="favorite-btn-{{ $row->tour_id }}"></i>
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <p class="text-center text-gray my-4">Không có kết quả </p>
                </div>
            @endif
        </div>

        <!-- Phần phân trang -->
        <div class="row justify-content-center">
            <div class="col-auto">
                <ul class="pagination">
                    @if ($data->onFirstPage())
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">«</span>
                        </li>
                    @else
                        <li class="page-item">
                            <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
                                <span aria-hidden="true">«</span>
                            </a>
                        </li>
                    @endif
                    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                        <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endforeach
                    @if ($data->hasMorePages())
                        <li class="page-item">
                            <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
                                <span aria-hidden="true">»</span>
                            </a>
                        </li>
                    @else
                        <li class="page-item disabled">
                            <span class="page-link" aria-hidden="true">»</span>
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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
                e.preventDefault();
                const form = $(this);
                const tour_id = form.find('input[name="tour_id"]').val();
                const fav_btn = $("#favorite-btn-" + tour_id);
                const button = form.find('button[type="submit"]');
                button.prop('disabled', true);
                const isInitiallyFar = fav_btn.hasClass("far");
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
                        if (response.status === 'added') {
                            fav_btn.removeClass("far").addClass("fas");
                        } else if (response.status === 'removed') {
                            fav_btn.removeClass("fas").addClass("far");
                        }
                        button.prop('disabled', false);
                    },
                    error: function(xhr, status, error) {
                        if (isInitiallyFar) {
                            fav_btn.removeClass("fas").addClass("far");
                        } else {
                            fav_btn.removeClass("far").addClass("fas");
                        }
                        console.error('Error toggling favorite:', error);
                        button.prop('disabled', false);
                    }
                });
            });
        });
    </script>

    <!-- Inline CSS for dimming fully booked tours -->
    <style>
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
@endsection
