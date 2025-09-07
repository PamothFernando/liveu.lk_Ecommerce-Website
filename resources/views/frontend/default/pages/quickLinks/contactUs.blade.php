@extends('frontend.default.layouts.master')

@section('title')
    {{ localize('Conatct Us') }} {{ getSetting('title_separator') }} {{ getSetting('system_title') }}
@endsection

@section('breadcrumb-contents')
    <div class="breadcrumb-content">
        <h2 class="mb-2 text-center">{{ localize('Get In Touch') }}</h2>
        <nav>
            <ol class="breadcrumb justify-content-center">
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home') }}">{{ localize('Home') }}</a></li>
                <li class="breadcrumb-item fw-bold" aria-current="page"><a
                        href="{{ route('home.pages.contactUs') }}">{{ localize('Contact Us') }}</a></li>
            </ol>
        </nav>
    </div>
@endsection

@section('contents')
    <!--breadcrumb-->
    @include('frontend.default.inc.breadcrumb')
    <!--breadcrumb-->

    <!--contact us section start-->
    <section class="contact-us-section position-relative overflow-hidden z-1 pt-80 pb-120">
        <div class="container">
            <div class="contact-box rounded-2 bg-white overflow-hidden mt-8">
                <div class="row g-4">
                    <div class="col-xl-5">
                        <div class="contact-left-box position-relative overflow-hidden z-1 bg-primary p-6 d-flex flex-column h-100"
                            data-background="{{ staticAsset('frontend/default/assets/img/shapes/circle-half-fill.png') }}">
                            <img src="{{ staticAsset('frontend/default/assets/img/shapes/texture-overlay.png') }}"
                                alt="texture" class="position-absolute w-100 h-100 start-0 top-0 z--1">
                            <h3 class="text-white mb-3">{{ localize('Contact Details') }}</h3>
                            <p class="fs-sm text-white"><strong>{{ localize('Office Address') }}:
                                </strong>{{ getSetting('topbar_location') }}
                            </p>
                            <p style="color: white;">
                                <b>Jaffna Branch:</b> 137 2nd Cross St, Jaffna, Sri Lanka.</p>
                            </p>
                            <span class="spacer my-5"></span>
                            <ul class="contact-list">
                                <li class="d-flex align-items-center gap-3 flex-wrap">
                                    <span
                                        class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </span>
                                    <div class="info">
                                        <span class="fw-medium text-white fs-xs">{{ localize('Emergency Call') }}</span>
                                        <h5 class="mb-0 mt-1 text-white">{{ getSetting('navbar_contact_number') }}</h5>
                                    </div>
                                </li>
                                <li class="d-flex align-items-center gap-3 flex-wrap mt-3">
                                    <span
                                        class="icon d-inline-flex align-items-center justify-content-center rounded-circle flex-shrink-0">
                                        <i class="fa-regular fa-envelope"></i>
                                    </span>
                                    <div class="info">
                                        <span
                                            class="fw-medium text-white fs-xs">{{ localize('General Communicationl') }}</span>
                                        <p class="mb-0 mt-1 text-white fw-medium">{{ getSetting('topbar_email') }}</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="mt-5">
                                <span class="fw-bold text-white mb-3 d-block">{{ localize('Find us on') }}:</span>
                                <div class="social-links d-flex align-items-center gap-2">
                                    <a href="{{ getSetting('facebook_link') }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ getSetting('twitter_link') }}" target="_blank"><i
                                            class="fab fa-twitter"></i></a>
                                    <a href="{{ getSetting('linkedin_link') }}" target="_blank"><i
                                            class="fab fa-linkedin"></i></a>
                                    <a href="{{ getSetting('youtube_link') }}" target="_blank"><i
                                            class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-7">
                        <form class="contact-form ps-4 ps-xl-0 py-8 pe-5 contact-form ps-5 ps-xl-4 py-6 pe-6"
                            action="{{ route('contactUs.store') }}" method="POST" id="contact-form">
                            @csrf

                            {!! RecaptchaV3::field('recaptcha_token') !!}
                            <h3 class="mb-6">{{ localize('Need Help? Send Message') }}</h3>
                            <div class="row g-4">

                                <div class="col-sm-12">
                                    <div class="label-input-field">
                                        <label>{{ localize('Name') }}</label>
                                        <input type="text" name="name" placeholder="{{ localize('Your name') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>{{ localize('Email') }}</label>
                                        <input type="email" name="email" placeholder="{{ localize('You email') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>{{ localize('Phone') }}</label>
                                        <input type="text" name="phone" placeholder="{{ localize('You phone') }}"
                                            required>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="checkbox-fields d-flex align-items-center gap-3 flex-wrap my-2">
                                        <div class="single-field d-inline-flex align-items-center gap-2">
                                            <div class="theme-checkbox">
                                                <input type="radio" name="support_for" value="delivery_problem" checked>
                                                <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                            </div>
                                            <label class="text-dark fw-semibold">{{ localize('Delivery Problem') }}</label>
                                        </div>
                                        <div class="single-field d-inline-flex align-items-center gap-2">
                                            <div class="theme-checkbox">
                                                <input type="radio" name="support_for" value="customer_service">
                                                <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                            </div>
                                            <label class="text-dark fw-semibold">{{ localize('Customer Service') }}</label>
                                        </div>
                                        <div class="single-field d-inline-flex align-items-center gap-2">
                                            <div class="theme-checkbox">
                                                <input type="radio" name="support_for" value="other_service">
                                                <span class="checkbox-field"><i class="fas fa-check"></i></span>
                                            </div>
                                            <label class="text-dark fw-semibold">{{ localize('Others Service') }}</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="label-input-field">
                                        <label>{{ localize('Messages') }}</label>
                                        <textarea name="message" placeholder="{{ localize('Write your message') }}" rows="6" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md rounded-1 mt-6">
                                   {{ localize('Send Message') }}
                            </button>
                            <br>
                        </form>
                    </div>
                </div>
            </div>
            </section
            <hr>
            <div class="container-buttons">
              <div class="row">
                <div class="col">
                  <style>
                    .custom-button {
                      display: inline-flex;
                      align-items: center;
                      justify-content: center;
                      font-size: 1.15rem;
                      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
                      padding: 0.75rem 1.75rem;
                      border-radius: 10px;
                      border: none;
                      text-decoration: none;
                      color: #fff;
                      min-width: 160px;
                      height: 50px;
                      font-weight: 600;
                      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                      transition: all 0.3s ease;
                      margin-top: 50px;
                      cursor: pointer;
                      transform: scale(1);
                    }
                
                    .custom-button i {
                      margin-right: 10px;
                      font-size: 1.25rem;
                    }
                
                    .orange-button {
                      background: linear-gradient(to bottom, rgb(250, 125, 41), rgb(249, 102, 51));
                      margin-left: 1rem;
                    }
                
                    .orange-button:hover {
                      box-shadow: 0 6px 18px rgba(249, 102, 51, 0.4);
                      transform: scale(1.05);
                    }
                
                    .button-container {
                      text-align: center;
                    }
                  </style>
                
                  <!-- Centered Button Container -->
                  <div class="button-container">
                    <a href="https://erp.liveu.lk/ticket" class="custom-button orange-button" target="_blank" rel="noopener noreferrer">
                      Open Support Ticket
                    </a>
                  </div>
                </div>
                <div class="col">
                  <div class="button-container">
                      <a href="{{ route('dealer.registration') }}" class="custom-button orange-button" target="_blank" rel="noopener noreferrer">
                        Dealer Registration
                      </a>
                  </div>
                </div>
                <div class="col">
                    <div class="button-container">
                      <a href="{{ route('distributor.registration') }}" class="custom-button orange-button" target="_blank" rel="noopener noreferrer">
                        Distributor Registration
                      </a>
                    </div>
                </div>
              </div>
            </div>
            <hr>
            <br>
            <br>
            <div class="container mt-4">
                <div class="row">
                    <!-- Head Office -->
                    <div class="col-md-6 text-center">
                        <p style="color: green; font-size: 36px;"><b>Head Office</b></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.974191066797!2d79.87970517485073!3d6.89369041875106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25a2ec2bc6099%3A0xe91fb05e6b887c18!2sLive%20U%20(Pvt)%20Ltd!5e0!3m2!1sen!2sus!4v1736155893277!5m2!1sen!2sus" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    
                    <!-- Jaffna Branch -->
                    <div class="col-md-6 text-center">
                        <p style="color: green; font-size: 36px;"><b>Jaffna Branch</b></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3933.1899939943496!2d80.00988177487058!3d9.664801628713084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe5736666f5335%3A0x398af6748fda22ee!2sLive%20U%20(Pvt)%20Ltd%20-%20Jaffna%20Branch%20Office!5e0!3m2!1sen!2sus!4v1736156134917!5m2!1sen!2sus" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <!-- Ratnapura Branch -->
                    <div class="col-md-6 text-center">
                        <p style="color: green; font-size: 36px;"><b>Ratnapura Branch</b></p>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.7312245087674!2d80.40016987473322!3d6.680182121323288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae3bf127c7f6bd7%3A0xaad17ce2c494ed88!2sLive%20U%20(Pvt)%20Ltd%20-%20Ratnapura%20Branch!5e0!3m2!1sen!2slk!4v1752205069885!5m2!1sen!2slk" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end-->
@endsection
