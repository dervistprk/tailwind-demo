<?php

use App\Http\Controllers\UserController;
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


Route::middleware('auth')->group(function() {
    Route::get('/cikis', [UserController::class, 'logout'])->name('logout');

    Route::get('/profil', function () {
        return view('profile');
    })->name('profile');
});

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/giris', function () {
    return view('login');
})->name('login');

Route::post('/giris', [UserController::class, 'login'])->name('login.post');

Route::get('/kayit-ol', function () {
    return view('register');
})->name('register');

Route::post('/kayit-ol', [UserController::class, 'register'])->name('register.post');

Route::get('/hakkinda', function () {
    return view('about');
})->name('about');
