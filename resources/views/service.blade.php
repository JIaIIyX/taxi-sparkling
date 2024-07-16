@extends('..\layouts\layout')
@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title" data-opacity="4">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Services Style 1</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Services Style 1</li>
            </ul>
        </div>
    </div><!--==============================
Service Area  
==============================-->
    <section class="space" id="service-sec">
        <div class="container">
            <div class="row gy-40">
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInUp">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_1.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-city"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">City Transport</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInDown">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_2.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-business-time"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">Business Trip</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInUp">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_3.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-house-laptop"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">Online Booking</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInDown">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_4.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-calendar-check"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">Regular Journey</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInUp">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_5.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-bench-tree"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">Picnic Trip</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-box wow fadeInDown">
                        <div class="service-box_img">
                            <img src="assets/img/service/service_3_6.jpg" alt="service image">
                        </div>
                        <div class="service-box_content">
                            <div class="service-box_icon">
                                <i class="fa-light fa-car-building"></i>
                            </div>
                            <h3 class="service-box_title"><a href="service-details.html">Regular Office</a></h3>
                            <p class="service-box_text">Competently expedite seamless results and business</p>
                        </div>
                        <a href="service-details.html" class="th-btn">Learn More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection