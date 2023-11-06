/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container:{
      center: true,
      padding: '16px',
    },
    extend: {
      colors :{
        dark: '#0f172a',
        grey: '#d3d3d3',
        grey2 : '#a9a9a9',
        blue: '#142b51',
        blue2 : '#081e43',
      },
      screens: {
        '2xl': '1320px',
      },
      font: {
        'font-family': 'ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji"'
        
    }
    },
  },
  plugins: [],
}