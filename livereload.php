<?php

/*
Plugin Name: Grunt Livereload for WordPress
Plugin URI: https://www.mashshare.net
Description: Embed livereload.js into your theme and admin template
Author: René Hermenau
Author URI: https://www.mashshare.net
Version: 1.0
License: GPL2++

Livereload.js for WordPress in combination with Grunt
Copyright (C) 2015, René Hermenau info@mashshare.net

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

*/



/**
 * Load Scripts
 *
 * Enqueues the livereload.js
 *
 * @since 1.0
 * @global $post
 * @return void
 */

function lrel_output_script( ) {
    $port = '35729';
    $script = get_site_url().':'.$port.'/livereload.js';
    wp_enqueue_script( 'lrel_livereload_script', $script, '', '1.0', true );
}
add_action( 'admin_enqueue_scripts', 'lrel_output_script', 100 );
add_action( 'wp_enqueue_scripts', 'lrel_output_script' );
