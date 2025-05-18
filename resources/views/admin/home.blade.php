@extends('admin.app2')
@section('content2')
    <script>
        // Function to format number as VND (matching PHP's number_format)
        function formatVND(number) {
            return number.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.') + ' VNĐ';
        }

        // Function to format date as dd/mm/yyyy
        function formatDate(date) {
            const d = new Date(date);
            const day = String(d.getDate()).padStart(2, '0');
            const month = String(d.getMonth() + 1).padStart(2, '0');
            const year = d.getFullYear();
            return `${day}/${month}/${year}`;
        }

        // Function to load more tours
        function loadMoreTours() {
            const button = document.getElementById('load-more-tours');
            const current = parseInt(button.getAttribute('data-current'));
            const perPage = 8;

            fetch('{{ route('admin.loadMoreTours') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        skip: current,
                        take: perPage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('tours-tbody');
                    if (data.tours.length > 0) {
                        data.tours.forEach(tour => {
                            const row = `
                    <tr>
                        <td>${tour.tour_id}</td>
                        <td>${tour.tour_name}</td>
                        <td>${formatVND(tour.price)}</td>
                        <td>${tour.total_seats - tour.booked_seats}</td>
                    </tr>`;
                            tbody.insertAdjacentHTML('beforeend', row);
                        });

                        button.setAttribute('data-current', current + data.tours.length);

                        if (data.tours.length < perPage || current + data.tours.length >= data.total) {
                            button.style.display = 'none';
                        }
                    } else {
                        button.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Lỗi khi tải thêm tour:', error);
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
                });
        }

        // Function to load more guides
        function loadMoreGuides() {
            const button = document.getElementById('load-more-guides');
            const current = parseInt(button.getAttribute('data-current'));
            const perPage = 8;

            fetch('{{ route('admin.loadMoreGuides') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        skip: current,
                        take: perPage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('guides-tbody');
                    if (data.guides.length > 0) {
                        data.guides.forEach(guide => {
                            const row = `
                    <tr>
                        <td>${guide.guide_Id}</td>
                        <td>${guide.guide_Name}</td>
                        <td>${guide.guide_Mail}</td>
                        <td>${guide.guide_Pno}</td>
                    </tr>`;
                            tbody.insertAdjacentHTML('beforeend', row);
                        });

                        button.setAttribute('data-current', current + data.guides.length);

                        if (data.guides.length < perPage || current + data.guides.length >= data.total) {
                            button.style.display = 'none';
                        }
                    } else {
                        button.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Lỗi khi tải thêm hướng dẫn viên:', error);
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
                });
        }

        // Function to load more users
        function loadMoreUsers() {
            const button = document.getElementById('load-more-users');
            const current = parseInt(button.getAttribute('data-current'));
            const perPage = 8;

            fetch('{{ route('admin.loadMoreUsers') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        skip: current,
                        take: perPage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('users-tbody');
                    if (data.users.length > 0) {
                        data.users.forEach(user => {
                            const row = `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>
                            <input type="text" value="${user.usertype}" class="usertype-input form-control" data-id="${user.id}" style="border-radius: 5px; padding: 5px;">
                        </td>
                    </tr>`;
                            tbody.insertAdjacentHTML('beforeend', row);
                        });

                        button.setAttribute('data-current', current + data.users.length);

                        if (data.users.length < perPage || current + data.users.length >= data.total) {
                            button.style.display = 'none';
                        }
                    } else {
                        button.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Lỗi khi tải thêm người dùng:', error);
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
                });
        }

        // Function to load more bookings
        function loadMoreBookings() {
            const button = document.getElementById('load-more-bookings');
            const current = parseInt(button.getAttribute('data-current'));
            const perPage = 10;

            fetch('{{ route('admin.loadMoreBookings') }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        skip: current,
                        take: perPage
                    })
                })
                .then(response => response.json())
                .then(data => {
                    const tbody = document.getElementById('bookings-tbody');
                    if (data.bookings.length > 0) {
                        data.bookings.forEach(booking => {
                            const row = `
                    <tr>
                        <td>${booking.booking_id}</td>
                        <td>${booking.booking_customer_name}</td>
                        <td>${booking.tour ? booking.tour.tour_name : 'N/A'}</td>
                        <td>${booking.booking_customer_quantity}</td>
                        <td>${formatVND(booking.booking_amount)}</td>
                        <td>${formatDate(booking.created_at)}</td>
                    </tr>`;
                            tbody.insertAdjacentHTML('beforeend', row);
                        });

                        button.setAttribute('data-current', current + data.bookings.length);

                        if (data.bookings.length < perPage || current + data.bookings.length >= data.total) {
                            button.style.display = 'none';
                        }
                    } else {
                        button.style.display = 'none';
                    }
                })
                .catch(error => {
                    console.error('Lỗi khi tải thêm đơn hàng:', error);
                    alert('Đã có lỗi xảy ra. Vui lòng thử lại.');
                });
        }
    </script>

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÍ THÔNG TIN TOUR CỦA BẠN</h1>
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
                        <table class="table table-bordered mb-0" id="tours-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tour</th>
                                    <th>Giá</th>
                                    <th>Số chỗ còn</th>
                                </tr>
                            </thead>
                            <tbody id="tours-tbody">
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
                                <button class="btn btn-primary" onclick="loadMoreTours()" data-current="8"
                                    id="load-more-tours">Xem thêm</button>
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
                        <table class="table table-bordered mb-0" id="guides-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên</th>
                                    <th>Email</th>
                                    <th>Số điện thoại</th>
                                </tr>
                            </thead>
                            <tbody id="guides-tbody">
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
                                <button class="btn btn-primary" onclick="loadMoreGuides()" data-current="8"
                                    id="load-more-guides">Xem thêm</button>
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
                        <table class="table table-bordered mb-0" id="users-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th -webkit-user-select: none; -webkit-user-select: none; -ms-user-select: none;
                                        user-select: none; -webkit-user-select: none; -ms-user-select: none; user-select:
                                        none; -webkit-user-select: none; -ms-user-select: none; user-select: none; <th>Email
                                    </th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody id="users-tbody">
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
                                <button class="btn btn-primary" onclick="loadMoreUsers()" data-current="8"
                                    id="load-more-users">Xem thêm</button>
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
                        <table class="table table-bordered mb-0" id="bookings-table">
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
                            <tbody id="bookings-tbody">
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
                                <button class="btn btn-primary" onclick="loadMoreBookings()" data-current="10"
                                    id="load-more-bookings">Xem thêm</button>
                            </div>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </div>
@endsection
