const defaultTheme = require('tailwindcss/defaultTheme')
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        rubik: ['Rubik', ...defaultTheme.fontFamily.sans],
        poppins: ['Poppins', ...defaultTheme.fontFamily.sans],
      }
    },
  },
  plugins: [],
}

