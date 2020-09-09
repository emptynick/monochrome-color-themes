<?php

namespace Emptynick\MonochromeThemesCollection;

use Voyager\Admin\Contracts\Plugins\ThemePlugin;

class BlueTheme implements ThemePlugin
{
    public $name = 'Blue Theme';
    public $description = 'A blue theme for Voyager II';
    public $repository = 'emptynick/monochrome-color-themes';
    public $website = 'https://github.com/emptynick/monochrome-color-themes';
    public $version = '1.0.0';

    public function provideCSS(): string
    {
        return file_get_contents(realpath(dirname(__DIR__, 1).'/resources/dist/blue.css'));
    }
}
