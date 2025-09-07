@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('CCTV Solutions') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('CCTV Solutions') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.cctv') }}">{{ localize('CCTV Solutions') }}</a></li>
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
                .container-dashed-box{
                border: 2px dashed orange; /* Orange dashed border */
                border-radius: 5px;        /* Rounded corners */
                padding: 10px;            /* Space inside the box */
                margin: 20px 0;           /* Space outside the box */
                position: relative;       /* Allows precise positioning of the text */
                opacity: 1;
                width: 100%;
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
                .blog-details-content-dashed-box{
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
                    <div class="container-fluid-dashed-box">
                        <p><h4>CCTV Camera & IP Camera</h4></p>
                        <div class="table-responsive">
                            <table style="font-family: arial, sans-serif; border-collapse: collapse; width: 100%;">
                                <tr style="text-align: center;background-color: #dddddd;">
                                    <th style="text-align: center; padding: 8px;">Surveillance Benefits</th>
                                    <th style="text-align: center; padding: 8px;">Our Specialty</th>
                                    <th rowspan="7" style="background-color:white;"><img src="/public/assets/images/cctv.jpg" class="img-fluid" alt="" style="width:auto; height:auto;align:right;">
                                    </th>
                                </tr>
                                <tr>
                                    <td style=" text-align: left; padding: 8px;">Prevent Theft and Illegal Activities</td>
                                    <td style=" text-align: left; padding: 8px;">World Number One CCTV Product</td>
                                </tr>
                                <tr style="background-color: #dddddd;">
                                    <td style=" text-align: left; padding: 8px;">Savings on Security</td>
                                    <td style=" text-align: left; padding: 8px;">We Direct Import All CCTV Product</td>
                                </tr>
                                <trbackground-color: #dddddd;>
                                    <td style=" text-align: left; padding: 8px;">Solid Support for Claims</td>
                                    <td style=" text-align: left; padding: 8px;">Free One Year Support</td>
                                </tr>
                                <tr style="background-color: #dddddd;">
                                    <td style=" text-align: left; padding: 8px;">Ensure Security Management</td>
                                    <td style=" text-align: left; padding: 8px;">Free One Year Insurance</td>
                                </tr>
                                <tr>
                                    <td style=" text-align: left; padding: 8px;">Shore Up Legal Aspects/Cases</td>
                                    <td style=" text-align: left; padding: 8px;">We have Experience With Above 10 Year in Field</td>
                                </tr>
                                <tr style="background-color: #dddddd;">
                                    <td style=" text-align: left; padding: 8px;">Save Travel, Time and Money</td>
                                    <td style=" text-align: left; padding: 8px;"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <div class="container-dashed-box my-5">
                        <div class="row align-items-center">
                            <!-- Image Section -->
                            <div class="col-12 col-md-6 mb-4 mb-md-0">
                                <img src="/public/assets/images/cctv2.jpg" class="img-fluid" alt="CCTV Image" style="width: 50%; height: auto;">
                            </div>

                            <!-- Text Section -->
                            <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center">
                                <h2 class="mb-4">100% FREE Mobile View</h2>
                                <br>
                                <p class="mb-4">
                                    Once you have set up your security camera system by connecting the cameras to the DVR or NVR, and you have video displaying from each camera on a monitor, the next step is to set up remote viewing for your security cameras. All of our security camera recorders come with a built-in web server that is always functional when the recorder is powered up, and allows viewing over the local area network (LAN) or over the internet.
                                </p>
                                <br>
                                <p class="fw-bold">
                                    For further assistance, contact our Support Team at <br>+94 70 3000 600.
                                </p>
                                <br>
                                <a class="btn btn-primary rounded-pill py-2 px-4" href="tel:+94117780000" title="Call +94117780000">Contact Us</a>
                            </div>

                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!-- Services Start -->
                    <div class="container-fluid-dashed-box service py-5">
                        <div class="container py-5">
                            <!-- Header Section -->
                            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                <h2 class="text-primary">
                                    Live U (Pvt) Ltd
                                </h2>
                                <h1 class="display-5 mb-4"></h1>
                                <h4>Sri Lankan No 1 Security Service Provider</h4>
                            </div>
                            <!-- Services Section -->
                            <div class="row g-4">
                                <!-- Service Item 1 -->
                                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="service-item text-center">
                                        <div class="service-img mx-auto">
                                            <img src="/public/assets/images/money.png" alt="Best Price In The Market" class="img-fluid" style="width: 150px; height: 150px;">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                            <h3>
                                            <a href="#" class="text-primary" style="font-size:20px;">Best Price In The Market</a>
                                            </h3>
                                            <p>Unbelievable price and best quality products</p>
                                            <br>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="https://mail.google.com/mail/?view=cm&fs=1&tf=1&to=info@liveu.lk">E-mail Us</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Item 2 -->
                                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-item text-center">
                                        <div class="service-img mx-auto">
                                            <img src="/public/assets/images/consulting.png" alt="Expert Project Consultant" class="img-fluid" style="width: 200px; height: 150px;">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                        <h3>
                                            <a href="#" class="text-primary" style="font-size:20px;">Expert Project Consultant</a>
                                        </h3>
                                            <p>Our senior leadership team will provide the best solutions.</p>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="tel:+94117780000" title="Call +94117780000">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Service Item 3 -->
                                <div class="col-12 col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-item text-center">
                                        <div class="service-img mx-auto">
                                            <img src="/public/assets/images/thinking.png" alt="Ask Questions" class="img-fluid" style="width: 150px; height: 150px;">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                            <h3>
                                                <a href="#" class="text-primary" style="font-size:20px;">Ask Questions</a>
                                            </h3>
                                            <p>We have a 24/7 Support Team and a support ticket system.</p>
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Open Ticket</a>
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
