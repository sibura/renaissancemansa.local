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
    return gulp.src('./wp-content/themes/customtheme/images/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest('./wp-content/themes/customtheme/images'));
});


gulp.task('sass', function () {
  gulp.src('./wp-content/themes/customtheme/sass/**/*.scss')
    .pipe(sourcemaps.init())
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(autoprefixer('last 2 version', 'safari 5', 'ie 7', 'ie 8', 'ie 9', 'opera 12.1', 'ios 6', 'android 4'))
    .pipe(sourcemaps.write('./'))
    .pipe(gulp.dest('./wp-content/themes/customtheme'));
});


gulp.task('uglify', function() {
  gulp.src('./wp-content/themes/customtheme/lib/*.js')
    .pipe(uglify('customtheme.min.js'))
    .pipe(gulp.dest('./wp-content/themes/customtheme/js'))
});

//browsersync 
gulp.task('browserSync', function() {
  browserSync.init({
    host: 'http://wordpress.local',
    proxy: 'http://wordpress.local/',
    port: 8080,
    openAutomatically: true,
    reloadDelay: 50,
    injectChanges: true,
    // server: {
    //   baseDir: './wp-content/themes/customtheme/'
    // },
  })
})

//watchers
//sass watcher
gulp.task('watch', ['browserSync', 'sass', 'uglify'], function(){
  gulp.watch('./wp-content/themes/customtheme/sass/**/*.scss', ['sass']); 
  gulp.watch('./wp-content/themes/customtheme/style.css', browserSync.reload); 
  gulp.watch('./wp-content/themes/customtheme/*.php', browserSync.reload); 
  gulp.watch('./wp-content/themes/customtheme/js/*.js', browserSync.reload); 
  gulp.watch('./wp-content/themes/customtheme/parts/**/*.php', browserSync.reload);
  gulp.watch('./wp-content/themes/customtheme/lib/*.js', ['uglify'], browserSync.reload);
  // Other watchers
})


// gulp.task('watch', function(){
//     livereload.listen();

//     gulp.watch('./wp-content/themes/customtheme/sass/**/*.scss', ['sass']);
//     gulp.watch('./wp-content/themes/customtheme/lib/*.js', ['uglify']);
//     gulp.watch(['./wp-content/themes/customtheme/style.css', './wp-content/themes/customtheme/*.php', './wp-content/themes/customtheme/js/*.js', './wp-content/themes/customtheme/parts/**/*.php'], function (files){
//         livereload.changed(files)
//     });
// });