<?php

use App\Http\Controllers\BookController;
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
})->name('home');

Route::get('/add', function () {
    return view('addForm');
})->name('addForm');


Route::options('/')->name('home');

Route::match(['get', 'post'], '/match');

Route::any('/any');

// Внедрение зависимости



// Перенаправление

Route::redirect('/from', '/to', 301);


// Представления

Route::view('/not-found', 'not-found');

// Параметры

//Route::get('/books/{id}', function ($id) {
//    return 'Книга #' . $id;
//});

Route::get('/books/{book}/comment/{comment}', function ($bookId, $commentId) {

});

//Route::get('/books/{id}', function (Request $request, $id) {
//    return 'Книга #' . $id;
//})->name('book.id');
//
//Route::get('/books/{?id}', function ($id) {
//    return 'Книга #' . $id;
//});

Route::controller(BookController::class)->prefix('/books')->group(function () {
    Route::get('/', 'index')->name('books.index');
    Route::get('/{id}', 'show')->name('book');
});

