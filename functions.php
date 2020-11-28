<?php

/*
 Theme Name:   Twenty Twenty Child
 Theme URI:    http://aaeglobal/twenty-twenty-child/
 Description:  Twenty Twenty Child Theme
 Author:       Y Leventhal
 Author URI:   https://codebyline.net
 Template:     twentytwenty
 Version:      1.0
 License:      GNU General Public License v2 or later
 License URI:  http://www.gnu.org/licenses/gpl-2.0.html
 Text Domain:  twentytwentychild
*/



add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}
?>


