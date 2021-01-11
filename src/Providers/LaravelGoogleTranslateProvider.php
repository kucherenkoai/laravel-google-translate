<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Providers;

use Illuminate\Support\ServiceProvider;

class LaravelGoogleTranslateProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([__DIR__.'/../Publish/LaravelGoogleTranslate.php' => config_path('laravelGoogleTranslate.php')], 'config');
    }
}
