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
    },
    plugins: [require("daisyui")],
    daisyui: {
    }
    
}
