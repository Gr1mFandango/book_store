<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class BookController extends Controller
{
    public function index(): Collection
    {
        return Book::all();
    }

    // @route /books/{id}
    public function show(Book $book): Book
    {
        return $book;
    }

    public function store(Request $request)
    {
        $book = New Book([
            'title' => request()->input('title'),
            'page_number' => request()->integer('page_number'),
            'annotation' => request()->input('annotation'),
            'author_id' => request()->integer('author_id')
        ]);
        //дописать
        $book->save();

        return $book;
    }

    public function update(Book $book): Book
    {
        $data = [];

        if (request()->method() === 'PUT') {
            $data = [
                'title' => request()->input('title'),
                'page_number' => request()->integer('page_number'),
                'annotation' => request()->input('annotation'),
                'author_id' => request()->integer('author_id'),
            ];
        } else {
            if (request()->has('title')) {
                $data['title'] = request()->input('title');
            }
            if (request()->has('page_number')) {
                $data['page_number'] = request()->integer('page_number');
            }
            if (request()->has('annotation')) {
                $data['annotation'] = request()->input('annotation');
            }
            if (request()->has('author_id')) {
                $data['author_id'] = request()->integer('author_id');
            }
        }

        $book->update($data);

        return $book;
    }


}
