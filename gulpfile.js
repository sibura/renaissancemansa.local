var gulp = require('gulp');
// var livereload = require('gulp-livereload')
var browserSync = require('browser-sync').create();
var uglify = require('gulp-uglifyjs');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var imagemin = require('gulp-imagemin');
var pngquant = require('imagemin-pngquant');




gulp.task('imagemin', function () {
    return gulp.src('./wp-content/themes/renaissance-man/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./wp-content/themes/renaissance-man/images'));
});


gulp.task('sass', function () {
  gulp.src('./wp-content/themes/renaissance-man/sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./wp-content/themes/renaissance-man'));
});


gulp.task('uglify', function() {
  gulp.src('./wp-content/themes/renaissance-man/lib/*.js')
    .pipe(uglify('main.min.js'))
    .pipe(gulp.dest('./wp-content/themes/renaissance-man/js'))
});

//browsersync 
gulp.task('browserSync', function() {
  browserSync.init({
    host: 'renaissancemensa.local',
    proxy: 'http://renaissancemensa.local/',
    port: 8080
    // openAutomatically: true,
    // reloadDelay: 50,
    // injectChanges: true,
    // // server: {
    //   baseDir: './wp-content/themes/renaissance-man/'
    // },
  })
})

//watchers
//sass watcher
gulp.task('watch', ['browserSync', 'sass', 'uglify'], function(){
  gulp.watch('./wp-content/themes/renaissance-man/sass/**/*.scss', ['sass']); 
  gulp.watch('./wp-content/themes/renaissance-man/style.css', browserSync.reload); 
  gulp.watch('./wp-content/themes/renaissance-man/*.php', browserSync.reload); 
  gulp.watch('./wp-content/themes/renaissance-man/js/*.js', browserSync.reload); 
  gulp.watch('./wp-content/themes/renaissance-man/parts/**/*.php', browserSync.reload);
  gulp.watch('./wp-content/themes/renaissance-man/lib/*.js', ['uglify'], browserSync.reload);
  // Other watchers
})


// gulp.task('watch', function(){
//     livereload.listen();

//     gulp.watch('./wp-content/themes/renaissance-man/sass/**/*.scss', ['sass']);
//     gulp.watch('./wp-content/themes/renaissance-man/lib/*.js', ['uglify']);
//     gulp.watch(['./wp-content/themes/renaissance-man/style.css', './wp-content/themes/renaissance-man/*.php', './wp-content/themes/renaissance-man/js/*.js', './wp-content/themes/renaissance-man/parts/**/*.php'], function (files){
//         livereload.changed(files)
//     });
// });