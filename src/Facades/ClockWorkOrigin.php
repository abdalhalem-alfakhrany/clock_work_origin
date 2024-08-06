<?php

namespace Abdalhalemalfakhrany\ClockWorkOrigin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Abdalhalemalfakhrany\ClockWorkOrigin\ClockWorkOrigin
 */
class ClockWorkOrigin extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Abdalhalemalfakhrany\ClockWorkOrigin\ClockWorkOrigin::class;
    }
}
