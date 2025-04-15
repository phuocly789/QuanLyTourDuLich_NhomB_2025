@extends('dashboard')

@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-sm" style="width: 400px;">
            <h4 class="text-center mb-3">Màn hình chi tiết</h4>

            <p><strong>Username:</strong> {{ $messi->name }}</p>
            <p><strong>Email:</strong> {{ $messi->email }}</p>

            <a href="{{ route('user.updateUser', ['id' => $messi->id]) }}" class="btn btn-primary">Chỉnh sửa</a>
        </div>
    </div>
@endsection
