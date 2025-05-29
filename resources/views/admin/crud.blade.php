@extends('admin.app2')

@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ TOUR</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            @if (session('error'))
                <div class="alert alert-danger text-center" style="font-size: 30px;">
                    {{ session('error') }}
                </div>
            @endif
            @if (session('success'))
                <div class="alert alert-success text-center" style="font-size: 30px;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Tour Form -->
            <div class="mb-4">
                <form action="{{ route('tours.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control @error('tour_name') is-invalid @enderror"
                                id="tour_name" name="tour_name" placeholder="Tên tour" value="{{ old('tour_name') }}">
                            <span id="tour_name_error" class="text-danger">{{ $errors->first('tour_name') }}</span>
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control @error('start_day') is-invalid @enderror"
                                id="start_day" name="start_day" value="{{ old('start_day') }}">
                            <span id="start_day_error" class="text-danger">{{ $errors->first('start_day') }}</span>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control @error('time') is-invalid @enderror" id="time"
                                name="time" placeholder="Thời gian" value="{{ old('time') }}">
                            <span id="time_error" class="text-danger">{{ $errors->first('time') }}</span>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                                name="price" placeholder="Giá tour" value="{{ old('price') }}">
                            <span id="price_error" class="text-danger">{{ $errors->first('price') }}</span>
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <input type="file" class="form-control @error('tour_image') is-invalid @enderror"
                                id="tour_image" name="tour_image">
                            <span id="tour_image_error" class="text-danger">{{ $errors->first('tour_image') }}</span>
                        </div>
                        <div class="col-md-3">
<<<<<<< HEAD
                            <select class="form-control @error('vehicle') is-invalid @enderror" name="vehicle">
=======
                            <select class="form-control @error('vehicle') is-invalid @enderror" name="vehicle"  >
