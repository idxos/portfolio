var gulp = require('gulp');

gulp.task('default', function() {
  
    .publish(
        'bower_components/bootstrap-sass/stylesheets/_bootstrap.scss',
        'themes/portfolio-theme/assets/sass/_bootstrap.scss',
    );

});



