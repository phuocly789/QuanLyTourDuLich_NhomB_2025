@extends('admin.app2')
@section('content2')


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Hướng dẫn viên</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                                <li class="breadcrumb-item"><a href="#">Trang</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Hướng dẫn viên</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


   <!-- Team Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Hướng dẫn viên du lịch</h1>
        </div>
        <div class="row g-4">
            @foreach($data_guide as $row)
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="team-item">
                    <div class="overflow-hidden">
                        <img class="img-fluid" src="{{asset('img/' . $row->guide_Img)}}" alt="">
                    </div>
                    <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="text-center p-4">
                        <h5 class="mb-0">{{$row->guide_Name}}</h5>
                    </div>
                    <div class="d-flex border ">
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-phone text-primary me-2"></i>{{ $row->guide_Pno}}</small>
                        <small class="flex-fill text-center border-end py-2"><i class="fa fa-envelope text-primary me-2"></i>{{ $row->guide_Mail}}</small>
                    </div>
                    <div class="text-center">
                        <?php
                        $guideIntro = $row->guide_Intro;

                        // Chia chuỗi thành mảng các từ
                        $words = explode(' ', $guideIntro);

                        // Lấy 100 từ đầu tiên
                        $motaGuide = implode(' ', array_slice($words, 0, 50));
                        ?>
                        <p style="height: auto;">{{$motaGuide}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Team End -->
        

@endsection