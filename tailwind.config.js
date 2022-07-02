const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
              'poppins': ['Poppins', 'sans-serif']
            },
            colors: {
            'battleship-grey' : '#8A8A8A',
            'silver-chalice' : '#B0B0B0',
            'granite-grey' : '#636363',
            'davys-grey' : '#4F4F4F',
            },
          },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
