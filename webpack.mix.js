const mix = require('laravel-mix');
const { min } = require('lodash');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

 mix.styles([

    'resources/css/bootstrap.min.css',
    'resources/css/typography.css',
    'resources/css/style.css',
    'resources/css/responsive.css',
    'resources/css/all.min.css',
    'resources/css/animate.min.css',
    'resources/css/dark.css',
    'resources/css/magnific-popup.css',
    'resources/css/owl.carousel.min.css',
    'resources/css/remixicon.css',
    'resources/css/select2-bootstrap4.min.css',
    'resources/css/select2.min.css',
    'resources/css/slick-animation.css',
    'resources/css/slick-theme.css',
    'resources/css/slick.css',
    'resources/css/spacer.css',
    'resources/css/typography-rtl.css',
    'resources/css/variable.css',
 ] , 'public/css/min.css');

mix.js([

    'resources/js/app.js',
    'resources/js/bootstrap.js',
    'resources/js/custom.js',
    'resources/js/grid-blog.min.js',
    'resources/js/imagesloaded.pkgd.min.js',
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/jquery.magnific-popup.min.js',
    'resources/js/jquery.sticky-kit.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/select2.min.js',
    'resources/js/slick-animation.min.js',
    'resources/js/slick.min.js',
    'resources/js/smooth-scroll.min.js',


], 'public/js/min.js');


mix.copyDirectory('resources/images' , 'public/img');
mix.copyDirectory('resources/fonts' , 'public/fonts');