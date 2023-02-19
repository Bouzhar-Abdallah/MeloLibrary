const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        "./node_modules/flowbite/**/*.js"
    ],

    theme: {
        extend: {
            colors: {
                transparent: 'transparent',
                current: 'currentColor',
                'm-yellow': '#F8E16C',
                'm-black': '#08090A',
                'm-gray': '#61777F',
                'chi-red': '#EA2B1F',
                'histle': '#D6C3C9',
                
                'powder': '#FDFFFC',
                'mauve': '#361B2B',
                'saffron': '#F8E16C',
                'wsaffron': '#FFF15C',
                'ryb': '#FF1B1C',
                'cultured': '#F7F7F9',
                'mediumaqua': '#41E2BA',
                'goldenrod': '#F3F9D2',
                'middlegreen': '#558564',
                },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
