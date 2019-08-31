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

// mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css')
// mix.copy('node_modules/admin-lte/dist/css/adminlte.min.css', 'public/css')
// mix.copy('node_modules/admin-lte/plugins/jquery/jquery.min.js', 'public/js')
// mix.copy('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js', 'public/js')
// mix.copy('node_modules/admin-lte/dist/js/adminlte.min.js', 'public/css')
// mix.copy('node_modules/admin-lte/plugins/plugins/fontawesome-free/css/all.min.css', 'public/css')

// mix.copyDirectory('node_modules/admin-lte/dist/img', 'public/img')

// mix.copy('node_modules/sweetalert2/dist/sweetalert2.min.js', 'public/js')

// Select2
mix.copy('node_modules/select2/dist/css/select2.min.css', 'public/css')
mix.copy('node_modules/@ttskch/select2-bootstrap4-theme/dist/select2-bootstrap4.css', 'public/css')
mix.copy('node_modules/select2/dist/js/select2.min.js', 'public/js')

// Datatables
mix.copy('node_modules/datatables.net/js/jquery.dataTables.min.js', 'public/js')
mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js')
mix.copy('node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'public/css')

// Holder
mix.copy('node_modules/holderjs/holder.js', 'public/js')
