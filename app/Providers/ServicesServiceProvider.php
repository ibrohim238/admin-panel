<?php

namespace App\Providers;

use App\Contracts\RoleServiceContract;
use App\Contracts\UserServiceContract;
use App\Services\RoleService;
use App\Services\UserService;
use Illuminate\Support\ServiceProvider;

class ServicesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(
            UserServiceContract::class,
            UserService::class,
        );
        $this->app->singleton(
            RoleServiceContract::class,
            RoleService::class,
        );
    }
}
