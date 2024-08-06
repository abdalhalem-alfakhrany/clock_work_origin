<?php

namespace Abdalhalemalfakhrany\ClockWorkOrigin;

use Abdalhalemalfakhrany\ClockWorkOrigin\Commands\ClockWorkOriginCommand;
use Abdalhalemalfakhrany\ClockWorkOrigin\Testing\TestsClockWorkOrigin;
use Filament\Support\Assets\AlpineComponent;
use Filament\Support\Assets\Asset;
use Filament\Support\Assets\Css;
use Filament\Support\Assets\Js;
use Filament\Support\Facades\FilamentAsset;
use Filament\Support\Facades\FilamentIcon;
use Illuminate\Filesystem\Filesystem;
use Livewire\Features\SupportTesting\Testable;
use Livewire\Livewire;
use Spatie\LaravelPackageTools\Commands\InstallCommand;
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
                AlpineComponent::make('clock-widget', __DIR__ . '/../resources/dist/clock-widget.js'),
            ],
            package: 'abdalhalem-alfakhrany/clock-work-origin'
        );
    }
}
