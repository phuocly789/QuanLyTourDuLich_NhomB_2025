@extends('dashboard')

@section('content')


<div class="container vh-100 d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-sm" style="width: 400px;">
        <h4 class="text-center mb-3">Màn hình cập nhật</h4>

        <form method="POST" action="{{ route('user.postUpdateUser', ['id' => $user->id]) }}">
            @csrf

            <div class="mb-3">
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" placeholder="Username" required>
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu (để trống nếu không đổi)">
                @error('password')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="mb-3">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Nhập lại mật khẩu">
            </div>

            <div class="mb-3">
                <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" placeholder="Email" required>
                @error('email')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Cập nhật</button>

            <div class="text-center mt-3">
                <a href="{{ route('login') }}">Đã có tài khoản</a>
            </div>
        </form>
    </div>
</div>
@endsection