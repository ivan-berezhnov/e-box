'use strict';

let gulp = require('gulp');
let concat = require('gulp-concat');
let cssnano = require('gulp-cssnano');
let autoprefixer = require('gulp-autoprefixer');
let filter = require('gulp-filter');
let rename = require('gulp-rename');
let sass = require('gulp-sass');
let sourcemaps = require('gulp-sourcemaps');
let uglify = require('gulp-uglify');
let browserSync  = require('browser-sync').create();

gulp.task('vendors', function() {
  return gulp.src([
    './node_modules/bootstrap/dist/js/bootstrap.min.js',
    './node_modules/datatables/media/js/jquery.dataTables.js',
  ])
    .pipe(gulp.dest('../js'));
});

gulp.task('sass', function() {
  return gulp.src([
    './scss/**/*.scss',
    './node_modules/datatables/media/css/jquery.dataTables.css'
  ])
    .pipe(sourcemaps.init())
    .pipe(sass({
      outputStyle: 'expanded'
    }).on('error', sass.logError))
    .pipe(autoprefixer({
      browsers: ['last 10 versions'],
      cascade: false
    }))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('../css/'))
    .pipe(filter('*.css'))
    .pipe(cssnano({discardComments: {removeAll: true}}))
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('../css'));
});

gulp.task('js', function() {
  return gulp.src('./js/**/*.js')
    .pipe(sourcemaps.init())
    .pipe(concat('init.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(gulp.dest('../js/'));
});

gulp.task('watch:sass', function(done) {
  gulp.watch('../sass/**/*.scss', gulp.series('sass'));
  done();
});

gulp.task('watch:js', function(done) {
  gulp.watch('../js/**/*.js', gulp.series('js'));
  done();
});

gulp.task('watch', gulp.parallel('watch:js', 'watch:sass'));

gulp.task('default', gulp.parallel(
  gulp.series('vendors'),
  gulp.series('sass'),
  gulp.series('js')
));
