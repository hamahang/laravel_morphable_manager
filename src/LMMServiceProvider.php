<?php

namespace Hamahang\LMM;

use Illuminate\Support\ServiceProvider;

class LMMServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/Database/Migrations/' => database_path('migrations')
        ], 'migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
	    $this->app->bind('LMM', function () {
		    return new LMM;
	    });
    }
}
