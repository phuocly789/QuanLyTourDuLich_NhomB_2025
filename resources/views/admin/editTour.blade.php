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
    <div class="row justify-content-center" style="position: relative; left: 420px;">
        <form action="{{ route('tours.update', $tour->tour_id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class=" col-md-6" style="width: 500px;">
                <div class="mb-3">
                    <label for="tour_name" class="form-label text-primary">Tên tour</label>
                    <input type="text" class="form-control" id="tour_name" name="tour_name" value="{{ $tour->tour_name }}" placeholder="Tên tour">
                </div>
                <div class="mb-3">
                    <label for="tour_image" class="form-label text-primary">Hình ảnh tour</label>
                    <input type="file" class="form-control" id="tour_image" value="{{ $tour->tour_image }}" name="tour_image">
                </div>
                <div class="mb-3">
                    <label for="start_day" class="form-label text-primary">Ngày bắt đầu</label>
                    <input type="date" class="form-control" id="start_day" name="start_day" value="{{ $tour->start_day }}" placeholder="Ngày bắt đầu">
                </div>
                <div class="mb-3">
                    <label for="time" class="form-label text-primary">Thời gian</label>
                    <input type="text" class="form-control" id="time" name="time" value="{{ $tour->time }}" placeholder="Thời gian">
                </div>
                <div class="mb-3">
                    <label for="star_from" class="form-label text-primary">Nơi khởi hành</label>
                    <input type="text" class="form-control" id="star_from" name="star_from" value="{{ $tour->star_from }}" placeholder="Nơi khởi hành">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label text-primary">Giá tour</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $tour->price }}" placeholder="Giá tour">
                </div>
            </div>
            <div class="col-md-6" style="position: relative; top: -10px; width: 500px;">
                <div class="mb-3">
                    <label for="vehicle" class="form-label text-primary">Phương tiện di chuyển</label>
                    <input type="text" class="form-control" id="vehicle" name="vehicle" value="{{ $tour->vehicle }}" placeholder="Phương tiện di chuyển">
                </div>
                <div class="mb-3">
                    <label for="tour_description" class="form-label text-primary">Giới thiệu tour</label>
                    <textarea class="form-control" id="tour_description" name="tour_description" placeholder="Giới thiệu tour">{{ $tour->tour_description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tour_schedule" class="form-label text-primary">Lịch trình tour</label>
                    <textarea class="form-control" id="tour_schedule" name="tour_schedule" placeholder="Lịch trình tour">{{ $tour->tour_schedule }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="tour_sale" class="form-label text-primary">Giảm giá tour</label>
                    <input type="text" class="form-control" id="tour_sale" name="tour_sale" value="{{ $tour->tour_sale }}" placeholder="Giảm giá tour">
                </div>
                <div class="mb-3">
                    <label for="location_id" class="form-label text-primary">Location ID</label>
                    <input type="number" class="form-control" id="location_id" name="location_id" value="{{ $tour->location_id }}" placeholder="Location ID">
                </div>
                <div class="mb-3">
                    <label for="guide_id" class="form-label text-primary">Guide ID</label>
                    <input type="number" class="form-control" id="guide_id" name="guide_id" value="{{ $tour->guide_id }}" placeholder="Guide ID">
                </div>
                <div class="text-end">
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </div>
            </div>
        </form>

    </div>
</div>




@endsection