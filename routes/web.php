<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

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
// Route::get('login', 'AuthController@login')->name('login');
// Route::post('login', 'AuthController@login');
// Route::get('logout', 'AuthController@logout')->name('logout');

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('home');
});

Route::get('/rooms', function () {
    return view('rooms');
});

Route::get('/rooms-details', function () {
    return view('room-details');
});

Route::get('/about-us', function () {
    return view('about-us');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login',  [LoginController::class, 'login']);

Route::get('/signup', [RegisterController::class, 'signup']);

Route::post('/signup', [RegisterController::class, 'store']);

Route::get('/rooms-check', function () {
    return view('rooms-check');
});


Route::get('/my-booking', function () {
    return view('my-booking');
});

Route::get('/payment-page', function () {
    return view('payment-page');
});

Route::get('/admin', function () {
    return view('/admin/admin');
});

Route::get('/billing-admin', function () {
    return view('/admin/billing-admin');
});

Route::get('/profile-admin', function () {
    return view('/admin/profile-admin');
});

Route::get('/sign-in-admin', function () {
    return view('/admin/sign-in-admin');
});

Route::get('/sign-up-admin', function () {
    return view('/admin/sign-up-admin');
});

Route::get('/tables-admin', function () {
    return view('/admin/tables-admin');
});

Route::get('/daftar-tamu', function () {
    return view('/admin/daftar-tamu');
});
