<?php

namespace App\Providers;

use App\Repositories\FirstUserRepository;
use App\Services\FirstUserService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class FirstUserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FirstUserService::class, function (Application $app){
            return new FirstUserService($app->make(FirstUserRepository::class));
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
