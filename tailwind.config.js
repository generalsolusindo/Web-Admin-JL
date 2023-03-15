/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
    "./src/**/*.{html,js}",
    "./node_modules/tw-elements/dist/js/**/*.js"
  ],
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px',
        'tablet': '640px',
        'laptop': '1024px',
        'desktop': '1280px'
      },
      width: {
        '100': '25rem',
        '104': '26rem',
        '108': '27rem',
        '112': '28rem',
        '116': '29rem',
        '120': '30rem',
        '128': '32rem',
        '136': '34rem',
        '144': '36rem',
        '152': '34rem',
      },
      height: {
        '100': '25rem',
        '104': '26rem',
        '108': '27rem',
        '112': '28rem',
        '116': '29rem',
        '120': '30rem',
        '128': '32rem',
        '136': '34rem',
        '144': '36rem',
        '152': '34rem',
      },
      colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'orange': {
          50: '#fff7ed',
          100: '#ffedd5',
          200: '#fed7aa',
          300: '#fdba74',
          400: '#fb923c',
          450: '#f59e0b',
          juallagi_gelap: '#ffa500',
          juallagi_cerah: '#ffc87a',
          500: '#f97316',
          600: '#ea580c',
          700: '#c2410c',
          800: '#9a3412',
          900: '#7c2d12',
          basic: '#e5e7eb',
          light: '#F59E0B',
          dark: '#F97316'
        },
        'gray': {
          50: '#f9fafb',
          100: '#f3f4f6',
          200: '#f3f4f6',
          300: '#d1d5db',
          400: '#9ca3af',
          500: '#6b7280',
          600: '#4b5563',
          700: '#374151',
          800: '#1f2937',
          900: '#111827',
          basic: '#e5e7eb',
        },
        'blue': {
          juallagi: '#407BFF'
        },
        'green': {
          success: '#14A44D',
        },
        'yellow': {
          warning: '#E4A11B',
        },
        'red': {
          danger: '#D42A46',
        }
      },
      fontFamily: {
        'sans': ['ui-sans-serif', 'system-ui'],
        'serif': ['ui-serif', 'Georgia'],
        'mono': ['ui-monospace', 'SFMono-Regular'],
      },
    }
  },
  plugins: [
    require('flowbite/plugin'),
    require('tw-elements/dist/plugin'),
    require('tailwindcss'),
    require('autoprefixer'),
    require('tailwind-scrollbar-hide'),
  ],
}
