import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: process.env.CODESPACE_NAME ? process.env.CODESPACE_NAME + '-' + process.env.CODESPACE_PORT + '.app.github.dev' : null,
            clientPort: process.env.CODESPACE_PORT ? 443 : null,
            protocol: process.env.CODESPACE_NAME ? 'wss' : null
        },
    }
});
