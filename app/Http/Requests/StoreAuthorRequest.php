<?php

namespace App\Http\Requests;

use App\Services\Author\CreateAuthorData;

class StoreAuthorRequest extends AbstractRequest
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
