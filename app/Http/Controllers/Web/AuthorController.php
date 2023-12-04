<?php

namespace App\Http\Controllers\Web;

use App\Facades\AuthorFacade;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAuthorRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AuthorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create']);
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
