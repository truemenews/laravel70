<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\TrueMeService;

class TrueMeProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('services.trueme', function ($app) {
            return new TrueMeService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
