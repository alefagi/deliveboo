const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/guestHome.js', 'public/js')
    .js('resources/js/guestShow.js', 'public/js')
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/confirm-delete.js', 'public/js')
    .js('resources/js/cover-preview.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
