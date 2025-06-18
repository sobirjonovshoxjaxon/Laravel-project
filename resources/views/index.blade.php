@extends('layouts.master')
@section('content')


    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#header-carousel" data-slide-to="1"></li>
                <li data-target="#header-carousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="img-fluid" src="{{ asset ('assets/img/carousel-1.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Best Quality Solution In Cleaning</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset ('assets/img/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Cleaning Services</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="img-fluid" src="{{ asset ('assets/img/carousel-3.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-5" style="width: 100%; max-width: 900px;">
                            <h5 class="text-primary text-uppercase mb-md-3">Cleaning Services</h5>
                            <h1 class="display-3 text-white mb-md-4">Experienced & Expert Cleaners</h1>
                            <a href="" class="btn btn-primary">Get A Quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid pb-5 contact-info">
        <div class="row">
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-map-marker-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Our Office</h5>
                        <p class="m-0">123 Street, New York, USA</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-secondary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-envelope-open text-primary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Email Us</h5>
                        <p class="m-0">info@example.com</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 p-0">
                <div class="contact-info-item d-flex align-items-center justify-content-center bg-primary text-white py-4 py-lg-0">
                    <i class="fa fa-3x fa-phone-alt text-secondary mr-4"></i>
                    <div class="">
                        <h5 class="mb-2">Call Us</h5>
                        <p class="m-0">+012 345 6789</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
        @include('layouts.about')
    <!-- About End -->



    <!-- Services Start -->
        @include('layouts.services')
    <!-- Services End -->


    <!-- Features Start -->
        @include('layouts.features')
    <!-- Features End -->


    <!-- Portfolio Start -->
        @include('layouts.portfolio')
    <!-- Portfolio End -->


    <!-- Team Start -->
        @include('layouts.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
        @include('layouts.testimonial')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container pt-5">
            <div class="row align-items-end mb-4">
                <div class="col-lg-6">
                    <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Latest Blog</h6>
                    <h1 class="section-title mb-3">Latest Articles From Our Blog Post</h1>
                </div>
                <div class="col-lg-6">
                    <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{ asset ('assets/img/blog-1.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                    <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                    <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{ asset ('assets/img/blog-2.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                    <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                    <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="position-relative mb-4">
                        <img class="img-fluid rounded w-100" src="{{ asset ('assets/img/blog-3.jpg')}}" alt="">
                        <div class="blog-date">
                            <h4 class="font-weight-bold mb-n1">01</h4>
                            <small class="text-white text-uppercase">Jan</small>
                        </div>
                    </div>
                    <div class="d-flex mb-2">
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Admin</a>
                        <span class="text-primary px-2">|</span>
                        <a class="text-secondary text-uppercase font-weight-medium" href="">Cleaning</a>
                    </div>
                    <h5 class="font-weight-medium mb-2">Rebum lorem eos ipsum diam</h5>
                    <p class="mb-4">Dolor justo sea kasd lorem clita justo no diam amet. Kasd magna dolor amet</p>
                    <a class="btn btn-sm btn-primary py-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection 
  