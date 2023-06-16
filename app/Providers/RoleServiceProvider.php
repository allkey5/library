<?php

namespace App\Providers;

use App\Services\RoleService;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\RoleService', function($app){
            return new RoleService();
        });
    }
}
