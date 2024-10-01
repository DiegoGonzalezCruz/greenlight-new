// webpack.mix.js
let mix = require("laravel-mix");

mix.postCss("src/css/styles.css", "themes/greenlight_theme/css", [
  require("tailwindcss"),
  require("autoprefixer")
]);

// Enable BrowserSync for live reloading
mix.browserSync({
  proxy: "https://concrete/greenlight/", // Replace this with your local development URL
  files: [
    "themes/greenlight_theme/css/*.css", // Watch CSS files
    "themes/greenlight_theme/**/*.php" // Watch PHP files in your theme
  ]
});

// If you have JavaScript files to compile:
// mix.js('src/js/app.js', 'themes/greenlight_theme/js');

// Enable source maps for development
if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}
