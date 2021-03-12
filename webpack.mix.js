const mix = require('laravel-mix');
require('laravel-mix-jigsaw');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');

mix.jigsaw({
    browserSync: true,
    browser: ['safari'],
    watch: [
        'config.php',
        'source/**/*.md',
        'source/**/*.php',
        'source/**/*.scss',
        '!source/**/cache/*',
    ]},
    )
    .js('source/_assets/js/main.js', 'js')
    .css('source/_assets/css/main.css', 'css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .options({
        processCssUrls: false,        
    })
    .version();
    
