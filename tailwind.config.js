/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/Views/*.php",
    "./app/Views/**/*.php",
    "./app/Views/**/**/*.php",
    "./app/Views/**/**/**/*.php",
  ],
  theme: {
    extend: {
      colors: {
        greenMain: "#029791",
        blueMain: { surface: "#025464", hover: "#037e97" },
        surface: "#F8F1F1",
        molecular: { orange: "#E57C23" },
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
      },
      boxShadow: {
        "text-field": "0px 4px 4px 0px #0000000D",
      },
    },
  },
  plugins: [],
};
