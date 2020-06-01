<?php

namespace Emptynick\MonochromeThemesCollection;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class RedTheme implements ThemePlugin
{
    public $name = 'Red Theme';
    public $description = 'A red theme for Voyager II';
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
        Route::get('red-theme.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/red.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('red-theme');
    }

    public function getSettingsView(): ?View
    {
        return null;
    }

    public function getCssRoutes(): array
    {
        return [
            route('red-theme')
        ];
    }

    public function getJsRoutes(): array
    {
        return [];
    }
}
