/*******************************************************************************
1. DEPENDENCIES
*******************************************************************************/
var gulp = require('gulp'),                         // gulp core
    sass = require('gulp-sass'),                    // sass compiler
    notify = require('gulp-notify'),                // send notifications to osx
    plumber = require('gulp-plumber'),              // disable interuption
    sourcemaps = require('gulp-sourcemaps'),        // sass sourcemaps
    livereload = require('gulp-livereload'),        // reload on changes
    browserSync = require('browser-sync').create(); // keep yo browsers 'nsync

    // don't have one yet, but when we do...
    // notifier_icon = path.join(__dirname, 'some-image.png');


/*******************************************************************************
2. FILE DESTINATIONS (RELATIVE TO ROOT OF INSTALL)
*******************************************************************************/
    var target = {
      sass_src : './assets/scss/**/*.scss',
      css_dest : './assets/css',
    };


/*******************************************************************************
3. COMPILE SASS + HTML TASKS
*******************************************************************************/
gulp.task('compile:css', function() {
  var onError = function (error) {
    var lineNumber = (error.line) ? 'LINE ' + error.line + ' -- ' : '';

    notify({
      title: 'Blorp',
      subtitle: 'Your Task Failed [' + error.plugin + ']',
      message: lineNumber + 'See console.',
      // icon: notifier_icon,
      sound: 'Sosumi'
    }).write(error);

    // DO NOT REMOVE
    // this will log the error to the terminal window as well
    console.log(error);

    this.emit('end');
  };
  gulp.src(target.sass_src)
    .pipe(plumber({
      errorHandler: onError
    }))
    .on('error', sass.logError)

    .pipe(sourcemaps.init())

    .pipe(sass({
      style: 'expanded',
      debugInfo: true,
      lineNumbers: true,
      errLogToConsole: true
    }))

    .pipe(sourcemaps.write())

    .pipe(gulp.dest(target.css_dest))

    .pipe(browserSync.stream())

});

// watch scss folder for changes
gulp.task('watch:css', function() {
  livereload.listen()
  gulp.watch(target.sass_src, ['compile:css'])
});

// watch html files for changes
gulp.task('watch:html', function() {
  livereload.listen()
  gulp.watch("*.html").on('change', browserSync.reload);
});

// compile task for production; minify things, remove unnecessaries
gulp.task('compile:production', function() {
  gulp.src(target.sass_src)
    .on('error', sass.logError)

    .pipe(sass({
      style: 'compressed',
      debugInfo: false,
      lineNumbers: false,
      errLogToConsole: false
    }))

    .pipe(gulp.dest(target.css_dest))
});

// compile things for Developer environments
gulp.task('default', ['compile:css', 'watch:css', 'watch:html'], function() {
  browserSync.init({
    port: 8080,
    server: "./"
  });
});

// compile things for Developer environments
gulp.task('for-production', ['compile:production']);
