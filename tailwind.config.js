module.exports = {
  purge: [
    'source/**/*.blade.php',
    'source/**/*.md',
    'source/**/*.html',
  ],
  theme: {
    extend: {},
  },
  variants: {
    extend: {},
  },
  plugins: [
    function ({addUtilities}) {
      const extendUnderline = {
          '.underline': {
              textDecoration: 'underline',
              textDecorationColor:"text-red-500"
          },
      }
      addUtilities(extendUnderline)
   }
  ],
};
