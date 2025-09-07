@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Software Solution') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Software Solution') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.softwaresolutions') }}">{{ localize('Software Solution') }}</a></li>
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
                            <!-- Services Start -->
                            <div class="container-fluid service py-5">
                                <div class="container py-5">
                                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                        <h4 class="text-primary">Our Services</h4>
                                        <h1 class="display-5 mb-4">We Services provided best offer</h1>
                                        <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                                        </p>
                                    </div>
                                    <div class="container-fluid-dashed-box">
                                        <div class="row g-4" style="text-align:center;margin-top:10px;margin-bottom:10px;">
                                            <div class="col" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/ERP.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <a href="#" class="text-primary">ERP Systems<br></a><br>
                                                        </h4>
                                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/HRM.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <a href="#" class="text-primary">HRM Systems<br></a><br>
                                                        </h4>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/ERP.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <a href="#" class="text-primary">WEB DESIGN & DEVELOPMENT</a><br>
                                                        </h4>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/ERP.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <h4>
                                                            <a href="#" class="text-primary">Bio Metric Software</a><br>
                                                        </h4>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="#">Learn More</a>
                                                    </div>
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
