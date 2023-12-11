<?php

namespace App\Services\Author;

use App\Models\Author;
use Illuminate\Database\Eloquent\Collection;

class AuthorService
{
    private Author $author;
    public  function getAuthorList(): array
    {
        $authors = Author::query()->get();

        $authorList = [];

        foreach ($authors as $author) {
            $authorList[$author->id] = "$author->name $author->name";
        }

        return $authorList;
    }

    public function store(CreateAuthorData $data): Author
    {
        $author = new Author($data->toArray());

        $author->save();

        return $author;
    }
}
