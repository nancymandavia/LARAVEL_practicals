<?php

use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('home');
})->name('home');

// About page route
Route::get('/about', function () {
    return view('about');
})->name('about');

// Contact page route
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
