<?php

namespace ValentinMorice\CurrencyInput;

use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class CurrencyInputServiceProvider extends PackageServiceProvider
{
    public static string $name = 'currency-input';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Js::make('currency', __DIR__ . '/../resources/js/script.js'),
        ], 'valentin-morice/currency-input');
    }
}
