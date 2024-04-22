/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.{php,html,js}",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {
      colors: {
        'lawngreen': '#7cfc00',
      },
      fontFamily: {
        ubuntu: ['ubuntu', 'ui-sans-serif'],
      },
    },
  },
  plugins: [
    require('flowbite/plugin'),
    require("rippleui"),
    require("daisyui"),
    require('preline/plugin'),
  ],
};
