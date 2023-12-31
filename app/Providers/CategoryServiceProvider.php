<?php

namespace App\Providers;

use App\Services\CategoryService;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\CategoryService', function($app){
            return new CategoryService();
        });
    }
}