>>>>>>> hiepDev
                                <option value="" disabled selected>Chọn loại phương tiện</option>
                                <option value="Máy bay" {{ old('vehicle') == 'Máy bay' ? 'selected' : '' }}>Máy bay
                                </option>
                                <option value="Xe khách" {{ old('vehicle') == 'Xe khách' ? 'selected' : '' }}>Xe khách
                                </option>
                            </select>
                            <span id="vehicle_error" class="text-danger">{{ $errors->first('vehicle') }}</span>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control @error('star_from') is-invalid @enderror" id="star_from"
                                name="star_from">
                                <option value="" disabled>-- Chọn nơi khởi hành --</option>
                                <option value="An Giang" {{ old('star_from') == 'An Giang' ? 'selected' : '' }}>An Giang
                                </option>
                                <option value="Bà Rịa - Vũng Tàu"
                                    {{ old('star_from') == 'Bà Rịa - Vũng Tàu' ? 'selected' : '' }}>Bà Rịa - Vũng Tàu
                                </option>
                                <option value="Bắc Giang" {{ old('star_from') == 'Bắc Giang' ? 'selected' : '' }}>Bắc Giang
                                </option>
                                <option value="Bắc Kạn" {{ old('star_from') == 'Bắc Kạn' ? 'selected' : '' }}>Bắc Kạn
                                </option>
                                <option value="Bạc Liêu" {{ old('star_from') == 'Bạc Liêu' ? 'selected' : '' }}>Bạc Liêu
                                </option>
                                <option value="Bắc Ninh" {{ old('star_from') == 'Bắc Ninh' ? 'selected' : '' }}>Bắc Ninh
                                </option>
                                <option value="Bến Tre" {{ old('star_from') == 'Bến Tre' ? 'selected' : '' }}>Bến Tre
                                </option>
                                <option value="Bình Định" {{ old('star_from') == 'Bình Định' ? 'selected' : '' }}>Bình Định
                                </option>
                                <option value="Bình Dương" {{ old('star_from') == 'Bình Dương' ? 'selected' : '' }}>Bình
                                    Dương</option>
                                <option value="Bình Phước" {{ old('star_from') == 'Bình Phước' ? 'selected' : '' }}>Bình
                                    Phước</option>
                                <option value="Bình Thuận" {{ old('star_from') == 'Bình Thuận' ? 'selected' : '' }}>Bình
                                    Thuận</option>
                                <option value="Cà Mau" {{ old('star_from') == 'Cà Mau' ? 'selected' : '' }}>Cà Mau</option>
                                <option value="Cần Thơ" {{ old('star_from') == 'Cần Thơ' ? 'selected' : '' }}>Cần Thơ
                                </option>
                                <option value="Cao Bằng" {{ old('star_from') == 'Cao Bằng' ? 'selected' : '' }}>Cao Bằng
                                </option>
                                <option value="Đà Nẵng" {{ old('star_from') == 'Đà Nẵng' ? 'selected' : '' }}>Đà Nẵng
                                </option>
                                <option value="Đắk Lắk" {{ old('star_from') == 'Đắk Lắk' ? 'selected' : '' }}>Đắk Lắk
                                </option>
                                <option value="Đắk Nông" {{ old('star_from') == 'Đắk Nông' ? 'selected' : '' }}>Đắk Nông
                                </option>
                                <option value="Điện Biên" {{ old('star_from') == 'Điện Biên' ? 'selected' : '' }}>Điện Biên
                                </option>
                                <option value="Đồng Nai" {{ old('star_from') == 'Đồng Nai' ? 'selected' : '' }}>Đồng Nai
                                </option>
                                <option value="Đồng Tháp" {{ old('star_from') == 'Đồng Tháp' ? 'selected' : '' }}>Đồng Tháp
                                </option>
                                <option value="Gia Lai" {{ old('star_from') == 'Gia Lai' ? 'selected' : '' }}>Gia Lai
                                </option>
                                <option value="Hà Giang" {{ old('star_from') == 'Hà Giang' ? 'selected' : '' }}>Hà Giang
                                </option>
                                <option value="Hà Nam" {{ old('star_from') == 'Hà Nam' ? 'selected' : '' }}>Hà Nam</option>
                                <option value="Hà Nội" {{ old('star_from') == 'Hà Nội' ? 'selected' : '' }}>Hà Nội</option>
                                <option value="Hà Tĩnh" {{ old('star_from') == 'Hà Tĩnh' ? 'selected' : '' }}>Hà Tĩnh
                                </option>
                                <option value="Hải Dương" {{ old('star_from') == 'Hải Dương' ? 'selected' : '' }}>Hải Dương
                                </option>
                                <option value="Hải Phòng" {{ old('star_from') == 'Hải Phòng' ? 'selected' : '' }}>Hải Phòng
                                </option>
                                <option value="Hậu Giang" {{ old('star_from') == 'Hậu Giang' ? 'selected' : '' }}>Hậu Giang
                                </option>
                                <option value="Hòa Bình" {{ old('star_from') == 'Hòa Bình' ? 'selected' : '' }}>Hòa Bình
                                </option>
                                <option value="Hưng Yên" {{ old('star_from') == 'Hưng Yên' ? 'selected' : '' }}>Hưng Yên
                                </option>
                                <option value="Khánh Hòa" {{ old('star_from') == 'Khánh Hòa' ? 'selected' : '' }}>Khánh
                                    Hòa</option>
                                <option value="Kiên Giang" {{ old('star_from') == 'Kiên Giang' ? 'selected' : '' }}>Kiên
                                    Giang</option>
                                <option value="Kon Tum" {{ old('star_from') == 'Kon Tum' ? 'selected' : '' }}>Kon Tum
                                </option>
                                <option value="Lai Châu" {{ old('star_from') == 'Lai Châu' ? 'selected' : '' }}>Lai Châu
                                </option>
                                <option value="Lâm Đồng" {{ old('star_from') == 'Lâm Đồng' ? 'selected' : '' }}>Lâm Đồng
                                </option>
                                <option value="Lạng Sơn" {{ old('star_from') == 'Lạng Sơn' ? 'selected' : '' }}>Lạng Sơn
                                </option>
                                <option value="Lào Cai" {{ old('star_from') == 'Lào Cai' ? 'selected' : '' }}>Lào Cai
                                </option>
                                <option value="Long An" {{ old('star_from') == 'Long An' ? 'selected' : '' }}>Long An
                                </option>
                                <option value="Nam Định" {{ old('star_from') == 'Nam Định' ? 'selected' : '' }}>Nam Định
                                </option>
                                <option value="Nghệ An" {{ old('star_from') == 'Nghệ An' ? 'selected' : '' }}>Nghệ An
                                </option>
                                <option value="Ninh Bình" {{ old('star_from') == 'Ninh Bình' ? 'selected' : '' }}>Ninh
                                    Bình</option>
                                <option value="Ninh Thuận" {{ old('star_from') == 'Ninh Thuận' ? 'selected' : '' }}>Ninh
                                    Thuận</option>
                                <option value="Phú Thọ" {{ old('star_from') == 'Phú Thọ' ? 'selected' : '' }}>Phú Thọ
                                </option>
                                <option value="Phú Yên" {{ old('star_from') == 'Phú Yên' ? 'selected' : '' }}>Phú Yên
                                </option>
                                <option value="Quảng Bình" {{ old('star_from') == 'Quảng Bình' ? 'selected' : '' }}>Quảng
                                    Bình</option>
                                <option value="Quảng Nam" {{ old('star_from') == 'Quảng Nam' ? 'selected' : '' }}>Quảng
                                    Nam</option>
                                <option value="Quảng Ngãi" {{ old('star_from') == 'Quảng Ngãi' ? 'selected' : '' }}>Quảng
                                    Ngãi</option>
                                <option value="Quảng Ninh" {{ old('star_from') == 'Quảng Ninh' ? 'selected' : '' }}>Quảng
                                    Ninh</option>
                                <option value="Quảng Trị" {{ old('star_from') == 'Quảng Trị' ? 'selected' : '' }}>Quảng
                                    Trị</option>
                                <option value="Sóc Trăng" {{ old('star_from') == 'Sóc Trăng' ? 'selected' : '' }}>Sóc
                                    Trăng</option>
                                <option value="Sơn La" {{ old('star_from') == 'Sơn La' ? 'selected' : '' }}>Sơn La
                                </option>
                                <option value="Tây Ninh" {{ old('star_from') == 'Tây Ninh' ? 'selected' : '' }}>Tây Ninh
                                </option>
                                <option value="Thái Bình" {{ old('star_from') == 'Thái Bình' ? 'selected' : '' }}>Thái
                                    Bình</option>
                                <option value="Thanh Hóa" {{ old('star_from') == 'Thanh Hóa' ? 'selected' : '' }}>Thanh
                                    Hóa</option>
                                <option value="Thừa Thiên Huế"
                                    {{ old('star_from') == 'Thừa Thiên Huế' ? 'selected' : '' }}>Thừa Thiên Huế</option>
                                <option value="Tiền Giang" {{ old('star_from') == 'Tiền Giang' ? 'selected' : '' }}>Tiền
                                    Giang</option>
                                <option value="TP. Hồ Chí Minh"
                                    {{ old('star_from') == 'TP. Hồ Chí Minh' ? 'selected' : '' }}>TP. Hồ Chí Minh</option>
                                <option value="Trà Vinh" {{ old('star_from') == 'Trà Vinh' ? 'selected' : '' }}>Trà Vinh
                                </option>
                                <option value="Tuyên Quang" {{ old('star_from') == 'Tuyên Quang' ? 'selected' : '' }}>
                                    Tuyên Quang</option>
                                <option value="Vĩnh Long" {{ old('star_from') == 'Vĩnh Long' ? 'selected' : '' }}>Vĩnh
                                    Long</option>
                                <option value="Vĩnh Phúc" {{ old('star_from') == 'Vĩnh Phúc' ? 'selected' : '' }}>Vĩnh
                                    Phúc</option>
                                <option value="Yên Bái" {{ old('star_from') == 'Yên Bái' ? 'selected' : '' }}>Yên Bái
                                </option>
                            </select>
                            <span id="star_from_error" class="text-danger">{{ $errors->first('star_from') }}</span>
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control @error('total_seats') is-invalid @enderror"
                                id="total_seats" name="total_seats" placeholder="Số chỗ ngồi"
