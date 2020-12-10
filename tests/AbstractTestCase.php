<?php

namespace Jkujawski\TaxJar\Tests;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Jkujawski\TaxJar\TaxJarServiceProvider;

abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Setup the application environment.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        parent::getEnvironmentSetUp($app);

        $app->config->set('taxjar.token', 'test-token');
    }

    protected function getServiceProviderClass($app)
    {
        return TaxJarServiceProvider::class;
    }
}
