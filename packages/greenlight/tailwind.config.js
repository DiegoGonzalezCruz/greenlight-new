/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./themes/greenlight_theme/**/*.php",
    "./blocks/**/*.php",
    "./elements/**/*.php"
  ],
  theme: {
    borderRadius: {
      none: "0",
      DEFAULT: "75px",
      full: "9999px"
    },
    fontFamily: {
      sans: ["Open Sans", "sans-serif"],
      workSans: ["Work Sans", "sans-serif"]
    },
    extend: {
      colors: {
        "go-green": "var(--GO-green)",
        "go-glow": "var(--GO-glow)",
        "go-outerspace": "var(--GO-outerspace)",
        "go-tan": "var(--GO-tan)",
        "go-gold": "var(--GO-gold)"
      },

      backgroundImage: {
        "gradient-green-yellow-pink": "var(--gradient-green-yellow-pink)",
        "gradient-green-yellow-pink-1": "var(--gradient-green-yellow-pink-1)",
        "gradient-green-yellow": "var(--gradient-green-yellow)",
        "gradient-pink-yellow": "var(--gradient-pink-yellow)",
        "gradient-teal-pink": "var(--gradient-teal-pink)"
      }
    }
  },
  plugins: []
};
