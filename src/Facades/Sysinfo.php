<?php

namespace LaraMall\Admin\Sysinfo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mews\Captcha
 */
class Sysinfo extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() 
    { 
    	return 'sysinfo';
    }

}
