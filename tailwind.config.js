module.exports = {
  purge: [
    './public/**/*.html',
    './src/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
      extend: {
          fontFamily: {
              'sans': ['Open sans']
          },
          colors: {
              black: '#222222'
          },
          lineHeight: {
              'loose': '40px'
          }
      }
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
