<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\ShopController;

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

// Home
Route::get(
    '/',
    [HomeController::class, 'index']
)->name("home");

Route::post(
    '/',
    [HomeController::class, 'store']
);

// shop
Route::get(
    '/shop',
    [ShopController::class, 'index']
)->name('shop');

Route::post(
    '/shop',
    [ShopController::class, 'store']
);

// About
Route::get(
    '/about',
    AboutController::class
)->name('about');

// Contact
Route::get(
    '/contact',
    [ContactController::class, 'index']
)->name('contact');

Route::post(
    '/contact',
    [ContactController::class, 'store']
);
