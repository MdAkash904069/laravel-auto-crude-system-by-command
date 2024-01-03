<?php

namespace Akash\AutoCrudeGenerator\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Akash\LaravelUniqueSlug\UniqueSlug
 */
class AutoCrude extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'auto-crude-generator';
    }
}
