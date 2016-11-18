const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

var paths = {
    'modernizr': '/bower_components/modernizr',
    'lightslider':'bower_components/lightslider/dist',
    'jquery': '/bower_components/jquery/dist',
    'moment':'/bower_components/moment/min',
    'momentRU':'/bower_components/moment/min',
    'bootstrap': '/bower_components/bootstrap/dist',
    'app':'/public/css',
    'tags': '/bower_components/bootstrap-tagsinput/dist',
    'fontawesome': '/bower_components/font-awesome',
    'datetimepicker':'/bower_components/eonasdan-bootstrap-datetimepicker/build'
}

elixir(function(mix) {
        /*базовые*/
    mix.scripts([
        paths.jquery + "/jquery.min.js",
        paths.bootstrap + '/js/bootstrap.min.js',
        paths.moment +"/moment.min.js",
        paths.datetimepicker + '/js/bootstrap-datetimepicker.min.js',
    ],'public/js/all.js', './')

    mix.styles([
        paths.bootstrap + "/css/bootstrap.min.css",
        paths.bootstrap + "/css/bootstrap-theme.min.css",
        paths.datetimepicker + "/css/bootstrap-datetimepicker.min.css",
        paths.fontawesome + "/css/font-awesome.css",
        paths.app +"/app.css",
    ],'public/css/all.css', './');

    mix.copy('bower_components/lightslider/dist/img', 'public/images');
    mix.copy('bower_components/font-awesome/fonts', 'public/fonts');
    mix.copy('bower_components/bootstrap-css/fonts/bootstrap', 'public/fonts');
});

elixir(function(mix) {
    mix.sass('app.scss');
    mix.webpack('app.js');
});