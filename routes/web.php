<?php

use App\Http\Controllers\Web\ReviewController;
use App\Http\Controllers\Web\UserController;
use App\Http\Controllers\Web\AuthorController;
use App\Http\Controllers\Web\BookController;
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

Route::get('/', BookController::class . '@index')->name('home');

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::get('/create', 'create')->name('books.create');
    Route::post('/', 'store')->name('books.store');
    Route::get('/search', 'search')->name('books.search');
    Route::get('/filter', 'filter')->name('books.filter');
    Route::get('/{book}', 'show')->name('books.show');
});

Route::controller(AuthorController::class)->prefix('/authors')->group(function () {
    Route::get('/', 'index')->name('authors.index');
    Route::get('/create', 'create')->name('authors.create');
    Route::post('/', 'store')->name('authors.store');
    Route::get('/{author}', 'show')->name('authors.show');
});

Route::controller(UserController::class)->prefix('/user')->group(function () {
    Route::get('/login', 'login')->name('user.login');
    Route::get('/logout', 'logout')->name('user.logout');
    Route::post('/auth', 'auth')->name('user.auth');
    Route::get('/register', 'register')->name('user.register');
    Route::post('/store', 'store')->name('user.store');
});

Route::controller(ReviewController::class)->prefix('/review')->group(function () {
    Route::get('/create', 'create')->name('review.create');
    Route::post('/store', 'store')->name('review.store');
});
