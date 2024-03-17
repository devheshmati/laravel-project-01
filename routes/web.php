<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pages\HomeController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactController;

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

Route::get(
    '/',
    [HomeController::class, 'index']
);

Route::post(
    '/',
    [HomeController::class, 'store']
);

Route::get(
    '/about',
    AboutController::class
);

Route::get(
    '/contact',
    [ContactController::class, 'index']
);

Route::post(
    '/contact',
    [ContactController::class, 'store']
);
