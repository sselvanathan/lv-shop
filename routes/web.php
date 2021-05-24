<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\CategoryController;
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

Route::get(RouteServiceProvider::HOME, [HomeController::class, 'index'])->name('home');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::resource('categories', CategoryController::class);
    Route::resource('products', ProductController::class);
});
