module.exports = function(grunt) {
  grunt.initConfig({
    clean: {
      dev: {
        src: ['build/'],
      },
    },

    copy: {
      dev: {
        expand: true,
        // current working directory.
        cwd: 'app/',
        src: ['*.html', '*.css'],
        dest: 'build/',
        filter: 'isFile',
      },
    },

    browserify: {
      dev: {
        options: {
          transform: ['debowerify'],
          debug: true,
        },
        src: ['app/*.js'],
        dest: 'build/bundle.js',
      },
    },
  });

  // Load tasks
  grunt.loadNpmTasks('grunt-browserify');
  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // grunt task
  grunt.registerTask('default', ['clean:dev', 'browserify:dev', 'copy:dev']);
};
