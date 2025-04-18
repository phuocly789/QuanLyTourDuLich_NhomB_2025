@extends('dashboard')

@section('content')

<style>
    .tour-header-banner {
        background-image: url('/images/bg-hero.jpg'); /* Thay bằng ảnh nền bạn có */
        background-size: cover;
        background-position: center;
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .tour-header-overlay {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 2rem;
        text-align: center;
        color: white;
        width: 100%;
    }

    .tour-header-title {
        font-size: 3rem;
        font-weight: bold;
        margin: 0;
    }

    .tour-header-subtitle {
        font-size: 1.25rem;
        margin-top: 0.5rem;
    }
</style>

<section class="tour-header-banner">
    <div class="tour-header-overlay">
        <h1 class="tour-header-title">QUẢN LÝ TOUR</h1>
        <p class="tour-header-subtitle">Thêm Tour - Xóa Tour - Sửa Thông Tin Tour</p>
    </div>
</section>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Thêm tour</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('add.tour.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Tên tour</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="transport" class="form-label">Phương tiện di chuyển</label>
                        <select class="form-select" id="transport" name="transport" required>
                            <option value="">Chọn loại phương tiện</option>
                            <option value="Xe ô tô">Xe ô tô</option>
                            <option value="Xe máy">Xe máy</option>
                            <option value="Tàu hỏa">Tàu hỏa</option>
                            <option value="Máy bay">Máy bay</option>
                        </select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="start_date" class="form-label">Ngày bắt đầu</label>
                        <input type="date" class="form-control" id="start_date" name="start_date" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="start_location" class="form-label">Nơi khởi hành</label>
                        <input type="text" class="form-control" id="start_location" name="start_location" value="TP Hồ Chí Minh" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="duration" class="form-label">Thời gian</label>
                        <input type="text" class="form-control" id="duration" name="duration" required>
                    </div>
                    <div class="col-md-6 mb-3">
    <label for="location_id" class="form-label">Location ID</label>
    <select class="form-select" id="location_id" name="location_id" required>
        <option value="">Chọn vùng</option>
        @foreach ($locations as $location)
            <option value="{{ $location->location_id }}">{{ $location->location_name }}</option>
        @endforeach
    </select>
</div>       </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="price" class="form-label">Giá tour</label>
                        <input type="number" class="form-control" id="price" name="price" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="discount" class="form-label">Giảm giá tour</label>
                        <input type="number" class="form-control" id="discount" name="discount">
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="image" class="form-label">Hình ảnh tour</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <div class="col-md-6 mb-3">
    <label for="guide_id" class="form-label">Hướng dẫn viên</label>
    <select class="form-select" id="guide_id" name="guide_id" required>
        <option value="">Chọn hướng dẫn viên</option>
        @foreach ($guides as $guide)
            <option value="{{ $guide->guide_Id }}">{{ $guide->guide_Name }}</option>
        @endforeach
    </select>
</div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Giới thiệu tour</label>
                    <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                </div>

                <div class="mb-3">
                    <label for="itinerary" class="form-label">Lịch trình tour</label>
                    <textarea class="form-control" id="itinerary" name="itinerary" rows="3" required></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Thêm</button>
            </form>
        </div>
    </div>

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="card-title">Danh sách tour</h4>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(count($tours) > 0)
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tour</th>
                            <th>Giá</th>
                            <th>Giảm giá</th>
                            <th>Ngày bắt đầu</th>
                            <th>Nơi khởi hành</th>
                            <th>Thời gian</th>
                            <th>Vùng</th>
                            <th>Hướng dẫn viên</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tours as $tour)
                            <tr>
                                <td>{{ $tour->id }}</td>
                                <td>{{ $tour->name }}</td>
                                <td>{{ number_format($tour->price) }} VNĐ</td>
                                <td>{{ $tour->discount ? number_format($tour->discount) . ' VNĐ' : 'Không có' }}</td>
                                <td>{{ $tour->start_date }}</td>
                                <td>{{ $tour->start_location }}</td>
                                <td>{{ $tour->duration }}</td>
                                <td>{{ $tour->location->name }}</td>
                                <td>{{ $tour->guide->name }}</td>
                                <td>
                                    <a href="{{ route('edit.tour', $tour->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                                    <form action="{{ route('delete.tour', $tour->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa tour này?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <p>Không có tour nào.</p>
            @endif
        </div>
    </div>
</div>

@endsection