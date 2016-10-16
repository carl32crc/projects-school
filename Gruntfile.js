module.exports = function (grunt){

    grunt.initConfig({
    ngAnnotate: {
        options: {
            singleQuotes: true
        },
        app: {
            files: {
                'public/min-safe/appFactory.js': ['js/*.js'],
                'public/min-safe/home.js': ['js/modules/home/*.js'],
                'public/min-safe/html.js': ['js/modules/htmlprojects/*.js'],
                'public/min-safe/javascript.js': ['js/modules/javascriptprojects/*.js'],
                'public/min-safe/listphp.js': ['js/modules/listexercisesphp/*.js'],
                'public/min-safe/php.js': ['js/modules/phpprojects/*.js']
            }
        }
    },
    concat:{
      js:{
        src:[   'public/min-safe/appFactory.js',
                'public/min-safe/home.js',
                'public/min-safe/html.js',
                'public/min-safe/javascript.js',
                'public/min-safe/listphp.js',
                'public/min-safe/php.js',
              ],
          dest:'main/concat.js'
      }
    },
    uglify: {
    js: { //target
        src: ['main/concat.js'],
        dest: 'main/script.min.js'
      }
    }
  });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-ng-annotate');
    grunt.registerTask('default', ['ngAnnotate','concat','uglify']);
};