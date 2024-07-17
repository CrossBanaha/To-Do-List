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
        customCyan: '#5dffe1',
        customPurple: '#8964ba',
        customBlue: 'rgb(12, 36, 62)',
      }
    },
  },
  plugins: [],
}

