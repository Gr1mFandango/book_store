<?php

namespace App\Providers;

use App\Services\Author\AuthorService;
use App\Services\Book\BookService;
use App\Services\Publisher\PublisherService;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind('book', BookService::class);
        $this->app->bind('author', AuthorService::class);
        $this->app->bind('publisher', PublisherService::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        JsonResource::withoutWrapping();
    }
}
