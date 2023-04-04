<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
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
Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/cart', function () {
    return view('frontend.cart');
});

Route::get('/checkout', function () {
    return view('frontend.checkout');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/detail', function () {
    return view('frontend.detail');
});



Route::get('/index', function () {
    return view('frontend.index');
});
//-------------------------------------------------------Admin Routes--------------------------------------------------------------------------------



Route::get('/admin', function () {
    return view('backend.dashboard');
});

Route::get('/admin_header', function () {
    return view('backend.layout.header');
});
Route::get('/admin_footer', function () {
    return view('backend.layout.footer');
});
Route::get('/404_error', function () {
    return view('backend.404_error');
});

Route::get('/dashboard', function () {
    return view('backend.dashboard');
});
Route::get('/login', function () {
    return view('backend.login');
});
Route::get('/profile', function () {
    return view('backend.profile');
});
Route::get('/manage_user', function () {
    return view('backend.manage_user');
});
Route::get('/manage_employee', function () {
    return view('backend.manage_employee');
});
Route::get('/add_emp', function () {
    return view('backend.add_emp');
});