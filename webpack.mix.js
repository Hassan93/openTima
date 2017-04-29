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
   .sass('resources/assets/sass/app.scss', 'public/css');
   mix.copy('node_modules/semantic-ui-css/semantic.min.css', 'public/css/semantic.min.css');
   mix.copy('node_modules/semantic-ui-css/semantic.css', 'public/css/semantic.css');
   mix.copy('node_modules/semantic-ui-css/semantic.min.js', 'public/css/semantic.min.js');
   mix.copy('node_modules/semantic-ui-css/semantic.js', 'public/css/semantic.js');
