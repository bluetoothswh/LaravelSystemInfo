<?php

namespace LaraMall\Admin\Sysinfo;

use Illuminate\Support\ServiceProvider;

class SysinfoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {   
        
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('sysinfo','LaraMall\Admin\Sysinfo\Sysinfo');
    }
}
