/**
 * Gruntfile für die Erstellung des Freifunk Templates. Hier muss eigentlich nichts
 * geändert werden.
 */
module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      development: {
          options: {
            paths: [""]
          },
          files: {
            "css/styles.css": "less/app.less"
          }
        },
        production: {
          options: {
            compress: true,
            paths: [""],
          },
          files: {
            "css/styles.min.css": "less/app.less"
          }
        }
    },
    watch: {
      scripts: {
        files: [
          'less/*.less',
          'less/**/*.less'
        ],
        tasks: ['less'],
        options: {
          interrupt: true,
        }
      }
    }
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['less']);
  grunt.registerTask('watch', ['less', 'watch']);

};
