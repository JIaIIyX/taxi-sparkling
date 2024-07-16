@extends('..\layouts\layout')

@section('content')
 
    <!--==============================
	Header Area
==============================-->

    <div class="th-hero-wrapper  hero-1">
        <div class="hero-slider-1 th-carousel" data-fade="true" data-slide-show="1" data-md-slide-show="1" data-dots="true" data-xl-dots="true" data-ml-dots="true" data-lg-dots="true">


            <div class="th-hero-slide">
                <div class="th-hero-bg " data-bg-src="assets/img/bg/hero_bg_1_1.jpg">
                    <img src="assets/img/bg/hero_overlay_1.png" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="hero-style1">
                        <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">Taxi Driver for Hire</span>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Trusted & <span class="text-bg">Cheapest Taxi</span></h1>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">Service Company</h1>
                        <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.7s">
                            <a href="about.html" class="th-btn style3 style-skew"><span class="btn-text">Learn More</span></a>
                            <a href="taxi.html" class="th-btn style2 style-skew"><span class="btn-text">Find A Taxi</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="th-hero-slide">
                <div class="th-hero-bg " data-bg-src="assets/img/bg/hero_bg_1_2.jpg">
                    <img src="assets/img/bg/hero_overlay_1.png" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="hero-style1">
                        <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">Taxi Driver for Hire</span>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Fasted & <span class="text-bg">Cheapest Taxi</span></h1>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">Car Services</h1>
                        <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.7s">
                            <a href="about.html" class="th-btn style3 style-skew"><span class="btn-text">Learn More</span></a>
                            <a href="taxi.html" class="th-btn style2 style-skew"><span class="btn-text">Find A Taxi</span></a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="th-hero-slide">
                <div class="th-hero-bg " data-bg-src="assets/img/bg/hero_bg_1_3.jpg">
                    <img src="assets/img/bg/hero_overlay_1.png" alt="Hero Image">
                </div>
                <div class="container">
                    <div class="hero-style1">
                        <span class="hero-subtitle" data-ani="slideinleft" data-ani-delay="0.1s">Taxi Driver for Hire</span>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.3s">Trusted & <span class="text-bg">Cheapest Taxi</span></h1>
                        <h1 class="hero-title" data-ani="slideinleft" data-ani-delay="0.5s">Taxi For You</h1>
                        <div class="btn-group" data-ani="slideinleft" data-ani-delay="0.7s">
                            <a href="about.html" class="th-btn style3 style-skew"><span class="btn-text">Learn More</span></a>
                            <a href="taxi.html" class="th-btn style2 style-skew"><span class="btn-text">Find A Taxi</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#about-sec" class="scroll-bottom"><i class="far fa-chevron-down"></i></a>
        <div class="hero-shape"></div>
    </div>
    <!--======== / Hero Section ========--><!--==============================
About Area  
==============================-->
    <div class="space" id="about-sec">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-40 mb-lg-0">
                    <div class="img-box2 wow fadeInLeft">
                        <div class="img1">
                            <img src="assets/img/normal/about_2_1.jpg" alt="About">
                        </div>
                        <div class="img2">
                            <img src="assets/img/normal/about_2_2.jpg" alt="About">
                        </div>
                        <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ps-3 ps-xl-5 align-self-end wow fadeInRight">
                    <div class="title-area mb-35">
                        <span class="sub-title">About our Company</span>
                        <h2 class="sec-title text-uppercase">We're Partner of <br> Your Business</h2>
                    </div>
                    <div class="about-quote">
                        <p class="text">Interactively maintain holistic best practices and user fully researched commerce installed base internal</p>
                        <cite class="name">David Smith</cite>
                        <span class="desig">Head Of Idea</span>
                    </div>
                    <div class="info-card style2">
                        <div class="info-card_icon text-title">
                            <i class="fas fa-phone"></i>
                        </div>
                        <div class="info-card_content">
                            <p class="info-card_text">Call Us 24/7 Anytime:</p>
                            <a href="tel:+2563153215" class="info-card_link text-title">+256 315 3215</a>
                        </div>
                    </div>
                    <a href="about.html" class="th-btn style-skew"><span class="btn-text">Get More Info</span></a>
                </div>
            </div>
        </div>
    </div><!--==============================
