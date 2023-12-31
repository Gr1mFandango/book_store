<?php

namespace App\Facades;

use App\Http\Requests\Book\StoreReviewRequest;
use App\Models\Book;
use App\Models\Review;
use App\Services\Book\BookService;
use App\Services\Book\CreateBookData;
use Illuminate\Support\Facades\Facade;
use Illuminate\Database\Eloquent\Collection;

/**
 * @method static Book store(CreateBookData $data)
 * @method static Collection getPublishedBooks()
 * @method static Review createReview(StoreReviewRequest $request)
 * @method static BookService setBook
 *
 * @see \App\Services\Book\BookService
 */
class BookFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'book';
    }
}
