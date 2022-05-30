<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\KamarController;
use App\Http\Controllers\User\KamarKostController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TempatKostController;
use App\Http\Controllers\User\TempatKostController as TempatKostUser;

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

Route::get('/tempat-kost', [TempatKostUser::class, 'index'])->name('tempat-kost');
Route::get('/tempat-kost-item', [TempatKostUser::class, 'listFilter'])->name('tempat-kost-item');
Route::get('/tempat-kost/view/{id}', [TempatKostUser::class, 'show'])->name('tempat-kost-view');

Route::get('/kamar-kost/{id}', [KamarKostController::class, 'index'])->name('kamar-kost');

Route::get('/tentang', function () {
    return view('user.tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('user.kontak');
})->name('kontak');

// Admin & Pemilik Kost Route
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
