module.exports = function (grunt){
  grunt.loadNpmTasks('grunt-contrib-concat');
  //grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.initConfig({
      js: {
          files: ['js/*.js',
                'js/modules/home/*.js',
                'js/modules/htmlprojects/*.js',
                'js/modules/javascriptprojects/*.js',
                'js/modules/listexercisesphp/*.js',
                'js/modules/phpprojects/*.js',],
          tasks: ['concat']
      },
    concat:{
      js:{
        src:[   'js/*.js',
                'js/modules/home/*.js',
                'js/modules/htmlprojects/*.js',
                'js/modules/javascriptprojects/*.js',
                'js/modules/listexercisesphp/*.js',
                'js/modules/phpprojects/*.js',
              ],
          dest:'main/scripts.min.js'
      }
    }
  });

  grunt.registerTask('default', ['concat']);
};