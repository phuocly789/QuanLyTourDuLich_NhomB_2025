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
                            <input type="text" class="form-control" id="tour_name" name="tour_name"
                                placeholder="Tên tour" value="{{ old('tour_name') }}">
                            @error('tour_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="start_day" name="start_day"
                                value="{{ old('start_day') }}">
                            @error('start_day')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="time" name="time" placeholder="Thời gian"
                                value="{{ old('time') }}">
                            @error('time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Giá tour"
                                value="{{ old('price') }}">
                            @error('price')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <input type="file" class="form-control" id="tour_image" name="tour_image">
                            @error('tour_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="vehicle" required>
                                <option value="" disabled selected>Chọn loại phương tiện</option>
                                <option value="Máy bay" {{ old('vehicle') == 'Máy bay' ? 'selected' : '' }}>Máy bay
                                </option>
                                <option value="Xe khách" {{ old('vehicle') == 'Xe khách' ? 'selected' : '' }}>Xe khách
                                </option>
                            </select>
                            @error('vehicle')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="star_from" name="star_from">
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
                                <option value="Hà Nội" {{ old('star_frombla') == 'Hà Nội' ? 'selected' : '' }}>Hà Nội
                                </option>
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
                                <option value="Khánh Hòa" {{ old('star_from') == 'Khánh Hòa' ? 'selected' : '' }}>Khánh Hòa
                                </option>
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
                                    Nguyên</option>
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
                            @error('star_from')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <input type="number" class="form-control" id="total_seats" name="total_seats"
                                placeholder="Số chỗ ngồi" value="{{ old('total_seats') }}" min="1" required>
                            @error('total_seats')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="tour_sale" name="tour_sale"
                                placeholder="Giảm giá tour" value="{{ old('tour_sale') }}">
                            @error('tour_sale')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <select style="width: 100%;" name="guide_id" class="form-control" required>
                                <option value="" disabled selected>Chọn hướng dẫn viên</option>
                                @foreach ($data_guide as $row)
                                    <option value="{{ $row->guide_Id }}"
                                        {{ old('guide_id') == $row->guide_Id ? 'selected' : '' }}>{{ $row->guide_Name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('guide_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <select style="width: 100%;" name="location_id" class="form-control" required>
                                <option value="" disabled selected>Chọn địa điểm</option>
                                @foreach ($data_location as $location)
                                    <option value="{{ $location->location_id }}"
                                        {{ old('location_id') == $location->location_id ? 'selected' : '' }}>
                                        {{ $location->location_name }}</option>
                                @endforeach
                            </select>
                            @error('location_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control" id="tour_description" name="tour_description" placeholder="Giới thiệu tour">{{ old('tour_description') }}</textarea>
                            @error('tour_description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control" id="tour_schedule" name="tour_schedule" placeholder="Lịch trình tour">{{ old('tour_schedule') }}</textarea>
                            @error('tour_schedule')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class=" text-end">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                    </div>
                </form>
            </div>

            <!-- Tours List Table -->
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
                                    <th>Lịch trình</th>
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
                                        <td class="text-center">
                                            <?php
                                            $tourSchedule = $row->tour_schedule;
                                            $words1 = explode(' ', $tourSchedule);
                                            $schedule = implode(' ', array_slice($words1, 0, 20));
                                            ?>
                                            {{ $schedule }}
                                        </td>
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
                    @if ($data->total() > 10)
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
                                            <a class="page-link" href "{{ $data->nextPageUrl() }}#tours-list">»</a>
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
