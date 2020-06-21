const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
// const VuetifyLoaderPlugin = require('vuetify-loader/lib/plugin')
// const CaseSensitivePathsPlugin = require('case-sensitive-paths-webpack-plugin')

// var webpackConfig = {
//     plugins: [
//         new VuetifyLoaderPlugin(),
//         new CaseSensitivePathsPlugin()
//     ]
// }
// mix.webpackConfig(webpackConfig);
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
.js('resources/js/user.js', 'public/js')
.js('resources/js/datatable.js', 'public/js')
.js('resources/js/weatherforecast.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css')
    .sass('resources/sass/news.scss', 'public/css')
    .sass('resources/sass/datatable.scss', 'public/css')
    .sass('resources/sass/weatherforecast.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwindcss('tailwind.config.js'),
        ]
    })
    .browserSync({
        proxy: 'lusonature.test:8000',
    });
