<?php

namespace Ciida\Ciida;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ciida\Ciida\Skeleton\SkeletonClass
 */
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
