<?php


namespace Salman\LaravelModelUUID;

use Illuminate\Support\ServiceProvider;
use Salman\LaravelModelUUID\Commands\PublishTraits;

class LaravelModelUUIDServiceProvider extends ServiceProvider
{

    public function register()
    {

    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands([
            PublishTraits::class,
        ]);
    }

}
