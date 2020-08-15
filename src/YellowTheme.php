<?php

namespace Emptynick\MonochromeThemesCollection;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\View\View;
use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class YellowTheme implements ThemePlugin
{
    public $name = 'Yellow Theme';
    public $description = 'A yellow theme for Voyager II';
    public $repository = 'emptynick/monochrome-color-themes';
    public $website = 'https://github.com/emptynick/monochrome-color-themes';
    public $version = '1.0.0';

    public function providePublicRoutes(): void
    {
        Route::get('yellow-theme.css', function () {
            $path = realpath(dirname(__DIR__, 1).'/resources/dist/yellow.css');
            $response = response(File::get($path), 200, ['Content-Type' => 'text/css']);
            $response->setSharedMaxAge(31536000);
            $response->setMaxAge(31536000);
            $response->setExpires(new \DateTime('+1 year'));

            return $response;
        })->name('yellow-theme');
    }

    public function provideCSS(): string
    {
        return route('voyager.yellow-theme');
    }
}
