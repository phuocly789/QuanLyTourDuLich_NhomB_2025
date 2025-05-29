@extends('admin.app2')
@section('content2')
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ THÔNG TIN HƯỚNG DẪN VIÊN</h1>
                    <p class="fs-4 text-white mb-4 animated slideInDown">Chỉnh sủa thông tin hướng dẫn viên:
                        {{ $guide->guide_Name }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="row justify-content-center">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="text-center text-primary px-3">Chỉnh sửa thông tin hướng dẫn viên</h1>
            </div>
            @if (session('error'))
                <div class="alert alert-danger text-center" style="font-size: 30px;">
                    {{ session('error') }}
                </div>
            @endif
            <div class="col-md-6">
                <form action="{{ route('guide.update', $guide->guide_Id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="col-md-12" style="width: 500px;">
                        <div class="mb-3">
                            <label for="guide_Name" class="form-label text-primary">Tên hướng dẫn viên</label>
                            <input type="text" class="form-control" id="guide_Name" name="guide_Name"
                                value="{{ $guide->guide_Name }}">
                            <span id="guide_Name_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="guide_Pno" class="form-label text-primary">Số điện thoại</label>
                            <input type="text" class="form-control" id="guide_Pno" name="guide_Pno"
                                value="{{ $guide->guide_Pno }}">
                            <span id="guide_Pno_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="guide_Img" class="form-label text-primary">Hình ảnh</label>
                            <input type="file" class="form-control" id="guide_image" name="guide_image">
                            <span id="guide_image_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="guide_Mail" class="form-label text-primary">Mail</label>
                            <input type="text" class="form-control" id="guide_Mail" name="guide_Mail"
                                value="{{ $guide->guide_Mail }}">
                            <span id="guide_Mail_error" class="text-danger"></span>
                        </div>
                        <div class="mb-3">
                            <label for="guide_Intro" class="form-label text-primary">Giới thiệu</label>
                            <textarea class="form-control" id="guide_Intro" name="guide_Intro">{{ $guide->guide_Intro }}</textarea>
                            <span id="guide_Intro_error" class="text-danger"></span>
                        </div>
                        <input type="hidden" name="updated_at" value="{{ $guide->updated_at->toDateTimeString() }}">
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        // Hàm kiểm tra định dạng số điện thoại
        function isValidPhoneNumber(value) {
            return /^0\d{9}$/.test(value); // 10 chữ số, bắt đầu bằng 0
        }

        // Hàm kiểm tra định dạng email
        function isValidEmail(value) {
            return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value); // Định dạng email chuẩn
        }

        // Hàm kiểm tra định dạng ảnh
        function isValidImage(file) {
            const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
            return file && validTypes.includes(file.type);
        }

        // Validate guide_Name
        document.getElementById('guide_Name').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('guide_Name_error');
            if (value === '') {
                errorElement.textContent = 'Tên hướng dẫn viên không được để trống!';
            } else if (value.length > 255) {
                errorElement.textContent = 'Tên hướng dẫn viên không được vượt quá 255 ký tự!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate guide_Pno
        document.getElementById('guide_Pno').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('guide_Pno_error');
            if (value === '') {
                errorElement.textContent = 'Số điện thoại không được để trống!';
            } else if (!isValidPhoneNumber(value)) {
                errorElement.textContent = 'Số điện thoại phải là 10 chữ số và bắt đầu bằng số 0!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate guide_image
        document.getElementById('guide_image').addEventListener('change', function() {
            const file = this.files[0];
            const errorElement = document.getElementById('guide_image_error');
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

        // Validate guide_Mail
        document.getElementById('guide_Mail').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('guide_Mail_error');
            if (value === '') {
                errorElement.textContent = 'Email không được để trống!';
            } else if (!isValidEmail(value)) {
                errorElement.textContent = 'Email không đúng định dạng!';
            } else {
                errorElement.textContent = '';
            }
        });

        // Validate guide_Intro
        document.getElementById('guide_Intro').addEventListener('input', function() {
            const value = this.value.trim();
            const errorElement = document.getElementById('guide_Intro_error');
            if (value === '') {
                errorElement.textContent = 'Giới thiệu không được để trống!';
            } else if (value.length > 1000) {
                errorElement.textContent = 'Giới thiệu không được vượt quá 1000 ký tự!';
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
