@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Guard Tour Systems') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Guard Tour Systems') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.guardtour') }}">{{ localize('Guard Tour Systems') }}</a></li>
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
            /*** Service Start ***/
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
            /*** Service End ***/
        </style>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <div class="blog-details-content bg-white rounded-2 py-6 px-5">
                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                            <h4 class="text-primary">World No.01</h4>
                            <h3 >Guard Tour System</h3>
                            <h5 >You can now make purchases directly from Live U</h5>
                        </div>
                        <div class="container-fluid-dashed-box">
                            <div style="position: relative; width: 100%; padding-bottom: 56.25%; overflow: hidden;">
                                <iframe 
                                    style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                    src="https://www.youtube.com/embed/te6FGT4Phbk?si=fbp3VDlow2Y8YbtP"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                    referrerpolicy="strict-origin-when-cross-origin"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        </div>    
                        <br>
                        <hr>
                        <!-- Services Start -->
                        <div class="container-fluid-dashed-box service py-5">
                            <div class="container py-5">
                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                    <h4><p class="text-primary">Looking Original Guard Tour System</p></h4>
                                    <p class="mb-0">Live U (Pvt) Ltd Sole agent of all JWM  Guard Tour and Software  & all products.
                                    </p>
                                </div>
                                <div class="row g-4" style="text-align:center;">
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <img src="/public/assets/images/Guard1.png" class="img-fluid rounded-top w-100" alt="Image">
                                            </div>
                                            <div class="rounded-bottom p-4">
                                                <a href="#" class="h4 d-inline-block mb-4">GPS Tracking Watchman Clocking System</a>
                                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <img src="/public/assets/images/Guard2.png" class="img-fluid rounded-top w-100" alt="Image">
                                            </div>
                                            <div class="rounded-bottom p-4">
                                                <a href="#" class="h4 d-inline-block mb-4">3G RFID GPS Guard Tour System with Voice Call</a>
                                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                        <div class="service-item">
                                            <div class="service-img">
                                                <img src="/public/assets/images/Guard3.png" class="img-fluid rounded-top w-100" alt="Image">
                                            </div>
                                            <div class="rounded-bottom p-4">
                                                <a href="#" class="h4 d-inline-block mb-4">RFID Wifi Walkie-Talkie Guard Tour Patrol</a>
                                                <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Services End -->
                        <br>
                        <hr>
                        <br>
                        <div class="container">
                            <div class="container-fluid-dashed-box">
                                <div class="row">
                                    <div class="col-6" style="text-align:left;">
                                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                            <h4><p class="text-primary" style="text-align:left;margin-top:20px;">What Is Guard Tour System?</p></h4>
                                            <p class="mb-0" style="text-align:left;">Guard tour system is a variety of access control system, is a kind of flexible use of the access control system. It is mainly used in schools, hospitals, factories, forestry and any industry which need to ensure safety. The purpose is to help the enterprise leadership or management personnel carry our effective supervision and management to the patrol staff and working records through the system. At the same time, the system can also report more details of patrolling line in a certain period.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="position: relative; width: 100%; padding-bottom: 56.25%; overflow: hidden; height: 0;">
                                            <iframe 
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                src="https://www.youtube.com/embed/te6FGT4Phbk?si=5zMWse4AFbWGEjPW"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <br>
                            <hr>
                            <br>
                            <div class="container-fluid-dashed-box">
                                <div class="row">
                                    <div class="col-6" style="text-align:left;">
                                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                            <h4><p class="text-primary" style="text-align:left;margin-top:20px;">Three benefits of guard tour system</p></h4>
                                            <p class="mb-0" style="text-align:left;">
                                            Simplicity & Convenience<br>
                                            <br>
                                            In the past, security guards relied on paper notebooks to log checkpoints, leading to inefficiencies for both guards and their managers, who often dealt with disorganized notes, constant calls, and confusing reports. 
                                            <br>
                                            Modern guard tour systems streamline this process by enabling guards to scan designated checkpoints, automatically recording patrol times and activities. In today’s data-driven world, where decisions from weather predictions to personal choices are based on data, these systems enhance efficiency, accuracy, and convenience for both guards and management.             
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;margin-top:50px;">
                                            <iframe 
                                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                                src="https://www.youtube.com/embed/HeGrqRYXEIQ?si=m0cOVRYu2oifoy4Y"
                                                title="YouTube video player"
                                                frameborder="0"
                                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                                referrerpolicy="strict-origin-when-cross-origin"
                                                allowfullscreen>
                                            </iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>    
                            <br>
                            <hr>
                            <br>
                            <div class="container-fluid-dashed-box">
                                <div class="row">
                                    <div class="col-6" style="text-align:left;">
                                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                            <h4><p class="text-primary" style="text-align:left;margin-top:20px;">Timeliness & Reliability</p></h4>
                                            <p class="mb-0" style="text-align:left;">
                                            An advanced guard tour system offers significant advantages over traditional patrolling methods. It ensures reliability through real-time tracking, uploading data instantly as checkpoints are scanned, enabling remote monitoring and management via cloud-based networks—ideal for large-scale enterprises. The system integrates GPS to map guard locations, record patrol routes, and enhance guard safety. Unlike manual records prone to errors or manipulation, the technology automates data collection, organizes it into reports, and provides schedule analysis for seamless oversight and informed decision-making.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;margin-top:20px;">
                                        <iframe 
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                            src="https://www.youtube.com/embed/nbrE7tGQBiY?si=TKiUcAy-o8dcgxBM"
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <hr>
                            <br>
                            <div class="container-fluid-dashed-box">
                                <div class="row">
                                    <div class="col-6" style="text-align:left;">
                                        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                            <h4><p class="text-primary" style="text-align:left;margin-top:20px;">
                                            Less Cost & More Efficiency </p></h4>
                                            <p class="mb-0" style="text-align:left;">
                                            Recent frequent fire accidents, including the tragic one at the Notre Dame de Paris, highlight the importance of proactive safety measures. Such incidents can cause irreversible damage to historically significant buildings, erasing cultural heritage. However, early detection of potential risks could significantly minimize such losses. Upgrading the guard tour system is essential in this regard, as it enables real-time monitoring, early identification of hazards, and swift responses. With advanced technology, security personnel can promptly detect abnormalities, ensuring a timely intervention that can protect both property and cultural assets from catastrophic damage.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;">
                                    <div style="position: relative; width: 100%; padding-bottom: 56.25%; height: 0; overflow: hidden;margin-top:50px;">
                                        <iframe 
                                            style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
                                            src="https://www.youtube.com/embed/EtEWsjAg-Hg?si=OvNw3AWeTd_etT5w"
                                            title="YouTube video player"
                                            frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            referrerpolicy="strict-origin-when-cross-origin"
                                            allowfullscreen>
                                        </iframe>
                                    </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--page section end-->
@endsection
