/* global module:false */
module.exports = function(grunt) {
  var port = grunt.option('port') || 8080;
  var base = grunt.option('base') || 'src/';
  var liveReloadPort = grunt.option('lrport') || true;

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    less: {
      dist: {
        files: [
          {
            expand: true,
            cwd: 'src/themes/pnda-release-3/css',
            src: '*.less',
            dest: 'src/themes/pnda-release-3/css',
            ext: '.css'
          },
          {
            expand: true,
            cwd: 'src/themes/pnda-release-3/css/PNDA',
            src: '*.less',
            dest: 'src/themes/pnda-release-3/css/PNDA',
            ext: '.css'
          }
        ]
      }
    },

    cssmin: {
      compress: {
        files: {
          'src/themes/pnda-release-3/css/standard.min.css': [ 'src/themes/pnda-release-3/css/standard.css' ]
        }
      }
    },

    php: {
      dist: {
        options: {
          port: port,
          base: base,
          open: true
        }
      }
    },

    browserSync: {
      bsFiles: {
        src : [
          'src/themes/pnda-release-3/css/*.css',
          'src/extensions/*/*.php',
          'src/themes/index.php',
          'src/themes/pnda-release-3/*.php',
          'src/themes/pnda-release-3/*/*.php'
        ]
      },
      options: {
        watchTask: true,
        proxy: '127.0.0.1:'+port, //our PHP server
        port: 8080, // our new port
        open: true,
        server: {
          baseDir: "src/themes"
        }
      }
    },

    watch: {
      options: {
        livereload: liveReloadPort
      },
      js: {
        files: ['Gruntfile.js'],
        options: {
          spawn: false
        }
      },
      less: {
        files: [
          'src/themes/pnda-release-3/css/*.less',
          'src/themes/pnda-release-3/css/less/*.less',
          'src/themes/pnda-release-3/css/PNDA/*.less'
        ],
        tasks: 'less'
      },
      css: {
        files: ['src/themes/pnda-release-3/css/*.css','src/themes/pnda-release-3/css/PNDA/*.css']
      },
      php: {
        files: [
          'src/extensions/*/*.php',
          'src/themes/index.php',
          'src/themes/pnda-release-3/*.php',
          'src/themes/pnda-release-3/*/*.php',
          'src/themes/pnda-release-3/css/PNDA/*.php'
        ],
        options: {
          livereload: liveReloadPort
        }
      },
      others: {
        files: [
          'src/shared/site.txt',
          'src/pages/*.txt',
          'src/pages/*/*.txt'
        ]
      }
    }
  });

  // Load dependencies
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-php');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-browser-sync');

  grunt.registerTask('default', ['php', 'css', 'watch']);
  grunt.registerTask('css', ['less', 'cssmin']);
  grunt.registerTask('serve', ['php', 'browserSync', 'watch']);
};
