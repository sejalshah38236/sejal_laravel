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
Route::get('/cart', function () {
    return view('frontend.cart');
});
Route::get('/shop', function () {
    return view('frontend.shop');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/checkout', function () {
    return view('frontend.checkout');
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
Route::get('/adduser', function () {
    return view('backend.adduser');
});
Route::get('/addseller', function () {
    return view('backend.addseller');
});

Route::get('/table-basic', function () {
    return view('backend.table-basic');
});