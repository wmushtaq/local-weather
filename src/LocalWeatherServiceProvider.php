<?php

namespace Wmushtaq\LocalWeather;

use Illuminate\Support\ServiceProvider;

class LocalWeatherServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->loadViewsFrom(__DIR__.'/views', 'weather');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(
            __DIR__.'/config/weather.php', 'weather'
        );

        $this->publishes([
            __DIR__.'/config/weather.php' => config_path('weather.php'),
        ]);

        $this->publishes([
            __DIR__.'/database/migrations' => database_path('migrations')
        ], 'weather');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
