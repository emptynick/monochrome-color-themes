<?php

namespace Voyager\ThemeBoilerplate;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Facades\Plugins as PluginFacade;

class ThemeBoilerplateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginFacade::addPlugin(\Voyager\ThemeBoilerplate\ThemeBoilerplate::class);
    }

    public function register()
    {
        //
    }
}