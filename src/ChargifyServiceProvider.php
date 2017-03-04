<?php

namespace Jes\LogiChargify;

use Illuminate\Support\ServiceProvider;

class ChargifyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {        
        $this->publishes([
            __DIR__.'/Config/chargify.php' => config_path('chargify.php'),
            //__DIR__.'/Config/config1.php' => config_path('config1.php'),
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom( __DIR__.'/Config/chargify.php', 'chargify');
//        $this->mergeConfigFrom( __DIR__.'/Config/config1.php', 'bleh');
        $this->app['chargify'] = $this->app->share(function($app) {
            return new Chargify;
        });
    }
}
