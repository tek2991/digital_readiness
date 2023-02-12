const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
        "./node_modules/flowbite/**/*.js",
    ],

    theme: {
        container: {
            padding: {
                DEFAULT: "0rem",
                sm: "2rem",
                lg: "4rem",
                xl: "6rem",
                "2xl": "10rem",
            },
        },
        extend: {
            fontFamily: {
                sans: ["Nunito", ...defaultTheme.fontFamily.sans],
                intelregular: ["INTEL_REGULAR"],
                intelbold: ["INTEL_BOLD"],
                intellight: ["INTEL_LIGHT"],
                intelmedium: ["INTEL_MEDIUM"],
            },

            colors: {
                intelblue: "rgba(0, 8, 100, 1)",
                intellight: "rgba(164, 170, 220, 1)",
                intelblue2: "rgba(228, 231, 255, 1)",
                secondary: "rgba(222,170,82, 1)",
                "secondary-t": "rgba(222,170,82, .5)",
            },
        },
    },

    plugins: [require("@tailwindcss/forms"), require("flowbite/plugin")],
};
