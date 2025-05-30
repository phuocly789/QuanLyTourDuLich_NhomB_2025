@extends('app')
@section('content')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Tour đang triển khai</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    {{-- <!-- Filter Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @if (session('error'))
                <div class="alert alert-danger text-center" style="font-size: 24px;">
                    {{ session('error') }}
                </div>
            @endif
            <div class="text-center mb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h3 class="text-primary fw-bold">Lọc Tour Du Lịch</h3>
                <p class="text-muted">Tìm tour phù hợp với nhu cầu của bạn</p>
            </div>
            <form method="GET" action="{{ route('package') }}" class="row g-4 justify-content-center">
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
                    <a href="{{ route('package') }}" class="btn btn-outline-secondary px-4 py-2 fw-medium"
                        style="transition: all 0.3s ease;">
                        <i class="bi bi-x-circle me-1"></i> Xóa bộ lọc
                    </a>
                </div>
            </form>
        </div>
    </div>
    <!-- Filter End --> --}}
    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            @if (session('error'))
                <div class="alert alert-danger text-center" style="font-size: 30px;">
                    {{ session('error') }}
                </div>
            @endif
            {{-- <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Tour đang triển khai </h1>
            </div> --}}
            @if (isset($data) && !$data->isEmpty())
                <x-request-logint-modal />
                <div class="row g-4 justify-content-center">
                    @foreach ($data as $row)
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

                                    <h5 class="mb-0 text-danger">{{ number_format($row->price, 0, ',', '.') }} vnđ</h5>

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
                                    <p style="height: 110px;text-align: justify;padding: 10px">{{ $mota }} ...
                                    </p>
                                    <p class="text-danger" style="font-size: 20px; font-weight: bold;">Số chỗ còn trống:
                                        {{ $row->total_seats - $row->booked_seats }} chỗ</p>
                                    <div class="d-flex justify-content-center mb-2 pb-2">


                                        <button type="button" class="btn btn-sm btn-primary px-3 border-end"
                                            style="border-radius: 30px 0 0 30px;" data-bs-toggle="modal"
                                            data-bs-target="#loginPromptModal">Xem thêm</button>

                                        <button type="button" class="btn btn-sm btn-primary px-3"
                                            style="border-radius: 0 30px 30px 0;" data-bs-toggle="modal"
                                            data-bs-target="#loginPromptModal">Đặt ngay</button>
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
    </div>

    <!-- Phần phân trang -->

    <div class="row justify-content-center mt-4">
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
@endsection
