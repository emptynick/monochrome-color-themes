<?php

namespace Emptynick\MonochromeThemesCollection;

use Illuminate\Support\ServiceProvider;
use Voyager\Admin\Manager\Plugins as PluginManager;

class MonochromeThemesCollectionServiceProvider extends ServiceProvider
{
    public function boot(PluginManager $pluginmanager)
    {
        /*
purple
pink
        */
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\RedTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\OrangeTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\YellowTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\GreenTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\TealTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\BlueTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\IndigoTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\PurpleTheme::class);
        $pluginmanager->addPlugin(\Emptynick\MonochromeThemesCollection\PinkTheme::class);
    }

    public function register()
    {
        //
    }
}