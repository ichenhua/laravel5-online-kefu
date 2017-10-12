<?php

namespace Chenhua\OnlineKefu;

use Illuminate\Support\ServiceProvider;

class OnlineKefuServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom('resources/views/vendor/kefu', 'kefu');

        $this->publishes([
            __DIR__.'/config/views' => base_path('resources/views/vendor/kefu'),
        ],'kefu');
        $this->publishes([
            __DIR__.'/config/kefu' => base_path('public/plugin/kefu'),
        ],'kefu');
        $this->publishes([
            __DIR__.'/config/kefu.php' => config_path('kefu.php'),
        ],'kefu');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind("online-kefu", function(){
            return new OnlineKefu();
        });
    }
}
