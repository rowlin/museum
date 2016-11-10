const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

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
var paths = {

    'jquery': '/bower_components/jquery/dist',
    'moment':'/bower_components/moment/min',
    'bootstrap': '/bower_components/bootstrap/dist',
    'app':'/public/css',
    'tags': '/bower_components/bootstrap-tagsinput/dist',
    'fontawesome': '/bower_components/font-awesome',
    'datetimepicker':'/bower_components/eonasdan-bootstrap-datetimepicker/build'
}

elixir(function(mix) {

    mix.scripts([
        paths.jquery + "/jquery.min.js",
        paths.datetimepicker + '/js/bootstrap-datetimepicker.min.js',
        paths.bootstrap + '/js/bootstrap.min.js',
    ],'public/js/all.js', './')

    mix.styles([
        paths.bootstrap + "/css/bootstrap.min.css",
        paths.bootstrap + "/css/bootstrap-theme.min.css",
        paths.datetimepicker + "/css/bootstrap-datetimepicker.min.css",
        paths.app + "/app.css",

        paths.fontawesome + "/css/font-awesome.css",
    ],'public/css/all.css', './');

    mix.copy('bower_components/fontawesome/fonts', 'public/fonts');
    mix.copy('bower_components/bootstrap-css/fonts/bootstrap', 'public/fonts');
});



elixir(function(mix) {
    mix.sass('app.scss');
    mix.webpack('app.js');
});