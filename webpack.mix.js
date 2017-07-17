const { mix } = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js/bootstrap.min.js')
    .copy('node_modules/jquery/dist/jquery.min.js', 'public/js/jquery.min.js')
    .copy('node_modules/material-design-icons/iconfont', 'public/fonts')
    .sass('resources/assets/sass/app.scss', 'public/css');
