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
            'gradient-dark': '#000614',
            'gradient-light': '#002A8D',
            'primary': '#144272',
            'line': '#415B82',
            'text': '#FAFAFA',
            'link': '#6A6AFF',
            'form': 'rgb(217, 217, 217, 0.1)',
        },
        screens: {
            'sm': '430px',
            'md': '760px',
            'lg': '1366px',
            'xl': '1920px',
            '2xl': '2560px',
        },
        fontFamily: {
            'manrope': ['Manrope', 'sans-serif'],
        },
        opacity: {
            '10': '.10',
        },
    },
  },
  plugins: [],
}

