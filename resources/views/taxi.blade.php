@extends('..\layouts\layout')
@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg" data-overlay="title" data-opacity="4">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Our Taxi</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Our Taxi</li>
            </ul>
        </div>
    </div><!--==============================
Taxi Area  
==============================-->
    <section class="space" id="taxi-sec">
        <div class="container">
            <div class="taxi-tab filter-menu-active">
                <button data-filter="*" class="th-btn active" type="button">ALL TAXI</button>
                <button data-filter=".cat1" class="th-btn" type="button">MINIVAN TAXI</button>
                <button data-filter=".cat2" class="th-btn" type="button">BUSINESS CLASS</button>
                <button data-filter=".cat3" class="th-btn" type="button">SUV TAXI</button>
                <button data-filter=".cat4" class="th-btn" type="button">EXPENCIVE TAXI</button>
            </div>
            <div class="row gy-30 filter-active justify-content-center">
                <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_1.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW X6 2013</a></h3>
                        <p class="taxi-box_rate">$0.85/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat3 cat1">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_2.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW M7 2017</a></h3>
                        <p class="taxi-box_rate">$1.85/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat1 cat2">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_3.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW A5 2015</a></h3>
                        <p class="taxi-box_rate">$0.60/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat2 cat4">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_4.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW S5 2015</a></h3>
                        <p class="taxi-box_rate">$1.05/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat1 cat2">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_5.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW S7 2017</a></h3>
                        <p class="taxi-box_rate">$0.45/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6 filter-item cat4 cat3">
                    <div class="taxi-box">
                        <div class="taxi-box_img">
                            <img src="assets/img/taxi/taxi_4_6.png" alt="taxi">
                        </div>
                        <h3 class="taxi-box_title"><a href="taxi-details.html">BMW S5 2015</a></h3>
                        <p class="taxi-box_rate">$0.48/km</p>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_1.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Car Doors:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_2.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Passengers:</h3>
                            <span class="taxi-feature_info">4</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_3.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Luggage Carry:</h3>
                            <span class="taxi-feature_info">3</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_4.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Heated Seats:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_5.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">Air Condition:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <div class="taxi-feature">
                            <div class="taxi-feature_icon">
                                <img src="assets/img/icon/taxi_f_1_6.svg" alt="png">
                            </div>
                            <h3 class="taxi-feature_title">One Board WIFI:</h3>
                            <span class="taxi-feature_info">Yes</span>
                        </div>
                        <a href="booking.html" class="th-btn">Book This Car Now</a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    @endsection