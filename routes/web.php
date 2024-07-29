<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/book-now', function () {
    return view('bookNow.index');
});

Route::get('test', function () {
    return view('welcome');
});

