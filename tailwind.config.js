module.exports = {
    mode: 'jit',
    purge: [
        './storage/framework/views/*.php',
        './resources/view/**/*.blade.php',
        './resources/**/*.js',
        './config/*.php',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
        extend: {
            gridTemplateColumns: {
              '16': 'repeat(16, minmax(0, 1fr))',
            },
            colors: {
              blueProject: {
                  default: '#069AC6'
              },
                greenProject: {
                  default: '#80E3A8',
                }
            },
            fontFamily: {
                'Ubuntu': ['Ubuntu', 'sans-serif'],
            },
        },
    },
    variants: {
        extend: {},
    },
    plugins: [],
}
