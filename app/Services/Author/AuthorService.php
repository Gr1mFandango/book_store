<?php

namespace App\Services\Author;

use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

class AuthorService
{
    private Author $author;
    public  function getAuthors(): Collection
    {
        return Author::query()->get();
    }

    public function store(CreateAuthorData $data): Author
    {
        $author = new Author($data->toArray());

        $author->save();

        return $author;
    }
}
