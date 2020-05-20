const mix = require('laravel-mix');

 mix.sass('resources/src/styles.scss', 'resources/dist')
.options({
    processCssUrls: false,
    postCss: [],
});
