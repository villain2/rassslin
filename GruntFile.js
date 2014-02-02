module.exports = function (grunt)
{
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		copy: {
			target: {
				files: {
					'bin/': ['css/**', 'img/**', 'js/**', 'fonts/**', 'index.html']
				}
			}
		},

		csslint: {
			strict: {
				options: {
					import: 2
				},
				src: ['css/*.css']
			}
		},
		sass: {
			dist: {
				files: {
					'css/custom.css' : 'sass/custom.scss'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
		},
		concat: {
			options: {
				separator: '\n\n'
			},
			jsConcat: {
				files: [
					{
						src: ['js.modernizr.js', 'js/vendors/jquery.min.js', 'js/vendors/jquery-1.10.2.js', 'js/vendors/angular.min.js', 'js/vendors/angular-ui.min.js', 'js/Main.js'],
						dest: 'bin/js/rassslin.js'
					}
				]
			}
		}
	});

	//load plugins
	grunt.loadNpmTasks('grunt-contrib-csslint');
	grunt.loadNpmTasks('grunt-contrib-copy');
	grunt.loadNpmTasks('grunt-contrib-concat');
	grunt.loadNpmTasks('grunt-contrib-sass');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-cssmin');

	//tasks
	grunt.registerTask('default', ['sass', 'concat', 'copy']);
	grunt.registerTask('dev', ['sass']);
}