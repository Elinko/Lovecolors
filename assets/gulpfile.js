const gulp = require('gulp');
const sass = require('gulp-sass');
const babel = require('gulp-babel');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano')({ calc: { precision: 2 },zindex: false });
const browserSync = require('browser-sync');

gulp.task('sass', () => gulp
    .src('./src/scss/styles.scss')
    .pipe(sass({ outputStyle: 'expanded', errLogToConsole: true }).on('error', sass.logError))
    .pipe(sourcemaps.init())
    .pipe(postcss([autoprefixer, cssnano]))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('./dist/css'))
    .pipe(browserSync.stream())
);

gulp.task('babel', () => gulp
    .src('./src/js/main.js')
    .pipe(babel({
        presets: ['es2015'],
    }))
    .pipe(gulp.dest('./dist/js'))
    .pipe(browserSync.stream())
);

gulp.task('serve', () => {
    browserSync.init({
    server: {
        baseDir: './',
    },
});
gulp.watch(['./src/scss/*.scss'], ['sass']);
gulp.watch('./src/js/main.js', ['babel'])
// gulp.watch('./*.html').on('change', browserSync.reload);
});

gulp.task('default', ['serve']);
gulp.task('build', ['sass', 'babel']);
