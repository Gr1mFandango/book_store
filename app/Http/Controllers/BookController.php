<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return $books;
    }

    // @route /books/{id}
    public function show($id)
    {
        $book = Book::where('id', $id)
            ->first();

        if ($book === null) {
            throw new NotFoundHttpException();
        }

        return $book;
    }
}
