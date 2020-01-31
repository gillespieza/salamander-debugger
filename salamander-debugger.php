<?php
/*
Plugin Name: Salamander Debugger
Description: Very simply creates a wrapper for print_r statements in other plugins/theme development. Use <code>print_r_pre()</code> instead of <code>print_r()</code>
Version: 1.1
Author: Salamander Web Media
Author URI: http://www.salamanderthemes.net
License: GPLv2
*/

/*
 * @package WordPress
*/

if ( ! function_exists( 'print_r_pre' ) ) {
	function print_r_pre($argument) {
		echo "
    <pre style='background: #eaeff3; border: 1px dashed steelblue; display: block; color: steelblue; margin: 10px; overflow: hidden; padding: 2px 5px; word-wrap: break-word'>";
		print_r($argument);
		echo "</pre>
    ";
	}
}
