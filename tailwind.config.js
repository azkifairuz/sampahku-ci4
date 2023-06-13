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
        greenMain: { surface: "#029791", hover: "#045956" },
        blueMain: { surface: "#0C192C", hover: "#037e97" },
        surface: "#F7F8FB",
        molecular: { orange: "#E57C23" },
      },
      fontFamily: {
        poppins: ["Poppins", "sans-serif"],
        quicksand: ["Quicksand", " sans-serif"],
      },
      boxShadow: {
        "text-field": "0px 4px 4px 0px #0000000D",
        categori: "1px 2px 1px 0px #00000040",
      },
    },
  },
  plugins: [],
};
