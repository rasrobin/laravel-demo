<?php

namespace Oneshoe\ShoesDemo;

use Illuminate\Support\ServiceProvider;

class ShoesDemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Load views
        $this->loadViewsFrom(__DIR__.'/views', 'Oneshoe\ShoesDemo');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // Load routes
        include __DIR__ . '/routes.php';
    }
}
