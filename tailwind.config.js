/** @type {import('tailwindcss').Config} */
export default {

    darkMode: "class",

    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],

    theme: {
        extend: {
            colors: {
                primary: "#ff7b00",
                secondary: "#2e7d32",
                "background-light": "#f8f7f5",
                "background-dark": "#23190f",
            },

            fontFamily: {
                display: ["Inter", "sans-serif"],
            },
        },
    },

    plugins: [],
}