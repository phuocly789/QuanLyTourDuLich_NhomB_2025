
@extends('user.app1')
@section('content1')
    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Discovery</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">trang</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Đặt vé</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="{{ asset('img/' . $value->tour_image) }}"
                            alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h1 class="mb-4 text-primary">{{ $value->tour_name }} </h1>
                    <p class="mb-4">{{ $value->tour_description }}</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-calendar-alt text-primary me-2"></i>Ngày bắt đầu:
                                {{ $value->start_day }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-clock text-primary me-2"></i>Thời gian: {{ $value->time }}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-plane-departure text-primary me-2"></i>Nơi khởi hành:
                                {{ $value->star_from }}</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-bus text-primary me-2"></i>Phương tiện: {{ $value->vehicle }}
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-hotel text-primary me-2"></i>Khách sạn: Khách sạn 5 sao </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-gifts text-primary me-2"></i>Đã bao gồm ưu đãi trong giá tour
                            </p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Giá tour / 1 người</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 text-danger"><i
                                    class=""></i>{{ number_format($value->price, 0, ',', '.') }} vnd</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-chair text-primary me-2"></i>Số chỗ còn trống</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0 text-danger">{{ $value->total_seats - $value->booked_seats }} <i
                                    class="fa fa-chair text-primary me-2"></i></p>
                        </div>

                        <form action="{{ route('booking.store', [$value->tour_id, Auth::user()->id]) }}"
                            class="row gy-2 gx-4 mb-4" method="post">
                            @csrf
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Số lượng người: </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="quantity buttons_added">
                                    <input name="booking_quantity" id="quantityInput" style="text-align: center;"
                                        type="number" size="4" class="input-text qty text border-1" title="Qty"
                                        value="0" min="0" step="1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-phone text-primary  me-2"></i>Số điện thoại: </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="quantity buttons_added">
                                    <input name="booking_customer_phone" id="phoneInput" type="text"
                                        class="input-text qty text border-1">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-users text-primary me-2"></i>Voucher: </p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0 text-danger" id="voucher"></p>
                            </div>
                            <div class="col-sm-6">
                                <p class="mb-0"><i class="fa fa-money-check text-primary me-2"></i>Thành tiền</p>
                            </div>
                            <div class="col-sm-6">
                                <td class="product-subtotal">
                                    <span class="amount mb-0 text-danger" id="subtotal">0 vnđ</span>
                                </td>
                            </div>
                            <div class="d-flex align-items-center">
                                <button name="redirect" id="bookingButton"
                                    class="col-sm-4 btn btn-primary rounded-pill py-3 px-5 mt-2" href="#">Đặt
                                    ngay</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Lịch trình cụ thể</h1>
            </div>
        </div>
        <div style="color: black; font-weight: 400; font-size: 17px;">
            {!! $value->tour_schedule !!}
        </div>
    </div>
    <!-- Team End -->

    <!-- Package Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Tour phổ biến </h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($data->take(3) as $row)
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
                                        class="btn btn-sm btn-primary px-3 border-end">Đặt ngay</a>
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
            <!--nút show danh sách -->
            <div class="row justify-content-center py-3">
                <div class="col-auto">
                    <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/user.package') }}">Xem thêm
                        ...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Package End -->

    <!-- Comment Section -->
    <div class="container-xxl py-5" id="comment-section">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Đánh giá</h1>
            </div>

            <!-- Form gửi đánh giá -->
            @if (Auth::check() && Auth::user()->bookings()->where('booking_tour_id', $value->tour_id)->exists())
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data"
                    class="mb-5">
                    @csrf
                    <input type="hidden" name="tour_id" value="{{ $value->tour_id }}">
                    <div class="row g-3">
                        <div class="col-md-12">
                            <label for="client_comment" class="form-label">Bình luận</label>
                            <textarea name="client_comment" id="client_comment" class="form-control" rows="4" required></textarea>
                            @error('client_comment')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="client_address" class="form-label">Địa chỉ</label>
                            <input type="text" name="client_address" id="client_address" class="form-control"
                                required>
                            @error('client_address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6">
                            <label for="client_image" class="form-label">Ảnh (tùy chọn)</label>
                            <input type="file" name="client_image" id="client_image" class="form-control"
                                accept="image/*">
                            @error('client_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary rounded-pill py-2 px-4">Gửi đánh giá</button>
                        </div>
                    </div>
                </form>
            @elseif (Auth::check())
                <p class="text-center mb-5">Bạn cần <a
                        href="{{ route('booking.store', [$value->tour_id, Auth::user()->id]) }}">đặt tour</a> để gửi đánh
                    giá.</p>
            @else
                <p class="text-center mb-5">Vui lòng <a href="{{ route('login') }}">đăng nhập</a> và đặt tour để gửi đánh
                    giá.</p>
            @endif

            <!-- Danh sách bình luận -->
           <!-- Danh sách bình luận -->
            <div class="row g-1">
                @if ($data_comment->isEmpty())
                    <p class="text-center">Chưa có đánh giá nào cho tour này.</p>
                @else
                    @foreach ($data_comment->reverse() as $row)
                        @if ($value->tour_id == $row->tour_id)
                            <div class="col-lg-1 wow fadeInUp mt-0 mb-0" data-wow-delay="0.1s" style="min-height: 50px;">
                                <div class="position-relative h-20">
                                    <img class="img-fluid position-absolute mt-3"
                                        src="{{ asset('img/' . $row->client_image) }}" alt=""
                                        style="width: 50px; height: 50px;">
                                </div>
                            </div>
                            <div class="col-lg-11 wow fadeInUp mt-3 mb-0" data-wow-delay="0.3s">
                                <h4 class="mb-0"><span class="text-primary">{{ $row->client_name }}</span></h4>
                                <h6 class="mb-0"><span class="text-primary">{{ $row->client_address }}</span></h6>
                                <p class="mb-0" style="font-size: 20px;">{{ $row->client_comment }}</p>
                                <p class="mb-0" style="font-size: 16px; color: #666;">
                                    {{ $row->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}</p>

                                <!-- Hiển thị các câu trả lời của admin -->
                                @if ($row->replies->isNotEmpty())
                                    <div class="replies mt-3" style="margin-left: 20px;">
                                        @foreach ($row->replies as $reply)
                                            <div class="reply">
                                                <h6 class="mb-0"><span class="text-success">Admin ({{ $reply->admin->name }})</span></h6>
                                                <p class="mb-0" style="font-size: 16px;">{{ $reply->reply_content }}</p>
                                                <p class="mb-0" style="font-size: 14px; color: #666;">
                                                    {{ $reply->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('d/m/Y H:i') }}</p>
                                            </div>
                                            <hr>
                                        @endforeach
                                    </div>
                                @endif

                                {{-- <!-- Form trả lời cho admin -->
                                @if (Auth::check() && Auth::user()->isAdmin())
                                    <form action="{{ route('replies.store') }}" method="POST" class="mt-3">
                                        @csrf
                                        <input type="hidden" name="client_id" value="{{ $row->id }}">
                                        <div class="row g-3">
                                            <div class="col-md-12">
                                                <label for="reply_content_{{ $row->id }}" class="form-label">Trả lời</label>
                                                <textarea name="reply_content" id="reply_content_{{ $row->id }}" class="form-control" rows="3" required></textarea>
                                                @error('reply_content')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success rounded-pill py-2 px-4">Gửi trả lời</button>
                                            </div>
                                        </div>
                                    </form>
                                @endif --}}
                            </div>
                            <hr>
                        @endif
                    @endforeach
                @endif
                {{ $data_comment->links() }}
            </div>
        </div>
    </div>
    <!-- Comment Section End -->

    <!-- JavaScript hiện có -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // JavaScript cho tính năng đặt tour
        document.getElementById('quantityInput').addEventListener('input', function() {
            const quantityInput = this;
            const phoneInput = document.getElementById('phoneInput');
            const bookingButton = document.getElementById('bookingButton');
            const voucherDisplay = document.getElementById('voucher');
            const subtotalDisplay = document.getElementById('subtotal');

            let quantity = parseInt(quantityInput.value) || 0;
            const price = parseFloat("{{ $value->price }}");
            const availableSeats = parseInt("{{ $value->total_seats - $value->booked_seats }}");

            if (quantity < 0) {
                quantity = 0;
                quantityInput.value = 0;
            }
            if (quantity > availableSeats) {
                quantity = availableSeats;
                quantityInput.value = availableSeats;
                alert(`Chỉ còn ${availableSeats} chỗ trống. Vui lòng chọn lại số lượng.`);
            }

            let voucher = 1;
            let voucherText = '';
            if (quantity === 1) {
                voucher = 0.9;
                voucherText = 'Giảm giá 10%';
            } else if (quantity === 2) {
                voucher = 0.85;
                voucherText = 'Giảm giá 15%';
            } else if (quantity >= 3) {
                voucher = 0.8;
                voucherText = 'Giảm giá 20%';
            }

            voucherDisplay.textContent = voucherText;
            const subtotal = quantity * price * voucher;
            subtotalDisplay.textContent = formatCurrency(subtotal) + ' vnđ';

            updateButtonState(quantity, phoneInput.value, bookingButton);
        });

        document.getElementById('phoneInput').addEventListener('input', function() {
            const quantityInput = document.getElementById('quantityInput');
            const phoneInput = this;
            const bookingButton = document.getElementById('bookingButton');

            updateButtonState(parseInt(quantityInput.value) || 0, phoneInput.value, bookingButton);
        });

        function updateButtonState(quantity, phone, button) {
            const phoneRegex = /^[0-9]{10,11}$/;
            const isValidPhone = phoneRegex.test(phone);
            const isValidQuantity = quantity > 0 && quantity <= parseInt(
                "{{ $value->total_seats - $value->booked_seats }}");

            button.disabled = !(isValidPhone && isValidQuantity);
        }

        document.getElementById('bookingButton').addEventListener('click', function(event) {
            const quantityInput = document.getElementById('quantityInput');
            const phoneInput = document.getElementById('phoneInput');
            const quantity = parseInt(quantityInput.value) || 0;
            const phone = phoneInput.value;
            const phoneRegex = /^[0-9]{10,11}$/;

            if (quantity <= 0) {
                event.preventDefault();
                alert('Vui lòng nhập số lượng người lớn hơn 0.');
            } else if (!phoneRegex.test(phone)) {
                event.preventDefault();
                alert('Vui lòng nhập số điện thoại hợp lệ (10-11 chữ số).');
            } else if (quantity > parseInt("{{ $value->total_seats - $value->booked_seats }}")) {
                event.preventDefault();
                alert('Số chỗ còn lại không đủ. Vui lòng chọn lại số lượng.');
            }
        });

        function formatCurrency(amount) {
            return amount.toFixed(0).replace(/\d(?=(\d{3})+$)/g, '$&,');
        }

        // JavaScript để cuộn đến phần bình luận khi trang tải
        @if (session('scroll_to_comments'))
            document.addEventListener('DOMContentLoaded', function() {
                const commentSection = document.getElementById('comment-section');
                if (commentSection) {
                    commentSection.scrollIntoView({
                        behavior: 'smooth'
                    });
                }
            });
        @endif
    </script>

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
@endsection

