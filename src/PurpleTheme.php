<?php

namespace Emptynick\MonochromeThemesCollection;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class PurpleTheme implements ThemePlugin
{
    public $name = 'Purple Theme';
    public $description = 'A purple theme for Voyager 2';
    public $repository = 'emptynick/monochrome-color-themes';
    public $website = 'https://github.com/emptynick/monochrome-color-themes';
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
        Route::get('purple-theme.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/purple.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('purple-theme');
    }

    public function getSettingsView(): ?View
    {
        return null;
    }

    public function getCssRoutes(): array
    {
        return [
            route('purple-theme')
        ];
    }

    public function getJsRoutes(): array
    {
        return [];
    }
}
