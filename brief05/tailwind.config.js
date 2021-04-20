const colors = require('tailwindcss/colors')

module.exports = {
  purge: {
    // enabled: true,
    content: [
      './views/**/*.php'
    ]
  },
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      fontFamily: {
        'logo': 'Montserrat Alternates, sans-serif'
      },
      colors: {
        redd: '#ff4e50',
        orange: '#f9d423'
      },
      brightness: ['hover', 'focus'],
    }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
