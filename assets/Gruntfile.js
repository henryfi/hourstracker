module.exports = function(grunt) {

    // 1. All configuration goes here 
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        /*
        concat: {   
            dist: {
                src: [
                    'js/libs/*.js', // All JS in the libs folder
                    'js/global.js'  // This specific file
                ],
                dest: 'js/build/production.js',
            }
        },
        */
        'bowerInstall': {
            target: {

            // Point to the files that should be updated when
            // you run `grunt bower-install`
            src: [
                'index.html',   // .html support...
            ],

                // Optional:
                // ---------
                cwd: '',
                dependencies: true,
                devDependencies: false,
                exclude: [],
                fileTypes: {},
                ignorePath: ''
            }
        }
    });

    // 3. Where we tell Grunt we plan to use this plug-in.
    //grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-bower-install');
    // 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
    grunt.registerTask('default', ['concat']);

};