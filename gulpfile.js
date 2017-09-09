const
    gulp = require('gulp'), 
    stylus = require('gulp-stylus'),
    autoprefixer = require('gulp-autoprefixer'),
    minify = require('gulp-minify'),
    
    src = {
        stylus: 'css/**/*.styl',
        components: 'plugins/components/*.styl',
        css_input: './css/style.styl',
        css_output: 'dist/css',
        js_input: './js/*.js',
        js_output: 'dist/js',
        prefix: ['last 2 versions', 'Firefox > 20', '> 5%']
    };

gulp.task('stylus', function () {
  return gulp.src([src.css_input])
    .pipe(stylus({
      compress: true
    }))
    .pipe(autoprefixer({
        browsers: src.prefix,   
        cascade: false
    }))
    .pipe(gulp.dest(src.css_output));
});

gulp.task('minify', function() {
  gulp.src(src.js_input)
    .pipe(minify({
        ext:{
            min:'-min.js'
        },
    }))
    .pipe(gulp.dest(src.js_output))
});

gulp.task('watch', function() {
	gulp.watch([src.stylus, src.js_input, src.components], ['default']);
});

gulp.task('default', ['stylus', 'minify']);
