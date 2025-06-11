<?php

namespace Khakimjanovich\Bayt;

use Illuminate\Support\Facades\Http;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BaytServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('bayt-api')
            ->hasConfigFile();

        $this->app->bind('bayt-api', fn () => new Bayt(
            pending_request: Http::baseUrl('https://api.masjid.uz'),
        ));
    }
}
