@extends('dashboard')

@section('content')

<h1>Danh sách Tour</h1>

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
                        <a href="{{ route('tours.edit', $tour->id) }}" class="btn btn-sm btn-primary">Sửa</a>
                        <form action="{{ route('tours.destroy', $tour->id) }}" method="POST" class="d-inline">
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

@endsectionc