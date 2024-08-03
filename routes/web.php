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

Route::get('test', function () {
    return view('welcome');
});

