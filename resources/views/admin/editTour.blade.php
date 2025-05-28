@extends('admin.app2')
@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ THÔNG TIN TOUR</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Chỉnh sửa thông tin tour</p>
                    <p class="fs-4 text-white mb-4 animated slideInDown">{{ $tour->tour_name }}</p>
                </div>
            </div>

        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Chỉnh sửa thông tin tour</h1>
        </div>
        @if (session('error'))
            <div class="alert alert-danger text-center" style="font-size: 30px;">
                {{ session('error') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger text-center">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="row justify-content-center" style="position: relative; left: 420px;">
            <form action="{{ route('tours.update', $tour->tour_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-6" style="width: 500px;">
                    <div class="mb-3">
                        <label for="tour_name" class="form-label text-primary">Tên tour</label>
                        <input type="text" class="form-control @error('tour_name') is-invalid @enderror" id="tour_name"
                            name="tour_name" value="{{ old('tour_name', $tour->tour_name) }}" placeholder="Tên tour">
                        <span id="tour_name_error" class="text-danger">{{ $errors->first('tour_name') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="tour_image" class="form-label text-primary">Hình ảnh tour</label>
                        @if ($tour->tour_image)
                            <div class="mb-2">
                                <img src="{{ asset('img/' . $tour->tour_image) }}" alt="{{ $tour->tour_name }}"
                                    style="max-width: 200px; max-height: 200px; object-fit: cover;">
                            </div>
                        @endif
                        <input type="file" class="form-control @error('tour_image') is-invalid @enderror" id="tour_image"
                            name="tour_image" accept="image/*">
                        <span id="tour_image_error" class="text-danger">{{ $errors->first('tour_image') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="start_day" class="form-label text-primary">Ngày bắt đầu</label>
                        <input type="date" class="form-control @error('start_day') is-invalid @enderror" id="start_day"
                            name="start_day" value="{{ old('start_day', $tour->start_day) }}">
                        <span id="start_day_error" class="text-danger">{{ $errors->first('start_day') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label text-primary">Thời gian</label>
                        <input type="text" class="form-control @error('time') is-invalid @enderror" id="time"
                            name="time" value="{{ old('time', $tour->time) }}" placeholder="Thời gian">
                        <span id="time_error" class="text-danger">{{ $errors->first('time') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="star_from" class="form-label text-primary">Nơi khởi hành</label>
                        <input type="text" class="form-control @error('star_from') is-invalid @enderror" id="star_from"
                            name="star_from" value="{{ old('star_from', $tour->star_from) }}" placeholder="Nơi khởi hành">
                        <span id="star_from_error" class="text-danger">{{ $errors->first('star_from') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="price" class="form-label text-primary">Giá tour</label>
                        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
                            name="price" value="{{ old('price', $tour->price) }}" placeholder="Giá tour">
                        <span id="price_error" class="text-danger">{{ $errors->first('price') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="total_seats" class="form-label text-primary">Số chỗ ngồi</label>
                        <input type="text" class="form-control @error('total_seats') is-invalid @enderror"
                            id="total_seats" name="total_seats" value="{{ old('total_seats', $tour->total_seats) }}"
                            placeholder="Số chỗ ngồi">
                        <span id="total_seats_error" class="text-danger">{{ $errors->first('total_seats') }}</span>
                    </div>
                </div>
                <div class="col-md-6" style="position: relative; top: -10px; width: 500px;">
                    <div class="mb-3">
                        <label for="vehicle" class="form-label text-primary">Phương tiện di chuyển</label>
                        <input type="text" class="form-control @error('vehicle') is-invalid @enderror" id="vehicle"
                            name="vehicle" value="{{ old('vehicle', $tour->vehicle) }}"
                            placeholder="Phương tiện di chuyển">
                        <span id="vehicle_error" class="text-danger">{{ $errors->first('vehicle') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="tour_description" class="form-label text-primary">Giới thiệu tour</label>
                        <textarea class="form-control @error('tour_description') is-invalid @enderror" id="tour_description" rows="6"
                            name="tour_description" placeholder="Giới thiệu tour">{{ old('tour_description', $tour->tour_description) }}</textarea>
                        <span id="tour_description_error"
                            class="text-danger">{{ $errors->first('tour_description') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="tour_schedule" class="form-label text-primary">Lịch trình tour</label>
                        <textarea class="form-control @error('tour_schedule') is-invalid @enderror" id="tour_schedule" rows="6"
                            name="tour_schedule" placeholder="Lịch trình tour">{{ old('tour_schedule', $tour->tour_schedule) }}</textarea>
                        <span id="tour_schedule_error" class="text-danger">{{ $errors->first('tour_schedule') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="tour_sale" class="form-label text-primary">Giảm giá tour</label>
                        <input type="text" class="form-control @error('tour_sale') is-invalid @enderror"
                            id="tour_sale" name="tour_sale" value="{{ old('tour_sale', $tour->tour_sale) }}"
                            placeholder="Giảm giá tour">
                        <span id="tour_sale_error" class="text-danger">{{ $errors->first('tour_sale') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="location_id" class="form-label text-primary">Location ID</label>
                        <input type="number" class="form-control @error('location_id') is-invalid @enderror"
                            id="location_id" name="location_id" value="{{ old('location_id', $tour->location_id) }}"
                            placeholder="Location ID">
                        <span id="location_id_error" class="text-danger">{{ $errors->first('location_id') }}</span>
                    </div>
                    <div class="mb-3">
                        <label for="guide_id" class="form-label text-primary">Guide ID</label>
                        <input type="number" class="form-control @error('guide_id') is-invalid @enderror"
                            id="guide_id" name="guide_id" value="{{ old('guide_id', $tour->guide_id) }}"
                            placeholder="Guide ID">
                        <span id="guide_id_error" class="text-danger">{{ $errors->first('guide_id') }}</span>
                    </div>
                    <input type="hidden" name="updated_at" value="{{ $tour->updated_at->toDateTimeString() }}">
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        // Hàm kiểm tra định dạng ảnh
        function isValidImage(file) {
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            return file && validTypes.includes(file.type);
        }

        // Hàm kiểm tra số dương
        function isPositiveNumber(value) {
            return /^\d+(\.\d{1,2})?$/.test(value) && parseFloat(value) > 0; // Số dương, tối đa 2 chữ số thập phân
        }

        // Hàm kiểm tra số nguyên dương
        function isPositiveInteger(value) {
            return /^\d+$/.test(value) && parseInt(value) > 0;
        }

        // Hàm kiểm tra ngày hợp lệ
        function isValidDate(value) {
            const today = new Date().toISOString().split('T')[0];
            return value >= today; // Không cho phép ngày trong quá khứ
        }

        // Validate tour_name
        document.getElementById('tour_name').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('tour_name_error');
            if (value === '') {
                errorElement.textContent = 'Tên tour không được để trống!';
            } else if (value.length > 255) {
                errorElement.textContent = 'Tên tour không được vượt quá 255 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate tour_image
        document.getElementById('tour_image').addEventListener('change', function() {
            const file = this.files[0];
            const errorElement = document.getElementById('tour_image_error');
            if (file && !isValidImage(file)) {
                errorElement.textContent = 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif!';
                this.value = '';
            } else if (file && file.size > 2 * 1024 * 1024) {
                errorElement.textContent = 'Hình ảnh không được vượt quá 2MB!';
                this.value = '';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate start_day
        document.getElementById('start_day').addEventListener('change', function() {
            const value = this.value;
            const errorElement = document.getElementById('start_day_error');
            if (value === '') {
                errorElement.textContent = 'Ngày bắt đầu không được để trống!';
            } else if (!isValidDate(value)) {
                errorElement.textContent = 'Ngày bắt đầu phải từ hôm nay trở đi!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate time
        document.getElementById('time').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('time_error');
            if (value === '') {
                errorElement.textContent = 'Thời gian không được để trống!';
            } else if (value.length > 100) {
                errorElement.textContent = 'Thời gian không được vượt quá 100 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate star_from
        document.getElementById('star_from').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('star_from_error');
            if (value === '') {
                errorElement.textContent = 'Nơi khởi hành không được để trống!';
            } else if (value.length > 255) {
                errorElement.textContent = 'Nơi khởi hành không được vượt quá 255 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate price
        document.getElementById('price').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('price_error');
            if (value === '') {
                errorElement.textContent = 'Giá tour không được để trống!';
            } else if (!isPositiveNumber(value)) {
                errorElement.textContent = 'Giá tour phải là số dương!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate total_seats
        document.getElementById('total_seats').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('total_seats_error');
            if (value === '') {
                errorElement.textContent = 'Số chỗ ngồi không được để trống!';
            } else if (!isPositiveInteger(value)) {
                errorElement.textContent = 'Số chỗ ngồi phải là số nguyên dương!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate vehicle
        document.getElementById('vehicle').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('vehicle_error');
            if (value === '') {
                errorElement.textContent = 'Phương tiện không được để trống!';
            } else if (value.length > 100) {
                errorElement.textContentസ

                errorElement.textContent = 'Phương tiện không được vượt quá 100 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate tour_description
        document.getElementById('tour_description').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('tour_description_error');
            if (value === '') {
                errorElement.textContent = 'Giới thiệu tour không được để trống!';
            } else if (value.length > 1000) {
                errorElement.textContent = 'Giới thiệu tour không được vượt quá 1000 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate tour_schedule
        document.getElementById('tour_schedule').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('tour_schedule_error');
            if (value === '') {
                errorElement.textContent = 'Lịch trình tour không được để trống!';
            } else if (value.length > 2000) {
                errorElement.textContent = 'Lịch trình tour không được vượt quá 2000 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate tour_sale
        document.getElementById('tour_sale').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('tour_sale_error');
            if (value !== '' && !isPositiveNumber(value)) {
                errorElement.textContent = 'Giảm giá phải là số dương!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate location_id
        document.getElementById('location_id').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('location_id_error');
            if (value === '') {
                errorElement.textContent = 'Location ID không được để trống!';
            } else if (!isPositiveInteger(value)) {
                errorElement.textContent = 'Location ID phải là số nguyên dương!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate guide_id
        document.getElementById('guide_id').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('guide_id_error');
            if (value === '') {
                errorElement.textContent = 'Guide ID không được để trống!';
            } else if (!isPositiveInteger(value)) {
                errorElement.textContent = 'Guide ID phải là số nguyên dương!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Vô hiệu hóa submit nếu có lỗi
        document.querySelector('form').addEventListener('submit', function(e) {
            const errors = document.querySelectorAll('.text-danger:not(:empty)');
            if (errors.length > 0) {
                e.preventDefault();
                alert('Vui lòng sửa các lỗi trước khi gửi form!');
            }
        });
    </script>
@endsection
