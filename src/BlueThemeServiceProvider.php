<?php

namespace Emptynick\BlueTheme;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Facades\Plugins as PluginFacade;

class BlueThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        PluginFacade::addPlugin(\Emptynick\BlueTheme\BlueTheme::class);
    }

    public function register()
    {
        //
    }
}