<<<<<<< HEAD
                                value="{{ old('total_seats') }}" min="1" max="60">
=======
                                value="{{ old('total_seats') }}" min="1" max="60"  >
>>>>>>> hiepDev
                            <span id="total_seats_error" class="text-danger">{{ $errors->first('total_seats') }}</span>
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <input type="number" class="form-control @error('tour_sale') is-invalid @enderror"
                                id="tour_sale" name="tour_sale" placeholder="Giảm giá tour"
                                value="{{ old('tour_sale') }}">
                            <span id="tour_sale_error" class="text-danger">{{ $errors->first('tour_sale') }}</span>
                        </div>
                        <div class="col-md-3">
                            <select style="width: 100%;" name="guide_id"
<<<<<<< HEAD
                                class="form-control @error('guide_id') is-invalid @enderror">
=======
                                class="form-control @error('guide_id') is-invalid @enderror"  >
>>>>>>> hiepDev
                                <option value="" disabled selected>Chọn hướng dẫn viên</option>
                                @foreach ($data_guide as $row)
                                    <option value="{{ $row->guide_Id }}"
                                        {{ old('guide_id') == $row->guide_Id ? 'selected' : '' }}>
                                        {{ $row->guide_Name }}
                                    </option>
                                @endforeach
                            </select>
                            <span id="guide_id_error" class="text-danger">{{ $errors->first('guide_id') }}</span>
                        </div>
                        <div class="col-md-3">
                            <select style="width: 100%;" name="location_id"
