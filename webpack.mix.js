let mix = require('laravel-mix');

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

mix.scripts([
    'resources/assets/js/vue.js',
    'resources/assets/js/axios.js',
    'resources/assets/js/app.js',
    ], 'public/js/app.js').version().sass('node_modules/bootstrap-sass/assets/stylesheets/_bootstrap.scss', 'public/css/app.css').version();

