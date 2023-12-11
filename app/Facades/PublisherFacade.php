<?php

namespace App\Facades;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Facade;

/**
 * @method static array getPublisherList()
 */
class PublisherFacade extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'publisher';
    }
}
