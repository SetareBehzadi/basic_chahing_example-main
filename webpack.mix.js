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

mix.js(['resources/js/app.js',
        'resources/js/bootstrap.js'], 'public/js/app.js')

/*______________________Admin____________________________*/

.styles([
    'resources/assets/css/admin/base_css/bootstrap.min.css',
    'resources/assets/css/app/plugin/bootstrap-rtl/bootstrap-rtl.min.css',
    'resources/assets/css/admin/base_css/font-awesome.css',
    'resources/assets/css/admin/base_css/animate.css',
    'resources/assets/css/admin/base_css/style.css',
    'resources/assets/css/admin/base_css/base_fonts.css',

], 'public/css/admin/base_admin_css/base_admin_css.css')

    .scripts([
        'resources/assets/js/admin/base_js/jquery-2.1.1.js',
        'resources/assets/js/admin/base_js/bootstrap.min.js',
    ], 'public/js/admin/base_js/base_admin_js.js')
    /*______________________ app ____________________________*/

    .sass('resources/assets/sass/app.scss', 'public/css/app/app.css')

    .scripts([
        'resources/assets/js/admin/base_js/onimo.js',
    ],'public/js/app/main.js')

    .copyDirectory([
        'resources/assets/js/app',
    ], 'public/js/app')
    .copyDirectory([
        'resources/assets/js/admin',
    ], 'public/js/admin')
    .copyDirectory([
        'resources/assets/css/admin/base_css',
    ], 'public/css/admin/base_css')

    .copyDirectory([
        'resources/assets/img/admin',
    ], 'public/img/admin')
    .copyDirectory([
        'resources/assets/css/app/plugin',
    ], 'public/css/app/plugin')
    .copyDirectory([
        'resources/assets/img/app',
    ], 'public/img/app')
    .copyDirectory([
        'resources/assets/fonts',
    ], 'public/fonts');
mix.version(['public/css/app/app.css',
    'public/css/admin/base_admin_css/base_admin_css.css']);
