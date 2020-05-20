const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

 mix.sass('resources/src/styles.scss', 'resources/dist')
.options({
    processCssUrls: false,
    postCss: [ tailwindcss() ],
});
