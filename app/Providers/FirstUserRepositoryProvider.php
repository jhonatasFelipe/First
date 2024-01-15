<?php

namespace App\Providers;

use App\Models\FirstUser;
use App\Repositories\FirstUserRepository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider;

class FirstUserRepositoryProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(FirstUserRepository::class, function (Application $app){
            return new FirstUserRepository($app->make(FirstUser::class));
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
