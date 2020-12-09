<?php

namespace Jkujawski\TaxJar\Facades;

use Illuminate\Support\Facades\Facade;

class TaxJar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'taxjar';
    }
}
