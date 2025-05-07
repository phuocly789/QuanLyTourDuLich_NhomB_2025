@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ THÔNG TIN TOUR</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Chỉnh sửa thông tin tour</p>
                <p class="fs-4 text-white mb-4 animated slideInDown">{{ $location->location_name }}</p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="text-center text-primary px-3">Chỉnh sửa thông tin location</h1>
    </div>
    <div class="row justify-content-center">
    <form action="{{ route('location.update', $location->location_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                        <div class="mb-3">
                            <label for="tour_name" class="form-label text-primary">Tên location</label>
                            <input type="text" class="form-control" id="location_name" value="{{ $location->location_name}}" name="location_name" placeholder="Tên location">
                        </div>
                        <div class="mb-3">
                            <label for="start_day" class="form-label text-primary">Hình ảnh</label>
                            <input type="file" class="form-control" id="location_image" value="{{ $location->location_image}}" name="location_image" placeholder="Hình ảnh">
                        </div>
                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Sửa</button>
                        </div>
                </div>
        </form>
    </div>
</div>




@endsection