<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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


Route::get('/', [HomeController::class, 'index'])->name('front');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about-us');
Route::get('/departments', [HomeController::class, 'departments'])->name('departments');
Route::get('/besda', [HomeController::class, 'besda'])->name('besda');
Route::get('/unicef', [HomeController::class, 'unicef'])->name('unicef');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact-us');
