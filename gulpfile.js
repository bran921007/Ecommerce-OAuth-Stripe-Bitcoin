var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

var paths = {
    'jquery': './vendor/bower_components/jquery/',
    'bootstrap': './vendor/bower_components/bootstrap/dist/'
}

elixir(function(mix) {
    mix.less('app.less');
    //mix.styles([
    //    paths.bootstrap + "css/bootstrap.css"
    //],'./', 'public/css');
    //mix.scripts([
    //    paths.jquery + "dist/jquery.js",
    //    paths.bootstrap + "js/bootstrap.js"
    //], './', 'public/js');
    mix.copy(paths.bootstrap + "css/bootstrap.css",'public/css/bootstrap.css');
    mix.copy(paths.jquery    + "dist/jquery.js"   , 'public/js/jquery.js');
    mix.copy(paths.bootstrap + "js/bootstrap.js",'public/js/bootstrap.js');


});
