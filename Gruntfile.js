module.exports = function (grunt)
{
  grunt.initConfig ({

    'angular-builder': {
      options: {
        mainModule: 'mainModuleName'
      },
      app: {
        src:  'src/**/*.js',
        dest: 'build/project.js'
      }
    }

  });

  grunt.loadNpmTasks ('grunt-angular-builder');

  grunt.registerTask ('release', ['angular-builder']);
  grunt.registerTask ('debug', ['angular-builder::debug']);

};