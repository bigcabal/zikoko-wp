var gulp = require('gulp');
var gutil = require('gulp-util');
var rename = require("gulp-rename");


/* *************
    CSS
************* */

var sass = require('gulp-sass');
var postcss = require('gulp-postcss');
var scss = require('postcss-scss');
var autoprefixer = require('autoprefixer');

var postcssProcessors = [
    autoprefixer( {
        browsers: [
            'Explorer >= 11',
            'last 2 Explorer versions',
            'last 2 ExplorerMobile versions',
            'last 2 Edge versions',

            'last 2 Firefox versions',
            'last 2 FirefoxAndroid versions',

            'last 2 Chrome versions',
            'last 2 ChromeAndroid versions',

            'last 2 Safari versions',
            'last 2 iOS versions',

            'last 2 Opera versions',
            'last 2 OperaMini versions',
            'last 2 OperaMobile versions',

            'last 2 Android versions',
            'last 2 BlackBerry versions',
        ]
    } )
]

var sassMainFile = 'development/sass/style.scss';
var sponsorHomepageStyle = 'development/sass/sponsorhomepage.scss';
var etisalatPostStyle = 'development/sass/etisalat.scss';
var sassEditorStyle = 'development/sass/editor-style.scss';
var sassAMPStyle = 'development/sass/amp.scss';
var sassFiles = 'development/sass/**/*.scss';

gulp.task('css', function() {
    gulp.src(sassMainFile)
        // PostCSS 
        .pipe(
           postcss(postcssProcessors, {syntax: scss})
        )
        // SASS to CSS
        .pipe(
            sass({ outputStyle: 'compressed' })
            .on('error', gutil.log)
        )
        .pipe(gulp.dest(''));


    gulp.src(sponsorHomepageStyle)
        .pipe(
           postcss(postcssProcessors, {syntax: scss})
        )
        .pipe(
            sass({ outputStyle: 'compressed' })
            .on('error', gutil.log)
        )
        .pipe(gulp.dest('inc/css'));
    gulp.src(etisalatPostStyle)
        .pipe(
           postcss(postcssProcessors, {syntax: scss})
        )
        .pipe(
            sass({ outputStyle: 'compressed' })
            .on('error', gutil.log)
        )
        .pipe(gulp.dest('inc/css'));
    gulp.src(sassEditorStyle)
        .pipe(
           postcss(postcssProcessors, {syntax: scss})
        )
        .pipe(
            sass({ outputStyle: 'compressed' })
            .on('error', gutil.log)
        )
        .pipe(gulp.dest('inc/css'));

    gulp.src(sassAMPStyle)
        .pipe(
           postcss(postcssProcessors, {syntax: scss})
        )
        .pipe(
            sass({ outputStyle: 'compressed' })
            .on('error', gutil.log)
        )
        .pipe(rename("style.php"))
        .pipe(gulp.dest('amp'));


});


/* *************
    JS
************* */

var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

var jsFiles = 'development/scripts/**/*.js';

gulp.task('js', function() {

    gulp.src('development/scripts/main/lib/*.js')
        .pipe(concat('main-lib.js'))
        .pipe(uglify())
            .on('error', gutil.log)
        .pipe(gulp.dest('js'));
    gulp.src('development/scripts/main/*.js')
        .pipe(concat('main.js'))
        .pipe(uglify())
            .on('error', gutil.log)
        .pipe(gulp.dest('js'));

    gulp.src('development/scripts/post/*.js')
        .pipe(concat('post.js'))
        .pipe(uglify())
            .on('error', gutil.log)
        .pipe(gulp.dest('js'));

    gulp.src('development/scripts/belike/*.js')
        .pipe(concat('belike.js'))
        .pipe(uglify())
            .on('error', gutil.log)
        .pipe(gulp.dest('js'));

    gulp.src('development/scripts/admin/*.js')
        .pipe(concat('admin.js'))
        .pipe(uglify())
            .on('error', gutil.log)
        .pipe(gulp.dest('js'));


    // gulp.src(jsFiles)
    //     // .pipe(concat('script.js'))
    //     .pipe(uglify())
    //         .on('error', gutil.log)
    //     .pipe(gulp.dest('js'));
});






gulp.task('watch', function() {
    gulp.watch(sassFiles,['css']); 
    gulp.watch(jsFiles,['js']); 
});

gulp.task('default', ['css', 'js', 'watch']);
