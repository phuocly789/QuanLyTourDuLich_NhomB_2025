@extends('admin.app2')

@section('content2')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">LỊCH SỬ HÓA ĐƠN</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">

            <!-- Filter Form -->
            <div class="mb-4">
                <form method="GET" action="{{ route('admin.history') }}">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" name="search" class="form-control" placeholder="Tìm theo tên khách hàng"
                                value="{{ request('search') }}">
                        </div>
                        <div class="col-md-3">
                            <select name="tour_id" class="form-control">
                                <option value="">Tất cả tour</option>
                                @if ($tours->isEmpty())
                                    <option value="" disabled>Không có tour nào</option>
                                @else
                                    @foreach ($tours as $tour)
                                        <option value="{{ $tour->tour_id }}"
                                            {{ request('tour_id') == $tour->tour_id ? 'selected' : '' }}>
                                            {{ $tour->tour_name }}
                                        </option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="date_from" class="form-control" value="{{ request('date_from') }}">
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="date_to" class="form-control" value="{{ request('date_to') }}">
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-12 text-end">
                            <button type="submit" class="btn btn-primary">Lọc</button>
                            <a href="{{ route('admin.history') }}" class="btn btn-secondary">Xóa bộ lọc</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Bookings History Table -->
            <div class="mb-5" id="bookings-history">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách Hóa Đơn</h3>
                </div>
                @if ($bookings->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu hóa đơn.</div>
                @else
                    <div class="table-modern table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>
                                        <a
                                            href="{{ route('admin.history', array_merge(request()->query(), ['sort' => 'booking_id', 'order' => request('sort') == 'booking_id' && request('order') == 'asc' ? 'desc' : 'asc'])) }}#bookings-history">
                                            ID
                                            {{ request('sort') == 'booking_id' ? (request('order') == 'asc' ? '↑' : '↓') : '' }}
                                        </a>
                                    </th>
                                    <th>Tên khách hàng</th>
                                    <th>Tour</th>
                                    <th>Số lượng</th>
                                    <th>
                                        <a
                                            href="{{ route('admin.history', array_merge(request()->query(), ['sort' => 'booking_amount', 'order' => request('sort') == 'booking_amount' && request('order') == 'asc' ? 'desc' : 'asc'])) }}#bookings-history">
                                            Tổng tiền
                                            {{ request('sort') == 'booking_amount' ? (request('order') == 'asc' ? '↑' : '↓') : '' }}
                                        </a>
                                    </th>
                                    <th>
                                        <a
                                            href="{{ route('admin.history', array_merge(request()->query(), ['sort' => 'created_at', 'order' => request('sort') == 'created_at' && request('order') == 'asc' ? 'desc' : 'asc'])) }}#bookings-history">
                                            Ngày đặt
                                            {{ request('sort') == 'created_at' ? (request('order') == 'asc' ? '↑' : '↓') : '' }}
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bookings as $booking)
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
                    @if ($bookings->total() > 10)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($bookings->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $bookings->previousPageUrl() }}#bookings-history">«</a>
                                        </li>
                                    @endif
                                    @foreach ($bookings->getUrlRange(1, $bookings->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $bookings->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#bookings-history">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($bookings->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $bookings->nextPageUrl() }}#bookings-history">»</a>
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
