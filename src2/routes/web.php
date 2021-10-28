<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/item', function () {
    return view('item');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/cart', function() {
    return view('cart');
});

Route::get('/blogs', function() {
    return view('blogs');
});

Route::get('/blog-item', function() {
    return view('blog-item');
});
