<?php

namespace App\Http\Controllers\Web;

use App\Enums\BookStatus;
use App\Facades\AuthorFacade;
use App\Facades\BookFacade;
use App\Facades\PublisherFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreBookRequest;
use App\Models\Author;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BookController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create']);
    }
    public function index(): View
    {
        $books = BookFacade::getPublishedBooks();

        return view('books.index', ['books' => $books]);
    }

    public function show(Book $book): View
    {
        return view('books.show', ['book' => $book]);
    }

    public function create(): View
    {
        $authors = Author::query()->get()->map(function ($author) {
            return [
                'key' => $author->id,
                'value' => "$author->name $author->surname"
            ];
        })->toArray();

        $publishers = Publisher::query()->get()->map(function ($publisher) {
            return [
                'key' => $publisher->id,
                'value' => "$publisher->name"
            ];
        })->toArray();

        $statusList = [
            [
                'key' => BookStatus::Published->value,
                'value' => 'Опубликована'
            ],
            [
                'key' => BookStatus::Draft->value,
                'value' => 'Черновик'
            ],
        ];

        return view('books.create', [
            'authors' => $authors,
            'publishers' => $publishers,
            'statusList' => $statusList,
        ]);
    }

    public function store(StoreBookRequest $request): RedirectResponse
    {
        $book = BookFacade::store(
            $request->data()
        );

        return redirect()->route('books.show', ['book' => $book->id]);
    }

    public function search(Request $request)
    {
        $books = Book::query()
            ->where('title', 'like', "%$request->q%")
            ->orWhere('annotation', 'like', "%$request->q%")
            ->get()
        ;

        return view('books.index', ['books' => $books]);
    }

    public function filter(Request $request): View
    {
        $query = Book::query()
            ->when($request->title,function ($q) use ($request) {
                $q->where('title', 'like', "%$request->title%");
            })
            ->when($request->annotation,function ($q) use ($request) {
                $q->where('annotation', 'like', "%$request->annotation%");
            })
            ->when($request->page_number,function ($q) use ($request) {
                $q->where('page_number', '=', $request->page_number);
            })
        ;

        $query->orderBy('title','asc');

        return view('books.index', ['books' => $query->get()]);
    }
}
