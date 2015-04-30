// -------------------------------------------------------
// Gruntfile.js for Sergio Costa's projects
// Version: 2.0.0
//
// Author:  Sergio Costa
// URL:     http://www.sergiocosta.net.br
// Contact: sergio.costa@outlook.com
// -------------------------------------------------------
"use strict";

module.exports = function(grunt) {

    // Para instalar matchdep na pasta src do projeto: $ npm install matchdep
    require("matchdep").filterDev("grunt-*").forEach(grunt.loadNpmTasks);

    var projectConfig = {

        // Setting Directories
        dirs: {
            app:  "../",
            js:   "../js",
            sass: "../sass",
            css:  "../css",
            img:  "../images"
        },

        // Metadata
        pkg: grunt.file.readJSON("package.json"),
        banner:
        "\n" +
        "/*\n" +
         "* -------------------------------------------------------\n" +
         "* Project: Sergio Costa BXSlider\n" +
         "* Version: 1.0.0\n" +
         "*\n" +
         "* Author:  Sergio Costa and BXSlider\n" +
         "* URL:     http://sergiocosta.net.br and http://bxslider.com\n" +
         "* Contact: sergio.costa@outlook.com.com\n" +
         "*\n" +
         "*---------------------------------------------------------\n" +
         "*\n" +
         "* sc_bxslider v4.1.2 - Fully loaded, responsive content slider\n" +
         "* http://sc_bxslider.com\n" +
         "*\n" +
         "* Copyright 2014, Steven Wanderski - http://stevenwanderski.com - http://bxcreative.com\n" +
         "* Written while drinking Belgian ales and listening to jazz\n" +
         "*\n" +
         "* Released under the MIT license - http://opensource.org/licenses/MIT\n" +
         "* -------------------------------------------------------\n" +
         "*/\n" +
         "",

        // Watch 
        // Para instalar na pasta src do projeto: $ npm install grunt-contrib-watch --save-dev
        watch: {
            options: {
                livereload: true
            },
            compass: {
                files: [
                    "<%= dirs.css %>/{,*/}*.css",
                    "<%= dirs.sass %>/{,*/}*.{scss,sass}"
                ],
                tasks: ["compass", "notify:compass"]
            },
            js: {
                files: [
                    "<%= dirs.js %>/sc-bxslider.js"
                ],
                tasks: ["uglify", "notify:js"]
            }
        },

        // Uglify
        // Para instalar na pasta src do projeto: $ npm install grunt-contrib-uglify --save-dev
        uglify: {
            options: {
                mangle: false,
                banner: "<%= banner %>"
            },
            dist: {
                files: {
                    "<%= dirs.js %>/sc-bxslider.min.js": [
                        "<%= dirs.js %>/sc-bxslider.js"
                    ]

                }
            }
        },

        // Compass
        // Para instalar na pasta src do projeto: $ npm install grunt-contrib-compass --save-dev
        compass: {
            dist: {
                options: {
                    sassDir: '../sass',
                    cssDir: '../css',
                    environment: "development",
                    outputStyle: "compressed",
                    force: true,
                    config: "config.rb"
                }
            }
        },

        // Notify
        // Para instalar na pasta src do projeto: $ npm install grunt-notify --save-dev
        notify: {
          compass: {
            options: {
              title: "SASS - <%= pkg.title %>",
              message: "Compilado e minificado com sucesso!"
            }
          },
          js: {
            options: {
              title: "Javascript - <%= pkg.title %>",
              message: "Minificado e validado com sucesso!"
            }
          },
          image: {
            options: {
              title: "<%= pkg.title %>",
              message: "Imagens minificadas!"
            }
          }
        },

    };

    // Init Grunt
        grunt.initConfig(projectConfig);

    // Register Tasks
    // ----------------

    // Watch Project - $ grunt
    grunt.registerTask( "default", [ "watch" ]);

    // Uglify js - $ grunt u
    grunt.registerTask( "u", [ "uglify" ]);


};