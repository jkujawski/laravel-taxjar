<?php

namespace Jkujawski\TaxJar;

use Illuminate\Support\ServiceProvider;
use TaxJar\Client;

class TaxJarServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/taxjar.php' => base_path('config/taxjar.php')
        ]);
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/taxjar.php', 'taxjar');

        $this->app->singleton('taxjar', function() {
            return Client::withApiKey(config('taxjar.token'));
        });
    }
}
