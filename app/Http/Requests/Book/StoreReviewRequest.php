<?php

namespace App\Http\Requests\Book;

use App\Http\Requests\ApiRequest;
use Illuminate\Foundation\Http\FormRequest;

class StoreReviewRequest extends ApiRequest
{
    public function rules(): array
    {
        return [
            'text' => ['string'],
            'rate' => ['int', 'min:1', 'max:5'],
        ];
    }
}
