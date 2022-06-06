const mix = require('laravel-mix');

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

mix
    .scripts([
            'resources/views/site/js/bootstrap.min.js',
        ], 'public/site/js/bootstrap.min.js')
    .scripts([
        'resources/views/site/js/coruja.carrossel.min.js',
    ], 'public/site/js/coruja.carrossel.min.js')
    .scripts([
            'resources/views/site/js/data.js',
        ], 'public/site/js/data.js')    
    .scripts([
            'resources/views/site/js/isótopo.pkgd.min.js',
        ], 'public/site/js/isótopo.pkgd.min.js')
    .scripts([
        'resources/views/site/js/main.js',
    ], 'public/site/js/main.js',)
        
    .scripts([
        'resources/views/site/js/script.js',
    ], 'public/site/js/script.js',)
    .styles(
        [
            'resources/views/site/css/bootstrap.min.css',
        ], 'public/site/css/bootstrap.min.css',)

    .styles(
        [
            'resources/views/site/css/config.css',
        ], 'public/site/css/config.css',
    )
    .styles(
        [
            'resources/views/site/css/custom.css',
        ], 'public/site/css/custom.css',
    )
    .styles(
        [
            'resources/views/site/css/estilo.css',
        ], 'public/site/css/estilo.css',
    )
    .styles(
        [
            'resources/views/site/css/global.css',
        ], 'public/site/css/global.css',
    )
    .styles(
        [
            'resources/views/site/css/login.css',
        ], 'public/site/css/login.css',
    )
    .styles(
        [
            'resources/views/site/css/magnificpopup.css',
        ], 'public/site/css/magnificpopup.css',
    )
    .styles(
        [
            'resources/views/site/css/main.css',
        ], 'public/site/css/main.css',
    )
    .styles(
        [
            'resources/views/site/css/register.css',
        ], 'public/site/css/register.css',
    )
    .styles(
        [
            'resources/views/site/css/responsive.css',
        ], 'public/site/css/responsive.css',
    )
    .styles(
        [
            'resources/views/site/css/style.css',
        ], 'public/site/css/style.css',
    )
    

