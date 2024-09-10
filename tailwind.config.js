/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ['./*.html'],
  theme: {
    extend: {
      colors: {
        primary: {
          light: 'rgb(86 166 231)',
          DEFAULT: 'rgb(25 133 221)',
          dark: 'rgb(16 99 167)',
        },
        secondary: {
          light: 'rgb(159 169 177)',
          DEFAULT: 'rgb(107 112 117)',
          dark: 'rgb(76 82 87)',
        },
        danger: {
          light: '#af0101',
          DEFAULT: '#570000',
          dark: '#470000',
        },
        success: {
          light: '#5ff564',
          DEFAULT: '#1cd422',
          dark: '#07850b',
        },
        info: {
          light: '#62ddf0',
          DEFAULT: '#1ab2c9',
          dark: '#08889c',
        },
        warning: {
          light: 'rgb(241 123 42)',
          DEFAULT: 'rgb(203 94 21)',
          dark: 'rgb(163 72 11)',
        },
        light: {
          light: '#efefef',
          DEFAULT: '#dddddd',
          dark: '#bbbbbb',
        },
        dark: {
          light: '#808080',
          DEFAULT: '#292929',
          dark: '#121111',
        },
      }
    },
  },
  plugins: [],
}

