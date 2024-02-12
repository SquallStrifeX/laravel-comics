import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path'; // Utilizza import invece di require per path

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/scss/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': resolve(__dirname, 'node_modules/bootstrap'),
            '~resources': resolve(__dirname, 'resources/'),
        },
    },
    server: {
        proxy: {
            '/api': 'http://localhost:0000', // Assicurati che l'URL corrisponda al tuo server Laravel
        },
    },
});

