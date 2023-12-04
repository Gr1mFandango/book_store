<?php

namespace App\Services\Author;

use Spatie\LaravelData\Data;

class CreateAuthorData extends Data
{
    public string $name;

    public string $surname;

    public string $patronymic;
}
