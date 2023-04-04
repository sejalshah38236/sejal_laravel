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
    return view('welcome');
});
Route::get('/header', function () {
    return view('frontend.layout.header');
});
Route::get('/footer', function () {
    return view('frontend.layout.footer');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/login', function () {
    return view('frontend.login');
});
Route::get('/men', function () {
    return view('frontend.men');
});
Route::get('/women', function () {
    return view('frontend.women');
});
Route::get('/product-detail', function () {
    return view('frontend.product-detail');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
});

Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/order-complete', function () {
    return view('frontend.order-complete');
});
Route::get('/wishlist', function () {
    return view('frontend.add-to-wishlist');
});




//==========================================================admin panel =====================================================================



Route::get('/page-login', function () {
    return view('backend.page-login');
});
Route::get('/adminindex', function () {
    return view('backend.index');
});
Route::get('/form', function () {
    return view('backend.form-custom');
});
Route::get('/adminheader', function () {
    return view('backend.layout.header');
});
Route::get('/admincharts', function () {
    return view('backend.charts');
});
Route::get('/userform', function () {
    return view('backend.userform');
});
Route::get('/table-basic', function () {
    return view('backend.table-basic');
});