module.exports = {
  theme: {
    extend: {
      colors: {
        primary: "#05103A",
        secondary: "#68D0EE",
        secondary2: "#1D93B5",
        secondary3: "#101C43",
        secondary4: "#0D1632",
        secondary5: "#DBECF8",
      },
      fontFamily: {
        'nunito': ['"Nunito"', 'sans-serif']
      }
    },
    screens: {
        'xsm': {'max': '383px'},
        'smx': {'max': '530px'},

        'sm': '640px',
        // => @media (min-width: 640px) { ... }

        'md': {'max': '767px'},
        // => @media (min-width: 768px) { ... }

        'lg': '1024px',
        // => @media (min-width: 1024px) { ... }

        'xl': '1280px',
        // => @media (min-width: 1280px) { ... }

        '2xl': '1536px',
        // => @media (min-width: 1536px) { ... }
    }
  },
  variants: {},
  plugins: [],
}
