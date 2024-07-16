 <!doctype html>
 <html dir="ltr" class="no-js" lang="zxx">

 <head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <title>Taxiar - Online Taxi Service HTML Template - Home 1</title>
     <meta name="author" content="Taxiar">
     <meta name="description" content="Taxiar - Online Taxi Service HTML Template">
     <meta name="keywords" content="Taxiar - Online Taxi Service HTML Template">
     <meta name="robots" content="INDEX,FOLLOW">

     <!-- Mobile Specific Metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <!-- Favicons - Place favicon.ico in the root directory -->
     <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicons/apple-icon-57x57.png">
     <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicons/apple-icon-60x60.png">
     <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicons/apple-icon-72x72.png">
     <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicons/apple-icon-76x76.png">
     <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicons/apple-icon-114x114.png">
     <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicons/apple-icon-120x120.png">
     <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicons/apple-icon-144x144.png">
     <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicons/apple-icon-152x152.png">
     <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-icon-180x180.png">
     <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicons/android-icon-192x192.png">
     <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicons/favicon-96x96.png">
     <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
     <link rel="manifest" href="assets/img/favicons/manifest.json">
     <meta name="msapplication-TileColor" content="#ffffff">
     <meta name="msapplication-TileImage" content="assets/img/favicons/ms-icon-144x144.png">
     <meta name="theme-color" content="#ffffff">

     <!--==============================
	  Google Fonts
	============================== -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link
         href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Radio+Canada:wght@300;400;500;600;700&display=swap"
         rel="stylesheet">

     <!--==============================
	    All CSS File
	============================== -->
     <!-- Bootstrap -->
     <link rel="stylesheet" href="assets/css/bootstrap.min.css">
     <!-- Fontawesome Icon -->
     <link rel="stylesheet" href="assets/css/fontawesome.min.css">
     <!-- Magnific Popup -->
     <link rel="stylesheet" href="assets/css/magnific-popup.min.css">
     <!-- Slick Slider -->
     <link rel="stylesheet" href="assets/css/slick.min.css">
     <!-- Slick Slider -->
     <link rel="stylesheet" href="assets/css/jquery.datetimepicker.min.css">
     <!-- Slick Slider -->
     <link rel="stylesheet" href="assets/css/fm.revealator.jquery.min.css">
     <!-- Theme Custom CSS -->
     <link rel="stylesheet" href="assets/css/style.css">

 </head>

 <body class=""></body>
 <!--==============================
    Mobile menu
============================== -->
 @include('components.mobile-menu')

 <div class="popup-search-box d-none d-lg-block">
     <button class="searchClose"><i class="fal fa-times"></i></button>
     <form action="#">
         <input type="text" placeholder="What are you looking for">
         <button type="submit"><i class="fal fa-search"></i></button>
     </form>
 </div>

 <!--==============================
    Sidemenu
============================== -->

 @include('components.sidemenu')

 <!--==============================
	Header Area
==============================-->
 @include('components.menu')



 @yield('content')
 <!--==============================
			Footer Area
	==============================-->
 @include('components.footer')






 <!--********************************
			Code End  Here 
	******************************** -->


 <!-- Scroll To Top -->
 <div class="scroll-top">
     <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
         <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
             style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;">
         </path>
     </svg>
 </div>

 <!--==============================
    All Js File
============================== -->
 <!-- Jquery -->
 <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
 <!-- Slick Slider -->
 <script src="assets/js/slick.min.js"></script>
 <!-- Bootstrap -->
 <script src="assets/js/bootstrap.min.js"></script>
 <!-- Magnific Popup -->
 <script src="assets/js/jquery.magnific-popup.min.js"></script>
 <!-- Counter Up -->
 <script src="assets/js/jquery.counterup.min.js"></script>
 <!-- Isotope Filter -->
 <script src="assets/js/imagesloaded.pkgd.min.js"></script>
 <script src="assets/js/isotope.pkgd.min.js"></script>
 <script src="assets/js/jquery-ui.min.js"></script>
 <!-- Nice Select -->
 <script src="assets/js/nice-select.min.js"></script>
 <!-- Date Time Picker -->
 <script src="assets/js/jquery.datetimepicker.min.js"></script>
 <!-- circle-progress -->
 <script src="assets/js/circle-progress.js"></script>
 <!-- revealator -->
 <script src="assets/js/fm.revealator.jquery.min.js"></script>



 <!-- Wow -->
 <script src="assets/js/wow.min.js"></script>
 <!-- Main Js File -->
 <script src="assets/js/main.js"></script>

 </body>

 </html>