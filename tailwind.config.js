import preset from './vendor/filament/support/tailwind.config.preset'

export default {
    content: [
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
    ],
    presets: [preset],
    theme: {
        extend: {},
        colors: {
            transparent: 'transparent',
            current: 'currentColor',
            'white': '#ffffff',
            'blue1': '#3192C1',
            'pink1': '#c91c81',
            'purple1': '#474156',
            'softpink': '#dd7dad',
            'softblue': '#7fbbd6',
            'slate': '#E8E8E8',
            'babyblue': '#DFF2FF',
            'darkblue': '#0d001e',
            'gray': '#9D9FA3',
            'green1': '#00ab6b',
            'green2': '#013220'
        },
    },
    plugins: [require("daisyui")],
    daisyui: {}

}
