const { colors } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
                tulisan: ['Bebas Neue'],
                ibm: ['IBM Plex Sans'],
            },
            borderRadius: {
               'besar': '50px',
            },
            colors: {
                'birulg': '#4CA8A2',
                'oren': '#F1592C',
                'kelabucair': '#EBEBEB',
                'kelabucerah': '#F4F2F4',
                'kelabu': '#EBE7EB',
                'hijaugoogle': '#2D9D13',
                'facebook' : '#4267B2',
                'outlook' : '#0069E1',
            },
            backgroundImage: {
                'cover': "url('/imagesFE/cover3.png')",
            },
        },
    },

    variants: {
        extend: {
            opacity: ['disabled'],
        },
    },

    plugins: [require('@tailwindcss/forms'), require('@tailwindcss/typography')],
};
