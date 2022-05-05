<?php

namespace RyanChandler\LaravelSuperScopes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use RyanChandler\LaravelSuperScopes\Commands\LaravelSuperScopesCommand;

class LaravelSuperScopesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-super-scopes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel-super-scopes_table')
            ->hasCommand(LaravelSuperScopesCommand::class);
    }
}
