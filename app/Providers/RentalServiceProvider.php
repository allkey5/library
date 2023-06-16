<?php

namespace App\Providers;

use App\Services\RentalService;
use Illuminate\Support\ServiceProvider;

class RentalServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\RentalService', function ($app){
            return new RentalService();
        });
    }
}
