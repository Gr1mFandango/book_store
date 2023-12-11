<?php

namespace App\Services\Publisher;

use App\Models\Publisher;

class PublisherService
{
    private Publisher $publisher;
    public function getPublisherList(): array
    {
        $publishers = Publisher::query()->get();

        $publisherList = [];

        foreach ($publishers as $publisher) {
            $publisherList[$publisher->id] = "$publisher->name";
        }

        return $publisherList;
    }
}