Service Area  
==============================-->
    <section class="bg-smoke bg-top-center space" id="service-sec" data-bg-src="assets/img/bg/service_bg_1_1.jpg">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">OUR SERVICES<span class="double-line"></span></span>
                <h2 class="sec-title text-white">Our Services</h2>
            </div>
            <div class="row th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-md-6 col-lg-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_img style2">
                            <img src="assets/img/service/service_1_1.jpg" alt="service image">
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-grid_title"><a href="service-details.html">City Transport</a></h3>
                            <p class="service-grid_text">Productize inexpensive business vista cooperative benefits lobally maintain leading edge schemas.</p>
                            <a href="service-details.html" class="th-btn"><span class="btn-text">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_img style2">
                            <img src="assets/img/service/service_1_2.jpg" alt="service image">
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-grid_title"><a href="service-details.html">Business Transfer</a></h3>
                            <p class="service-grid_text">Productize inexpensive business vista cooperative benefits lobally maintain leading edge schemas.</p>
                            <a href="service-details.html" class="th-btn"><span class="btn-text">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-grid wow fadeInUp">
                        <div class="service-grid_img style2">
                            <img src="assets/img/service/service_1_3.jpg" alt="service image">
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-grid_title"><a href="service-details.html">Online Booking</a></h3>
                            <p class="service-grid_text">Productize inexpensive business vista cooperative benefits lobally maintain leading edge schemas.</p>
                            <a href="service-details.html" class="th-btn"><span class="btn-text">Read More</span></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-grid wow fadeInDown">
                        <div class="service-grid_img style2">
                            <img src="assets/img/service/service_1_4.jpg" alt="service image">
                        </div>
                        <div class="service-grid_content">
                            <h3 class="service-grid_title"><a href="service-details.html">Regular Transport</a></h3>
                            <p class="service-grid_text">Productize inexpensive business vista cooperative benefits lobally maintain leading edge schemas.</p>
                            <a href="service-details.html" class="th-btn"><span class="btn-text">Read More</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Appointment Area  
==============================-->
    <div class="space overflow-hidden">
        <div class="container">
            <div class="title-area mb-35 text-xl-start">
                <span class="sub-title">Taxi Booking Form</span>
                <h2 class="sec-title">Book Your Taxi Online</h2>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-xl-5">
                    <div class="car-img1 wow fadeInRight">
                        <img src="assets/img/normal/booking_car_1.png" alt="car">
                    </div>
                </div>
                <div class="col-xl-7">
                    <form action="mail.php" method="POST" class="booking-form style2 ajax-contact wow fadeInUp">
                        <div class="booking-select-class">
                            <div class="class-name">
                                <input type="radio" id="standard" name="booking_class" value="STANDARD" checked>
                                <label for="standard">STANDARD</label>
                            </div>
                            <div class="class-name">
                                <input type="radio" id="business" name="booking_class" value="BUSINESS">
                                <label for="business">BUSINESS</label>
                            </div>
                            <div class="class-name">
                                <input type="radio" id="economy" name="booking_class" value="ECONOMY">
                                <label for="economy">ECONOMY</label>
                            </div>
                            <div class="class-name">
                                <input type="radio" id="vip" name="booking_class" value="VIP">
                                <label for="vip">VIP</label>
                            </div>
                            <div class="class-name">
                                <input type="radio" id="minivan" name="booking_class" value="MINIVAN">
                                <label for="minivan">MINIVAN</label>
                            </div>
                            <div class="class-name">
                                <input type="radio" id="comfort" name="booking_class" value="COMFORT">
                                <label for="comfort">COMFORT</label>
                            </div>
                        </div>
                        <div class="input-box">
                            <div class="row">
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="number" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="passenger" id="passenger" placeholder="Passengers#">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="s-destination" id="s-destination" placeholder="Start Destination">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="form-control" name="e-destination" id="e-destination" placeholder="End Destination">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date">
                                </div>
                                <div class="form-group col-sm-6">
                                    <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time">
                                </div>
                                <div class="form-btn col-sm-6">
                                    <button class="th-btn">Book Taxi Now</button>
                                </div>
                            </div>
                            <p class="form-messages mb-0 mt-3"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div><!--==============================
