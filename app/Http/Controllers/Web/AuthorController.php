<?php

namespace App\Http\Controllers\Web;

use App\Facades\AuthorFacade;
use App\Facades\BookFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create']);
    }

    public function index(): View
    {
        $authors = AuthorFacade::getAuthors();

        return view('authors.index', ['authors' => $authors]);
    }

    public function show(Author $author): View
    {
        $books = Book::query()->where('author_id', $author->id)->get();
        return view('books.index', ['books' => $books]);
    }

    public function create(): View
    {
        return view('authors.create');
    }

    public function store(StoreAuthorRequest $request): RedirectResponse
    {
        $author = AuthorFacade::store(
            $request->data()
        );

        return redirect()->route('books.index');
    }
}
