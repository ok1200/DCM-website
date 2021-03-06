var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	concat = require('gulp-concat'),
	plumber = require('gulp-plumber'),
	htmlmin = require('gulp-htmlmin'),
	watch = require('gulp-watch'),
	stylus = require('gulp-stylus'),
	uglifycss = require('gulp-uglifycss'),
	sourcemaps = require('gulp-sourcemaps'),
	imagemin = require('gulp-imagemin'),
	livereload = require('gulp-livereload'),
	connect = require('gulp-connect-php'),
    historyApiFallback = require('connect-history-api-fallback');


gulp.task('StylusToCSS', function(){
	gulp.src('dev/stylus/*.styl')
		.pipe(plumber())
		.pipe(sourcemaps.init())
		.pipe(stylus({
			compress: true
		}))
		.pipe(sourcemaps.write('.'))
		.pipe(gulp.dest('dist/css/'))
		.pipe(livereload());
});

gulp.task('MovePhp',function(){
  return gulp.src([
      './dev/libs/*.php'
  ],  {base: './dev/'})
  .pipe(gulp.dest('./dist'))
  .pipe(livereload());
});

gulp.task('MoveMainPhp',function(){
  return gulp.src([
      './dev/*.php'
  ],  {base: './dev/'})
  .pipe(gulp.dest('./dist'))
  .pipe(livereload());
});

gulp.task('CompressHTML', function() {
 	gulp.src('dev/*.html')
 		.pipe(plumber())
	    .pipe(htmlmin({collapseWhitespace: true}))
	    .pipe(gulp.dest('dist'))
	    .pipe(livereload());
});

gulp.task('CompressJS', function(){
	gulp.src('dev/js/*.js')
		.pipe(concat('all.js'))
		.pipe(uglify())
		.pipe(gulp.dest('dist/js/'))
		.pipe(livereload());
});

gulp.task('CompressCSS', function(){
	gulp.src('dev/css/*.css')
		.pipe(concat('libraries.css'))
		.pipe(uglifycss())
		.pipe(gulp.dest('dist/css/'))
		.pipe(livereload());
});

gulp.task('imageMin', function(){
	gulp.src(['dev/img/*.*', '!dev/img/Thumbs.db'])
		.pipe(imagemin())
		.pipe(gulp.dest('dist/img/'))
		.pipe(livereload());
});

gulp.task('Server', function(done) {
	connect.server({
	    root: './dist',
	    hostname: '0.0.0.0',
	    port: 3000,
	    livereload: true,
	    middleware: function(connect, opt) {
	      return [historyApiFallback()];
	    }
  	});
});

gulp.task('Watch', function(){
	livereload.listen({ basePath: 'dist' });
	gulp.watch('dev/stylus/*.styl', ['StylusToCSS']);
	gulp.watch('dev/libs/*.php', ['MovePhp']);
	gulp.watch('dev/libs/*.php', ['MoveMainPhp']);
	gulp.watch('dev/css/*.css', ['CompressCSS']);
	gulp.watch('dev/js/*.js', ['CompressJS']);
	gulp.watch('dev/*.html', ['CompressHTML']);
	gulp.watch('dev/img/*.*', ['imageMin']);
});

gulp.task('default', ['StylusToCSS','MovePhp','MoveMainPhp','CompressCSS','CompressJS','CompressHTML','imageMin','Watch','Server']);
