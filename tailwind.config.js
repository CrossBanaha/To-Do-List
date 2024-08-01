/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      gridTemplateRows:{
        'layout': 'auto 1fr auto',
      },
      colors:{
        customCyan: '#038fab',
        customPurple: '#31005c',
        customBlue: 'rgb(12, 36, 62)',
      }
    },
  },
  plugins: [],
}

