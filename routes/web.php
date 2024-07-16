<?php

use Illuminate\Support\Facades\Route;

Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/taxi', function () {
    return view('taxi');
});
Route::get('/blog-left-sidebar', function () {
    return view('blog-left-sidebar');
});
Route::get('/blog-right-sidebar', function () {
    return view('blog-right-sidebar');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/checkout', function () {
    return view('checkout');
});
Route::get('/error', function () {
    return view('error');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/home', function () {
    return view('index');
})->name('home');
Route::get('/service-details', function () {
    return view('service-details');
});
Route::get('/service', function () {
    return view('service');
});
Route::get('/shop', function () {
    return view('shop');
});
Route::get('/shop-details', function () {
    return view('/shop-details');
});
Route::get('/team', function () {
    return view('team');
});
Route::get('/team-details', function () {
    return view('team-details');
});

Route::get('/typography', function () {
    return view('typography');
});
Route::get('/wishlist', function () {
    return view('wishlist');
});


Route::get('/driver-portfolio', function () {
    return view('driver-portfolio');
})->name('driver-portfolio');