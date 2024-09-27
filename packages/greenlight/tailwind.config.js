/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./themes/greenlight_theme/**/*.php",
    "./blocks/**/*.php",
    "./elements/**/*.php"
  ],
  theme: {
    colors: {
      goGreen: "#009247",
      goGlow: "#45EC6A",
      goOuterspace: "#1B2F33",
      goTan: "#F9F5E8",
      goGold: "#BC8823",
      gradientGreenYelPink:
        "linear-gradient(104deg, #C3DA38 0.21%, #FB44B1 87.96%)",
      gradientGreenYellowPink1:
        "linear-gradient(326deg, #38DA7F -19.32%, rgba(244, 237, 66, 0.99) 29.91%, rgba(255, 67, 236, 0.65) 79.13%)",
      gradientGreenYellow:
        "linear-gradient(104deg, #FBF55D 18.41%, #38DA7F 87.96%)",
      gradientPinkYellow:
        "linear-gradient(113deg, #E8EB59 -2.46%, #FB44B1 98.77%)",
      gradientTealPink:
        "linear-gradient(116deg, rgba(255, 67, 236, 1.00) -4.97%, #15FFFF 97.75%)"
    },
    fontFamily: {
      sans: ["Open Sans", "sans-serif"],
      workSans: ["Work Sans", "sans-serif"]
    },
    extend: {}
  },
  plugins: []
};
