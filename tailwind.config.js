/** @type {import("tailwindcss").Config} */
import forms from "@tailwindcss/forms"; 
export default {
  darkMode: 'class',
  presets: [
    require("./vendor/tallstackui/tallstackui/tailwind.config.js") 
],

  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./app/**/*.php",
    "./vendor/tallstackui/tallstackui/src/**/*.php",  
  ],
  theme: {
    extend: {},
  },
  plugins: [forms], 
}