var gulp = require('gulp');
var gutil = require('gulp-util');
var browserify = require('gulp-browserify');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var concat = require('gulp-concat');
var inject = require('gulp-inject');
var wiredep = require('wiredep').stream;

var jsSources = [
	'src/js/main.js',
	'src/js/plugins.js'
]

//var sassSources = ['src/styles/*.scss']

gulp.task('js', function(){
	gulp.src(jsSources)
	.pipe(concat('script.js'))
	.pipe(browserify())
	.pipe(gulp.dest('builds/development/js'))
})

gulp.task('log', function(){
	gutil.log('Hello World');
});





gulp.task('styles', function(){  
    gulp.src('src/styles/*.scss')
    	.pipe(wiredep())
    	//.pipe(inject(injectAppFiles, injectAppOptions))
        .pipe(sass().on('error', sass.logError))
        //.pipe(cleanCSS({compatibility: 'ie8'}))
        .pipe(gulp.dest('builds/development/css'));
});




//All this is doing is taking whatever is in bower_components/fontawesome/fonts/ directory and moving those to ./public/fonts.
gulp.task('icons', function() { 
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*') 
        .pipe(gulp.dest('./public/fonts')); 
});



gulp.task('html', ['styles'], function(){
  var injectFiles = gulp.src(['builds/development/css/main.css']);

  var injectOptions = {
    addRootSlash: false,
    relative: true,
    ignorePath: ['builds/development/', 'builds/production/']
  };
 
  return gulp.src('*.html')
    .pipe(inject(injectFiles, injectOptions))
    .pipe(gulp.dest('builds/development'));


});


