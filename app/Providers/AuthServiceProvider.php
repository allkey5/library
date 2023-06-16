<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Services\AuthService;

class AuthServiceProvider extends ServiceProvider
{
    public function register(){
        $this->app->bind('App\Services\AuthService', function ($app){
            return new AuthService();
        });
    }
}
