<?php

namespace Muscobytes\LaravelAdmitadApi;

use Admitad\Api\Api;
use Illuminate\Support\ServiceProvider;

class AdmitadServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/admitad.php' => config_path('admitad.php'),
            ], 'admitad');
        }
    }


    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/admitad.php', 'admitad'
        );

        $this->app->bind('admitad', function($app) {
            return new  Api();
        });
    }
}