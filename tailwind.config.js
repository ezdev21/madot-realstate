module.exports = {
  content: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  theme: {
    extend: {
      backgroundImage:{
       "realstate": "url('/storage/realstate.jpg')"
      }
    },
  },
  plugins: [],
}
