<?php
/**
 * Created by PhpStorm.
 * User: DELL-IN5567
 * Date: 5/22/2018
 * Time: 1:41 PM.
 */

namespace PhpJunior\DailyMotion\Facades;

use Illuminate\Support\Facades\Facade;

class DailyMotionFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'dailymotion';
    }
}
