<?php

namespace Kucherenkoai\LaravelGoogleTranslate\Providers;

use Illuminate\Support\ServiceProvider;
use WebSocketsZMQ\Commands\WebSocketServer;

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
