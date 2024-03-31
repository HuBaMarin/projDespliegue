import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors:{
            "header":"#122235",
            "nav":"#209BD8",
            "main":"#F7F7DC",
            "footer":"#145A84",
            "white":"white",
            "dark":"#122235",
            "black":"#000000"
        }
    },

    plugins: [forms, require("daisyui")],
};
