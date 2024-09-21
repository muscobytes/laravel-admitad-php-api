<?php

namespace Muscobytes\LaravelAdmitadApi\Facades;

use Illuminate\Support\Facades\Facade;

class Admitad extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return 'admitad';
    }
}