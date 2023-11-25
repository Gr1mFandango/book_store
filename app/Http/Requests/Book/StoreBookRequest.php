<?php

namespace App\Http\Requests\Book;

use App\Enums\BookStatus;
use App\Http\Requests\ApiRequest;
use App\Services\Book\CreateBookData;
use Illuminate\Validation\Rules\Enum;

class StoreBookRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'page_number' => ['int'],
            'annotation' => ['string'],
            'author_id' => ['required'],
            'publisher_id' => ['required'],
            'status' => new Enum(BookStatus::class),
            'images.*' => ['image'],
        ];
    }

    public function data(): CreateBookData
    {
        return CreateBookData::from(
            $this->validated()
        );
    }
}
