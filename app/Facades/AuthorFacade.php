<?php

namespace App\Facades;

use App\Models\Author;
use App\Services\Author\CreateAuthorData;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static Collection getAuthors()
 * @method static Author store(CreateAuthorData $data)
 */
class AuthorFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'author';
    }
}
