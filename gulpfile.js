
/*
    Requires
    Loads the plugins
*/
var gulp = require('gulp'),
    sass = require('gulp-ruby-sass'),
    autoprefixer = require('gulp-autoprefixer'),
    cssnano = require('gulp-cssnano'),
    jshint = require('gulp-jshint'),
    uglify = require('gulp-uglify'),
    rename = require('gulp-rename'),
    concat = require('gulp-concat'),
    notify = require('gulp-notify'),
    cache = require('gulp-cache'),
    livereload = require('gulp-livereload');

var sourcemaps = require('gulp-sourcemaps');

var spritesmith = require('gulp.spritesmith');


/******************
      TASKS
*******************/

gulp.task('styles', function() {
  return sass('src/styles/main.scss', { style: 'expanded' })
      .pipe(autoprefixer("last 2 versions"))

    // .pipe(gulp.dest('www/assets/css'))
    // .pipe(rename({suffix: '.min'}))
    .pipe(cssnano())

    .pipe(gulp.dest('www/wp-content/themes/richelieu/css'))
    .pipe(livereload())
});

gulp.task('scripts-app', function() {
  return gulp.src('src/scripts/app/**/*.js')
    // .pipe(jshint('.jshintrc'))
    // .pipe(jshint.reporter('default'))
    // .pipe(sourcemaps.init())
    .pipe(concat('main.js'))
    // .pipe(sourcemaps.write())
    .pipe(uglify())
    .pipe(gulp.dest('www/wp-content/themes/richelieu/js/app'))
    // .pipe(rename({suffix: '.min'}))

    // .pipe(gulp.dest('www/assets/js/app'));
});

gulp.task('scripts-plugins', function() {
  return gulp.src('src/scripts/plugins/**/*.js')
    .pipe(concat('plugins.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('www/wp-content/themes/richelieu/js/plugins'));
});


gulp.task('watch', function() {

  livereload.listen();

  // Watch .scss files
  gulp.watch('src/styles/**/*.scss', ['styles']);

  // Watch .js files
  gulp.watch('src/scripts/**/*.js', ['scripts-app']);


});


/*******************/

// gulp.task('styles-prod', function() {
//   return sass('src/styles/main.scss', { style: 'expanded', loadPath:bourbon })
//     .pipe(cssnano())
//     .pipe(gulp.dest('www/assets/css'))
// });

// gulp.task('scripts-app-prod', function() {
//   return gulp.src('src/scripts/app/**/*.js')
//     .pipe(concat('main.js'))
//     .pipe(uglify())
//     .pipe(gulp.dest('www/assets/js/app'))
// });

gulp.task('prod', ['styles-prod', 'scripts-app-prod']);


gulp.task('sprite', function () {

  var spriteData = gulp.src('www/wp-content/themes/richelieu/img/imgsingle/*.png').pipe(spritesmith({
    retinaSrcFilter: 'www/wp-content/themes/richelieu/img/imgsingle/*@2x.png',
    imgName: 'sprite.png',
    imgPath: '../img/sprite.png',
    retinaImgPath: '../img/sprite@2x.png',
    retinaImgName: 'sprite@2x.png',
    cssName: '_sprite.sass'
  }));

  spriteData.img.pipe(gulp.dest('www/wp-content/themes/richelieu/img'));
  spriteData.css.pipe(gulp.dest('src/styles/'));

});