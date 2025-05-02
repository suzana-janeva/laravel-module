<?php

namespace App\Providers;

use App\Interfaces\ServiceProviderInterface;
use App\Repositories\ServiceProviderRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind( ServiceProviderInterface::class, ServiceProviderRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
