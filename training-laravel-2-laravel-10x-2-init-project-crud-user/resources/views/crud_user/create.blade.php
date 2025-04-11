@extends('dashboard')

@section('content')
    <div class="container vh-100 d-flex justify-content-center align-items-center">
        <div class="card p-4 shadow-sm" style="width: 400px;">
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo.png') }}" alt="Discovery Logo" style="height: 40px;">
            </div>

            <form method="POST" action="{{ route('user.postUser') }}">
                @csrf

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                </div>

                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">REGISTER</button>
                </div>

                <div class="text-center mt-3">
                    <a href="{{ route('login') }}">Already registered?</a>
                </div>
            </form>
        </div>
    </div>
@endsection