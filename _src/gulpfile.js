'use strict';

var gulp = require('gulp');
var $ = require('gulp-load-plugins')();
var args = require('yargs').argv;

// port number dev server runs on
var port = 8008;

// temporary solution till https://github.com/gulpjs/gulp/issues/355
var runSequence = require('run-sequence');

var browserSync = require('browser-sync');

// Used for build-only options
var build = false;

// file locations
var SRC_DIR   = './';
var STYLE_DIR = '../css';
var SCRIPT_DIR = '../js';
var IMAGE_DIR = '../images';

// Less
gulp.task('styles', function () {
  return gulp.src(SRC_DIR + '/styles/main.scss')
    .pipe($.plumber())
    .pipe($.rubySass({
    	sourcemap: true,
    	style: 'expanded'
    }))
    .on("error", $.notify.onError('Sass failed…'))
    .on('error', $.util.log)
    .pipe($.autoprefixer())
    .pipe(gulp.dest(STYLE_DIR));
})

// JS
gulp.task('scripts', function(){
  return gulp.src(SRC_DIR + '/scripts/main.js')
    .pipe($.plumber())
    .pipe($.jshint())
    .pipe($.jshint.reporter('jshint-stylish'))
    .pipe($.browserify({
      debug: true
    }))
    .on("error", $.notify.onError('Browserify failed…'))
    .on('error', $.util.log)
    .pipe(gulp.dest(SCRIPT_DIR));
})

// Just copy over any images to images dir
gulp.task('images', function(){
  return gulp.src(SRC_DIR + '/images/**/*.{png,gif,jpg,svg,webp}')
    .pipe($.plumber())
    .pipe(gulp.dest(IMAGE_DIR));
});

// Clean
gulp.task('clean', function (cb) {
  return gulp.src([STYLE_DIR, SCRIPT_DIR, IMAGE_DIR], { read: false })
    .pipe($.rimraf({
    	force: true
    }));
});

// Run all the compile tasks
gulp.task('compile', ['styles', 'scripts', 'images']);

// Minify all assets
gulp.task('minify', function(){
  var filter = {
    js: $.filter('**/*.js'),
    css: $.filter('**/*.css'),
    svg: $.filter('**/*.svg'),
    raster: $.filter(IMAGE_DIR + '/**/*.{png,gif,jpg,webp}')
  };
  return gulp.src([
  		SCRIPT_DIR + '/**/*',
  		IMAGE_DIR + '/**/*', '!' + IMAGE_DIR + '/placeholders/**/*',
  		STYLE_DIR + '/**/*'
  	])
    .pipe($.plumber())

    // minify JS
    .pipe(filter.js)
    .pipe($.uglify())
    .on("error", $.notify.onError('Uglify failed…'))
    .on('error', $.util.log)
    .pipe(gulp.dest(SCRIPT_DIR))
    .pipe(filter.js.restore())

    // // minify CSS
    .pipe(filter.css)
    .pipe($.csso())
    .on("error", $.notify.onError('Csso failed…'))
    .on('error', $.util.log)
    .pipe(gulp.dest(STYLE_DIR))
    .pipe(filter.css.restore())

    // minify SVGs
    .pipe(filter.svg)
    .pipe($.svgmin())
    .pipe(gulp.dest(IMAGE_DIR))
    .pipe(filter.svg.restore())

    // compress images
    .pipe(filter.raster)
    .pipe($.imagemin())
    .pipe(gulp.dest(IMAGE_DIR))
    .pipe(filter.raster.restore())

    .pipe($.size({
    	showFiles: true,
    	gzip: true
    }));
});

// Dev mode
gulp.task('dev', ['clean'], function(){
  runSequence('compile', ['watch', 'browser-sync']);
});

// watch dev files for recompilation and livereload when OUTPUT_DIR updates
gulp.task('watch', function(){
  gulp.watch(SRC_DIR + '/styles/**/*.scss', ['styles']);
  gulp.watch(SRC_DIR + '/scripts/**/*.js', ['scripts']);
  gulp.watch(SRC_DIR + '/images/**/*', ['images']);
})

gulp.task('browser-sync', function() {
		var opts = {
      proxy: "thequietus.dev",
      files: ['../**/*.php', SCRIPT_DIR + '/**/*', IMAGE_DIR + '/**/*', STYLE_DIR + '/**/*.css'],
      open: false
    };
		if(args.public) {
			opts.tunnel = true;
			opts.open = true;
			opts.ghostMode = false;
		};
    browserSync.init(null, opts);
});

// Perform a build
gulp.task('build', function () {
  runSequence('clean', 'compile', 'minify');
});
