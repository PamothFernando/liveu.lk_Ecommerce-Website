@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Parking Management') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Parking Management') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.parkingManagement') }}">{{ localize('Parking Management') }}</a></li>
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
                .dashed-box{
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
            </style>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="blog-details-content bg-white rounded-2 py-6 px-5" style="text-align: center;">
                        
                        <!--section1 start-->
                        <div>
                                <h3 class="text-primary" style="text-align: center;">
                                    We are ZKTECO  Sri  Lanka  Parking barrier  Supplier 
                                </h3>
                                <br>
                                <br>
                                <div class="container-fluid-dashed-box">
                                    <div class="row">
                                        <div class="col-8">
                                            <p style="text-align:left;">
                                                Live U (Pvt) Ltd<br>
                                                Sri Lanka's Leading Experts in Parking Barrier Installations<br>
                                                <br>

                                                At Live U (Pvt) Ltd, we take pride in offering the most skilled and professionally trained engineers for parking barrier installations. Whether you require a new setup or maintenance services, our team ensures precision, efficiency, and top-notch service quality.
                                                <br>
                                                <br>
                                                For more information, please contact us:<br>
                                                📞 Hotline: +94 11 77 8000<br>
                                                📱 Mobile: +94 710 331 718 / +94 710 331 714<br>
                                                <br>
                                                Let us provide you with reliable and professional solutions tailored to your parking system needs.
                                            </p>
                                        </div>
                                        <div class="col-4">
                                            <img src="/public/assets/images/barriers.png" class="img-fluid" alt="" style="width:100%; height:auto;">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        

                        <!--section1 end-->
                        <br>
                        <hr>
                        <br>
                        <!--section2 start-->
                        <div class="container-fluid-dashed-box">
                                <h3 class="text-primary" style="text-align: center;">
                                    ZKBioSecurity Parking Management System 
                                </h3>
                                <p>
                                Efficient Vehicle Management with Advanced Technology<br>
                                <br>
                                With the rapid development of the global economy and steadily improving living standards, the number of vehicles worldwide has grown significantly. To address this demand, parking lots and vehicle management areas are increasingly adopting advanced technologies such as License Plate Recognition (LPR) systems and Ultra-High Frequency (UHF) products.
                                <br>
                                <br>
                                These cutting-edge solutions streamline vehicle management by enabling automatic license plate identification, ensuring fast and seamless vehicle access. This not only optimizes parking operations but also enhances the overall user experience by providing unmatched convenience and efficiency.
                                </p>
                                <br>
                                <br>
                                
                            <div>
                            <img src="/public/assets/images/parking1.png" class="img-fluid" alt="" style="width: 700px;">
                            </div>
                        </div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    Automatic Vehicle Recognition (With UHF Reader and UHF Tag)
                                </h6>
                                <p style="text-align:left;">
                                Its operation starts when a user with the passive tag drive through the UHF reader located at the entrance of the parking lot. The UHF reader will recognize the tag. The carpark barrier will lift up for access upon valid recognition. If not, access will be denied.
                                </p>
                                <div>
                                    <img src="/public/assets/images/parking2.png" class="img-fluid" alt="" style="">
                                </div>
                            </div>    
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    Automatic Number Plates Verification (With LPR Camera)
                                </h6>
                                <p style="text-align:left;">
                                    LPR technology is an application of computer video image recognition technology in license plate identification area. Its operation starts when the vehicle is located at the entrance of the parking lot, the LPR Camera will scan on the license plate character, and its recognition technology will identify the license plate number, color and other information. If the number on the license plate is valid, the car park barrier will lift for access, otherwise, no access will be allowed.
                                </p>
                                <div>
                                    <img src="/public/assets/images/parking3.png" class="img-fluid" alt="" style="">
                                </div>
                            </div>    
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    Dual Number Plate Authentication
                                </h6>
                                <p style="text-align:left;">
                                (UHF and LPR Based Two Level Authentication System for Vehicles)<br>
                                Dual number plate authentication is a Multi-factor authentication to use of several authentication techniques together. Once the vehicle is located at the entrance of the carpark lot, both of the UHF reader and LPR Camera will start to recognise the UHF Tag and the number plate on the vehicle. If the verification of the number plate and the UHF tag is valid, the car park barrier will lift for access, otherwise no access will be allowed.
                                </p>
                                <div>
                                <img src="/public/assets/images/parking4.png" class="img-fluid" alt="" style="">
                                </div>
                            </div>    
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    Blacklist and Whitelist Management
                                </h6>
                                <p style="text-align:left;">
                                Car Park System management Software includes Role and Black and White Lists.<br>
                                If the cars are pre-set on the white list, including _re trucks, police cars, and privileged cars, can enter and exit the parking lot free of charge. Otherwise, cars on the black list are not allowed to enter or exit the parking lot.
                                </p>
                                <div>
                                <img src="/public/assets/images/parking5.png" class="img-fluid" alt="" style="width:500px;item-align:center;">
                                </div>
                            </div>    
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    UHF Tag
                                </h6>
                                <p style="text-align:left;">
                                There are two kinds of UHF tags in this long distance fixed vehicle access management application.
                                </p>
                                <div>
                                <img src="/public/assets/images/parking6.png" class="img-fluid" alt="" style="width:800px;item-align:center;">
                                </div>
                            </div>    
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    UHF Reader
                                </h6>
                                <p style="text-align:left;">
                                    The UHF RFID reader is an RFID long-range proximity card reader which can simultaneously read multiple passive UHF tags at ranges up to 12m. The reader is waterproof and is suitable for use in a wide range of RFID applications, such as transport management, vehicle management, car parking, production process control, and access control.
                                </p>
                                <div>
                                <img src="/public/assets/images/parking7.png" class="img-fluid" alt="" style="">
                                </div>
                            </div>
                            <div>
                            <br>
                            <hr>
                            <br>
                            <div class="dashed-box">
                                <h6 class="text-primary" style="text-align:left;">
                                    License Plate Recognition (LPR) Camera
                                </h6>
                                <p style="text-align:left;">
                                    LPR technology is an application of computer video image recognition technology in license plate identification area. This technology through the license plate crawling, image pre-processing, feature extraction, license plate character recognition technology to identify the license plate number, color and other information.
                                </p>
                                <div>
                                <img src="/public/assets/images/parking8.png" class="img-fluid" alt="" style="width:800px;item-align:center;">
                                </div>
                            </div>
                            <div>
                            <br>
                            <hr>
                            <br>
                            <!-- Services Start -->
                            <div class="container-fluid-dashed-box service py-5">
                                <div class="container py-5">
                                    <div class="row g-4">
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                            <div class="service-item">
                                                <div class="service-img">
                                                    <img src="/public/assets/images/parkings1.png" class="" alt="Image" style="width:100px;">
                                                </div>
                                                <div class="rounded-bottom p-4">
                                                    <a href="#" class="h4 d-inline-block mb-4"></a>
                                                    </p>
                                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="http://liveu.lk/login">Project Inquiry</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                            <div class="service-item">
                                                <div class="service-img">
                                                    <img src="/public/assets/images/parkings2.png" class="" alt="Image" style="width:100px;">
                                                </div>
                                                <div class="rounded-bottom p-4">
                                                    <a href="#" class="h4 d-inline-block mb-4"></a>
                                                    </p>
                                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="https://liveu.lk/register">Become Our Partner</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                            <div class="service-item">
                                                <div class="service-img">
                                                    <img src="/public/assets/images/parkings3.png" class="" alt="Image" style="width:100px;">
                                                </div>
                                                <div class="rounded-bottom p-4">
                                                    <a href="#" class="h4 d-inline-block mb-4"></a>
                                                    </p>
                                                    <a class="btn btn-primary rounded-pill py-2 px-4" href="https://liveu.lk/pages/contact-us">Contact Us</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Services End -->
                        </div>
                        <!--section2 end-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page section end-->
@endsection
