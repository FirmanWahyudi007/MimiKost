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

// User Route
Route::get('/', function () {
    return view('user.home');
})->name('home');

Route::get('/tempat-kost', function () {
    return view('user.tempatKostMobile');
})->name('tempat-kost');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');

// Admin & Pemilik Kost Route

Route::prefix('admin')->group(function () {

    Route::get('/', function () {
        return "Halo admin";
    });

    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});


// ETC Route
Route::get('/demo', function () {
    return view('demo');
});
