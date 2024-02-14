/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
        colors: {
            'gradient-dark': '#070a1b',
            'gradient-light': '#002A8D',
            'primary': '#144272',
            'secondary': '#205295',
            'line': '#415B82',
            'text': '#FAFAFA',
            'link': '#6A6AFF',
            'form': 'rgb(217, 217, 217, 0.15)',
            'navbar': 'rgb(2, 15, 30, 0.4)',
            'evens': 'rgb(20, 66, 114, 0.2)'
        },
        screens: {
            'sm': '430px',
            'sm-max': {'max': '430px'},
            'md': '768px',
            'md-max': {'max': '768px'},
            'hb': '1150px',
            'hb-max': {'max': '1150px'},
            'lg': '1366px',
            'xl': '1920px',
            '2xl': '2560px',
        },
        fontFamily: {
            'manrope': ['Manrope', 'sans-serif'],
        },
        opacity: {
            '10': '.1',
        },
        boxShadow: {
          'blue': '0px -3px 30px rgba(115, 186, 255, 0.4)',
        },
        dropShadow: {
          'link': '0 2px 5px #6A6AFFFF'
        },
        height: {
          'dashboard': 'calc(-4rem + 100vh)'
        },
    },
  },
  plugins: [],
}

