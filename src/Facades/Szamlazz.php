<?php

namespace Netipar\Szamlazz\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Netipar\Szamlazz\Szamlazz
 */
class Szamlazz extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Netipar\Szamlazz\Szamlazz::class;
    }
}
