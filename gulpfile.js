var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
require('laravel-elixir-images');





elixir(function(mix) {
    mix.sass('app.scss');

    /*****
'jquery-2.1.4.js',
'bootstrap.min.js',
'owl.carousel.min.js',
'jquery-ui.min.js',
'menuzord.js',
'jquery.fancybox.pack.js',
'jquery.appear.js',
'jquery.countTo.js',
'wow.min.js',
'SmoothScroll.js',
'bootstrap-select.min.js',
'jquery.mixitup.min.js',
'theme.js',

     */

    mix.scripts(
        [
            'jquery-2.1.4.js',
            'bootstrap.min.js',
            'owl.carousel.min.js',
            'jquery-ui.min.js',
            'menuzord.js',
            'jquery.fancybox.pack.js',
            'jquery.appear.js',
            'jquery.countTo.js',
            'wow.min.js',
            'SmoothScroll.js',
            'bootstrap-select.min.js',
            'jquery.mixitup.min.js',
            'theme.js'
        ], 'public/js/dependencies.js');

    mix.styles([
        'style.css',
        'responsive.css',
        'custom.css'
    ], 'public/assets/css/main_style.css');
/*
    mix.styles([
        'reset.css',
        'bootstrap.min.css',
        'font-awesome.css',
        'Stroke-Gap-Icons.css',
        'hover.css',
        'menu_sideslide.css',
        'animate.css',
        'responsive.css',
        'jquery.fancybox.css',
        'owl.carousel.css',
        'owl.theme.css',
        'flexslider.css',
        'blue.css',
        'animations.css'
    ], 'public/assets/style/css');*/

});
