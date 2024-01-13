/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.jsx",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      animation: {
        'shake': 'shake 1s ease-in-out both'
      },
      keyframes: {
        shake: {
          '0%, 100%': { transform: 'translateX(0)' },
          '10%, 30%, 50%, 70%': { transform: 'translateX(-10px)' },
          '20%, 40%, 60%': { transform: 'translateX(10px)' },
          '80%': { transform: 'translateX(8px)' },
          '90%': { transform: 'translateX(-8px)' },
        }
      }
    },
  },
  plugins: [],
}

