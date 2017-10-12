<?php
namespace Chenhua\OnlineKefu\Facades;

use Illuminate\Support\Facades\Facade;

class OnlineKefu extends Facade
{
    public static function getFacadeAccessor()
    {
        return 'online-kefu';
    }
}