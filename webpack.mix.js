const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

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
.js('resources/js/profile.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('tailwind.config.js'),
        ]
    })
    .browserSync({
        proxy: '127.0.0.1:8000'
    });
