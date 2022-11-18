const mix = require('laravel-mix');
const path = require('path')
require('laravel-mix-purgecss');

mix
    .js('resources/js/app.js', 'public/frontend/js/')
    .js('resources/js/backend/app.js', 'public/backend/js')
    .options({
        processCssUrls: false,
        use: {
            loader: 'babel-loader',
            options: {
                presets: ['@babel/preset-env'],
            },
        },
    })
    .webpackConfig({
        stats: {
            children: true,
        },
    })
    .css('resources/css/backend/app.css', 'public/backend/css')
    .css('resources/css/app.css', 'public/frontend/css')

mix.scripts([
    'public/backend/js/bundle.js',
    'public/backend/js/scripts.js'
], 'public/backend/script.js')

mix.version()
