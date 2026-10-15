<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Copy these routes into your Laravel project's routes/web.php file.
*/

// Basic page routes
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Wildcard route: the value in {name} is passed to the view.
Route::get('/hello/{name}', function (string $name) {
    return view('hello', ['name' => $name]);
})->where('name', '[A-Za-z]+')->name('hello');

// Wildcard route with two values.
Route::get('/student/{name}/{course}', function (string $name, string $course) {
    return view('student', [
        'name' => $name,
        'course' => $course,
    ]);
})->where([
    'name' => '[A-Za-z]+',
    'course' => '[A-Za-z]+',
])->name('student');

// Optional wildcard: visit /category or /category/technology.
Route::get('/category/{category?}', function (?string $category = 'General') {
    return view('category', ['category' => $category]);
})->where('category', '[A-Za-z-]+')->name('category');

// Example of changing displayed content using a wildcard value.
Route::get('/product/{id}', function (int $id) {
    $products = [
        1 => ['name' => 'Notebook', 'price' => 80],
        2 => ['name' => 'Pen', 'price' => 20],
        3 => ['name' => 'Backpack', 'price' => 650],
    ];

    abort_unless(isset($products[$id]), 404);

    return view('product', [
        'product' => $products[$id],
        'id' => $id,
    ]);
})->whereNumber('id')->name('product');
