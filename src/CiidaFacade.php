<?php

namespace Ciida\Ciida;

use Illuminate\Support\Facades\Facade;

class CiidaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'ciida';
    }
}
