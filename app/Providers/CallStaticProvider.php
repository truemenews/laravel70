<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * This class will help you register class 
 *     the classes you want to call statically
 *     pls register they in $this->register() & $this->provides() functions
 * 
 */
class CallStaticProvider extends ServiceProvider
{
    protected $defer = true;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('message', function () {
            return new \App\Message;
        });
       $this->app->bind('user', function () {
            return new \App\user;
        });
    }

    public function provides()
    {
        return ['message', 'user'];
    }
}