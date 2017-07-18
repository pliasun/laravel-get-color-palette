<?php

namespace Pliasun\LaravelGetColorPalette;

use Illuminate\Support\Facades\Facade;

/**
 * Class GetColorPaletteFacade
 * @package Pliasun\LaravelGetColorPalette
 */
class GetColorPaletteFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'GetColorPaletteClient';
    }
}
