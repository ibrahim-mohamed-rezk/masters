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

Route::get('test', function () {
    return view('welcome');
});

