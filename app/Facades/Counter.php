<?php
/**
 * Created by PhpStorm.
 * User: Rosid
 * Date: 4/28/2018
 * Time: 6:30 AM
 */

namespace app\Facades;


use Illuminate\Support\Facades\Facade;

class Counter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'counter';
    }

}