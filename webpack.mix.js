let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js');

mix.js([
		'resources/assets/js/navbar.js',
		'resources/assets/js/transitions.js',
	], 'public/dist/app.js')
	.version();

mix.sass('resources/assets/css/style.scss', 'public/css/style.css')
    .version();