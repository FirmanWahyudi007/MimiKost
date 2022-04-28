module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {

    },
  },
  daisyui: {
    themes: [
      {
        mytheme: {
            "primary": "#5F9758",
            "secondary": "#C0AF85",
            "accent": "#966745",
            "neutral": "#000000",
            "base-100": "#EAEAEA",
            "info": "#3ABFF8",
            "success": "#36D399",
            "warning": "#FBBD23",
            "error": "#F87272",
        },
      },
      "dark",
      "cupcake",
    ],
  },
  plugins: [
    require("@tailwindcss/typography"),
    require("daisyui")
  ],
}
