import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',

                // frond
                'resources/js/calcular.js',
                'resources/js/showdate.js',
                'resources/js/menu.js',
                'resources/js/terminal.js',
                'resources/js/selector_divice_type.js',


                // selector_divice_type



            ],
            refresh: true,
        }),
    ],
});
