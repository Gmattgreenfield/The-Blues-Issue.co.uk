// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require("gulp-rename");



// Compile Our Sass
gulp.task('sass', function() {
    return gulp.src('./styles/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./styles'));
});

// Minify CSS
gulp.task('minify-css', function () {
    gulp.src('styles/*.css')
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('templates/css/'));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('styles/*.scss', ['sass', 'minify-css']);
});

// Default Task
gulp.task('default', ['watch']);
