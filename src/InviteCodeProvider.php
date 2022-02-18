<?php

namespace Hinet\InviteCode;

use Illuminate\Support\ServiceProvider;

class InviteCodeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {        
        $this->app->singleton('InviteCode', function ($app) {
            return new InviteCode($app['config']);
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('invitecode.php'),
        ],'invitecode');
    }
}
