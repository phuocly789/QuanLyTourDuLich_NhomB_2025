<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Discovery</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link href="{{ asset('font-end/css/app.css') }}" rel="stylesheet">
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
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>discovery@mail.tour.com</small>
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
                    <a href="#" class="nav-item nav-link ">Trang chủ</a>
                    <a href="#" class="nav-item nav-link">Giới thiệu</a>
                    <a href="#" class="nav-item nav-link">Dịch vụ</a>
                    <a href="{{ url('/package') }}" class="nav-item nav-link active">Tour</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Danh mục</a>
                        <div class="dropdown-menu m-0">
                            <a href="#" class="dropdown-item">Điểm đến</a>
                            <a href="#" class="dropdown-item">Tour yêu thích</a>
                            <a href="#" class="dropdown-item">Hướng dẫn viên</a>
                        </div>
                    </div>
                    <a href="#" class="nav-item nav-link">Liên hệ</a>
                </div>


            </div>
        </nav>
    </div>
    @yield('content1')
    <!-- Navbar & Hero End -->


    <!--  -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">HHTP</h4>
                    <a class="btn btn-link" href="">Giới thiệu</a>
                    <a class="btn btn-link" href="">Liên hệ chúng tôi</a>
                    <a class="btn btn-link" href="">Chính sách bảo mật</a>
                    <a class="btn btn-link" href="">Điều khoản & Điều kiện</a>
                    <a class="btn btn-link" href="">Câu hỏi và trợ giúp</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>39 Nguyễn Huệ, Bến Nghé, Quận 1,
                        Thành phố Hồ Chí Minh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0924 242 424</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>discovery@mail.tour.com</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-outline-light btn-social" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Sản phẩm của chúng tôi</h4>
                    <div class="row g-2 pt-2">
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-1.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-2.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-3.jpg') }}"
                                alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid bg-light p-1" src="{{ asset('img/package-1.jpg') }}"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    @if (session('success'))
                        <div class="alert alert-success text-center" style="font-size: 30px;">
                            {{ session('success') }}
                        </div>
                    @endif
                    <h4 class="text-white mb-3">Bản tin</h4>
                    <p>Để nhận được bản tin về du lịch, bạn vui lòng nhập email đăng ký với chúng tôi.</p>

                </div>


            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Tên trang web của bạn</a>, Tất cả các quyền.

                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="">Trang chủ</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div>
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
    <script src="{{ asset('font-end/js/app.js') }}"></script>
</body>

</html>
