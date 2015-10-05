var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat'),

    gutil = require('gulp-util'),
    uglify = require('gulp-uglify');


// Sources
// -------

var sassStyle = ['development/sass/style.scss'];
var sassEditorStyle = ['development/sass/editor-style.scss'];

var sassSources = [
	'development/sass/1_lib/*.scss',
    'development/sass/2_base/*.scss',
    'development/sass/3_layout/*.scss',
	'development/sass/4_modules/*.scss',
    'development/sass/5_post/*.scss',
	'development/sass/6_other/*.scss'];

var jsSources = ['development/scripts/*.js'];

// Sources
// -------

gulp.task('sass', function() {
    gulp.src(sassStyle)
        .pipe(sass({
            outputStyle: 'compressed'
        })
            .on('error', gutil.log))
        .pipe(gulp.dest(''));

    gulp.src(sassEditorStyle)
        .pipe(sass({
            outputStyle: 'compressed'
        })
            .on('error', gutil.log))
        .pipe(gulp.dest('inc'));
});

gulp.task('concat', function() {
    gulp.src(jsSources)
        .pipe(concat('script.js'))
        .pipe(uglify())
        .pipe(gulp.dest('js'));
});

gulp.task('watch', function() {
    gulp.watch(sassStyle,['sass']); 
    gulp.watch(sassSources,['sass']); 
    gulp.watch(jsSources,['concat']); 
});

gulp.task('default', ['sass', 'concat', 'watch']);