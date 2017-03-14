var elixir = require('laravel-elixir');
var gulp = require('gulp');
var gulpw = require('gulp-watch');
var flatten = require('gulp-flatten');
require('laravel-elixir-vueify');

gulp.task('copy:fonts', function () {
    return gulp.src('./resources/assets/fonts/**/')
        .pipe(flatten())
        .pipe(gulp.dest('./public/build/fonts'));
});

// Copy images
gulp.task('copy:images', function () {
    return gulp.src('./resources/assets/img/**/')
        .pipe(gulp.dest('./public/img/'));
});

// Compile Assets
elixir(function (mix) {

    mix.task('copy:fonts');
    mix.task('copy:images');

    mix.styles([
        './node_modules/bootstrap/dist/css/bootstrap.min.css',
        './node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css',
        'sweetalert.min.css',
    ], 'public/css/vendor.css');

    mix.scripts([
            "./node_modules/jquery/dist/jquery.min.js",
            'sweetalert.min.js',
            "./node_modules/bootstrap/dist/js/bootstrap.min.js",
            "./node_modules/jquery-masked-input/dist/jquery.masked-input.js",
            './node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js',
            './node_modules/bootstrap-datepicker/dist/locales/bootstrap-datepicker.pt-BR.min.js',
            './node_modules/jquery-maskmoney/dist/jquery.maskMoney.min.js'
        ],
        "public/js/vendor.js"
    );

    mix.version(['public/css/vendor.css', 'public/js/vendor.js']);


});