<?php

namespace App\Providers;

use App\Services\BookingService;
use Illuminate\Support\ServiceProvider;

class BookingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind('App\Services\BookingService', function ($app){
            return new BookingService();
        });
    }
}
