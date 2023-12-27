<?php

namespace Netipar\Szamlazz;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SzamlazzServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('laravel-szamlazzhu')
            ->hasConfigFile();
    }
}
