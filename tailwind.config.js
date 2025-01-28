/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./remake/**/*.{html,js}",
    "./Dashboard.php",

  ],
  theme: {
    extend: {
      fontFamily: {
        body: ['Roboto']
      },
    },
  },
  plugins: [],
}

