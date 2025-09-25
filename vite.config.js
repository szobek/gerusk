import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/assets/scss/app.scss',"resources/assets/css/normalize.css", 'resources/assets/js/app.js'],
            refresh: true,
        }),
    ],
});
