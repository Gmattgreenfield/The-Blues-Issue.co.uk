// Include gulp
var gulp = require('gulp');

// Include Our Plugins
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require("gulp-rename");
var jekyll = require('gulp-jekyll');


// Jekyll Template - Not really working.....

// gulp.task('jekyll', function () {
//     gulp.src(['./index.html', './_layouts/*.html', './_posts/*.{markdown,md}'])
//         .pipe(jekyll({
//             source: 'jekyll-source/',
//             destination: 'output/',
//             bundleExec: true
//         }))
//         .pipe(gulp.dest('output/'));
// });



// Compile Sass and minify it
gulp.task('sass', function() {
    return gulp.src('jekyll-source/_sass/*.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('jekyll-source/assets/css/'));
});


// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('*.scss', ['sass']);
});

// Default Task
gulp.task('default', ['watch']);
