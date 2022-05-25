<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KamarController;
use App\Http\Controllers\Admin\TempatKostController;
use App\Http\Controllers\Auth\LoginController;
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

Route::get('/tempat-kost/view', function () {
    return view('user.tempatKostView');
})->name('tempat-kost-view');

Route::get('/kamar-kost', function () {
    return view('user.KamarKost');
})->name('kamar-kost');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');

// Admin & Pemilik Kost Route

    // Auth
    // Route::resource('/login', LoginController::class);
Route::prefix('admin')->middleware('auth')->group(function () {

    Route::resource('/', DashboardController::class);
    Route::resource('/tempat', TempatKostController::class);
    Route::resource('/kamar', KamarController::class);


    Route::get('/users', function () {
        // Matches The "/admin/users" URL
    });
});


// ETC Route
Route::get('/demo', function () {
    return view('demo');
});

require __DIR__.'/auth.php';
