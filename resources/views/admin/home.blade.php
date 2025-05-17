@extends('admin.app2')
@section('content2')
    

    <script>
        // Function to scroll smoothly to a section
        function scrollToSection(sectionId) {
            const element = document.getElementById(sectionId);
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }

        // Auto-scroll to section based on URL hash when page loads
        document.addEventListener('DOMContentLoaded', () => {
            const hash = window.location.hash;
            if (hash) {
                const sectionId = hash.replace('#', '');
                scrollToSection(sectionId);
            }
        });
    </script>

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
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-card" onclick="scrollToSection('tours-section')">
                        <div class="card-body">
                            <i class="fas fa-map-marked-alt card-icon"></i>
                            <h5>Tổng số tour</h5>
                            <h3>{{ $total_tours }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-card" onclick="scrollToSection('guides-section')">
                        <div class="card-body">
                            <i class="fas fa-user-tie card-icon"></i>
                            <h5>Tổng số hướng dẫn viên</h5>
                            <h3>{{ $total_guides }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card dashboard-card" onclick="scrollToSection('users-section')">
                        <div class="card-body">
                            <i class="fas fa-users card-icon"></i>
                            <h5>Tổng số người dùng</h5>
                            <h3>{{ $total_users }}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-6 col-md-6">
                    <div class="card dashboard-card" onclick="scrollToSection('bookings-section')">
                        <div class="card-body">
                            <i class="fas fa-ticket-alt card-icon"></i>
                            <h5>Tổng số đặt vé</h5>
                            <h3>{{ $total_bookings }}</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card dashboard-card no-scroll">
                        <div class="card-body">
                            <i class="fas fa-calendar-day card-icon"></i>
                            <h5>Đặt vé hôm nay</h5>
                            <h3>{{ $bookings_today }}</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Thống kê doanh thu -->
            <div class="row mb-5">
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card revenue-card no-scroll">
                        <div class="card-body">
                            <i class="fas fa-money-bill-wave card-icon"></i>
                            <h5>Doanh thu hôm nay</h5>
                            <h3>{{ number_format($revenue_daily, 0, ',', '.') }} VNĐ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card revenue-card no-scroll">
                        <div class="card-body">
                            <i class="fas fa-money-bill-wave card-icon"></i>
                            <h5>Doanh thu tuần này</h5>
                            <h3>{{ number_format($revenue_weekly, 0, ',', '.') }} VNĐ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card revenue-card no-scroll">
                        <div class="card-body">
                            <i class="fas fa-money-bill-wave card-icon"></i>
                            <h5>Doanh thu tháng này</h5>
                            <h3>{{ number_format($revenue_monthly, 0, ',', '.') }} VNĐ</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="card dashboard-card revenue-card no-scroll">
                        <div class="card-body">
                            <i class="fas fa-money-bill-wave card-icon"></i>
                            <h5>Doanh thu năm nay</h5>
                            <h3>{{ number_format($revenue_yearly, 0, ',', '.') }} VNĐ</h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Danh sách tour -->
            <div class="mb-5" id="tours-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh sách tour</h3>
                    <a href="{{ route('admin.showcrud') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($tours->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu tour.</div>
                @else
                    <div class="table-modern">
                        <table class="table table-bordered mb-0">
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
                    </div>
                    @if ($tours->total() > 8)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($tours->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tours->previousPageUrl() }}#tours-section">«</a>
                                        </li>
                                    @endif
                                    @foreach ($tours->getUrlRange(1, $tours->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $tours->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#tours-section">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($tours->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $tours->nextPageUrl() }}#tours-section">»</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">»</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Danh sách hướng dẫn viên -->
            <div class="mb-5" id="guides-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh sách hướng dẫn viên</h3>
                    <a href="{{ route('admin.guide') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($guides->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu hướng dẫn viên.</div>
                @else
                    <div class="table-modern">
                        <table class="table table-bordered mb-0">
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
                    </div>
                    @if ($guides->total() > 8)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($guides->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $guides->previousPageUrl() }}#guides-section">«</a>
                                        </li>
                                    @endif
                                    @foreach ($guides->getUrlRange(1, $guides->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $guides->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#guides-section">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($guides->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $guides->nextPageUrl() }}#guides-section">»</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">»</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Danh sách người dùng -->
            <div class="mb-5" id="users-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh sách người dùng</h3>
                    <a href="{{ route('admin.information') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($users->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu người dùng.</div>
                @else
                    <div class="table-modern">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $row)
                                    <tr>
                                        <td>{{ $row->id }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>
                                            <input type="text" value="{{ $row->usertype }}"
                                                class="usertype-input form-control" data-id="{{ $row->id }}"
                                                style="border-radius: 5px; padding: 5px;">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($users->total() > 8)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($users->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $users->previousPageUrl() }}#users-section">«</a>
                                        </li>
                                    @endif
                                    @foreach ($users->getUrlRange(1, $users->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $users->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#users-section">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($users->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $users->nextPageUrl() }}#users-section">»</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">»</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    @endif
                @endif
            </div>

            <!-- Danh sách lịch sử đơn hàng -->
            <div class="mb-5" id="bookings-section">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách Tour Đã Đặt</h3>
                    <a href="{{ route('admin.history') }}" class="btn btn-primary">Xem Chi Tiết</a>
                </div>
                @if ($booking_history->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu lịch sử đơn hàng.</div>
                @else
                    <div class="table-modern">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên khách hàng</th>
                                    <th>Tour</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                    <th>Ngày đặt</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($booking_history as $booking)
                                    <tr>
                                        <td>{{ $booking->booking_id }}</td>
                                        <td>{{ $booking->booking_customer_name }}</td>
                                        <td>{{ $booking->tour ? $booking->tour->tour_name : 'N/A' }}</td>
                                        <td>{{ $booking->booking_customer_quantity }}</td>
                                        <td>{{ number_format($booking->booking_amount, 0, ',', '.') }} VNĐ</td>
                                        <td>{{ $booking->created_at->format('d/m/Y') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($booking_history->total() > 10)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($booking_history->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $booking_history->previousPageUrl() }}#bookings-section">«</a>
                                        </li>
                                    @endif
                                    @foreach ($booking_history->getUrlRange(1, $booking_history->lastPage()) as $page => $url)
                                        <li
                                            class="page-item {{ $page == $booking_history->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#bookings-section">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($booking_history->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $booking_history->nextPageUrl() }}#bookings-section">»</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">»</span>
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
