module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        purpleprimary:'#4339F2',
        pdark: '#5574F2',
        plight:'#DAD7FE',
        somone: '#FFE5D3',
        greenl: '#E2FBD7',
        greend: '#34B53A',
        'redd': '#FF3429',
        'cblue': '#02A0FC',
        'cbluel':'#CCF8FE',
        'cyellow': '#FFB200',
        'ylight': '#FFF5CC',
        'apple': '#CCF8FE'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
