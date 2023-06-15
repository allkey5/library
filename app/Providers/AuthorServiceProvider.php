<?php

namespace App\Providers;

use App\Library\Services\AuthorService;
use Illuminate\Support\ServiceProvider;

class AuthorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\AuthorService', function ($app){
            return new AuthorService();
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