Download Area  
==============================-->
    <section class="space position-relative" data-bg-src="assets/img/bg/download_bg_1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 text-center text-lg-start  wow fadeInLeft">
                    <div class="title-area mb-30">
                        <span class="sub-title">Download Taxiar App Now</span>
                        <h2 class="sec-title text-white fw-semibold">Get Free Taxiar App <br> On Online Store</h2>
                    </div>
                    <p class="download-desc mb-35 fs-20 text-light">Competently re-engineer cross-media breed meta-services whereas best of breed whereas processes matrix just in time content...</p>
                    <div class="download-btn-wrap">
                        <a target="_blank" href="https://play.google.com/" class="download-btn">
                            <i class="fa-brands fa-google-play"></i>
                            <div class="text-group">
                                <span class="small-text">Download From</span>
                                <h6 class="big-text">Google Play</h6>
                            </div>
                        </a>
                        <a target="_blank" href="https://www.apple.com/store" class="download-btn">
                            <i class="fa-brands fa-apple"></i>
                            <div class="text-group">
                                <span class="small-text">Download From</span>
                                <h6 class="big-text">App Store</h6>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-xl-5">
                    <div class="app-mockup  wow fadeInRight">
                        <img src="assets/img/normal/app_mockup_rtl.png" alt="app mockup">
                    </div>
                </div>
            </div>
        </div>
    </section> <!--==============================
Taxi Area  
==============================-->
    <section class="space" id="taxi-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our Service Taxi<span class="double-line"></span></span>
                <h2 class="sec-title">Our Taxi Rate</h2>
            </div>
            <div class="row th-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                <div class="col-md-6 col-lg-4">
                    <div class="taxi-grid wow fadeInUp">
                        <div class="taxi-grid_img">
                            <img src="assets/img/taxi/taxi_2_1.png" alt="service image">
                        </div>
                        <div class="taxi-grid_content">
                            <div class="taxi-grid_icon">
                                <i class="fa-light fa-car"></i>
                            </div>
                            <h3 class="taxi-grid_title"><a href="taxi-details.html">BMW X6 2013</a></h3>
                            <p class="taxi-grid_subtitle">Italy Ocean</p>
                            <p class="taxi-grid_info">
                                <span>Initial Charge:</span>
                                <span class="text-white">$2.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Additional Kilos:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Per Stopped Trafic:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <a href="taxi-details.html" class="th-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="taxi-grid wow fadeInDown">
                        <div class="taxi-grid_img">
                            <img src="assets/img/taxi/taxi_2_2.png" alt="service image">
                        </div>
                        <div class="taxi-grid_content">
                            <div class="taxi-grid_icon">
                                <i class="fa-light fa-car"></i>
                            </div>
                            <h3 class="taxi-grid_title"><a href="taxi-details.html">BMW M7 2017</a></h3>
                            <p class="taxi-grid_subtitle">Italy Ocean</p>
                            <p class="taxi-grid_info">
                                <span>Initial Charge:</span>
                                <span class="text-white">$2.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Additional Kilos:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Per Stopped Trafic:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <a href="taxi-details.html" class="th-btn">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="taxi-grid wow fadeInUp">
                        <div class="taxi-grid_img">
                            <img src="assets/img/taxi/taxi_2_3.png" alt="service image">
                        </div>
                        <div class="taxi-grid_content">
                            <div class="taxi-grid_icon">
                                <i class="fa-light fa-car"></i>
                            </div>
                            <h3 class="taxi-grid_title"><a href="taxi-details.html">BMW A5 2015</a></h3>
                            <p class="taxi-grid_subtitle">Italy Ocean</p>
                            <p class="taxi-grid_info">
                                <span>Initial Charge:</span>
                                <span class="text-white">$2.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Additional Kilos:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <p class="taxi-grid_info">
                                <span>Per Stopped Trafic:</span>
                                <span class="text-white">$0.50</span>
                            </p>
                            <a href="taxi-details.html" class="th-btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Cta Area  
