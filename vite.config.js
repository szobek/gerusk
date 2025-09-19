import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss',"resources/css/normalize.css", 'resources/js/app.js'],
            refresh: true,
        }),
    ],
     server: { 
        host: 'gerusk.szobekweb.hu', 
        hmr: {
            host: 'gerusk.szobekweb.hu', 
        },
    },
});
