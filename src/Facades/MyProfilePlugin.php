<?php

namespace Sikandarmoyaldev\MyProfilePlugin\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Sikandarmoyaldev\MyProfilePlugin\MyProfilePlugin
 */
class MyProfilePlugin extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Sikandarmoyaldev\MyProfilePlugin\MyProfilePlugin::class;
    }
}
