/*
 *      Gulp Instructions
 * =============================
 *     Author - Peter Olson
 *       Date - 2017-01-27
 *   Filename - gulpfile.js
 * =============================
 */


// Requirements
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	php  = require('gulp-connect-php')
	browserSync = require('browser-sync');

// Configuration variables
var __bsPort = 80,
	__bsOpen = "ui", // Change "ui" to false if you don't want the UI to
					// pop up every time that browserSync starts
	__srvPort = 8080;

/*
 *    Compile scss
 */
gulp.task('scss', function(){
	return gulp.src('resources/assets/app.scss')
		.pipe(sass())
		.pipe(gulp.dest('public/css'));
});

/*
 *    Start a local PHP server
 */
gulp.task('serve', function(){
	php.server({base: 'public', port: __srvPort});
});

/*
 *    Start a PHP server and proxy that with BrowserSync
 */
gulp.task('bsync', ['serve', '__bsync-watch'], function(){
	browserSync({
		proxy: 'localhost:'.concat(__srvPort),
		port: 80,
		open: "ui",
		notify: false,
		browser: "chrome",
		files: [
			"public/css/*.css"
		]
	})
});

/*
 *    Special watch for browsersync, because, while it can watch css/js for us
 *       because of the way that lumen seperates blades from the cache, changes
 *       to blades won't propogate through in a refresh without gulp's help.
 */
gulp.task('__bsync-watch', ['watch'], function(){
	gulp.watch('resources/views/*.blade.php', ['__bs-intern']);
});

// sorry
gulp.task('__bs-intern', function(){
	browserSync.reload();
});

// Gulp watch function
gulp.task('watch', function(){
	gulp.watch('resources/assets/**/*.scss', ['scss']);
});
