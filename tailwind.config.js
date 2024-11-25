/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors:{
        'primary':'#FFF2D7',
        'secondary': '#FFE0B5',
        'tertiary': '#F8C794',
        'kuarter': '#D8AE7E'
      }
    },
  },
  plugins: [],
}