<?php

namespace Jkujawski\TaxJar\Facades;

use Illuminate\Support\Facades\Facade;

class TaxJar extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     *
     * @throws \RuntimeException
     */
    protected static function getFacadeAccessor()
    {
        return 'taxjar';
    }

}
