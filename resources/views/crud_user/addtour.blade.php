@extends('dashboard')

@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">

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
                                <option value="{{ $location->id }}">{{ $location->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

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
                        <label for="guide_id" class="form-label">Guide ID</label>
                        <select class="form-select" id="guide_id" name="guide_id" required>
                            <option value="">Chọn hướng dẫn viên</option>
                            @foreach ($guides as $guide)
                                <option value="{{ $guide->id }}">{{ $guide->name }}</option>
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
</div>

@endsection