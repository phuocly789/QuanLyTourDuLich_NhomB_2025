@extends('dashboard')

@section('content')

<div class="container my-5">
    <h3 class="text-success fw-bold text-center mb-4">THÊM TOUR</h3>

    {{-- Form thêm tour --}}
    <form action="{{ route('tour.store') }}" method="POST" enctype="multipart/form-data">

    <form method="POST" action="{{ route('tour.store') }}" enctype="multipart/form-data" class="border rounded p-4 shadow-sm bg-white mb-5">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Tên tour</label>
            <div class="col-sm-10">
                <input type="text" name="ten_tour" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Địa điểm</label>
            <div class="col-sm-10">
                <input type="text" name="dia_diem" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Giá</label>
            <div class="col-sm-10">
                <input type="number" name="gia" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Thời gian</label>
            <div class="col-sm-10">
                <input type="text" name="thoi_gian" class="form-control" required>
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Hình ảnh</label>
            <div class="col-sm-10">
                <input type="file" name="hinh_anh" class="form-control">
            </div>
        </div>

        <div class="row mb-3">
            <label class="col-sm-2 col-form-label fw-semibold">Mô tả</label>
            <div class="col-sm-10">
                <textarea name="mo_ta" class="form-control" rows="3"></textarea>
            </div>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Thêm tour</button>
        </div>
    </form>

    {{-- Danh sách tour --}}
    <h3 class="text-primary fw-bold text-center mb-3">DANH SÁCH TOUR</h3>

    <table class="table table-bordered shadow-sm bg-white">
        <thead class="table-success text-center">
            <tr>
                <th>#</th>
                <th>Tên tour</th>
                <th>Địa điểm</th>
                <th>Giá</th>
                <th>Thời gian</th>
                <th>Hình ảnh</th>
                <th>Thao tác</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($tours as $index => $tour)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $tour->ten_tour }}</td>
                    <td>{{ $tour->dia_diem }}</td>
                    <td>{{ number_format($tour->gia, 0, ',', '.') }}đ</td>
                    <td>{{ $tour->thoi_gian }}</td>
                    <td class="text-center">
                        @if ($tour->hinh_anh)
                            <img src="{{ asset('storage/' . $tour->hinh_anh) }}" width="80">
                        @else
                            Không có
                        @endif
                    </td>
                    {{-- <td class="text-center">
                        <a href="{{ route('#', $tour->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                        <form action="{{ route('#', $tour->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Xóa tour này?')">Xóa</button>
                        </form>
                    </td> --}}
                </tr>
            @empty
                <tr><td colspan="7" class="text-center">Chưa có tour nào.</td></tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection
