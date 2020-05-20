<?php

namespace Emptynick\BlueTheme;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class BlueThemeServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\BlueTheme\BlueTheme::class);
    }

    public function register()
    {
        //
    }
}