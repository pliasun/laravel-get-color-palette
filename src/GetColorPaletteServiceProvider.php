<?php

namespace Pliasun\LaravelGetColorPalette;

use Illuminate\Support\ServiceProvider;

/**
 * Class GetColorPaletteClient
 * @package Pliasun\LaravelGetColorPalette
 */
class GetColorPaletteServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('GetColorPaletteClient', function ($app) {
            return new GetColorPaletteClient();
        });
    }
}
