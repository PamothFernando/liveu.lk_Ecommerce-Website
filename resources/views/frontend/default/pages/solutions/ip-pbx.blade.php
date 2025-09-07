@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('IP PBX Solutions') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('IP PBX Solutions') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.ippbx') }}">{{ localize('IP PBX Solutions') }}</a></li>
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
                </style>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                <div class="blog-details-content bg-white rounded-2 py-6 px-5">

                    <div class="container-fluid feature py-5">
                        <div class="container py-5">
                            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                <h4 class="text-primary">More than IP-Telephony</h4>
                                <br>
                                <p class="mb-0">
                                    ZYCOO CooVox series are more than VOIP IP PBX. They come with everything you need to upgrade or set up a new IP Telecommunication system, as desktop IP-Phone, smart mobile app and analog expansion box are also available in ZYCOO. Now you can set up your IP Telecommunication system with worry-free ZYCOO CooVox series.
                                </p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="container-dashed-box">
                        <div class="row">
                            <div class="col">
                                <h2 style="align-text:left; text-align:center;">Modular Design</h2>
                                <br>
                                <p>
                                    With unique modular design, CooVox series provide flexible telephony interfaces combination while allowing for future scalability. Besides the built-in rich SIP capabilities, CooVox allow you to decide what types of extensions and physical trunks you need in your telephone system.
                                </p>
                                <ul style="align-text:left; margin-left:10px;">
                                    <li style="list-style-type: disc;">Excellent VoIP Voice quality.</li>
                                    <li style="list-style-type: disc;">Zero configuration needed when connecting with ZYCOO CooVox series IP-PBX.</li>
                                    <li style="list-style-type: disc;">Come with 2 kinds of models fit whatever your need.</li>
                                </ul>  
                            </div>
                            <div class="col">
                            <img src="/public/assets/images/ip-phone.png" alt="Best Price In The Market" class="img-fluid">
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
                                <h4 class="text-primary">What We Are Offering</h4>
                                <h1 class="display-5 mb-4"></h1>
                            </div>
                            <div class="row g-4">
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/ip1.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4" >
                                            <h3 style="text-align:center;">
                                                <a href="#" class="text-primary" style="font: size 24px;">Built in CRM</a>
                                            </h3>
                                            <p class="mb-4" style="text-align:center;">CooCenter is built-in a customizable CRM System which is possible to record the clients details like Name, Company, Contact Number and Email. This enable you to know more about your clients, and also schedule auto call follow-up to agents easily.
                                            </p>
                                            <div style="display: flex; justify-content: center;">
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}" style="margin-top: 80px;">Explore Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.4s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/ip2.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4">
                                            <h3 style="text-align:center;">
                                                <a href="#" class="text-primary" style="font: size 24px;">CooCall</a>
                                            </h3>
                                            <p class="mb-4" style="text-align:left;">
                                            <ul style="align-text:left; margin-left:5px;">
                                                <li style="list-style-type: disc;">Integrate iOS & Android mobile phones with CooVox series IPPBX.</li>
                                                <li style="list-style-type: disc;">Enhance work efficiency with consistent in-office experience and powerful collaboration features.</li>
                                                <li style="list-style-type: disc;">Reduce mobile voice charges with VoIP phone calls made through the company IP PBX.</li>
                                                <li style="list-style-type: disc;">Never miss a call when working away from your office.</li>
                                            </ul>
                                            </p>
                                            <div style="display: flex; justify-content: center;">
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.6s">
                                    <div class="service-item">
                                        <div class="service-img">
                                            <img src="/public/assets/images/ip3.png" class="img-fluid rounded-top w-100" alt="Image">
                                        </div>
                                        <div class="rounded-bottom p-4" >
                                            <h3 style="text-align:center;">
                                                <a href="#" class="text-primary" style="font: size 24px;">EX 16S</a>
                                            </h3>
                                            <p class="mb-4" style="text-align:left;">
                                            <ul style="align-text:left; margin-left:5px;">
                                                <li style="list-style-type: disc;">Allow you to use your existing analog phone as an IP-PBX extension with cost savings.</li>
                                                <li style="list-style-type: disc;">Dedicatedly designed for CooVox IP PBX to expand 16 FXS ports for connecting with analog phones or Fax machines.</li>
                                                <li style="list-style-type: disc;">Ultra-Zero-Touch Installation with CooVox IP PBX, license free and scalable to stack more EX16S units.</li>
                                            </ul>
                                            </p>
                                            <div style="display: flex; justify-content: center;">
                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <hr>
                    <br>
                    <!-- Services End -->
                    <div class="container-dashed-box">
                        <div class="row">
                        <h2 style="text-align:center;">Call Center Features</h2>
                            <div class="col">
                            <img src="/public/assets/images/service_details.png" alt="Best Price In The Market" class="img-fluid">
                            </div>
                            <div class="col">
                                <ul style="align-text:left;">
                                    <li style="list-style-type: disc;">IVR.</li>
                                    <li style="list-style-type: disc;">Caller ID.</li>
                                    <li style="list-style-type: disc;">Video Call.</li>
                                    <li style="list-style-type: disc;">Paging and Intercom.</li>
                                    <li style="list-style-type: disc;">Follow Me.</li>
                                    <li style="list-style-type: disc;">One Number Stations.</li>
                                    <li style="list-style-type: disc;">Music on Ringback.</li>
                                    <li style="list-style-type: disc;">Call Queue.</li>
                                    <li style="list-style-type: disc;">Video Call.</li>
                                    <li style="list-style-type: disc;">PIN Set</li>
                                    <li style="list-style-type: disc;">3-Way Calling.</li>
                                    <li style="list-style-type: disc;">Conference Calls.</li>
                                    <li style="list-style-type: disc;">Call Parking.</li>
                                    <li style="list-style-type: disc;">Call Spy.</li>
                                    <li style="list-style-type: disc;">Time Conditions.</li>
                                </ul>  
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
