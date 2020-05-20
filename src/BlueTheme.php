<?php

namespace Emptynick\BlueTheme;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class BlueTheme implements ThemePlugin
{
    public $name = 'Blue Theme';
    public $description = 'A blue theme for Voyager 2';
    public $repository = 'emptynick/voyager-blueish-theme';
    public $website = 'https://github.com/emptynick/voyager-blueish-theme';
    public $version = '1.0.0';

    public function getInstructionsView(): ?View
    {
        return null;
    }

    public function registerProtectedRoutes()
    {
        //
    }

    public function registerPublicRoutes()
    {
        Route::get('blue-theme.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/styles.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('blue-theme');
    }

    public function getSettingsView(): ?View
    {
        return null;
    }

    public function getStyleRoute(): string
    {
        return route('blue-theme');
    }
}
