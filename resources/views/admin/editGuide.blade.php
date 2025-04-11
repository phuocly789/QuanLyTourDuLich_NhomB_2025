@extends('admin.app2')
@section('content2')

<div class="container-fluid bg-primary py-5 mb-5 hero-header">
    <div class="container py-5">
        <div class="row justify-content-center py-5">
            <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                <h1 class="display-3 text-white mb-3 animated slideInDown">QUẢN LÝ THÔNG TIN HƯỚNG DẪN VIÊN</h1>
                <p class="fs-4 text-white mb-4 animated slideInDown">Chỉnh sủa thông tin hướng dẫn viên: {{$guide->guide_Name}}</p>
            </div>
        </div>
    </div>
</div>

<div class="container-xxl py-5">
    <div class="row justify-content-center" >
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Chỉnh sửa thông tin hướng dẫn viên</h1>
        </div>
        <div class="col-md-6">
            <form action="{{ route('guide.update', $guide->guide_Id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="col-md-12" style="width: 500px;">
                    <div class="mb-3">
                        <label for="guide_Name" class="form-label text-primary">Tên hướng dẫn viên</label>
                        <input type="text" class="form-control" id="guide_Name" name="guide_Name" value="{{ $guide->guide_Name }}">
                    </div>
                    <div class="mb-3">
                        <label for="guide_Pno" class="form-label text-primary">Số điện thoại</label>
                        <input type="text" class="form-control" id="guide_Pno" name="guide_Pno" value="{{ $guide->guide_Pno }}">
                    </div>
                    <div class="mb-3">
                        <label for="guide_Img" class="form-label text-primary">Hình ảnh</label>
                        <input type="file" class="form-control" id="guide_image" value="{{ $guide->guide_Img }}" name="guide_image">
                    </div>
                    <div class="mb-3">
                        <label for="guide_Mail" class="form-label text-primary">Mail</label>
                        <input type="text" class="form-control" id="guide_Mail" name="guide_Mail" value="{{ $guide->guide_Mail }}">
                    </div>
                    <div class="mb-3">
                        <label for="guide_Intro" class="form-label text-primary">Giới thiệu</label>
                        <textarea class="form-control" id="guide_Intro" name="guide_Intro">{{ $guide->guide_Intro }}</textarea>
                    </div>
                    <div class="text-end">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>




@endsection