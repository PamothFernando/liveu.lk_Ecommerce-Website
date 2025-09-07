@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Hotel Management') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
<div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Hotel Management') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.solutions.hotelmanagement') }}">{{ localize('Hotel Management') }}</a></li>
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
                            <!-- Features Start -->
                            <div class="container-fluid feature py-5">
                                <div class="container py-5">
                                    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" >
                                        <h4 class="text-primary">Hotel Locking System By Live U</h4>
                                            <div class="container-fluid-dashed-box text-center">
                                                <div class="row">
                                                    <div class="col-7">
                                                        <p style="text-align:left; margin-top:50px;">
                                                        We specialize in delivering top-quality web-based software solutions and a comprehensive range of hotel locking systems.<br>For more information, please contact us at:<br>
                                                        📞 +94 703 000 600<br>
                                                        📞 +94 710 331 718<br>
                                                        📞 +94 710 331 714<br>
                                                        </p>
                                                        <br>
                                                        <a class="btn btn-primary rounded-pill py-2 px-4" href="http://127.0.0.1:8000/pages/contact-us">Contact Us</a>
                                                    </div>
                                                    <div class="col-5">
                                                        <img src="/public/assets/images/Hotel.png" class="img-fluid" alt="CCTV Image" style="">
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="container-fluid-dashed-box">
                                <h4> <p class="text-primary" style="text-align:center;">Hotel Management Solution</p></h4>
                                <!-- Services Start -->
                                <div class="container-fluid service py-5">
                                    <div class="container py-5">
                                        <div class="row row-cols-5" style="text-align:center;">
                                            <div class="col wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/Hotel1.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <a href="#" class="text-primary">Hotel Management Solution<br><br></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/Hotel2.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <a href="#" class="text-primary">Elevator Control With Designated Level<br><br></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col wow fadeInUp" data-wow-delay="0.6s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/Hotel3.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <a href="#" class="text-primary">Web Based Reservation Management<br><br></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col wow fadeInUp" data-wow-delay="0.2s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/Hotel4.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <a href="#" class="text-primary">All Users Report Lost Card<br><br></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col wow fadeInUp" data-wow-delay="0.4s">
                                                <div class="service-item">
                                                    <div class="service-img">
                                                        <img src="/public/assets/images/Hotel5.png" class="img-fluid rounded-top w-100" alt="Image">
                                                    </div>
                                                    <div class="rounded-bottom p-4">
                                                        <a href="#" class="text-primary">Advance Payment Option of Consumption Management</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Services End -->
                            </div>
                            <br>     
                            <hr>
                            <br>
                            <div>
                                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 100%;">
                                    <div class="container-fluid-dashed-box">
                                        <h3><p class="text-primary">Program Details</p></h3>
                                            <p class="mb-0">ZKBioSecurity Hotel Management System is specially designed to meet the needs of small-medium hotels, maximum security, individual style and low operation costs. It is allowing for comprehensive access control and system management, but offers you an easy “one-click” installation.
                                            </p>
                                            <br>
                                            <h5 style="text-align:left;margin-left:100px;">Key Features:</h5>
                                            <p style="text-align:left;margin-left:100px;">
                                            • Web-based Multi-location Hotel Management Solution.<br>

                                            • Seamless Integration with Access Control and Elevator module in ZKBioSecurity total Solution.<br>

                                            • Check-in, check-out and reservation for hotel guest.<br>

                                            • Create master, building, door and other employee cards.<br>

                                            • Create record card to get the unlock logs from the hotel lock.<br>

                                            • Matrix design allows you to see the room status.<br>

                                            • Advance Payment Option - Hotel Consumption Management.<br>

                                            • Room usage report sent automatically from system.<br>

                                            • Changeable company's logo on the printing list.<br>
                                            </p>
                                            <img src="/public/assets/images/Hotel6.png" class="img-fluid" alt="CCTV Image" style="">
                                    </div>
                                    <hr>
                                    <div class="container-fluid-dashed-box" style="text-align:center;">
                                        <h3><p class="text-primary">Elevator Control With Designated Level</p></h3>
                                        <p>Levels Assigned by Users</p>
                                        <p>
                                        Once the hotel lock is connected to the elevator and access control module, the ZKTeco elevator control will allow different user to access doors, it can be assigned with different rights, and unauthorized users are not allowed to access those important doors. In the actual implementation, users have to present card on the elevator, and the elevator will allow user to reach to the assigned level. This will enable the security management of the whole building elevator access control using the elevator controller installed on each elevator car.
                                        </p>
                                        <img src="/public/assets/images/Hotel7.png" class="img-fluid" alt="CCTV Image" style="">
                                    </div>
                                    <hr>
                                    <div class="container-fluid-dashed-box" style="text-align:center;">
                                        <h3><p class="text-primary">Intuitive Design - Web Based Reservation Management</p></h3>
                                        <p>
                                        Hotel Module has an intuitive design which is easy to understand without explanation. It combines RFID lock technology with the freedom to choose the door access right for the guest. Just simply click in the room no. that people would like to stay on the  ZKBiosucurity, Hotel guests will gain access to the assigned rooms with the card within the corresponding date and time.
                                        </p>
                                        <h3><p class="text-primary">Web Based Registration Management</p></h3>
                                        <p>
                                        Elevator control allows the guest to stop the elevator on the specific time, and grants elevator to operate if the elevator to work if there is a booking for the other location. For example, to reserve the hotel room for and the elevator, the hotel staff just simply click out the corresponding date and time via ZKBiosecurity software web based platform. This proven and recognized procedure can prevent the guest re-enter the hotel room and the elevator with the lost card.
                                        </p>
                                        <img src="/public/assets/images/Hotel8.png" class="img-fluid" alt="CCTV Image" style="">
                                    </div>
                                    <hr>
                                    <div class="container-fluid-dashed-box" style="text-align:center;">
                                        <h3><p class="text-primary">Report Lost Card</p></h3>
                                        <p>
                                        Guests are given the hotel card upon registration at the reception, if the guests lose their hotel room, hotel staff just simply adopt the “Report Lost Card” function and make a new card to replace the lost card. Swipe the new card on the right door lock which will therefore activate the new card and remove lost/ stolen cards’ data from the system.
                                        </p>
                                        <img src="/public/assets/images/Hotel9.png" class="img-fluid" alt="CCTV Image" style="">
                                    </div>
                                    <hr>
                                    <div class="container-fluid-dashed-box" style="text-align:center;">
                                        <h3><p class="text-primary">Advance Payment Option of Consumption Management</p></h3>
                                        <p>
                                        Hotels guests often need to make payments by cash or credits. ZKBioSecurity offers an advanced option for guests to pay later when checking out. Simply present hotel cards after having meal wherever at hotel lounges, coffee shops or restaurants, and guests may pay charges when leaving the hotel.
                                        </p>
                                        <img src="/public/assets/images/Hotel10.png" class="img-fluid" alt="CCTV Image" style="">
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
