<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>HHTP</title>
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
    <div class="container-fluid bg-dark px-5 d-none d-lg-block" id="header">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>39 Nguyễn Huệ, Bến Nghé,
                        Quận 1, Thành phố Hồ Chí Minh</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>0924 242 424</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>hhtp@mail.tour.com</small>
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
            <a href="{{ url('/user.home') }}" class="navbar-brand p-0">
                <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>HHTP</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="{{ url('/user.home') }}"
                        class="nav-item nav-link {{ request()->is('user.home') ? 'active' : '' }}">Trang chủ</a>
                    <a href="{{ url('/user.about') }}"
                        class="nav-item nav-link {{ request()->is('user.about') ? 'active' : '' }}">Giới thiệu</a>
                    <a href="{{ url('/user.service') }}"
                        class="nav-item nav-link {{ request()->is('user.service') ? 'active' : '' }}">Dịch vụ</a>
                    <a href="{{ url('/user.package') }}"
                        class="nav-item nav-link {{ request()->is('user.package') ? 'active' : '' }}">Tour</a>
                    <div class="nav-item dropdown">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ request()->is('user.team', 'user.destination', 'user.favorite') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Danh mục</a>
                        <div class="dropdown-menu m-0">
                            <a href="{{ url('/user.team') }}" class="dropdown-item">Hướng dẫn viên</a>
                            <a href="{{ url('/user.destination') }}" class="dropdown-item">Điểm đến</a>
                            <a href="{{ url('/user.favorite') }}" class="dropdown-item">Tour yêu thích</a>
                        </div>
                    </div>
                    <a href="{{ url('/user.contact') }}"
                        class="nav-item nav-link {{ request()->is('user.contact') ? 'active' : '' }}">Liên hệ</a>
                </div>
                <nav x-data="{ open: false }">
                    <!-- Primary Navigation Menu -->
                    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                        <div class="flex justify-between h-16">
                            <!-- Settings Dropdown -->
                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        <button
                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                            <div>{{ Auth::user()->name }}</div>

                                            <div class="ml-1">
                                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        </button>
                                    </x-slot>

                                    <x-slot name="content">
                                        <x-dropdown-link :href="route('profile.edit')">
                                            {{ __('Thông Tin Cá Nhân') }}
                                        </x-dropdown-link>

                                        <x-dropdown-link :href="route('history', Auth::user()->id)">
                                            {{ __('Lịch Sử Giao Dịch') }}
                                        </x-dropdown-link>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf

                                            <x-dropdown-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Đăng Xuất') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
                            </div>

                            <!-- Hamburger -->
                            <div class="-mr-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('user.home')" :active="request()->routeIs('user.home')">
                                {{ __('Home') }}
                            </x-responsive-nav-link>
                        </div>

                        <!-- Responsive Settings Options -->
                        <div class="pt-4 pb-1 border-t border-gray-200">
                            <div class="px-4">
                                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                            </div>

                            <div class="mt-3 space-y-1">
                                <x-responsive-nav-link :href="route('profile.edit')">
                                    {{ __('Profile') }}
                                </x-responsive-nav-link>

                                <!-- Authentication -->
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </nav>
    </div>
    @yield('content1')
    <!-- Navbar & Hero End -->


    <!--  -->

    <x-request-logint-modal />
    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">HHTP</h4>
                     <a href="{{ url('/user.home') }}"
                        class="btn btn-link {{ request()->is('user.home') ? 'active' : '' }}">Trang chủ</a>
                    <a href="{{ url('/user.about') }}"
                        class="btn btn-link {{ request()->is('user.about') ? 'active' : '' }}">Giới thiệu</a>
                    <a href="{{ url('/user.service') }}"
                        class="btn btn-link {{ request()->is('user.service') ? 'active' : '' }}">Dịch vụ</a>
                    <a href="{{ url('/user.package') }}"
                        class="btn btn-link {{ request()->is('user.package') ? 'active' : '' }}">Tour</a>
                    <a href="{{ url('/user.contact') }}"
                        class="btn btn-link {{ request()->is('user.contact') ? 'active' : '' }}">Liên hệ</a>
                    {{-- <a class="btn btn-link" href="">Câu hỏi và trợ giúp</a> --}}
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-3">Liên hệ</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>39 Nguyễn Huệ, Bến Nghé, Quận 1,
                        Thành phố Hồ Chí Minh</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0924 242 424</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>hhtp@mail.tour.com</p>

                </div>
                <div class="col-lg-6 col-md-12">
                    <h4 class="text-white mb-3">Sản Phẩm Của Chúng Tôi</h4>
                    <div class="row g-2 pt-2">
                        @if (isset($footerTours) && $footerTours->isNotEmpty())
                            @foreach ($footerTours as $tour)
                                <div class="col-2">
                                    <a href="{{ route('user.tour.readmore', $tour->tour_id) }}"
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
