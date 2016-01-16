'use strict';

var gulp        = require('gulp'),
		browserify	= require('gulp-browserify'),
    browserSync = require('browser-sync').create(),
    del         = require('del'),
		jshint			= require('gulp-jshint'),
		notify			= require('gulp-notify'),
		plumber = require('gulp-plumber'),
    runSequence = require('run-sequence'),
    sass        = require('gulp-sass'),
    sourcemaps  = require('gulp-sourcemaps'),
		util				= require('gulp-util'),
    reload      = browserSync.reload;

var src_dir  = './src/',
    dist_dir = './dist/',
    sources  = {
      misc: src_dir + 'style.css',
			img:  src_dir + '/images/**/*.{png,gif,jpg,svg,webp}',
			js:   src_dir + 'scripts/main.js',
      php:  src_dir + '**/*.php',
      scss: src_dir + 'styles/**/*.scss'
    },
    destinations = {
      css: dist_dir + 'css',
			img: dist_dir + 'images',
			js:  dist_dir + 'js',
      php: dist_dir + '**/*.php'
    };

gulp.task('css', function() {
  return gulp.src(sources.scss)
		.pipe(plumber())
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(destinations.css))
    .pipe(browserSync.stream());
});

gulp.task('js', function(){
  return gulp.src(sources.js)
		.pipe(plumber())
    .pipe(jshint())
    .pipe(jshint.reporter('jshint-stylish'))
    .pipe(browserify({
      debug: true
    }))
    .on('error', notify.onError('Browserify failed...'))
    .on('error', util.log)
    .pipe(gulp.dest(destinations.js));
});

gulp.task('images', function(){
  return gulp.src(sources.img)
    .pipe(plumber())
    .pipe(gulp.dest(destinations.img));
});

gulp.task('php', function() {
  return gulp.src(sources.php)
    .pipe(gulp.dest(dist_dir));
});

gulp.task('theme-files', function() {
  return gulp.src([sources.php, sources.misc])
    .pipe(gulp.dest(dist_dir));
});

gulp.task('clean', function() {
  del([dist_dir]);
});

gulp.task('compile', ['clean'], function() {
  runSequence(['css', 'js', 'images', 'theme-files']);
});

gulp.task('serve', ['compile'], function() {
  browserSync.init({
    proxy: 'thequietus.dev'
  });

  gulp.watch(sources.php,  ['php']);
  gulp.watch(sources.scss, ['css']);
  gulp.watch(sources.js,   ['js']);

  gulp.watch(destinations.php).on('change', browserSync.reload);
});
