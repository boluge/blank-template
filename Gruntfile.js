module.exports = function(grunt) {

	require('load-grunt-tasks')(grunt);
	
	grunt.initConfig({

		jshint: {
			all: ['libs/js/script.js']
		},

		uglify: {
			dist: {
				files: {
					'libs/js/script.min.js': ['libs/js/script.js']
				}
			}
		},
		concat: {
			options: {
				separator: ';'
			},
			dist: {
				src: ['libs/js/script.min.js'],
				dest: 'js/script.js'
			}
		},
		compass: {
			dist: {
				options: {
					config: 'config.rb'
				}
			}
		},
		imagemin: {
			dynamic: {
				files: [{
					expand: true,
					cwd: 'libs/img/',
					src: ['**/*.{png,jpg,gif}'],
					dest: 'img/'
				}]
			}
		},
		svgmin: {
			dist: {
				files: [{
					expand: true,
					cwd: 'libs/svg',
					src: ['**/*.svg'],
					dest: 'img/',
					ext: '.svg'
				}]
			}
		},
		watch: {
			php: {
				files: ['**.php'],
				options: {
					spawn: false,
					livereload: true
				}
			},
			js: {
				files: ['libs/js/*.js','!libs/js/*.min.js'],
				tasks: ['jshint','uglify','concat'],
				options: {
					spawn: false,
					livereload: true
				}
			},
			scss: {
				files: ['libs/scss/*.scss','libs/scss/**/*.scss'],
				tasks: ['compass'],
				options: {
					spawn: false,
					livereload: true
				}
			},
		}

	});

	grunt.registerTask('default', ['jshint','uglify','concat','compass','imagemin','svgmin']);
}