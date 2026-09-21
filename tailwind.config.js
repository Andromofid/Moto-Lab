import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
export default {
    content: ["./resources/**/*.blade.php", "./resources/**/*.js"],

    theme: {
        extend: {
            colors: {
                primary: {
                    50: "#FFF1F2",
                    100: "#FFE4E6",
                    200: "#FECDD3",
                    300: "#FDA4AF",
                    400: "#FB7185",
                    500: "#E11D2E",
                    600: "#B5121B",
                    700: "#8E0F16",
                    800: "#711218",
                    900: "#551218",
                },

                moto: {
                    black: "#0E1116",
                    surface: "#171A1F",
                    "surface-light": "#22262C",
                    border: "#2A2E35",

                    text: "#F5F5F5",
                    muted: "#9CA3AF",
                },
            },

            fontFamily: {
                sans: ["Inter", "sans-serif"],
                heading: ["Montserrat", "sans-serif"],
            },
        },
    },

    plugins: [],
};
