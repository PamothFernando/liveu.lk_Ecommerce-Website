@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('RFID Library Technologies') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('RFID Library Technologies') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.librarysystems') }}">{{ localize('RFID Library Technologies') }}</a></li>
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
                <div class="blog-details-content bg-white rounded-2 py-6 px-5" style="text-align: center;">
                    <p><h4 class="text-primary">Implementation for libraries</h4></p>
                    <p>We are library specialists offering RFID for library, RFID Tags, RFID solution for library Management, RFID reader for library, RFID Automation for libraries, Software, Products and Services for libraries of various kinds.</p>
                    <div class="container-fluid-dashed-box">   
                        <div class="table-responsive">
                                <p><h4 class="text-primary">RFID Libraries</h4></p>
                        </div>
                        <div class="container my-5">
                            <div class="row align-items-center">
                                <!-- Image Section -->
                                <div class="col-12 col-md-6 mb-4 mb-md-0">
                                    <img src="/public/assets/images/library.png" class="img-fluid" alt="CCTV Image" style="width: 100%; height: auto;">
                                </div>

                                <!-- Text Section -->
                                <div class="col-12 col-md-6 text-center d-flex flex-column align-items-center">
                                    <p class="mb-4">
                                    We Live U (Pvt) Ltd offers solutions that fit seamlessly into the environment. Whether you use RFID or just barcodes, your stock can be made available 24/7, and returns dropped off at one of our automated units – even if the building is closed. Using RFID to return items is both simple for your users and more reliable for your staff as items can be sorted into any of 255 categories for re-shelving, reservation, or disposal.
                                    </p>
                                    <p class="mb-4">
                                        <ul style="text-align:left;">
                                            <li style="list-style-type: disc;">Libraries looking to improve the overall customer experience.</li>
                                            <li style="list-style-type: disc;">Libraries interested in improving the workflow and movement of materials.</li>
                                            <li style="list-style-type: disc;">Libraries focused on inventory and collection management solutions.</li>
                                            <li style="list-style-type: disc;">Libraries looking to streamline high circulation activities.</li>
                                            <li style="list-style-type: disc;">Libraries who are focused on reducing staff time needed for materials handling.</li>
                                        </ul>
                                    </p>
                                    <br>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div style="text-align: center;">
                        <h2 class="text-primary" style="text-align: center;">Implementation for Libraries</h2>
                        <br>
                        <div style="position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; margin: 0 auto;">
                            <iframe 
                                src="https://www.youtube.com/embed/5V4eJjLYvMk?si=EOnF6sbvC3JqKHbh" 
                                title="YouTube video player" 
                                frameborder="0" 
                                style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;" 
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                                referrerpolicy="strict-origin-when-cross-origin" 
                                allowfullscreen>
                            </iframe>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="container-fluid-dashed-box"> 
                        <nav class="tabs">
                                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                        <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">RFID Technology</a>
                                        <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">RFID for LIBRARY</a>
                                    </div>
                        </nav>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col">
                                                <br>
                                                <br>
                                                    The idea of RFID can be simplified to that of an digital barcode and can be used to pick out, tune or locate library holdings on the move. Its eases the desk and in the every day stock renovation. This technology include smart RFID labels, hardware and software program. RFID provides libraries with extra powerful way of managing their collections at the same time as offering more customer support to their purchasers
                                                </div>
                                                <div class="col">
                                                    <img src="/public/assets/images/Basic-RFID-Systen.jpg" alt="Best Price In The Market" class="img-fluid" alt="CCTV Image" style="width: 75%; height: auto;">
                                                </div>
                                            </div>
                                        </div> 
                                    </div>


                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col">
                                                        <br>
                                                        <br>
                                                    <ul style="text-align:left;">
                                                        <li style="list-style-type: disc;">RFID tags replace both the EM security strips and Barcode.</li>
                                                        <li style="list-style-type: disc;">Simplied patron self check-out / check-in.</li>
                                                        <li style="list-style-type: disc;">Ability to handle material without exception for video and audio tapes.</li>
                                                        <li style="list-style-type: disc;">Radio Frequency anti-theft detection is innovative and safe.</li>
                                                        <li style="list-style-type: disc;">High-speed inventory and identify items which are out of proper order.</li>
                                                        <li style="list-style-type: disc;">Long-term development guarantee when using Open Standard.</li>
                                                    </ul>  
                                                    </div>
                                                    <div class="col">
                                                        <img src="/public/assets/images/RFID-technology-for-library-management.png" alt="Best Price In The Market" class="img-fluid" alt="CCTV Image" style="width: 75%; height: auto;">
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