<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tentang-kami', function () {
    return view('about'); // Kita akan menampilkan view bernama 'about'
});

Route::get('/contact', function () {
    return view('contact'); // Kita akan menampilkan view bernama 'contact'
});