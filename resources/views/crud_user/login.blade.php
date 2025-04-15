@extends('dashboard')

@section('content')

<link href="{{ asset('css/styles.css') }}" rel="stylesheet">
<div class="container vh-100 d-flex align-items-center justify-content-center">
    <div class="card p-4 shadow-sm" style="width: 400px;">
        <div class="text-center mb-4">
            <img src="{{ asset('images/logo.png') }}" alt="Discovery Logo" style="height: 40px;">
        </div>

        <form method="POST" action="{{ route('user.authUser') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Mật khẩu" name="password" required>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>

            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember">
                <label class="form-check-label" for="remember">
                    Ghi nhớ đăng nhập
                </label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary">Đăng nhập</button>
            </div>

            <div class="text-center mt-3">
                <a href="{{ route('user.createUser') }}">Chưa có tài khoản?</a>
            </div>
        </form>
    </div>
</div>
@endsection