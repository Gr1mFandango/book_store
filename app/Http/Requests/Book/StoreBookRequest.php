<?php

namespace App\Http\Requests\Book;

use App\Enums\BookStatus;
use App\Http\Requests\AbstractRequest;
use App\Services\Book\CreateBookData;
use Illuminate\Validation\Rules\Enum;

class StoreBookRequest extends AbstractRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required', 'string'],
            'page_number' => ['int'],
            'annotation' => ['string'],
            'author_id' => ['required'],
            'publisher_id' => ['required'],
            'status' => new Enum(BookStatus::class), ['required'],
            'images.*' => ['image'],
        ];
    }

    public function attributes(): array
    {
        return [
            'title' => __('validation.attributes.book.title'),
            'page_number' => __('validation.attributes.book.page_number'),
            'annotation' => __('validation.attributes.book.annotation')
        ];
    }

    public function data(): CreateBookData
    {
        return CreateBookData::from(
            $this->validated()
        );
    }
}
