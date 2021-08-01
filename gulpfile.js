const gulp = require('gulp');
const sass = require('gulp-sass');
const autoprefixer = require('gulp-autoprefixer');
const browserSync = require('browser-sync');
const concat = require('gulp-concat');
const uglify = require('gulp-uglify');
const connect = require('gulp-connect-php');

// Em utilização de um projeto com PHP
function connectPHP() {
  connect.server({}, function () {
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  })
}

gulp.task('boraconectar', connectPHP);

/** Função para Compilar Arquivos .scss **/
function compilarSass() {
  return gulp
    .src('styles/main.scss')
    .pipe(sass({
      outputStyle: 'compressed'
    }))
    .pipe(autoprefixer({
      Browserlist: ['last 2 versions'],
      cascade: false
    }))
    .pipe(gulp.dest('assets/css'))
    .pipe(browserSync.stream());
}

gulp.task('sass', compilarSass);



//Função para Compilar Arquivos.js
function gulpJS() {
  return gulp.src([
    'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'scripts/formValidate.js'
  ])

    .pipe(concat('main.js'))
    .pipe(uglify('main.js'))
    .pipe(gulp.dest('assets/js'))
    .pipe(browserSync.stream());
}


gulp.task('mainjs', gulpJS);


/** Função para Espionar Alterações no Projeto **/
function watchproject() {
  gulp.watch('styles/*.scss', compilarSass);
  gulp.watch('scripts/*.js', gulpJS);
  gulp.watch('*.php', connectPHP).on('change', function () {
    browserSync.reload();
  });
}

gulp.task('watch', watchproject);



//Em utilização de um projeto HTML
function browser() {
  browserSync.init({
    server: {
      baseDir: "./"
    }
  });
}

//Tarefa para iniciar o Browser Sync
gulp.task('browser-sync', browser);



/** Criação da Tarefa =) That's All Folks! **/
gulp.task('default', gulp.parallel('watch', 'sass', 'browser-sync', 'mainjs', 'boraconectar'))