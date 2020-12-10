<?php

namespace Jkujawski\TaxJar\Tests;

use GrahamCampbell\TestBenchCore\ServiceProviderTrait;
use TaxJar\Client;

class ServiceProviderTest extends AbstractTestCase
{
    use ServiceProviderTrait;

    /** @test */
    public function it_tests_if_taxjar_client_is_injectable()
    {
        $this->assertIsInjectable(Client::class);
    }
}
