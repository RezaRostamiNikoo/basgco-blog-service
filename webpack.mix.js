const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss')

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

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [
//         //
//     ]);

// mix.sass('resources/sass/app.scss', 'assets/sass/app.css');
// mix.setResourceRoot(__dirname + 'public/')
// mix.postCss('public/assets/sass/app.css', 'public/assets/css', [require("tailwindcss"),]);
// mix.setResourceRoot(__dirname + 'resources/')
// snip...
mix.sass('resources/sass/index.scss', 'public/assets/css/index.css')
    .options({ postCss: [ tailwindcss('./tailwind.config.js')]})
