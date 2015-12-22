module.exports = function(grunt) {

  grunt.initConfig({
    cssmin: {
      options: {
        keepSpecialComments: 1
      },
      target: {
        files: {
          'styles.css': ['css/styles.all.css']
        }
      }
    },
    concat :{
			dist:{
				src:['external-libraries/jquery/dist/jquery.min.js','external-libraries/jquery-validation/dist/jquery.validate.min.js','js/scripts.js'],
				dest: 'js/scripts.all.js'
			},
      css:{
        src:['external-libraries/normalize-css/normalize.css', 'css/wordpress.styles.css'],
        dest: 'css/styles.all.css'
      }
		},
		jshint: {
      files: ['js/scripts.js'],
      options: {
        globals: {
          jQuery: true
        }
      }
    },
		uglify: {
	    my_target: {
      	files: {
        	'js/scripts.min.js': ['js/scripts.all.js']
      	}
    	}
		},
    watch: {
      js: {
        files: ['js/scripts.js'],
        tasks: ['jshint', 'concat', 'uglify']
      },
      css:{
        files: 'css/wordpress.styles.css',
        tasks: ['concat', 'cssmin']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');

  grunt.registerTask('default', ['watch']);

};
