<?php

namespace Ciida\Ciida\Tests;

use Ciida\Ciida\CiidaServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app): array
    {
        return [
            CiidaServiceProvider::class,
        ];
    }
}