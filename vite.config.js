import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // Our new line you can change app.scss to whatever.scss
                'resources/js/app.js',
                'resources/css/style.css',
                'resources/js/main.js',
                'resources/css/adminCss.css',
                'resources/js/adminMain.js',

            ],
            refresh: true,
        }),
    ],
});
