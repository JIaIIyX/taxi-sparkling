@extends('..\layouts\layout')
@section('content')
<!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/breadcumb/breadcumb-bg.jpg">
        <div class="container z-index-common">
            <h1 class="breadcumb-title">Error Page</h1>
            <ul class="breadcumb-menu">
                <li><a href="index.html">Home</a></li>
                <li>Error Page</li>
            </ul>
        </div>
    </div><!--==============================
Error Area 
==============================-->
    <section class="space">
        <div class="container">
            <div class="error-img">
                <img src="assets/img/update_2/bg/error.svg" alt="404 image">
            </div>
            <div class="error-content">
                <h2 class="error-title"><span class="text-theme">OooPs!</span> Page Not Found</h2>
                <p class="error-text">Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                <div class="btn-group justify-content-center">
                    <a href="index.html" class="th-btn">
                        <i class="fal fa-home me-2"></i>Back To Home</a>
                </div>
            </div>
        </div>
    </section>
    @endsection