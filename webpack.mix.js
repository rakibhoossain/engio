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
mix.styles([
    'resources/css/frontend/bootstrap.min.css',
    'resources/css/frontend/owl.carousel.min.css',
    'resources/css/frontend/animate.min.css',
    'resources/css/frontend/magnific-popup.css',
    'resources/css/frontend/fontawesome-all.min.css',
    'resources/css/frontend/themify-icons.css',
    'resources/css/frontend/meanmenu.css',
    'resources/css/frontend/slick.css',



    'resources/css/frontend/main.css',
    'resources/css/frontend/responsive.css',

], 'public/css/frontend.css');


mix.scripts([
    'resources/js/frontend/vendor/modernizr-3.5.0.min.js',
    'resources/js/frontend/vendor/jquery-1.12.4.min.js',
    'resources/js/frontend/popper.min.js',
    'resources/js/frontend/bootstrap.min.js',
    'resources/js/frontend/owl.carousel.min.js',
    'resources/js/frontend/isotope.pkgd.min.js',
    'resources/js/frontend/slick.min.js',
    'resources/js/frontend/jquery.meanmenu.min.js',
    // 'resources/js/frontend/ajax-form.js',
    'resources/js/frontend/wow.min.js',

    'resources/js/frontend/jquery.scrollUp.min.js',
    'resources/js/frontend/jquery.counterup.min.js',
    'resources/js/frontend/waypoints.min.js',
    'resources/js/frontend/jquery.knob.js',
    'resources/js/frontend/jquery.appear.js',
    'resources/js/frontend/imagesloaded.pkgd.min.js',
    'resources/js/frontend/jquery.magnific-popup.min.js',
    'resources/js/frontend/plugins.js',

    'resources/js/frontend/main.js',

], 'public/js/frontend.js');