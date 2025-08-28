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
                roboto: 'Roboto',
                montserrat: 'Montserrat',
            }
        }
    },
    plugins: [
        require('flowbite/plugin'),
        require('flowbite-typography')
    ]
}
