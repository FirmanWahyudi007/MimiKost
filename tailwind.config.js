module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'ungu' : '#24325F',
        'birumuda': '#3E9CC1',
        'birutua': '#3F9CBF',
        'coklat': '#C0AF85',
      },
    },
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("daisyui")
  ],
}
