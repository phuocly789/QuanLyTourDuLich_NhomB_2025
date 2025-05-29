@extends('admin.app2')

@section('content2')

    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ HƯỚNG DẪN VIÊN</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid py-5">
        <div class="container">
            @if (session('success'))
                <div class="alert alert-success text-center" style="font-size: 30px;">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Add Guide Form -->
            <!-- <div class="mb-4">
                <form action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data" id="addGuideForm">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_name" name="guide_name"
                                placeholder="Tên hướng dẫn viên" value="{{ old('guide_name') }}" required>
                            @error('guide_name')
                                <span class="text-danger" id="guide_name_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_name_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_pno" name="guide_pno"
                                placeholder="Số điện thoại (0xxxxxxxxx)" value="{{ old('guide_pno') }}"
                                pattern="0[0-9]{9}" inputmode="numeric" required>
                            @error('guide_pno')
                                <span class="text-danger" id="guide_pno_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_pno_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control" id="guide_image" name="guide_image" accept="image/*"
                                required>
                            @error('guide_image')
                                <span class="text-danger" id="guide_image_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_image_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="email" class="form-control" id="guide_mail" name="guide_mail"
                                placeholder="Email" value="{{ old('guide_mail') }}" required>
                            @error('guide_mail')
                                <span class="text-danger" id="guide_mail_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_mail_error"></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-9">
                            <textarea class="form-control" id="guide_intro" name="guide_intro" placeholder="Giới thiệu"
                                required>{{ old('guide_intro') }}</textarea>
                            @error('guide_intro')
                                <span class="text-danger" id="guide_intro_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_intro_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </form>
            </div> -->
             <div class="mb-4">
                <form action="{{ route('guide.store') }}" method="POST" enctype="multipart/form-data" id="addGuideForm">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_name" name="guide_name"
                                placeholder="Tên hướng dẫn viên" value="{{ old('guide_name') }}" required>
                            @error('guide_name')
                                <span class="text-danger" id="guide_name_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_name_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="guide_pno" name="guide_pno"
                                placeholder="Số điện thoại (0xxxxxxxxx)" value="{{ old('guide_pno') }}"
                                pattern="0[0-9]{9}" inputmode="numeric" required>
                            @error('guide_pno')
                                <span class="text-danger" id="guide_pno_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_pno_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="file" class="form-control" id="guide_image" name="guide_image" accept="image/*"
                                required>
                            @error('guide_image')
                                <span class="text-danger" id="guide_image_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_image_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="email" class="form-control" id="guide_mail" name="guide_mail"
                                placeholder="Email" value="{{ old('guide_mail') }}" required>
                            @error('guide_mail')
                                <span class="text-danger" id="guide_mail_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_mail_error"></span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-9">
                            <textarea class="form-control" id="guide_intro" name="guide_intro" placeholder="Giới thiệu"
                                required>{{ old('guide_intro') }}</textarea>
                            @error('guide_intro')
                                <span class="text-danger" id="guide_intro_error">{{ $message }}</span>
                            @else
                                <span class="text-danger" id="guide_intro_error"></span>
                            @enderror
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Guides List Table -->
            <div class="mb-5" id="guides-list">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="section-title">Danh Sách Hướng Dẫn Viên</h3>
                </div>
                @if ($data_guide->isEmpty())
                    <div class="alert alert-info">Không có dữ liệu hướng dẫn viên.</div>
                @else
                    <div class="table-modern table-responsive">
                        <table class="table table-bordered mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Tên hướng dẫn viên</th>
                                    <th>Số điện thoại</th>
                                    <th>Hình ảnh</th>
                                    <th>Email</th>
                                    <th>Giới thiệu</th>
                                    <th>Hành động</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_guide as $row)
                                    <tr>
                                        <td class="text-center">{{ $row->guide_Id }}</td>
                                        <td class="text-center">{{ $row->guide_Name }}</td>
                                        <td class="text-center">{{ $row->guide_Pno }}</td>
                                        <td class="text-center"><img class="img-fluid"
                                                src="{{ asset('img/' . $row->guide_Img) }}" alt=""></td>
                                        <td class="text-center">{{ $row->guide_Mail }}</td>
                                        <td class="text-center">{{ $row->guide_Intro }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" style="line-height: 10px;" role="group"
                                                aria-label="Basic example">
                                                <button class="btn delete-btn"
                                                    data-delete-url="{{ route('guide.destroy', $row->guide_Id) }}"
                                                    data-item-name="{{ $row->guide_Name }}" style="margin-right: 10px;">
                                                    <i class="fa fa-trash-alt text-danger"></i>
                                                </button>
                                                <a href="{{ route('guide.edit', $row->guide_Id) }}" class="btn"><i
                                                        class="fa fa-edit text-primary"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- JavaScript validate -->
    @push('scripts')
        <script>
            // Hàm kiểm tra định dạng số điện thoại
            function isValidPhoneNumber(value) {
                return /^0[0-9]{9}$/.test(value); // Bắt đầu bằng 0, 10 chữ số
            }

            // Hàm kiểm tra định dạng email
            function isValidEmail(value) {
                return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
            }

            // Hàm kiểm tra định dạng ảnh
            function isValidImage(file) {
                const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/gif'];
                return file && validTypes.includes(file.type);
            }

            // Hàm kiểm tra trùng lặp email hoặc số điện thoại qua AJAX
            async function checkDuplicate(field, value, errorElement) {
                try {
                    const response = await fetch('{{ route('guide.check-duplicate') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}',
                        },
                        body: JSON.stringify({ field, value }),
                    });
                    const result = await response.json();
                    if (result.exists) {
                        errorElement.textContent = `${field === 'guide_pno' ? 'Số điện thoại' : 'Email'} đã được sử dụng!`;
                    } else {
                        errorElement.textContent = '';
                    }
                } catch (error) {
                    console.error('Error checking duplicate:', error);
                }
            }

            // Validate guide_name
            document.getElementById('guide_name').addEventListener('input', function() {
                const value = this.value.trim();
                const errorElement = document.getElementById('guide_name_error');
                if (value === '') {
                    errorElement.textContent = 'Tên hướng dẫn viên không được để trống!';
                } else if (value.length > 255) {
                    errorElement.textContent = 'Tên hướng dẫn viên không được vượt quá 255 ký tự!';
                } else {
                    errorElement.textContent = '';
                }
            });

            // Validate guide_pno
            document.getElementById('guide_pno').addEventListener('input', function() {
                const value = this.value.trim();
                const errorElement = document.getElementById('guide_pno_error');
                if (value === '') {
                    errorElement.textContent = 'Số điện thoại không được để trống!';
                } else if (!isValidPhoneNumber(value)) {
                    errorElement.textContent = 'Số điện thoại phải bắt đầu bằng 0 và có đúng 10 chữ số!';
                } else {
                    checkDuplicate('guide_pno', value, errorElement);
                }
            });

            // Validate guide_image
            document.getElementById('guide_image').addEventListener('change', function() {
                const file = this.files[0];
                const errorElement = document.getElementById('guide_image_error');
                if (!file) {
                    errorElement.textContent = 'Hình ảnh không được để trống!';
                } else if (!isValidImage(file)) {
                    errorElement.textContent = 'Hình ảnh phải có định dạng jpeg, png, jpg hoặc gif!';
                    this.value = '';
                } else if (file.size > 2 * 1024 * 1024) {
                    errorElement.textContent = 'Hình ảnh không được vượt quá 2MB!';
                    this.value = '';
                } else {
                    errorElement.textContent = '';
                }
            });

            // Validate guide_mail
            document.getElementById('guide_mail').addEventListener('input', function() {
                const value = this.value.trim();
                const errorElement = document.getElementById('guide_mail_error');
                if (value === '') {
                    errorElement.textContent = 'Email không được để trống!';
                } else if (!isValidEmail(value)) {
                    errorElement.textContent = 'Email không đúng định dạng!';
                } else {
                    checkDuplicate('guide_mail', value, errorElement);
                }
            });

            // Validate guide_intro
            document.getElementById('guide_intro').addEventListener('input', function() {
                const value = this.value.trim();
                const errorElement = document.getElementById('guide_intro_error');
                if (value === '') {
                    errorElement.textContent = 'Giới thiệu không được để trống!';
                } else {
                    errorElement.textContent = '';
                }
            });

            // Vô hiệu hóa submit nếu có lỗi
            document.getElementById('addGuideForm').addEventListener('submit', function(e) {
                const errors = document.querySelectorAll('.text-danger:not(:empty)');
                if (errors.length > 0) {
                    e.preventDefault();
                    alert('Vui lòng sửa các lỗi trước khi gửi form!');
                }
            });
        </script>
    @endpush
@endsection
