const colors = require('tailwindcss/colors')

module.exports = {
    purge: [
        './resources/**/*.blade.php',
        './resources/**/*.js'
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        screens: {
            'sm': '640px',
            'md': '768px',
            'lg': '1024px',
            'xl': '1280px',
            '2xl': '1536px',
        },
        colors: {
            gray: colors.coolGray,
            blue: colors.lightBlue,
            red: colors.rose,
            pink: colors.fuchsia,
        },
        fontFamily: {
            sans: ['Graphik', 'sans-serif'],
            serif: ['Merriweather', 'serif'],
        },
        extend: {},
    },
    variants: {
        extend: {
            backgroundColor: ['hover', 'focus'],
            borderColor: ['focus', 'hover'],
        },
    },
    plugins: [],
}
