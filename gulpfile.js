var gulp = require('gulp');
var gutil = require('gulp-util');
var concat = require('gulp-concat');

var jsSources = [
	'src/js/main.js',
	'src/js/plugins.js'
]


gulp.task('log', function(){
	gutil.log('Hello World');
});

gulp.task('js', function(){
	gulp.src(jsSources)
	.pipe(concat('script.js'))
	.pipe(gulp.dest('builds/development/js'))
})