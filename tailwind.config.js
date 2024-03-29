/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'gold':         '#f9a825',
            'modern-black': '#181c21',
            'modern-bg':    '#525f70'
        },
        fontFamily: {
            'nunito': ['Nunito']
        }
    },
  },
  plugins: [],
}
