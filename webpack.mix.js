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

mix.js('resources/js/app.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css');

mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css')
mix.copy('node_modules/admin-lte/plugins/jquery/jquery.min.js', 'public/js')
mix.copy('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', 'public/js')
mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/css')
mix.copy('node_modules/admin-lte/plugins/plugins/fontawesome-free/css/all.min.css', 'public/css')

mix.copyDirectory('node_modules/admin-lte/dist/img', 'public/img')

mix.copy('node_modules/sweetalert2/dist/sweetalert2.min.js', 'public/js')

