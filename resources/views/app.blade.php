<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HHTP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('font-end/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-end/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('font-end/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('font-end/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('font-end/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>39 Nguyễn Huệ, Bến Nghé,
                        Quận 1, Thành phố Hồ Chí Minh</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0924 242 424</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>HHTP@mail.tour.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="index" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>HHTP</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/index') }}"
                        class="nav-item nav-link {{ request()->is('index') ? 'active' : '' }}">Trang chủ</a>
                    <a href="{{ url('/about') }}"
                        class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Giới thiệu</a>
                    <a href="{{ url('/service') }}"
                        class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Dịch vụ</a>
                    <a href="{{ url('/package') }}"
                        class="nav-item nav-link {{ request()->is('package') ? 'active' : '' }}">Tour</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ request()->is('team') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Danh mục</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/team') }}" class="dropdown-item">Hướng dẫn viên</a>
                        </div>
                    </div>
                    <a href="{{ url('/contact') }}"
                        class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Liên hệ</a>
                </div>
                <a href="{{ route('login') }}" class="btn btn-primary rounded-pill py-2 px-4 m-2">Đăng nhập</a>
                <a href="{{ route('register') }}" class="btn btn-primary rounded-pill py-2 px-4">Đăng ký</a>
            </div>
        </nav>
    </div>
    @yield('content')
    <!-- Navbar & Hero End -->
    <x-request-logint-modal />
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">HHTP</h4>
                    <a href="{{ url('/') }}"
                        class="btn btn-link {{ request()->is('') ? 'active' : '' }}">Trang chủ</a>
                    <a href="{{ url('/about') }}"
                        class="btn btn-link {{ request()->is('about') ? 'active' : '' }}">Giới thiệu</a>
                    <a href="{{ url('/service') }}"
                        class="btn btn-link {{ request()->is('service') ? 'active' : '' }}">Dịch vụ</a>
                    <a href="{{ url('/package') }}"
                        class="btn btn-link {{ request()->is('package') ? 'active' : '' }}">Tour</a>
                    <a href="{{ url('/contact') }}"
                        class="btn btn-link {{ request()->is('contact') ? 'active' : '' }}">Liên hệ</a>
                    {{-- <a class="btn btn-link" href="">Câu hỏi và trợ giúp</a> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>39 Nguyễn Huệ, Bến Nghé, Quận 1,
                        Thành phố Hồ Chí Minh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0924 242 424</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>discovery@mail.tour.com</p>

                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-white mb-3">Sản Phẩm Của Chúng Tôi</h4>
                    <div class="row g-2 pt-2">
                        @if (isset($footerTours) && $footerTours->isNotEmpty())
                            @foreach ($footerTours as $tour)
                                <div class="col-2">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#loginPromptModal"
                                        class="image-frame">
                                        <img class="img-fluid" src="{{ asset('img/' . $tour->tour_image) }}"
                                            alt="{{ $tour->tour_name }}">
                                    </a>
                                </div>
                            @endforeach
                        @else
                            <p>No tours available.</p>
                        @endif
                    </div>
                </div>

                <x-request-logint-modal />



            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="text-center mb-3 mb-md-0">
                        &copy; 2025 <a class="border-bottom" href="index">HHTP</a>. All Rights Reserved.
                        Designed by <a class="border-bottom" href="https://htmlcodex.com">HHTP TEAM</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('font-end/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('font-end/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('font-end/js/main.js') }}"></script>

</body>

</html>
