const { src, dest, watch, parallel, series } = require("gulp");

//css
const sass = require("gulp-sass")(require("sass"));
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");
//js
const autoPrefixer = require("autoprefixer");
const sourcemaps = require("gulp-sourcemaps");
const concat = require("gulp-concat");
const terser = require("gulp-terser-js");
//img
const webp = require("gulp-webp");
const imagemin = require("gulp-imagemin");
const cache = require("gulp-cache");
const avif = require("gulp-avif");
//svg
const svg = require("gulp-svgmin");

const path = {
  scss: "src/scss/**/*.scss",
  css: "build/css/app.css",
  js: "src/js/**/*.js",
  img: "src/img/**/*.{jpg,png}",
  imgmin: "build/img/**/*.{jpg,png}",
  svg: "src/img/**/*.svg",
};

function compileSass() {
  return src(path.scss)
    .pipe(sourcemaps.init())
    .pipe(sass().on("error", sass.logError))
    .pipe(postcss([autoPrefixer(), cssnano()]))
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/css"));
}

function compileJS() {
  return src(path.js)
    .pipe(sourcemaps.init())
    .pipe(concat("bundle.js"))
    .pipe(terser())
    .pipe(sourcemaps.write("."))
    .pipe(dest("build/js"));
}

function imageMin() {
  const settings = {
    optimizationLevel: 3,
  };

  return src(path.img)
    .pipe(cache(imagemin(settings)))
    .pipe(dest("build/img"));
}

function imgWebp() {
  const settings = {
    quality: 50,
  };

  return src(path.img).pipe(webp(settings)).pipe(dest("build/img"));
}

function imgAvif() {
  const settings = {
    quality: 50,
  };

  return src(path.img).pipe(avif(settings)).pipe(dest("build/img"));
}

// function imgSvg() {
//   return src(path.svg).pipe(svg()).pipe(dest("build/img"));
// }

function autoCompile() {
  watch(path.scss, compileSass);
  watch(path.js, compileJS);
  watch(path.img, parallel(imgAvif, imgWebp, imageMin));
}

exports.default = parallel(
  compileSass,
  compileJS,
  autoCompile,
  imgAvif,
  imageMin,
  imgWebp
  // imgSvg
);

// const { src, dest, watch, series, parallel } = require('gulp');
// const sass = require('gulp-sass')(require('sass'));
// const autoprefixer = require('autoprefixer');
// const postcss = require('gulp-postcss')
// const sourcemaps = require('gulp-sourcemaps')
// const cssnano = require('cssnano');
// const concat = require('gulp-concat');
// const terser = require('gulp-terser-js');
// const rename = require('gulp-rename');
// const imagemin = require('gulp-imagemin'); // Minificar imagenes
// const notify = require('gulp-notify');
// const cache = require('gulp-cache');
// const clean = require('gulp-clean');
// const webp = require('gulp-webp');

// const paths = {
//     scss: 'src/scss/**/*.scss',
//     js: 'src/js/**/*.js',
//     imagenes: 'src/img/**/*'
// }

// function css() {
//     return src(paths.scss)
//         .pipe(sourcemaps.init())
//         .pipe(sass())
//         .pipe(postcss([autoprefixer(), cssnano()]))
//         // .pipe(postcss([autoprefixer()]))
//         .pipe(sourcemaps.write('.'))
//         .pipe(dest('build/css'));
// }

// function javascript() {
//     return src(paths.js)
//       .pipe(sourcemaps.init())
//       .pipe(concat('bundle.js'))
//       .pipe(terser())
//       .pipe(sourcemaps.write('.'))
//       .pipe(rename({ suffix: '.min' }))
//       .pipe(dest('./build/js'))
// }

// function imagenes() {
//     return src(paths.imagenes)
//         .pipe(cache(imagemin({ optimizationLevel: 3 })))
//         .pipe(dest('build/img'))
//         .pipe(notify({ message: 'Imagen Completada' }));
// }

// function versionWebp() {
//     return src(paths.imagenes)
//         .pipe(webp())
//         .pipe(dest('build/img'))
//         .pipe(notify({ message: 'Imagen Completada' }));
// }

// function watchArchivos() {
//     watch(paths.scss, css);
//     watch(paths.js, javascript);
//     watch(paths.imagenes, imagenes);
//     watch(paths.imagenes, versionWebp);
// }

// exports.css = css;
// exports.watchArchivos = watchArchivos;
// exports.default = parallel(css, javascript, imagenes, versionWebp, watchArchivos);
