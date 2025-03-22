import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
         "./node_modules/flowbite/**/*.js"
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'red-primary' : '#E01E38',
                'dark-red-primary' : '#85182B',
                'dark-red-second' : '#1F060A',
                'yellow-primary' : '#FF7300',
                'green-primary' : '#24d265',
                'blue-primary' : '#0099FF',
                'grey-primary' : '#313131',
                'hover-red-primary' : '#DE4358',
            },
            boxShadow: {
                'custom': '0 4px 6px -1px rgba(0, 0, 0, 0.11), 0 2px 4px -1px rgba(0, 0, 0, 0.11)',
              },
        },
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
