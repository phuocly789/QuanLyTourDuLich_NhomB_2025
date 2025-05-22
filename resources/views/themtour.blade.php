@section('content')
<link rel="stylesheet" href="{{ asset('css/styles.css') }}">
<div class="centered-form">
    <h1>{{ isset($tour) ? 'Chỉnh sửa Tour' : 'Thêm Tour Mới' }}</h1>

    <form action="{{ isset($tour) ? route('tours.update', $tour->id) : route('tours.store') }}" method="POST"
        enctype="multipart/form-data">
        ...
    </form>
</div>


<!-- Form Thêm Tour -->
<form action="{{ isset($tour) ? route('tours.update', $tour->id) : route('tours.store') }}" method="POST"
    enctype="multipart/form-data">
    @csrf
    @if(isset($tour))
        @method('PUT') <!-- Đánh dấu là phương thức PUT cho update -->
    @endif

    <!-- Các trường nhập liệu -->
    <div class="form-group">
        <label for="ten_tour">Tên Tour</label>
        <input type="text" name="ten_tour" id="ten_tour" class="form-control"
            value="{{ old('ten_tour', $tour->ten_tour ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="dia_diem">Địa điểm</label>
        <input type="text" name="dia_diem" id="dia_diem" class="form-control"
            value="{{ old('dia_diem', $tour->dia_diem ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="noi_xuat_phat">Nơi xuất phát</label>
        <input type="text" name="noi_xuat_phat" id="noi_xuat_phat" class="form-control"
            value="{{ old('noi_xuat_phat', $tour->noi_xuat_phat ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="cho_nghi">Chỗ nghỉ</label>
        <input type="text" name="cho_nghi" id="cho_nghi" class="form-control"
            value="{{ old('cho_nghi', $tour->cho_nghi ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="mo_ta">Mô tả</label>
        <textarea name="mo_ta" id="mo_ta" class="form-control"
            required>{{ old('mo_ta', $tour->mo_ta ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="lich_trinh">Lịch trình</label>
        <textarea name="lich_trinh" id="lich_trinh" class="form-control"
            required>{{ old('lich_trinh', $tour->lich_trinh ?? '') }}</textarea>
    </div>

    <div class="form-group">
        <label for="gia">Giá</label>
        <input type="number" name="gia" id="gia" class="form-control" value="{{ old('gia', $tour->gia ?? '') }}"
            required>
    </div>

    <div class="form-group">
        <label for="so_cho_trong">Số chỗ trống</label>
        <input type="number" name="so_cho_trong" id="so_cho_trong" class="form-control"
            value="{{ old('so_cho_trong', $tour->so_cho_trong ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="ngay_bat_dau">Ngày bắt đầu</label>
        <input type="date" name="ngay_bat_dau" id="ngay_bat_dau" class="form-control"
            value="{{ old('ngay_bat_dau', $tour->ngay_bat_dau ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="thoi_gian">Thời gian</label>
        <input type="text" name="thoi_gian" id="thoi_gian" class="form-control"
            value="{{ old('thoi_gian', $tour->thoi_gian ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="giam_gia">Giảm giá (%)</label>
        <input type="number" name="giam_gia" id="giam_gia" class="form-control"
            value="{{ old('giam_gia', $tour->giam_gia ?? '') }}">
    </div>

    <div class="form-group">
        <label for="anh">Ảnh</label>
        <input type="file" name="anh" id="anh" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
</form>

<hr>

<!-- Danh sách các tour -->
<h2>Danh sách các Tour</h2>
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table mt-3">
    <thead>
        <tr>
            <th>Tên Tour</th>
            <th>Địa điểm</th>
            <th>Nơi xuất phát</th>
            <th>Chỗ nghỉ</th>
            <th>Mô tả</th>
            <th>Lịch trình</th>
            <th>Giá</th>
            <th>Số chỗ trống</th>
            <th>Ngày bắt đầu</th>
            <th>Thời gian</th>
            <th>Giảm giá (%)</th>
            <th>Ảnh</th>
            <th>Hành động</th>

        </tr>
    </thead>
    <tbody>
        @foreach($tours as $tour)
            <tr>
                <td>{{ $tour->ten_tour }}</td>
                <td>{{ $tour->dia_diem }}</td>
                <td>{{ $tour->noi_xuat_phat }}</td>
                <td>{{ $tour->cho_nghi }}</td>
                <td>{{ $tour->mo_ta }}</td>
                <td>{{ $tour->lich_trinh }}</td>
                <td>{{ $tour->gia }}</td>
                <td>{{ $tour->so_cho_trong }}</td>
                <td>{{ $tour->ngay_bat_dau }}</td>
                <td>{{ $tour->thoi_gian }}</td>
                <td>{{ $tour->giam_gia }}</td>
                <td>
                    @if($tour->anh)
                        <img src="{{ asset('storage/' . $tour->anh) }}" alt="Ảnh tour" width="100" height="100"
                            style="object-fit: cover;">
                    @else
                        Không có ảnh
                    @endif
                </td>


                <td>
                    <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-warning">Sửa</a>
                    <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Xóa</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>