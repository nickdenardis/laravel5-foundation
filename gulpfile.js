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

elixir(function(mix) {
    mix.sass('app.scss');

    mix.copy('bower_components/jquery/dist/jquery.min.js', 'public/js/jquery.min.js');
    mix.copy('bower_components/jquery/dist/jquery.min.map', 'public/js/jquery.min.map');
    mix.copy('bower_components/modernizr/modernizr.js', 'public/js/modernizr.js');
    mix.copy('bower_components/foundation/js/foundation.min.js', 'public/js/foundation.min.js');

    mix.scripts(
        ['app.js'], 'app.js'
    );
});
