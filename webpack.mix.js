const mix = require('laravel-mix');

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

mix.react('resources/js/app.js', 'public/js')
   .sass('resources/sass/drsculpt/global.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/style.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/cool-sculpting-tone.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/privacy.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/articles.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/faqs.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/prices.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/gallery.scss', 'public/drsculpt/assets/css')
   .sass('resources/sass/drsculpt/videos.scss', 'public/drsculpt/assets/css');
