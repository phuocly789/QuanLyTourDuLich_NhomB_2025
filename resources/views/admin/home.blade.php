@extends('admin.app2')
@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ THÔNG TIN TOUR CỦA BẠN</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <!-- Dashboard Tổng quan -->
            <div class="row mb-5 ">
                <div class="col-lg-4">
                    <div class="card text-center p-4">
                        <h5>Tổng số tour</h5>
                        <h3>{{ $total_tours }}</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center p-4">
                        <h5>Tổng số hướng dẫn viên</h5>
                        <h3>{{ $total_guides }}</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card text-center p-4">
                        <h5>Tổng số người dùng</h5>
                        <h3>{{ $total_users }}</h3>
                    </div>
                </div>
            </div>
            <div class="row mb-5 ">
                <div class="col-lg-6">
                    <div class="card text-center p-4">
                        <h5>Tổng số đặt vé</h5>
                        <h3>{{ $total_bookings }}</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card text-center p-4">
                        <h5>Đặt vé hôm nay</h5>
                        <h3>{{ $bookings_today }}</h3>
                    </div>
                </div>
            </div>
            <!-- Danh sách tour -->
            <div class="mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Danh sách tour</h3>
                    <a href="{{ route('admin.showcrud') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($tours->isEmpty())
                    <div class="alert alert-info text-center">
                        Không có dữ liệu tour.
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên tour</th>
                                <th>Giá</th>
                                <th>Số chỗ còn</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $tour)
                                <tr>
                                    <td>{{ $tour->tour_id }}</td>
                                    <td>{{ $tour->tour_name }}</td>
                                    <td>{{ number_format($tour->price, 0, ',', '.') }} VNĐ</td>
                                    <td>{{ $tour->total_seats - $tour->booked_seats }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($tours->total() > 8)
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <ul class="pagination">
                                    {{-- Nút Previous cho Tours --}}
                                    @if ($tours->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link" aria-hidden="true">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tours->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Các nút số cho Tours --}}
                                    @foreach ($tours->getUrlRange(1, $tours->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $tours->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    {{-- Nút Next cho Tours --}}
                                    @if ($tours->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tours->nextPageUrl() }}" aria-label="Next">
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
                    @endif
                @endif
            </div>

            <!-- Danh sách hướng dẫn viên -->
            <div class="mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Danh sách hướng dẫn viên</h3>
                    <a href="{{ route('admin.guide') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($guides->isEmpty())
                    <div class="alert alert-info text-center">
                        Không có dữ liệu hướng dẫn viên.
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tên</th>
                                <th>Email</th>
                                <th>Số điện thoại</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guides as $guide)
                                <tr>
                                    <td>{{ $guide->guide_Id }}</td>
                                    <td>{{ $guide->guide_Name }}</td>
                                    <td>{{ $guide->guide_Mail }}</td>
                                    <td>{{ $guide->guide_Pno }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($guides->total() > 8)
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <ul class="pagination">
                                    {{-- Nút Previous cho Guides --}}
                                    @if ($guides->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link" aria-hidden="true">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $guides->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Các nút số cho Guides --}}
                                    @foreach ($guides->getUrlRange(1, $guides->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $guides->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    {{-- Nút Next cho Guides --}}
                                    @if ($guides->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $guides->nextPageUrl() }}" aria-label="Next">
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
                    @endif
                @endif
            </div>
            <!-- Danh sách user -->
            <div class="mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Danh sách người dùng</h3>
                    <a href="{{ route('admin.information') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($users->isEmpty())
                    <div class="alert alert-info text-center">
                        Không có dữ liệu hướng dẫn viên.
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center" scope="col">ID</th>
                                <th class="text-center" scope="col">Name</th>
                                <th class="text-center" scope="col">Email</th>
                                <th class="text-center" scope="col">Quyền</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($users as $row)
                                <tr>
                                    <td class="text-center">{{ $row->id }}</td>
                                    <td class="text-center">{{ $row->name }}</td>
                                    <td class="text-center">{{ $row->email }}</td>
                                    <td class="text-center"><input type="text" value="{{ $row->usertype }}"
                                            class="usertype-input" data-id="{{ $row->id }}"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($guides->total() > 8)
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <ul class="pagination">
                                    {{-- Nút Previous cho Guides --}}
                                    @if ($guides->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link" aria-hidden="true">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $guides->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Các nút số cho Guides --}}
                                    @foreach ($guides->getUrlRange(1, $guides->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $guides->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    {{-- Nút Next cho Guides --}}
                                    @if ($guides->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $guides->nextPageUrl() }}" aria-label="Next">
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
                    @endif
                @endif
            </div>

            <!-- Danh sách đặt vé -->
            <div class="mb-5">
                <div class="d-flex justify-content-between mb-3">
                    <h3>Danh sách đặt vé</h3>
                    {{-- <a href="{{ route('admin.booking.create') }}" class="btn btn-primary">Thêm đặt vé mới</a> --}}
                </div>
                @if ($bookings->isEmpty())
                    <div class="alert alert-info text-center">
                        Không có dữ liệu đặt vé.
                    </div>
                @else
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tour</th>
                                <th>Khách hàng</th>
                                <th>Ngày đặt</th>
                                <th>Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bookings as $booking)
                                <tr>
                                    <td>{{ $booking->booking_id }}</td>
                                    <td>{{ $booking->booking_customer_name ?? 'N/A' }}</td>
                                    <td>{{ $booking->booking_customer_name ?? 'N/A' }}</td>
                                    <td>{{ $booking->created_at->format('d/m/Y') }}</td>
                                    <td></td> <!-- Cột hành động trống vì chưa có logic -->
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if ($bookings->total() > 8)
                        <div class="row justify-content-center">
                            <div class="col-auto">
                                <ul class="pagination">
                                    {{-- Nút Previous cho Bookings --}}
                                    @if ($bookings->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link" aria-hidden="true">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $bookings->previousPageUrl() }}"
                                                aria-label="Previous">
                                                <span aria-hidden="true">«</span>
                                            </a>
                                        </li>
                                    @endif

                                    {{-- Các nút số cho Bookings --}}
                                    @foreach ($bookings->getUrlRange(1, $bookings->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $bookings->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @endforeach

                                    {{-- Nút Next cho Bookings --}}
                                    @if ($bookings->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $bookings->nextPageUrl() }}"
                                                aria-label="Next">
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
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
