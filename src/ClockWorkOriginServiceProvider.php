<?php

namespace Abdalhalemalfakhrany\ClockWorkOrigin;

use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Facades\FilamentAsset;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ClockWorkOriginServiceProvider extends PackageServiceProvider
{
    public static string $name = 'clock-work-origin';

    public static string $viewNamespace = 'clock-work-origin';

    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package->name(static::$name)
            ->hasViews()
            ->hasTranslations();
    }

    public function packageRegistered(): void {
        Livewire::component('clock-widget', ClockWorkOrigin::class);

        // Asset Registration
        FilamentAsset::register(
            assets:[
                AlpineComponent::make('clock-widget', __DIR__ . '/../resources/dist/clock-work-origin.js'),
            ],
            package: 'abdalhalem-alfakhrany/clock_work_origin'
        );
    }
}
