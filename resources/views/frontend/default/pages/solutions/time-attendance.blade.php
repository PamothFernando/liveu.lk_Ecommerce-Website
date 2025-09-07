@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('TIME Attendance') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('TIME Attendance') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.timeattendance') }}">{{ localize('TIME Attendance') }}</a></li>
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
                .dashed-box {
                border: 2px dashed orange; /* Orange dashed border */
                border-radius: 5px;        /* Rounded corners */
                padding: 10px;            /* Space inside the box */
                margin: 20px 0;           /* Space outside the box */
                position: relative;       /* Allows precise positioning of the text */
                opacity: 1;
                width: 100%;
                }

                .dashed-box h2 {
                    opacity: 1;
                    position: absolute;
                    top: -15px;               /* Positions the heading outside the box */
                    left: 15px;               /* Aligns the text inside the box */
                    padding: 0 10px;          /* Space around the text */
                    color: #333;              /* Text color */
                    font-size: 18px;          /* Font size */
                    font-weight: bold;        /* Bold text */
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
                <div class="blog-details-content bg-white rounded-2 py-6 px-5" style="text-align: center;">
                    <div>
                        <h1 class="text-primary">New Touchless Biometrics Solution</h1>
                        <h4>MASKED FACE</h4>
                        <p>
                        Fast and Accurate Visible Light Facial Recognition with Wide Angle Tolerance for Masked Individuals
                        </p>
                    </div>
                    <div>
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="/public/assets/images/timeposter.png" alt="First slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Second slide">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="..." alt="Third slide">
                            </div>
                        </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!-- Services Start -->
                    <div class="container-fluid-dashed-box service py-5">
                        <div class="container py-5">
                            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                <h4 class="text-primary">Looking Original ZKTECO</h4>
                                <h1 class="display-5 mb-4"></h1>
                                <p  class="mb-0">Fast and Accurate Visible Light Facial Recognition with Wide Angle Tolerance for Masked Individuals.
                                </p>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/TA1.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                        <h3>
                                            <a href="#" class="text-primary" style="font-size:20px;">Fingerprint</a>
                                        </h3>
                                            <p >A fingerprint time attendance system uses biometric scans to track employee attendance, ensuring accurate, secure, and efficient recording of work hours.
                                            </p><br>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/TA2.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                        <h3>
                                            <a href="#" class="text-primary" style="font-size:20px;">Access Control</a>
                                        </h3>
                                            <p >An access control system regulates entry to a building or area by verifying the identity of individuals using methods like keycards, biometrics, or PINs, ensuring security and restricted access.
                                            </p>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/TA3.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                        <h3>
                                            <a href="#" class="text-primary" style="font-size:20px;">Face Biometric</a>
                                        </h3>
                                            <p >A Face Time Attendance System uses facial recognition to automatically track and record attendance, ensuring accurate and secure timekeeping.
                                            </p><br>
                                            <br>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Services End -->
                </div>

                </div>
            </div>
        </div>
    </section>
    <!--page section end-->
@endsection
