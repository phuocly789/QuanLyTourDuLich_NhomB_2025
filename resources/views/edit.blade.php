

@section('content')
    <h1>Chỉnh sửa Tour</h1>

    <form action="{{ route('tours.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="ten_tour">Tên Tour</label>
            <input type="text" name="ten_tour" id="ten_tour" class="form-control" value="{{ old('ten_tour', $tour->ten_tour) }}" required>
        </div>

        <div class="form-group">
            <label for="dia_diem">Địa điểm</label>
            <input type="text" name="dia_diem" id="dia_diem" class="form-control" value="{{ old('dia_diem', $tour->dia_diem) }}" required>
        </div>

        <div class="form-group">
            <label for="noi_xuat_phat">Nơi xuất phát</label>
            <input type="text" name="noi_xuat_phat" id="noi_xuat_phat" class="form-control" value="{{ old('noi_xuat_phat', $tour->noi_xuat_phat) }}" required>
        </div>

        <div class="form-group">
            <label for="cho_nghi">Chỗ nghỉ</label>
            <input type="text" name="cho_nghi" id="cho_nghi" class="form-control" value="{{ old('cho_nghi', $tour->cho_nghi) }}" required>
        </div>

        <div class="form-group">
            <label for="mo_ta">Mô tả</label>
            <textarea name="mo_ta" id="mo_ta" class="form-control" required>{{ old('mo_ta', $tour->mo_ta) }}</textarea>
        </div>

        <div class="form-group">
            <label for="lich_trinh">Lịch trình</label>
            <textarea name="lich_trinh" id="lich_trinh" class="form-control" required>{{ old('lich_trinh', $tour->lich_trinh) }}</textarea>
        </div>

        <div class="form-group">
            <label for="gia">Giá</label>
            <input type="number" name="gia" id="gia" class="form-control" value="{{ old('gia', $tour->gia) }}" required>
        </div>

        <div class="form-group">
            <label for="so_cho_trong">Số chỗ trống</label>
            <input type="number" name="so_cho_trong" id="so_cho_trong" class="form-control" value="{{ old('so_cho_trong', $tour->so_cho_trong) }}" required>
        </div>

        <div class="form-group">
            <label for="ngay_bat_dau">Ngày bắt đầu</label>
            <input type="date" name="ngay_bat_dau" id="ngay_bat_dau" class="form-control" value="{{ old('ngay_bat_dau', $tour->ngay_bat_dau) }}" required>
        </div>

        <div class="form-group">
            <label for="thoi_gian">Thời gian</label>
            <input type="text" name="thoi_gian" id="thoi_gian" class="form-control" value="{{ old('thoi_gian', $tour->thoi_gian) }}" required>
        </div>

        <div class="form-group">
            <label for="giam_gia">Giảm giá (%)</label>
            <input type="number" name="giam_gia" id="giam_gia" class="form-control" value="{{ old('giam_gia', $tour->giam_gia) }}">
        </div>

        <div class="form-group">
            <label for="anh">Ảnh</label>
            <input type="file" name="anh" id="anh" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Lưu</button>
    </form>

