<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\imagesController;
use \RealRashid\SweetAlert\Facades\Alert;

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

//===========================admin Panel=============================================//
Route::get('/header', function () {
    return view('backend.layout.header');
});
Route::get('/adminindex', function () {
    return view('backend.index');
});
Route::get('/manage_photos', function () {
    return view('backend.manage_photos');
});


Route::get('/adminlogin',[adminController::class,'adminlogin']);
Route::post('/adminlogin',[adminController::class,'logincheck']);



Route::get('/add_image', function () {
    return view('backend.add_image');
});
Route::post('/add_images',[imagesController::class,'store']);
Route::get('/images', function () {
    return view('backend.images');
});



///==================================frontend =============================================///

Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/userlogin', function () {
    return view('frontend.userlogin');
});

Route::get('/registration',[userController::class,'index']);

Route::post('/registration',[userController::class,'store']); 

Route::post('/userlogin',[userController::class,'logincheck']);


Route::post('/index',[imagesController::class,'view_images']);



Route::get('/photo_gallary',[imagesController::class,'alldata']);









Route::get('/registration', function () {
    return view('frontend.registration');
});

Route::get('/userheader', function () {
    return view('frontend.layout.header');
});
Route::get('/userfooter', function () {
    return view('frontend.layout.footer');
});
Route::get('/index', function () {
    return view('frontend.index');
});
Route::get('/contact', function () {
    return view('frontend.contact');
});
Route::get('/about', function () {
    return view('frontend.about');
});
Route::get('/gallery', function () {
    return view('frontend.gallery');
});

Route::get('/photo-detail', function () {
    return view('frontend.photo-detail');
});

