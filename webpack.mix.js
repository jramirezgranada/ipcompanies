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

mix.styles([
    './node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap.css',
    './node_modules/admin-lte/bower_components/bootstrap/dist/css/bootstrap-theme.css',
    './node_modules/admin-lte/bower_components/font-awesome/css/font-awesome.css',
    './node_modules/admin-lte/bower_components/Ionicons/css/ionicons.css',
    './node_modules/admin-lte/bower_components/jvectormap/jquery-jvectormap.css',
    './node_modules/admin-lte/dist/css/AdminLTE.css',
    './node_modules/admin-lte/plugins/iCheck/square/blue.css'
], 'public/css/all-admin-lte.css');


mix.scripts([
    './node_modules/jquery/dist/jquery.js',
    './node_modules/admin-lte/bower_components/bootstrap/dist/js/bootstrap.js',
    './node_modules/admin-lte/bower_components/fastclick/fastclick.js',
    './node_modules/admin-lte/dist/js/adminlte.js',
    './resources/js/custom.js',
    './node_modules/admin-lte/bower_components/jquery-sparkline/dist/jquery.sparkline.js',
    './node_modules/admin-lte/bower_components/jvectormap/jquery-jvectormap.js',
    './node_modules/admin-lte/bower_components/jquery-slimscroll/jquery.slimscroll.js',
    './node_modules/admin-lte/bower_components/chart.js/Chart.js',
    './node_modules/admin-lte/plugins/iCheck/icheck.js'
], 'public/js/all-admin-lte.js');

mix.copy([
    './node_modules/admin-lte/bower_components/font-awesome/fonts',
    './node_modules/admin-lte/bower_components/bootstrap/fonts',
], 'public/fonts');

mix.copy([
    './node_modules/admin-lte/dist/img',
], 'public/dist/img');

mix.copy([
    './node_modules/admin-lte/dist/css/skins',
], 'public/dist/css/skins');
