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
    container: {
      center: true
    },
    extend: {
      backgroundImage: (theme) => ({
        check: "url('/icons/check.svg')",
        landscape: "url('/images/landscape/2.jpg')",
      }),
      fontFamily: {
        'logo': 'Montserrat Alternates, sans-serif',
        'sans': 'Inter, sans-serif'
      },
      colors: {
        redd: '#ff4e50',
        orange: '#f9d423'
      },
      brightness: ['hover', 'focus'],
      ring: ['hover'],
    }
  },
  variants: {
    extend: {
      backgroundColor: ["checked"],
      borderColor: ["checked"],
      inset: ["checked"],
      zIndex: ["hover", "active"],
    },
  },
  plugins: [],
}
