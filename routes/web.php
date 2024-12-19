<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CarouselImageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonyController;
use App\Models\Book;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/dashboard')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('dashboard');
    Route::resource('books', BookController::class);
    Route::resource('abouts', AboutController::class);
    Route::resource('contacts', ContactController::class);
    Route::resource('testimonies', TestimonyController::class);
    Route::resource('carousel-images', CarouselImageController::class);
});