<<<<<<< HEAD
                                class="form-control @error('location_id') is-invalid @enderror">
=======
                                class="form-control @error('location_id') is-invalid @enderror"  >
>>>>>>> hiepDev
                                <option value="" disabled selected>Chọn địa điểm</option>
                                @foreach ($data_location as $location)
                                    <option value="{{ $location->location_id }}"
                                        {{ old('location_id') == $location->location_id ? 'selected' : '' }}>
                                        {{ $location->location_name }}
                                    </option>
                                @endforeach
                            </select>
                            <span id="location_id_error" class="text-danger">{{ $errors->first('location_id') }}</span>
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control @error('tour_description') is-invalid @enderror" id="tour_description"
                                name="tour_description" placeholder="Giới thiệu tour">{{ old('tour_description') }}</textarea>
                            <span id="tour_description_error"
                                class="text-danger">{{ $errors->first('tour_description') }}</span>
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control @error('tour_schedule') is-invalid @enderror" id="tour_schedule" name="tour_schedule"
                                placeholder="Lịch trình tour">{{ old('tour_schedule') }}</textarea>
                            <span id="tour_schedule_error"
                                class="text-danger">{{ $errors->first('tour_schedule') }}</span>
                        </div>
                    </div>
                    <div class="text-end mt-3">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>

            <!-- Tours List Table (unchanged) -->
            <div class="mb-5" id="tours-list">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách Tour</h3>
                </div>
                @if ($data->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu tour.</div>
                @else
                    <div class="table-modern table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên tour</th>
                                    <th>Hình ảnh</th>
                                    <th>Ngày bắt đầu</th>
                                    <th>Thời gian</th>
                                    <th>Nơi khởi hành</th>
                                    <th>Giá</th>
                                    <th>Phương tiện</th>
                                    <th>Mô tả</th>
<<<<<<< HEAD
                                    {{-- <th>Lịch trình</th> --}}
=======
                                    <th>Lịch trình</th>
>>>>>>> hiepDev
                                    <th>Địa điểm</th>
                                    <th>Hướng dẫn viên</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->tour_id }}</td>
                                        <td>{{ $row->tour_name }}</td>
                                        <td class="text-center"><img class="img-fluid"
                                                src="{{ asset('img/' . $row->tour_image) }}" alt=""></td>
                                        <td class="text-center">{{ $row->start_day }}</td>
                                        <td class="text-center">{{ $row->time }}</td>
                                        <td class="text-center">{{ $row->star_from }}</td>
                                        <td class="text-center">{{ number_format($row->price, 0, ',', '.') }}</td>
                                        <td class="text-center">{{ $row->vehicle }}</td>
                                        <td class="text-center">
                                            <?php
                                            $tourDescription = $row->tour_description;
                                            $words = explode(' ', $tourDescription);
                                            $mota = implode(' ', array_slice($words, 0, 20));
                                            ?>
                                            {{ $mota }}
                                        </td>
