<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        /* CSS nội tuyến để tái tạo giao diện */
        body {
            background-image: url('{{ asset('images/duLich4.jpg') }}');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            margin: 0;
            font-family: Figtree, sans-serif;
        }

        header {
            background-color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo-info {
            display: flex;
            align-items: center;
        }

        .logo-info img {
            height: 2rem;
            margin-right: 1rem;
        }

        .nav-links a {
            margin-left: 1rem;
            color: #4a5568;
            text-decoration: none;
        }

        .nav-links a:hover {
            color: #1a202c;
        }

        .auth-buttons a {
            background-color: #48bb78;
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            text-decoration: none;
            margin-left: 1rem;
        }

        .auth-buttons a:hover {
            background-color: #38a169;
        }

        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            height: calc(100vh - 4rem); /* Trừ chiều cao header */
            color: white;
        }

        .content h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
        }

        .content p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }

        .search-bar {
            width: 100%;
            max-width: 40rem;
            display: flex;
        }

        .search-bar input[type="text"] {
            flex-grow: 1;
            padding: 0.75rem;
            border-radius: 0.25rem 0 0 0.25rem;
            border: none;
        }

        .search-bar button {
            background-color: #48bb78;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0 0.25rem 0.25rem 0;
            cursor: pointer;
        }

        .search-bar button:hover {
            background-color: #38a169;
        }

        .scroll-top {
            position: fixed;
            bottom: 1rem;
            right: 1rem;
            background-color: #48bb78;
            color: white;
            padding: 0.5rem;
            border-radius: 50%;
            text-decoration: none;
            font-size: 1.5rem;
        }

        .scroll-top:hover {
            background-color: #38a169;
        }
    </style>
</head>
<body class="antialiased">
    <header>
        <div class="logo-info">
            <img src="{{ asset('images/logo.png') }}" alt="Discovery Logo">
            <div>
                <p>39 Nguyễn Huệ, Bến Nghé, Quận 1, Thành phố Hồ Chí Minh</p>
                <p>0924 242 424 | discovery@mailtour.com</p>
            </div>
        </div>
        <div class="nav-links">
            <a href="#">Trang chủ</a>
            <a href="#">Giới thiệu</a>
            <a href="#">Dịch vụ</a>
            <a href="{{ route('add.tour') }}">Tour</a>
            <a href="#">Danh mục</a>
            <a href="#">Liên hệ</a>
        </div>
        <div class="auth-buttons">
            <a href="{{ route('login') }}">Đăng nhập</a>
            <a href="{{ route('user.createUser') }}">Đăng ký</a>
        </div>
    </header>
    <div class="content">
        <h1>Tận hưởng kỳ nghỉ của bạn với chúng tôi</h1>
        <p>Hãy sẵn sàng cho cuộc phiêu lưu tiếp theo của bạn</p>
        <div class="search-bar">
            <input type="text" placeholder="Search by name...">
            <button>Tìm kiếm</button>
        </div>
    </div>
    
    <a href="#" class="scroll-top">&uarr;</a>
</body>
</html>