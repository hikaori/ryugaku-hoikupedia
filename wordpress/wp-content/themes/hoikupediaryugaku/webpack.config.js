const ExtractTextPlugin = require('extract-text-webpack-plugin')
const webpack = require('webpack')
const path = require('path')

module.exports = {
  entry: './index.js',
  output: {
    path: path.resolve(__dirname, 'dist'),
    filename: 'styles.css',
    filename: 'script.js'
  },
  module: {
    rules: [
      {
        test: /\.css$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            { loader: 'css-loader', options: { importLoaders: 1 } },
            'postcss-loader'
          ]
        })
      },
      {
        test: /\.(png|jpg)$/,
        use: 'file-loader',
      },
    ]
  },
  plugins: [
    new webpack.ProvidePlugin({
      $:'jquery',
      jQuery:'jquery'
    }),
    new ExtractTextPlugin('styles.css')
  ]
}
