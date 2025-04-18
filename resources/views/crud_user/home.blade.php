<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang chủ - Discovery</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <style>
        /* CSS nội tuyến để tái tạo giao diện - bạn có thể chuyển vào file styles.css */
        body {
            margin: 0;
            font-family: Figtree, sans-serif;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f7fafc; /* Màu nền trang */
        }

        header {
            background-color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05); /* Hiệu ứng bóng đổ nhẹ */
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

        .auth-buttons {
            display: flex;
            align-items: center;
        }

        .auth-buttons span {
            margin-right: 1rem;
            color: #2d3748;
            font-weight: bold;
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
            height: calc(100vh - 4rem);
            color: white;
            background-image: url('{{ asset('images/bg-hero.jpg') }}'); /* Thêm vào .content */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
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

        .welcome-section {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 2rem;
            border-radius: 0.5rem;
            margin: 2rem auto;
            max-width: 1000px;
            color: #333;
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .welcome-image {
            flex: 1;
            border-radius: 0.5rem;
            overflow: hidden;
            height: 400px;
            position: relative;
            min-width: 400px;
        }

        .welcome-image img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: opacity 1s ease-in-out;
            position: absolute;
            top: 0;
            left: 0;
            opacity: 0;
        }

        .welcome-image img:nth-child(1) {
            opacity: 1;
        }

        .welcome-text {
            flex: 1;
            padding-left: 0;
        }

        .welcome-text h2 {
            font-size: 2rem;
            margin-bottom: 0.5rem;
            color: #2d3748;
        }

        .welcome-text p {
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .welcome-text ul {
            list-style: none;
            padding: 0;
        }

        .welcome-text ul li {
            display: flex;
            align-items: center;
            margin-bottom: 0.5rem;
        }

        .welcome-text ul li::before {
            content: "\27A1";
            color: #48bb78;
            margin-right: 0.5rem;
        }

        .welcome-button {
            background-color: #68d391;
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 0.25rem;
            text-decoration: none;
            display: inline-block;
            font-size: 1rem;
            cursor: pointer;
        }

        .welcome-button:hover {
            background-color: #48bb78;
        }

        .destination-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .destination-box {
            position: relative;
            border-radius: 0.5rem;
            overflow: hidden;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .destination-box img {
            width: 100%;
            display: block;
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease-in-out;
        }

        .destination-box:hover img {
            transform: scale(1.05);
        }

        .label {
            position: absolute;
            bottom: 0;
            left: 0;
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 0.5rem;
            width: 100%;
            text-align: center;
            font-size: 1rem;
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
            @auth
                <span>Xin chào, {{ Auth::user()->name }}</span>
                <a href="{{ route('signout') }}" style="margin-left: 1rem; background-color: #f44336; color: white; padding: 0.5rem 1rem; border-radius: 0.25rem; text-decoration: none;">Đăng xuất</a>
            @else
                <a href="{{ route('login') }}">Đăng nhập</a>
                <a href="{{ route('user.createUser') }}">Đăng ký</a>
            @endauth
        </div>
    </header>
    <div class="content">
        <h1>Khám phá những điều tuyệt vời nhất</h1>
        <p>Tìm kiếm và đặt những tour du lịch hấp dẫn nhất trên khắp thế giới.</p>
        <div class="search-bar">
            <input type="text" placeholder="Bạn muốn đi đâu?">
            <button>Tìm kiếm</button>
        </div>
    </div>

    <div class="welcome-section">
        <div class="welcome-image">
            <img src="{{ asset('images/about_us.jpg') }}" alt="Chào mừng bạn đến với Discovery 1">
            <img src="{{ asset('images/duLich3.jpg') }}" alt="Chào mừng bạn đến với Discovery 2">
            <img src="{{ asset('images/duLich4.jpg') }}" alt="Chào mừng bạn đến với Discovery 3">
            <img src="{{ asset('images/duLich1.jpg') }}" alt="Chào mừng bạn đến với Discovery 4">
            <img src="{{ asset('images/duLich5.jpg') }}" alt="Chào mừng bạn đến với Discovery 5">
        </div>
        <div class="welcome-text">
            <h2>Chào mừng bạn đến với Discovery</h2>
            <p>Đưa bạn đến với những vùng đất mới trên thế giới, Discovery hứa hẹn sẽ là điểm đến lý tưởng cho những ai đam mê du lịch.</p>
            <p>Tại đây, bạn sẽ khám phá hàng loạt điểm đến hấp dẫn trên khắp thế giới, từ những thành phố sôi động đến vùng nông thôn yên bình. Discovery sẽ cung cấp dịch vụ đặt phòng khách sạn tiện lợi, hướng dẫn du lịch chi tiết và các hoạt động xã hội thú vị.</p>
            <p>Với Discovery, hành trình của bạn sẽ bắt đầu từ đây. Chào mừng đến với thế giới của chúng tôi, nơi những giấc mơ trở thành hiện thực.</p>
            <ul>
                <li>Chuyến bay hạng nhất</li>
                <li>Khách sạn được lựa chọn cẩn thận</li>
                <li>Chỗ ở 5 sao</li>
                <li>Phương tiện di chuyển mới nhất</li>
                <li>150+ chuyến tham quan thành phố cao cấp</li>
                <li>Dịch vụ 24/7</li>
            </ul>
            <a href="#" class="welcome-button">Đọc tiếp...</a>
        </div>
    </div>

    <a href="#" class="scroll-top">&uarr;</a>

    <script>
        const welcomeImage = document.querySelector('.welcome-image');
        const images = welcomeImage.querySelectorAll('img');
        let currentIndex = 0;
        const intervalTime = 2000;

        function showImage(index) {
            images.forEach((img, i) => {
                img.style.opacity = i === index ? 1 : 0;
            });
        }

        function nextImage() {
            currentIndex = (currentIndex + 1) % images.length;
            showImage(currentIndex);
        }

        showImage(currentIndex);
        setInterval(nextImage, intervalTime);
    </script>

<section style="text-align: center; padding: 4rem 2rem;">
    <h2 style="color: #85bb2f; font-size: 2.5rem; margin-bottom: 2rem;">Dịch vụ của chúng tôi</h2>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 2rem;">
        <div class="service-box">
            <button class="service-btn">🌍</button>
            <h3>Vòng quanh thế giới</h3>
            <p>Đưa bạn đến với những địa điểm mới lạ trên toàn thế giới</p>
        </div>
        <div class="service-box">
            <button class="service-btn">🏨</button>
            <h3>Đặt phòng khách sạn</h3>
            <p>Khách sạn 5★ được đánh giá tốt nhất trên thế giới</p>
        </div>
        <div class="service-box">
            <button class="service-btn">🧭</button>
            <h3>Hướng dẫn viên du lịch</h3>
            <p>Thân thiện, hòa đồng và đồng hành trong suốt hành trình</p>
        </div>
        <div class="service-box">
            <button class="service-btn">🎉</button>
            <h3>Quản lý sự kiện</h3>
            <p>Những sự kiện, hoạt động trong suốt hành trình của bạn</p>
        </div>
    </div>
</section>

    <section style="text-align: center; padding: 4rem 2rem;">
        <h2 style="color: #85bb2f; font-size: 2.5rem; margin-bottom: 2rem;">Điểm đến nổi bật</h2>
        <div class="destination-grid">
            <div class="destination-box"><img src="{{ asset('images/mienbac.jpg') }}" alt="Miền Bắc"><span class="label">Miền Bắc</span></div>
            <div class="destination-box"><img src="{{ asset('images/mientrung.jpg') }}" alt="Miền Trung"><span class="label">Miền Trung</span></div>
            <div class="destination-box"><img src="{{ asset('images/miennam.jpg') }}" alt="Miền Nam"><span class="label">Miền Nam</span></div>
        </div>
    </section>

    <footer>
        <div style="text-align: center; padding: 1rem; background-color: #f0f0f0; color: #718096; font-size: 0.9rem;">
            &copy; {{ date('Y') }} Discovery. All rights reserved.
        </div>
    </footer>

</body>
</html>