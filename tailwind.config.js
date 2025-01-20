import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
      ],
    
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                "hanken-grotesk": ['Hanken Grotesk', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                "black": "#060606",
            },
            fontSize: {
                "2xs": "0.625rem",
            }

        },
    },
    plugins: [],
};
