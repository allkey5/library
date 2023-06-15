<?php

namespace App\Providers;

use App\Services\CategoryBookService;
use Illuminate\Support\ServiceProvider;

class CategoryBookServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\CategoryBookService', function($app) {
            return new CategoryBookService();
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
