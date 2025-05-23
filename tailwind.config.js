import defaultTheme from "tailwindcss/defaultTheme";

import {heroui} from "@heroui/react";

/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
    "./storage/framework/views/*.php",
    "./resources/views/**/*.blade.php",
    "./resources/js/**/*.jsx",
    "./node_modules/@heroui/theme/dist/**/*.{js,ts,jsx,tsx}",
  ],

  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: "#2355A1",
          dark: "#202F49",
          light: "#70c3efff",
          bluett: "#3f3f3f",
        },
      },
      fontFamily: {
        sans: ["Roboto", ...defaultTheme.fontFamily.sans],
      },
    },
  },

  darkMode: "class",
  plugins: [
    heroui({
      themes: {
        light: {
          colors: {
            focus: "#2355A1",
            foreground: "#202F49",
            primary: {
              foreground: "#fff",
              DEFAULT: "#2355A1",
            },
            secondary: {
              foreground: "#000",
              DEFAULT: "#F1CA56",
            },
            success: {
              foreground: "#fff",
              DEFAULT: "#00A86B",
            },
          },
        },
      },
    }),
  ],
};
