# livereload
Livereload.js for WordPress admin and theme templates

### Grunt Livereload for WordPress
Contributors: ReneHermi
Tags: Grunt, Livereload
Requires at least: 3.3
Tested up to: 4.2
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Stable tag: 1.0.0

Enqueues livereload.js for Grunt module grunt-contrib-watch into theme and admin template.

## Description

This simple plugin enqueues livereload.js into your theme and admin template. This is needed if you are using Grunt, grunt-contrib-watch and the livereload option.
This script uses the default port 35729 of grunt-contrib-watch. If you like to use another port change it on line 45 of livereload.php.

Example grunt configuration which watches all php files and reloads your browser when there are any changes:

*gruntfile.js*

```module.exports = function(grunt) {
    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        watch: {
              /* watch our files for change, reload */
              livereload: {
                files: ['**/*.php'],
                options: {
                  livereload: true
                }
              }
        }
    });
    // Load all grunt plugins here
    require('load-grunt-tasks')(grunt);
    // Display task timing
    require('time-grunt')(grunt);
    // Build task
    grunt.registerTask( 'default', 'watch');
};```

*package.json*
```{
  "name": "myProject",
  "version": "1.0.0",
  "devDependencies": {
    "grunt": "~0.4.5",
    "grunt-contrib-watch": ">=0.5.3",
    "load-grunt-tasks": "~3.1.0",
    "time-grunt": "~1.1.0",
  }
}```

#### Contributing code

The development [source code for this plugin is available on Mashshare´s GitHub account](https://github.com/mashshare/wordpress). [Pull Requests](https://github.com/facebook/wordpress/pulls) and code discussion welcome.

### Installation

1. Install this plugin either via the WordPress.org plugin directory, or by uploading the files to your server (in the `/wp-content/plugins/` directory).
1. That's it. You're ready to go!


### Changelog

= 1.0 =

* First release
