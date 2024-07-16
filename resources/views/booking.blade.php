@extends('..\layouts\layout')
@section('content')
<!--==============================
Booking Area  
==============================-->
    <div class="position-relative space">
        <div class="container">
            <form action="booking.php" method="POST" class="booking-form-area ajax-booking">
                <div class="booking-title-area">
                    <h4 class="booking-title">Make Your Booking Today</h4>
                    <p class="booking-desc">It is a long established fact that a reader will be distracted by the readable content of a page when
                        looking at its layout. The point of using is that it has distribution of letters to using content
                        here
                        making it look like readable.</p>
                </div>
                <div class="row">
                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your Name">
                        <i class="fal fa-user"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="number" class="form-control" name="number" id="number" placeholder="Phone Number">
                        <i class="fal fa-phone"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="s-destination" id="s-destination" placeholder="Start Destination">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" class="form-control" name="e-destination" id="e-destination" placeholder="End Destination">
                        <i class="fal fa-location-dot"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <select name="passenger" id="passenger" class="form-select nice-select">
                            <option value="" disabled selected hidden>passenger</option>
                            <option value="passenger1">passenger 1</option>
                            <option value="passenger2">passenger 2</option>
                            <option value="passenger3">passenger 3</option>
                            <option value="passenger4">passenger 4</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <select class="form-select nice-select" name="vehicle" id="vehicle">
                            <option value="Normal" selected disabled>Select Car</option>
                            <option value="Normal">Normal Car</option>
                            <option value="Business">Business Car</option>
                        </select>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" class="date-pick form-control" name="date" id="date-pick" placeholder="Select Date">
                        <i class="fal fa-calendar-days"></i>
                    </div>
                    <div class="form-group col-sm-6">
                        <input type="text" class="time-pick form-control" name="time" id="time-pick" placeholder="Select Time">
                        <i class="fal fa-clock"></i>
                    </div>
                    <div class="form-group col-12">
                        <textarea placeholder="Write a Massage...." name="message" id="message" class="form-control"></textarea>
                        <i class="fa-sharp fa-light fa-pencil"></i>
                    </div>
                    <div class="form-btn col-12">
                        <button class="th-btn fw-btn">Book Taxi Now <i class="fa-regular fa-arrow-right"></i></button>
                    </div>
                </div>
                <p class="form-messages mb-0 mt-3"></p>
            </form>
        </div>

    </div>
    @endsection