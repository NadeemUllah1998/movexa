import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
        './config/movexa.php',
    ],

    theme: {
        extend: {
            colors: {
                movexa: {
                    forest: '#103B30',
                    'forest-light': '#184F41',
                    deep: '#08271F',
                    lime: '#D8F36B',
                    'lime-hover': '#C5E054',
                    'light-bg': '#F7F8F5',
                    dark: '#202824',
                    muted: '#747C76',
                    surface: '#FFFFFF',
                    tint: '#EBF2EB',
                    'border-light': '#E2E8E2',
                    card: '#FFFFFF',
                }
            },
            fontFamily: {
                sans: ['"Plus Jakarta Sans"', 'Inter', ...defaultTheme.fontFamily.sans],
                heading: ['Manrope', '"Plus Jakarta Sans"', ...defaultTheme.fontFamily.sans],
            },
            boxShadow: {
                'premium': '0 20px 40px -15px rgba(8, 39, 31, 0.08)',
                'premium-hover': '0 25px 50px -12px rgba(8, 39, 31, 0.16)',
                'lime-glow': '0 10px 25px -5px rgba(216, 243, 107, 0.4)',
                'card': '0 4px 20px -2px rgba(16, 59, 48, 0.05)',
            },
            borderRadius: {
                '2xl': '1rem',
                '3xl': '1.5rem',
                '4xl': '2rem',
            }
        },
    },

    plugins: [forms],
};
