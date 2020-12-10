<?php

namespace Jkujawski\TaxJar;

use Illuminate\Foundation\Application as LaravelApplication;
use Illuminate\Support\ServiceProvider;
use TaxJar\Client;

class TaxJarServiceProvider extends ServiceProvider
{
    protected $defer = true;

    public function boot()
    {
        $source = realpath(__DIR__ . '/../config/taxjar.php');

        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole()) {
            $this->publishes([$source => config_path('taxjar.php')]);
        }

        $this->mergeConfigFrom($source, 'taxjar');
    }

    public function register()
    {
        $this->app->singleton('taxjar', function($app) {
            $token = $app->make('config')->get('taxjar.token');

            return Client::withApiKey($token);
        });

        $this->app->alias('taxjar', Client::class);
    }

    public function provides()
    {
        return ['taxjar', Client::class];
    }
}
