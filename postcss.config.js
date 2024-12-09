export default {
    plugins: {
        tailwindcss: {},
        autoprefixer: {}, // Ensures vendor prefixes
        'postcss-preset-env': {
            // Configure browser compatibility
            stage: 3, // Defaults to stage 2. Use 3 for stricter compatibility
            browsers: 'last 2 versions, > 1%, IE 11',
        },
    },
};
