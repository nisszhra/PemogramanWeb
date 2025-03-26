<<<<<<< HEAD
import {
    defineConfig
} from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from "@tailwindcss/vite";
=======
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
>>>>>>> 597be176238dea7f4de9e346c8adfbc27292a263

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
<<<<<<< HEAD
            refresh: [`resources/views/**/*`],
        }),
        tailwindcss(),
    ],
    server: {
        cors: true,
    },
});
=======
            refresh: true,
        }),
        tailwindcss(),
    ],
});
>>>>>>> 597be176238dea7f4de9e346c8adfbc27292a263
