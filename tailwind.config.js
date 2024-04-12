/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./resources/views/**/*.{php,html,js}"],
  theme: {
    extend: {
      colors:{
        'lawngreen': '#7cfc00',
      },

      fontFamily:{
        ubuntu: ['ubuntu','ui-sans-serif']
      }
    },
  },
  plugins: [],
}