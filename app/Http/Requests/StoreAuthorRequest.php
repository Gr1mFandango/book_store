<?php

namespace App\Http\Requests;

use App\Services\Author\CreateAuthorData;
use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'surname' => ['required', 'string'],
            'patronymic' => ['required', 'string'],
        ];
    }

    public function data(): CreateAuthorData
    {
        return CreateAuthorData::from(
            $this->validated()
        );
    }
}
