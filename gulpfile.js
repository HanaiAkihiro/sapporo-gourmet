const { src, dest, watch, series, parallel } = require("gulp");
const sass = require("gulp-sass")(require("sass"));
const sassGlob = require("gulp-sass-glob-use-forward");
const plumber = require("gulp-plumber");
const notify = require("gulp-notify");
const postcss = require("gulp-postcss");
const autoprefixer = require("autoprefixer");
const cssdeclsort = require("css-declaration-sorter");
const gcmq = require("gulp-group-css-media-queries");
const mode = require("gulp-mode")();
const browserSync = require("browser-sync");

// webpack
const webpackStream = require("webpack-stream");
const webpack = require("webpack");
const webpackConfig = require("./webpack.config");

// image
const imagemin = require("gulp-imagemin");
const mozjpeg = require("imagemin-mozjpeg");
const pngquant = require("imagemin-pngquant");
const changed = require("gulp-changed");

const bundleJs = (done) => {
  webpackStream(webpackConfig, webpack)
    .on("error", function (e) {
      console.error(e);
      this.emit("end");
    })
    .pipe(dest("./assets/dist/js"));
  done();
};

const compileSass = (done) => {
  const postcssPlugins = [
    autoprefixer({
      grid: "autoplace",
      cascade: false,
    }),
    cssdeclsort({ order: "alphabetical" }),
  ];
  src("./assets/src/scss/**/*.scss", { sourcemaps: true })
    .pipe(
      plumber({ errorHandler: notify.onError("Error: <%= error.message %>") })
    )
    .pipe(sassGlob())
    .pipe(sass({ outputStyle: "expanded" }))
    .pipe(postcss(postcssPlugins))
    .pipe(mode.production(gcmq()))
    .pipe(dest("./assets/dist/css", { sourcemaps: "./sourcemaps" }));
  done();
};

const buildServer = (done) => {
  browserSync.init({
    port: 8080,
    // 静的サイト
    // server: { baseDir: "./" },
    // 動的サイト
    files: ["./**/*.php"],
    proxy: "http://localhost:8000/",
    open: true,
    watchOptions: {
      debounceDelay: 1000,
    },
  });
  done();
};

const browserReload = (done) => {
  browserSync.reload();
  done();
};

const taskImagemin = () =>
  src("./assets/src/img/**")
    .pipe(changed("./assets/dist/img"))
    .pipe(
      imagemin([
        pngquant({
          quality: [0.65, 0.8],
          speed: 1,
        }),
        mozjpeg({
          quality: 80,
        }),
        imagemin.gifsicle({
          interlaced: false,
        }),
        imagemin.svgo({
          plugins: [{ removeViewBox: true }, { cleanupIDs: false }],
        }),
      ])
    )
    .pipe(dest("./assets/dist/img"));

const watchFiles = () => {
  watch("./**/*.html", browserReload);
  watch("./assets/src/scss/**/*.scss", series(compileSass, browserReload));
  watch("./assets/src/js/**/*.js", series(bundleJs, browserReload));
  watch("./assets/src/img/**", taskImagemin);
};

module.exports = {
  sass: compileSass,
  bundle: bundleJs,
  default: parallel(buildServer, watchFiles),
};
