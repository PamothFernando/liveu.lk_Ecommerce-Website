@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Fire Alarm Systems') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Fire Alarm Systems') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.firealarm') }}">{{ localize('Fire Alarm Systems') }}</a></li>
            </ol>
        </nav>
    </div>
@endsection

@section('contents')
    <!--breadcrumb-->
    @include('frontend.default.inc.breadcrumb')
    <!--breadcrumb-->

    <!--page section start-->
    <section class="blog-details py-5">
            <style>
                .service .service-item {
                    background: var(--bs-light);
                    border-radius: 10px;
                    transition: 0.5s;
                }

                .service .service-item:hover {
                    box-shadow: 0 0 45px rgba(0, 0, 0, .2);
                }

                .service .service-item .service-img {
                    position: relative;
                    overflow: hidden;
                    border-top-left-radius: 10px;
                    border-top-right-radius: 10px;
                    transition: 0.5s;
                }

                .service .service-item .service-img img {
                    transition: 0.5s;
                }

                .service .service-item:hover .service-img img {
                    transform: scale(1.2);
                }
                .container-fluid-dashed-box{
                border: 2px dashed orange; /* Orange dashed border */
                border-radius: 5px;        /* Rounded corners */
                padding: 10px;            /* Space inside the box */
                margin: 20px 0;           /* Space outside the box */
                position: relative;       /* Allows precise positioning of the text */
                opacity: 1;
                width: 100%;
                }
            </style>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="blog-details-content bg-white rounded-2 py-6 px-5">
                        <!-- details Start -->
                        <div>
                            <!-- Services Start -->
                            <div class="container-fluid- service py-5">
                                <div class="container py-5">
                                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                        <h4><p class="text-primary">FIRE Alarm System</p></h4>
                                        <h1 class="display-5 mb-4">Live U (Pvt) Ltd </h1>
                                        <p class="mb-0">Sri Lankan No 1 security Service provider
                                        </p>
                                    </div>
                                    <div class="container-fluid-dashed-box">
                                        <div class="row g-4" style="text-align:center;">
                                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/fire1.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <p class="text-primary">Conventional Fire Alarm System</p>
                                                        </h4>
                                                            <p class="mb-4">ASENWARE Conventional Fire Alarm System has obtained lpcb ce certificationconsists wired detectors Each zone can
                                                        </p>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/fire2.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <p class="text-primary">Addressable Fire Alarm System</p>
                                                        </h4>
                                                        <p class="mb-4">ASENWARE Addressable Fire Alarm Control System are intelligent system which are designed to make it suitable
                                                        </p>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/fire3.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <p class="text-primary">Wireless Fire Alarm System</p>
                                                        </h4>
                                                        <p style="margin-top:45px;" class="mb-4">ASENWARE Wireless fire alarm system features: Can connect both wired and wireless detectors Each zone can
                                                        </p>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                            <hr>
                            <br>
                            <!-- Services End -->
                                <div>
                                <style>
                                /* Make the image fully responsive */
                                .carousel-inner video {
                                    width: 100%;
                                }
                                </style>
                                    <!-- Carousel wrapper -->
                                    <div class="container-fluid-dashed-box">
                                        <div id="demo" class="carousel slide" data-ride="carousel">
                                            <ul class="carousel-indicators">
                                                <li data-target="#demo" data-slide-to="0" class="active"></li>
                                                <li data-target="#demo" data-slide-to="1"></li>
                                                <li data-target="#demo" data-slide-to="2"></li>
                                                <li data-target="#demo" data-slide-to="3"></li>
                                                <li data-target="#demo" data-slide-to="4"></li>
                                            </ul>
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe 
                                                            class="embed-responsive-item" 
                                                            src="https://www.youtube.com/embed/6pjgwOAzLFU?si=cpunsRRzdCjayjmt" 
                                                            title="YouTube video player" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe 
                                                            class="embed-responsive-item" 
                                                            src="https://www.youtube.com/embed/exTw8Ccl6ZQ?si=BtOBcDZwxRnG8yUc" 
                                                            title="YouTube video player" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe 
                                                            class="embed-responsive-item" 
                                                            src="https://www.youtube.com/embed/9UImjxJktI8?si=qMSlSaeFrzWo_Mp7" 
                                                            title="YouTube video player" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe 
                                                            class="embed-responsive-item" 
                                                            src="https://www.youtube.com/embed/2TOrmyk7wZ8?si=RYZiLIT2ZzEjC-mx" 
                                                            title="YouTube video player" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>

                                                <div class="carousel-item">
                                                    <div class="embed-responsive embed-responsive-16by9">
                                                        <iframe 
                                                            class="embed-responsive-item" 
                                                            src="https://www.youtube.com/embed/IL73ghZj_2k?si=iHR3QXxR8jeh11e_" 
                                                            title="YouTube video player" 
                                                            frameborder="0" 
                                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                                            allowfullscreen>
                                                        </iframe>
                                                    </div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                                                <span class="carousel-control-prev-icon"></span>
                                            </a>
                                            <a class="carousel-control-next" href="#demo" data-slide="next">
                                                <span class="carousel-control-next-icon"></span>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- Carousel wrapper -->
                                </div>
                        <div>
                        <!-- details End -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page section end-->
@endsection
<script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

