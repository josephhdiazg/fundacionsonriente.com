module.exports = {
    darkMode: 'class',
    content: [
        './_drafts/**/*.html',
        './_includes/**/*.html',
        './_layouts/**/*.html',
        './_posts/*.md',
        './*.md',
        './*.html',
    ],
    theme: {
        extend: {
            fontFamily: {
                'roboto': ['Roboto', 'sans-serif'],
                'montserrat': ['Montserrat', 'sans-serif'],
            },
        },
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite-typography')
    ]
}
