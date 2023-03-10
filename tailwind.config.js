const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: {
        files: [
            "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
            "./storage/framework/views/*.php",
            "./resources/views/**/*.blade.php",
            "./node_modules/flowbite/**/*.js",
        ],
        transform: (content) => content.replace(/taos:/g, ''),
    },

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

    plugins: [
        require("@tailwindcss/forms"),
        require("flowbite/plugin"),
        require("taos/plugin"),
    ],

    safelist: [
        {
            pattern: /max-w-(sm|md|lg|xl|2xl|3xl|4xl|5xl|6xl|7xl)/,
            variants: ["sm", "md", "lg", "xl", "2xl"],
        },
        "!duration-0",
        "!delay-0",
        'html.js :where([class*="taos:"]:not(.taos-init))',
    ],
};
