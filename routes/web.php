<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/balones', function () {
    return view('balones');
});

Route::get('/uniformes', function () {
    return view('uniformes');
});
