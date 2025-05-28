@extends('user.app1')
@section('content1')

<!-- Navbar & Hero Start -->
<div class="container-fluid position-relative p-0">
    <div class="container-fluid bg-primary py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-center py-5">
                <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Điểm đến</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href={{ '/user.home' }}>Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Trang</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Điểm đến</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->


<!-- Destination Start -->
<div class="container-xxl py-5 destination">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="text-center text-primary px-3">Điểm đến phổ biến</h1>
        </div>

        <div class="row g-3">
            @foreach($data_location as $row)
            <div class="col-lg-4 col-md-6 wow zoomIn" data-wow-delay="0.1s">
                <a class="position-relative d-block overflow-hidden" href="{{ route('user.tour.location', ['location_id' => $row->location_id])}}">
                    <img class="img-fluid" style="width: 600px; height: 250px" src="{{ asset('img/'.$row->location_image) }}" alt="">
                    <div class="bg-white text-primary fw-bold position-absolute bottom-0 end-0 m-3 py-1 px-2">{{$row->location_name}}</div>
                </a>
            </div>@endforeach

            <!-- <div class="row justify-content-center">
                <div class="col-auto">
                    <a class="btn btn-primary rounded-pill py-3 px-4 mt-2" href="{{ url('/destination') }}">Show more ...</a>
                </div>
            </div> -->


        </div>

    </div>
</div>
<!-- Destination Start -->


@Endsection