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
                                placeholder="Tên tour">
                        </div>
                        <div class="col-md-3">
                            <input type="date" class="form-control" id="start_day" name="start_day">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="time" name="time"
                                placeholder="Thời gian">
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="price" name="price" placeholder="Giá tour">
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <input type="file" class="form-control" id="tour_image" name="tour_image">
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="vehicle" required>
                                <option value="" disabled selected>Chọn loại phương tiện</option>
                                <option value="Máy bay">Máy bay</option>
                                <option value="Xe khách">Xe khách</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" id="star_from" name="star_from">
                                <option value="" disabled>-- Chọn nơi khởi hành --</option>
                                <option value="An Giang">An Giang</option>
                                <option value="Bà Rịa - Vũng Tàu">Bà Rịa - Vũng Tàu</option>
                                <option value="Bắc Giang">Bắc Giang</option>
                                <option value="Bắc Kạn">Bắc Kạn</option>
                                <option value="Bạc Liêu">Bạc Liêu</option>
                                <option value="Bắc Ninh">Bắc Ninh</option>
                                <option value="Bến Tre">Bến Tre</option>
                                <option value="Bình Định">Bình Định</option>
                                <option value="Bình Dương">Bình Dương</option>
                                <option value="Bình Phước">Bình Phước</option>
                                <option value="Bình Thuận">Bình Thuận</option>
                                <option value="Cà Mau">Cà Mau</option>
                                <option value="Cần Thơ">Cần Thơ</option>
                                <option value="Cao Bằng">Cao Bằng</option>
                                <option value="Đà Nẵng">Đà Nẵng</option>
                                <option value="Đắk Lắk">Đắk Lắk</option>
                                <option value="Đắk Nông">Đắk Nông</option>
                                <option value="Điện Biên">Điện Biên</option>
                                <option value="Đồng Nai">Đồng Nai</option>
                                <option value="Đồng Tháp">Đồng Tháp</option>
                                <option value="Gia Lai">Gia Lai</option>
                                <option value="Hà Giang">Hà Giang</option>
                                <option value="Hà Nam">Hà Nam</option>
                                <option value="Hà Nội">Hà Nội</option>
                                <option value="Hà Tĩnh">Hà Tĩnh</option>
                                <option value="Hải Dương">Hải Dương</option>
                                <option value="Hải Phòng">Hải Phòng</option>
                                <option value="Hậu Giang">Hậu Giang</option>
                                <option value="Hòa Bình">Hòa Bình</option>
                                <option value="Hưng Yên">Hưng Yên</option>
                                <option value="Khánh Hòa">Khánh Hòa</option>
                                <option value="Kiên Giang">Kiên Giang</option>
                                <option value="Kon Tum">Kon Tum</option>
                                <option value="Lai Châu">Lai Châu</option>
                                <option value="Lâm Đồng">Lâm Đồng</option>
                                <option value="Lạng Sơn">Lạng Sơn</option>
                                <option value="Lào Cai">Lào Cai</option>
                                <option value="Long An">Long An</option>
                                <option value="Nam Định">Nam Định</option>
                                <option value="Nghệ An">Nghệ An</option>
                                <option value="Ninh Bình">Ninh Bình</option>
                                <option value="Ninh Thuận">Ninh Thuận</option>
                                <option value="Phú Thọ">Phú Thọ</option>
                                <option value="Phú Yên">Phú Yên</option>
                                <option value="Quảng Bình">Quảng Bình</option>
                                <option value="Quảng Nam">Quảng Nam</option>
                                <option value="Quảng Ngãi">Quảng Ngãi</option>
                                <option value="Quảng Ninh">Quảng Ninh</option>
                                <option value="Quảng Trị">Quảng Trị</option>
                                <option value="Sóc Trăng">Sóc Trăng</option>
                                <option value="Sơn La">Sơn La</option>
                                <option value="Tây Ninh">Tây Ninh</option>
                                <option value="Thái Bình">Thái Bình</option>
                                <option value="Thái Nguyên">Thái Nguyên</option>
                                <option value="Thanh Hóa">Thanh Hóa</option>
                                <option value="Thừa Thiên Huế">Thừa Thiên Huế</option>
                                <option value="Tiền Giang">Tiền Giang</option>
                                <option value="TP. Hồ Chí Minh" selected>TP. Hồ Chí Minh</option>
                                <option value="Trà Vinh">Trà Vinh</option>
                                <option value="Tuyên Quang">Tuyên Quang</option>
                                <option value="Vĩnh Long">Vĩnh Long</option>
                                <option value="Vĩnh Phúc">Vĩnh Phúc</option>
                                <option value="Yên Bái">Yên Bái</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="text" class="form-control" id="tour_sale" name="tour_sale"
                                placeholder="Giảm giá tour">
                        </div>
                    </div>
                    <div class="row g-3 mt-2">
                        <div class="col-md-3">
                            <select style="width: 100%;" name="guide_id" class="form-control" required>
                                <option value="" disabled selected>Chọn hướng dẫn viên</option>
                                @foreach ($data_guide as $row)
                                    <option value="{{ $row->guide_Id }}">{{ $row->guide_Name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control" id="tour_description" name="tour_description" placeholder="Giới thiệu tour"></textarea>
                        </div>
                        <div class="col-md-3">
                            <textarea class="form-control" id="tour_schedule" name="tour_schedule" placeholder="Lịch trình tour"></textarea>
                        </div>
                        <div class="col-md-3 text-end">
                            <button type="submit" class="btn btn-primary">Thêm</button>
                        </div>
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
                                    <th>Hướng dẫn viên

                                    </th>
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
                                        <td class="text-center">{{ $row->guide_id }}</td>
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
@endsection
