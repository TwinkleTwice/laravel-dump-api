<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../bootstrap/providers.php' => config_path('providers.php'),
        ], 'config');

        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }
}
