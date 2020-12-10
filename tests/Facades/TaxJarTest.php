<?php

namespace Jkujawski\TaxJar\Tests\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use Jkujawski\TaxJar\Facades\TaxJar;
use Jkujawski\TaxJar\Tests\AbstractTestCase;
use TaxJar\Client;

class TaxJarTest extends AbstractTestCase {
    use FacadeTrait;

    protected function getFacadeAccessor()
    {
        return 'taxjar';
    }
    protected function getFacadeClass()
    {
        return TaxJar::class;
    }
    protected function getFacadeRoot()
    {
        return Client::class;
    }
}
