<?php

namespace Emptynick\MonochromeThemesCollection;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class BlueThemeServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\BlueTheme::class);
    }

    public function register()
    {
        //
    }
}