@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('FIBER OPTIC Solution') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('FIBER OPTIC Solution') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.fiberOptic') }}">{{ localize('FIBER OPTIC Solution') }}</a></li>
            </ol>
        </nav>
    </div>
@endsection

@section('contents')
    <!--breadcrumb-->
    @include('frontend.default.inc.breadcrumb')
    <!--breadcrumb-->

    <!--page section start-->
    <section class="blog-details py-5" style="width:100%;">
        <style>
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
                    <div class="blog-details-content bg-white rounded-2 py-6 px-5">
                        
                        <div class="container">
                            <div class="row">
                                <div class="col">
                                    <h3 style="text-align:center;">
                                        Are you in need of professional<br><span class="text-primary">Fiber Fusion Splicing Services</span> & <span class="text-primary">Expert Fiber Optic Work ?</span>
                                    </h3>
                                    <div class=container-fluid-dashed-box>
                                        <div class="row">
                                            <div class="col" style="margin-top:50px;">
                                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                                                    <h4 class="text-primary">
                                                        Comparable in quality and performance to premium imported models.
                                                    </h4>
                                                    <h1 class="display-5 mb-4"></h1>
                                                    <h5>Live U (Pvt) Ltd</h5>
                                                </div>
                                                <div class="row">
                                                    <div class="col">
                                                        <div class="button-row" style="text-align:center;">
                                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('home.pages.contactUs') }}">Contact Us</a>
                                                            <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ route('products.index') }}">Explore Now</a>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                            <div class="col text-end">
                                                <img src="/public/assets/images/thinking1.png" alt="Best Price In The Market" class="img-fluid" style="width:300px;">
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>
                        </div>
                        <br>
                        <br>
                        <br>
                        <!--Some of Best Features section start-->
                        <div>

                            <h4 class="text-primary" style="text-align:center;">Some of the best features</h4>
                            <h6 style="text-align:center;">We have Fiber Cable and all accessories, media convertor, fiber switchers, terminal boxes more..</h6>


                                        <div class="container">
                                            <div class="row" style="width:100%;">
                                                <div class="col-4"><img src="/public/assets/images/fibers1.png" class="img-fluid" alt="" style="width:100%; height:auto;align:right;margin-top:100px;"></div>
                                                    <div class="col-8">
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title" style="text-align: center;">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Lighting For Splicer</b></p>
                                                                <p style="text-align: center;">Rrefers to tools designed for easy use in low light.</p>
                                                            </div>
                                                        </div>   
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Can charge the phone</b></p>
                                                                <p style="text-align: center;">Avoid using mobile phones without power on construction sites.</p>
                                                            </div>
                                                        </div>
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Lithium Battery</b></p>
                                                                <p style="text-align: center;">Charging time < 3.5 hours continuous splicing and heating about 240 times</p>
                                                            </div>
                                                        </div>
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>26 Patents</b></p>
                                                                <p style="text-align: center;">Passed CE FEE ROHS ISO9001 international certification</p>
                                                            </div>
                                                        </div> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                        <!--Some of Best Features section End-->
                        <br>
                        <br>
                        <!--The Tool Box section start-->
                        <div>
                            <h4 class="text-primary" style="text-align:center;">The Tool Box</h4>
                            <h6 style="text-align:center;">Comes with a stool to facilitate the construction workers</h6>
                            <p style="text-align:center;">Patent no.: ZL 2016 3 0402585.X</p>
                                        <div class="container">
                                            <div class="row" style="width:100%;">
                                                <div class="col-4"><img src="/public/assets/images/fiber-x-slider-1.png" class="img-fluid" alt="" style="width:100%; height:auto;align:right;margin-top:100px;"></div>
                                                    <div class="col-8">
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title" style="text-align: center;">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>How Many Days For Deliver</b></p>
                                                                <p style="text-align: center;">We will take 7 days after make the payment. Deliver will be dispatch within 24 hours</p>
                                                            </div>
                                                        </div>
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Is there 24*7 Customer Support?</b></p>
                                                                <p style="text-align: center;">Live U (Pvt) Ltd Offer 24/7 customer support for all customer and dealers VIA support Ticket / Live Chat / Call Centre</p>
                                                            </div>
                                                        </div> 
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Do we Replace Electrode?</b></p>
                                                                <p style="text-align: center;">Electrode replacement must use the genuine & original electrode designed for this machine from factory. When the number of the electrode is used close to 3000 times, the machine will remind you to replace it. When it reaches to 3000 times.</p>
                                                            </div>
                                                        </div>
                                                        <div class="dashed-box" style="margin-left: 45px;">
                                                            <div class="team-title">
                                                                <p class="mb-0" style="text-align: center; color:green; size: 20px;"><b>Free Software?</b></p>
                                                                <p style="text-align: center;">Yes we offer free software for life time.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                        <div>
                        <!--The Tool Box section End-->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--page section end-->
@endsection