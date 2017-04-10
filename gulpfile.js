var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var sassdoc = require('sassdoc');
var cleanCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var critical = require('critical');

var php2html = require("gulp-php2html");



var input = ['./scss/portfolio/main.scss',
             './scss/portfolio/_header.scss',
             './scss/portfolio/_process.scss',
             './scss/portfolio/_contact.scss',
             './scss/portfolio/_footer.scss'];
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
    //.pipe(sassdoc())
    // Release the pressure back and trigger flowing mode (drain)
    // See: http://sassdoc.com/gulp/#drain-event
    .resume();
});

gulp.task("critical", function(a) {
  //var a = 'index.php';
  var b = a.split(/[\\/]/g).pop().split('.')[0];
    return gulp
    .src(a)
    .pipe(php2html())
    .pipe(gulp.dest("./critical"))
    .pipe(critical.generate({
        inline: false,
        extract: false,
        base: './',
        src: 'critical/' + b + '.html',
        dest: 'critical/' + b + '.css',
        minify: true,
        width: 1920,
        height: 1080,
    }));
})
gulp.task('watch', function() {
    gulp.watch(input, ['sass']);
});

//gulp.task('default', ['watch', 'critical']);
