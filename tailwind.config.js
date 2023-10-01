/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.php"],
  theme: {
    extend: {
      scale:{
        "3":"1.03"
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'white': '#ffffff',
        'green': '#8FAD89',
        'lime': '#BBD1B6',
        'marine': '#468194',
        'teal': '#8BB3BF',
        'sand': '#EFE9D1',
        'tan': '#DDD5B2',
      },
      backgroundImage:{
        schloss:"url(./images/schloss.jpeg)"
      }
    },
  },
  plugins: [],
}

