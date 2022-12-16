/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
  ],
  theme: {
    colors: {
      'blue': '#1fb6ff',
      'purple': '#7e5bef',
      'pink': '#f87171',
      'orange': '#ff7849',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'graylight': '#d3dce6',
      'nav': '#ddd6fe',
      'iceblue': '#00acce',
      'red': '#991b1b',
      'navgrey': '#374151',
      'navbg': '#eae7fa',
      'tablecolor': '#fafafa',
      'orderscolor': '#f1f5f9',
      'review': '#facc15',
      'reviewbg': '#fef9c3',
      'holdbg': '#fecaca',
      'bgpaid': '#f0fdf4',
      'new': '#e0f2fe',
    },
    extend: {
      fontFamily: {
        sans: ["Varela Round", "sans-serif"],
       },
    },
  },
  plugins: [],
}

