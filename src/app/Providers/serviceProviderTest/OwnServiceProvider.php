<?php

namespace App\Providers\serviceProviderTest;

use Illuminate\Support\ServiceProvider;

class OwnServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
        app()->bind('myName', function(){
            return 'John Doe';
        });
        /*
        $this->app->bind('myName', function(){
            return 'John Doe'; });
        */
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
