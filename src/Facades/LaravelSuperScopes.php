<?php

namespace RyanChandler\LaravelSuperScopes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \RyanChandler\LaravelSuperScopes\LaravelSuperScopes
 */
class LaravelSuperScopes extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'laravel-super-scopes';
    }
}