<<<<<<< HEAD
                                        {{-- <td class="text-center">
=======
                                        <td class="text-center">
>>>>>>> hiepDev
                                            <?php
                                            $tourSchedule = $row->tour_schedule;
                                            $words1 = explode(' ', $tourSchedule);
                                            $schedule = implode(' ', array_slice($words1, 0, 20));
                                            ?>
                                            {{ $schedule }}
<<<<<<< HEAD
                                        </td> --}}
=======
                                        </td>
>>>>>>> hiepDev
                                        <td class="text-center">
                                            {{ $row->location ? $row->location->location_name : 'N/A' }}</td>
                                        <td class="text-center">{{ $row->guide ? $row->guide->guide_Name : 'N/A' }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" style="line-height: 10px;" role="group"
                                                aria-label="Basic example">
                                                <button class="btn delete-btn"
                                                    data-delete-url="{{ route('tours.destroy', $row->tour_id) }}"
                                                    data-item-name="{{ $row->tour_name }}" style="margin-right: 10px;">
                                                    <i class="fa fa-trash-alt text-danger"></i>
                                                </button>
                                                <a href="{{ route('tours.edit', $row->tour_id) }}" class="btn"><i
                                                        class="fa fa-edit text-primary"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    @if ($data->total() > 8)
                        <div class="row justify-content-center mt-4">
                            <div class="col-auto">
                                <ul class="pagination">
                                    @if ($data->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">«</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}#tours-list">«</a>
                                        </li>
                                    @endif
                                    @foreach ($data->getUrlRange(1, $data->lastPage()) as $page => $url)
                                        <li class="page-item {{ $page == $data->currentPage() ? 'active' : '' }}">
                                            <a class="page-link"
                                                href="{{ $url }}#tours-list">{{ $page }}</a>
                                        </li>
                                    @endforeach
                                    @if ($data->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}#tours-list">»</a>
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
    <script>
        $(document).ready(function() {
            // Hàm hiển thị thông báo lỗi
            function showError(input, message) {
                let errorElement = input.next('.text-danger');
                if (!errorElement.length) {
                    input.after('<span class="text-danger"></span>');
                    errorElement = input.next('.text-danger');
                }
                errorElement.text(message);
                input.addClass('is-invalid');
            }

            function clearError(input) {
                input.next('.text-danger').text('');
                input.removeClass('is-invalid');
            }

            // Hàm kiểm tra định dạng ảnh
            function isValidImage(file) {
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                return file && validTypes.includes(file.type);
            }

            // Hàm kiểm tra số dương
            function isPositiveNumber(value) {
                return /^\d+(\.\d{1,2})?$/.test(value) && parseFloat(value) >= 0;
            }

            // Hàm kiểm tra số nguyên dương
            function isPositiveInteger(value) {
                return /^\d+$/.test(value) && parseInt(value) > 0;
            }

            // Validate tour_name
            function validateTourName() {
                let input = $('#tour_name');
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Tên tour không được để trống!');
                    return false;
                } else if (value.length > 255) {
                    showError(input, 'Tên tour không được vượt quá 255 ký tự!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate start_day
            function validateStartDay() {
                let input = $('#start_day');
                let value = input.val();
                if (!value) {
                    showError(input, 'Ngày bắt đầu không được để trống!');
                    return false;
                }
                let selectedDate = new Date(value);
                let today = new Date();
                today.setHours(0, 0, 0, 0);
                if (selectedDate < today) {
                    showError(input, 'Ngày bắt đầu không được trong quá khứ!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate time
            function validateTime() {
                let input = $('#time');
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Thời gian không được để trống!');
                    return false;
                } else if (value.length > 100) {
                    showError(input, 'Thời gian không được vượt quá 100 ký tự!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate price
            function validatePrice() {
                let input = $('#price');
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Giá tour không được để trống!');
                    return false;
                } else if (!isPositiveNumber(value)) {
                    showError(input, 'Giá tour phải là số dương!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate tour_image
            function validateTourImage() {
                let input = $('#tour_image');
                let file = input[0].files[0];
                if (!file) {
                    showError(input, 'Hình ảnh tour không được để trống!');
                    return false;
                } else if (!isValidImage(file)) {
                    showError(input, 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif!');
                    return false;
                } else if (file.size > 2 * 1024 * 1024) {
                    showError(input, 'Hình ảnh không được vượt quá 2MB!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate vehicle
            function validateVehicle() {
                let input = $('select[name="vehicle"]');
                let value = input.val();
                if (!value) {
                    showError(input, 'Phương tiện không được để trống!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate star_from
            function validateStarFrom() {
                let input = $('select[name="star_from"]');
                let value = input.val();
                if (!value) {
                    showError(input, 'Nơi khởi hành không được để trống!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate total_seats
            function validateTotalSeats() {
                let input = $('#total_seats');
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Số chỗ ngồi không được để trống!');
                    return false;
                } else if (!isPositiveInteger(value)) {
                    showError(input, 'Số chỗ ngồi phải là số nguyên dương!');
                    return false;
                } else if (parseInt(value) > 60) {
                    showError(input, 'Số chỗ ngồi không được vượt quá 60!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate tour_sale
            function validateTourSale() {
                let input = $('#tour_sale');
                let value = input.val().trim();
                if (value !== '' && !isPositiveNumber(value)) {
                    showError(input, 'Giảm giá phải là số dương!');
                    return false;
                } else if (value !== '' && parseFloat(value) > 100) {
                    showError(input, 'Giảm giá không được vượt quá 100%!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate guide_id
            function validateGuideId() {
                let input = $('select[name="guide_id"]');
                let value = input.val();
                if (!value) {
                    showError(input, 'Hướng dẫn viên không được để trống!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate location_id
            function validateLocationId() {
                let input = $('select[name="location_id"]');
                let value = input.val();
                if (!value) {
                    showError(input, 'Địa điểm không được để trống!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate tour_description
            function validateTourDescription() {
                let input = $('#tour_description');
                sonic
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Giới thiệu tour không được để trống!');
                    return false;
                } else if (value.length > 1000) {
                    showError(input, 'Giới thiệu tour không được vượt quá 1000 ký tự!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Validate tour_schedule
            function validateTourSchedule() {
                let input = $('#tour_schedule');
                let value = input.val().trim();
                if (value === '') {
                    showError(input, 'Lịch trình tour không được để trống!');
                    return false;
                } else if (value.length > 2000) {
                    showError(input, 'Lịch trình tour không được vượt quá 2000 ký tự!');
                    return false;
                } else {
                    clearError(input);
                    return true;
                }
            }

            // Kiểm tra tất cả các trường
            function validateAllFields() {
                let isValid = true;
                isValid = validateTourName() && isValid;
                isValid = validateStartDay() && isValid;
                isValid = validateTime() && isValid;
                isValid = validatePrice() && isValid;
                isValid = validateTourImage() && isValid;
                isValid = validateVehicle() && isValid;
                isValid = validateStarFrom() && isValid;
                isValid = validateTotalSeats() && isValid;
                isValid = validateTourSale() && isValid;
                isValid = validateGuideId() && isValid;
                isValid = validateLocationId() && isValid;
                isValid = validateTourDescription() && isValid;
                isValid = validateTourSchedule() && isValid;
                return isValid;
            }

            // Kiểm tra real-time
            $('#tour_name').on('input', validateTourName);
            $('#start_day').on('change input', validateStartDay);
            $('#time').on('input', validateTime);
            $('#price').on('input', validatePrice);
            $('#tour_image').on('change', validateTourImage);
            $('select[name="vehicle"]').on('change', validateVehicle);
            $('select[name="star_from"]').on('change', validateStarFrom);
            $('#total_seats').on('input', validateTotalSeats);
            $('#tour_sale').on('input', validateTourSale);
            $('select[name="guide_id"]').on('change', validateGuideId);
            $('select[name="location_id"]').on('change', validateLocationId);
            $('#tour_description').on('input', validateTourDescription);
            $('#tour_schedule').on('input', validateTourSchedule);

            // Ngăn submit nếu có lỗi
            $('form').on('submit', function(e) {
                if (!validateAllFields()) {
                    e.preventDefault();
                    alert('Vui lòng sửa các lỗi trước khi gửi form!');
                }
            });

            // Kiểm tra khi trang tải
            validateAllFields();
        });
    </script>
@endsection
