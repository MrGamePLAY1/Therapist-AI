const path = require('path');

module.exports = {
    entry: './public/js/app.js',
    output: {
        filename: 'app.bundle.js',
        path: path.resolve(__dirname, 'public/js'),
    },
    mode: 'development',
};