==============================-->
    <div class="bg-title space position-relative overflow-hidden">
        <div class="th-video cta-bg-shape">
            <img src="assets/img/bg/cta_bg_2.jpg" alt="cta bg">
            <a href="https://www.youtube.com/watch?v=_sI_Ps7JSEk" class="play-btn popup-video"><i class="fas fa-play"></i></a>
        </div>
        <div class="cta-wrap container wow fadeInLeft">
            <h2 class="sec-title mb-35 text-white">High <span class="fw-light text-theme">comfort</span><br>for your <span class="fw-light">family</span></h2>
            <div class="info-card mb-40">
                <div class="info-card_icon text-title">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text text-white">Call Us 24/7 Anytime:</p>
                    <a href="tel:+2563153215" class="info-card_link">+256 315 3215</a>
                </div>
            </div>
            <a href="contact.html" class="th-btn style3"><span class="btn-text">Contact Us</span></a>
        </div>
    </div><!--==============================
Bloge Area  
==============================-->
    <section class="space overflow-hidden" id="blog-sec">
        <div class="container">
            <div class="title-area text-center">
                <span class="sub-title">Our News Updates<span class="double-line"></span></span>
                <h2 class="sec-title">Latest News POsts</h2>
            </div>
            <div class="blog-grid-wrap">
                <div class="blog-grid wow fadeInLeft">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_2_1.jpg" alt="blog image">
                        <a href="blog.html" class="category">Test Drive</a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Excellent catalsts for change are through crossedia markets</a></h3>
                        <div class="blog-meta style2">
                            <a href="blog.html">March 15, 2024</a>
                            <a href="blog.html">By Author</a>
                        </div>
                        <a href="blog-details.html" class="link-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-grid wow fadeInRight">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_2_2.jpg" alt="blog image">
                        <a href="blog.html" class="category">Traveling</a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Excellent for change ar life through markets</a></h3>
                        <div class="blog-meta style2">
                            <a href="blog.html">March 16, 2024</a>
                            <a href="blog.html">By Author</a>
                        </div>
                        <a href="blog-details.html" class="link-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="blog-grid wow fadeInRight">
                    <div class="blog-img">
                        <img src="assets/img/blog/blog_2_3.jpg" alt="blog image">
                        <a href="blog.html" class="category">Long Trip</a>
                    </div>
                    <div class="blog-content">
                        <h3 class="blog-title"><a href="blog-details.html">Excellent for change ar life through markets</a></h3>
                        <div class="blog-meta style2">
                            <a href="blog.html">March 17, 2024</a>
                            <a href="blog.html">By Author</a>
                        </div>
                        <a href="blog-details.html" class="link-btn">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section><!--==============================
Contact Info Area  
==============================-->
    <div class="z-index-common" data-pos-for=".footer-wrapper" data-sec-pos="bottom-half">
        <div class="container">
            <div class="contact-card" data-bg-src="assets/img/bg/pattern_bg_3.png">
                <div class="info-card style3">
                    <div class="info-card_icon">
                        <i class="fal fa-envelope"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Email Address</p>
                        <a href="mailto:info@example.com" class="info-card_link">info@example.com</a>
                    </div>
                </div>
                <div class="info-card style3 active">
                    <div class="info-card_icon">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Phone Number</p>
                        <a href="tel:+46825476243" class="info-card_link">(+468) 254 76243</a>
                    </div>
                </div>
                <div class="info-card style3">
                    <div class="info-card_icon">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="info-card_content">
                        <p class="info-card_text">Our Adress</p>
                        <a href="https://www.google.com/maps" class="info-card_link">259 Helano Road, USA</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection