var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sassdoc = require('sassdoc');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');

var input = './scss/portfolio/main.scss';
var output = './stylesheets';

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 5 versions', '> 3%', 'Firefox ESR']
};

gulp.task('sass', function () {
  return gulp
    .src(input)
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(rename('style.min.css'))
    .pipe(cleanCSS({compatability: 'ie9'}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(output))
    .pipe(sassdoc())
    // Release the pressure back and trigger flowing mode (drain)
    // See: http://sassdoc.com/gulp/#drain-event
    .resume();
});

gulp.task('watch', function() {
    gulp.watch(input, ['sass']);
});

gulp.task('default', ['sass']);
