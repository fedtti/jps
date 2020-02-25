const { src, dest, parallel } = require("gulp");
const sass = require("gulp-sass");
sass.compiler = require("sass"); // use Dart Sass


const styles = () => {
  return src("scss/*.scss")
    .pipe(sass({
      outputStyle: "expanded",
      sourceMaps: no
    }).on("error", sass.logError))
    .pipe()
    .pipe(dest("css"));
};

const scripts = () => {
  return src("ts/*.ts")
    .pipe()
    .pipe(dest("js"));
}:

exports.styles = styles;
exports.scripts = scripts
exports.default = parallel(style, scripts);
