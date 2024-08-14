<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/book-now', function () {
    return view('bookNow.index');
});

Route::get('/about', function () {
    return view('about.index');
});

Route::get('/services', function () {
    return view('services.index');
});

Route::get('/services-dantest', function () {
    return view('services.dantest');
});

Route::get('/offers', function () {
    return view('offers.index');
});

Route::get('/offers/{offerName}', function () {
    return view('offers.offer');
});

Route::get('/offers/book-offer/{offerName}', function () {
    return view('offers.book');
});

Route::get('/terms', function () {
    return view('offers.terms');
});

Route::get('/installment', function () {
    return view('installment.index');
});

Route::get('/doctors', function () {
    return view('doctors.index');
});

Route::get('/branches', function () {
    return view('branches.index');
});

Route::get('/doctor/{doctorName}', function () {
    return view('doctors.doctor');
});

Route::get('/articals', function () {
    return view('articals.index');
});

Route::get('/articals/{articalName}', function () {
    return view('articals.artical');
});

Route::get('/contact-us', function () {
    return view('contact.index');
});

Route::get('/rate-us', function () {
    return view('contact.rate');
});



Route::get('test', function () {
    return view('welcome');
});

