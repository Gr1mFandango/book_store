<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::post('/', 'store')->name('books.store');
    Route::get('/{book}', 'show')->name('book');
    Route::put('/{book}', 'update')->name('books.update');
    Route::patch('/{book}', 'update')->name('book.update');

    Route::post('/{book}/review', 'review')->name('review.store');

    // web
});

Route::controller(UserController::class)->group(function () {
    Route::post('/login', 'login')->name('login');
});
