const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.sass('resources/src/red.scss', 'resources/dist')
mix.sass('resources/src/blue.scss', 'resources/dist')
mix.sass('resources/src/orange.scss', 'resources/dist')
mix.sass('resources/src/teal.scss', 'resources/dist')
mix.sass('resources/src/yellow.scss', 'resources/dist')
mix.sass('resources/src/indigo.scss', 'resources/dist')
mix.sass('resources/src/green.scss', 'resources/dist')
mix.sass('resources/src/pink.scss', 'resources/dist')
mix.sass('resources/src/purple.scss', 'resources/dist')
.options({
    processCssUrls: false,
    postCss: [ tailwindcss() ],
});
