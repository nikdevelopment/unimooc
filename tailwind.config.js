const { colors } = require('tailwindcss/defaultTheme');
const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    purge: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    darkMode: 'class', // or 'media' or 'class'

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
                'teal-extra-light': '#E1FBF9',
                'teal-light' : '#7DD3CC',
                'teal': '#4CA8A2',
                'teal-dark' : '#278781',
                'teal-extra-dark' : '#04534e',
                'oren': '#F1592C',
                'kelabucair': '#EBEBEB',
                'kelabucerah': '#F4F2F4',
                'kelabu': '#EBE7EB',
                'hijaugoogle': '#2D9D13',
                'facebook' : '#4267B2',
                'outlook' : '#0069E1',
                'grey-dark' : '#121212',
                'grey' : '#3B3B3B',
                'grey-light' : '#515151',
                'grey-extra-light' : '#7E7E7E',
            },
            backgroundImage: {
                'cover1': "url('/imagesFE/cover3.png')",
                'cover2': "url('/imagesFE/cover4.png')",
            },
            spacing: {
                '108': '27rem',
                '120': '30rem',
                '124': '31rem',
                '128': '32rem',
                '132': '33rem',
            },
            maxWidth: {
                '8xl': '80rem',
                '9xl': '90rem',
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
