/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./node_modules/flowbite/**/*.js",
    ],
    theme: {
        extend: {
            colors: {
                fonce: "#444444",
                "clr-pri1": "#174C4F",
                "clr-pri2": "#207178",
                "clr-sec1": "#FFE184",
                "clr-sec2": "#FF9666",
                "clr-pale1": "#FAEFCD",
            },
        },
    },
    plugins: [
        require("@tailwindcss/typography"),
        require("@tailwindcss/forms"),
        require("@tailwindcss/aspect-ratio"),
        require("@tailwindcss/container-queries"),
        require("flowbite/plugin"),
    ],
};
