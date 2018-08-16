let gulp = require('gulp');
let cleanCSS = require('gulp-clean-css');
let rename = require('gulp-rename');
let sass = require('gulp-sass');
let concat = require('gulp-concat');
let gulpSequence = require('gulp-sequence');
let watch = require('gulp-watch');



gulp.task('sass', function () {
    var stream = gulp.src('style.scss')
        .pipe(sass())
        .pipe(gulp.dest(''))
        .pipe(rename('styles.css'));
    return stream;
});

gulp.task('minify-css', () => {
	return gulp.src('docs/css/styles.css')
	  .pipe(cleanCSS({compatibility: 'ie8'}))
	  .pipe(rename({suffix: '.min'}))
	  .pipe(gulp.dest('docs/css/'));
  });

  gulp.task('combine-css', function () {
	return gulp.src('styles.css')
		.pipe(concat('style.css'))
		.pipe(gulp.dest('.'));
});

gulp.task('styles', function(callback){
	gulpSequence('combine-css', 'sass')(callback)
});

 