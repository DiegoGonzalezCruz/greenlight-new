/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./themes/greenlight_theme/**/*.php",
    "./blocks/**/*.php",
    "./elements/**/*.php"
  ],
  theme: {
    fontFamily: {
      sans: ["Open Sans", "sans-serif"],
      workSans: ["Work Sans", "sans-serif"]
    },
    extend: {
      colors: {
        "go-green": "#009247",
        "go-glow": "#45EC6A",
        "go-outerspace": "#1B2F33",
        "go-tan": "#F9F5E8",
        "go-gold": "#BC8823"
      },

      backgroundImage: {
        "gradient-green-yel-pink":
          "linear-gradient(104deg, #C3DA38 0.21%, #FB44B1 87.96%)",
        "gradient-green-yellow-pink-1":
          "linear-gradient(326deg, #38DA7F -19.32%, rgba(244, 237, 66, 0.99) 29.91%, rgba(255, 67, 236, 0.65) 79.13%)",
        "gradient-green-yellow":
          "linear-gradient(104deg, #FBF55D 18.41%, #38DA7F 87.96%)",
        "gradient-pink-yellow":
          "linear-gradient(113deg, #E8EB59 -2.46%, #FB44B1 98.77%)",
        "gradient-teal-pink":
          "linear-gradient(116deg, rgba(255, 67, 236, 1.00) -4.97%, #15FFFF 97.75%)"
      }
    }
  },
  plugins: []
};
