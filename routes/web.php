<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LoginController;

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
Route::controller(DashboardController::class)->group(function () {
     Route::get('/', 'index');
     Route::get('/product', 'produk');
     Route::get('/portfolio', 'porto');
     Route::get('/about', 'tentang');
});

Route::controller(LoginController::class)->group(function () {

    Route::get('/login', 'index')->middleware('guest');
    Route::get('/register', 'daftar')->middleware('guest');
    Route::post('/login', 'authenticate')->middleware('guest');
    Route::post('/register', 'store')->middleware('guest');
    Route::post('/logout','logout')->middleware('auth');
});
