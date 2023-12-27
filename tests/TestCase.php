<?php

namespace Netipar\Szamlazz\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Netipar\Szamlazz\SzamlazzServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function getPackageProviders($app)
    {
        return [
            SzamlazzServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
