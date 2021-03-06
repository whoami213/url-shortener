<?php

namespace Marjose\UrlShortener;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class UrlShortenerServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('UrlShortener')
            ->hasConfigFile()
            ->hasMigration('create_url-shortener_table');
    }

    public function registeringPackage()
    {
        $this->app->bind('urlshortener', function ($app) {
            return new UrlShortener();
        });
    }
}
