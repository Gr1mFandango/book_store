<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\StoreReviewRequest;
use Illuminate\View\View;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['store', 'create']);
    }

    public function create(): View
    {
        return view('review.create');
    }
    public function store(StoreReviewRequest $request): View
    {


        return view('review.create');
    }
}
