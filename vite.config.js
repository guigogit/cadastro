// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['./resources/js/app.js'], // caminho corrigido para app.js
            output: './public/js'
        })
    ],
    server: {
        port: 3000
    }
});
