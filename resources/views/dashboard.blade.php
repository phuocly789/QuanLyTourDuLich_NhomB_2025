<!DOCTYPE html>
<html>
<head>
    <title>Laravel 10.48.0 - CRUD User Example</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
</head>
<body>

<div class="container my-3 text-center border py-2">
    <a href="{{ url('/') }}">Home</a>
    @guest
        | <a href="{{ route('login') }}">Login</a>
        | <a href="{{ route('user.createUser') }}">Create User</a>
    @else
        | <a href="{{ route('signout') }}">Đăng xuất</a>
    @endguest
</div>

@yield('content')
</body>
</html>
