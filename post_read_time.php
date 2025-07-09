<?php

/*
 * Plugin Name:       Post Reading time
 * Plugin URI:        https://codehierx.com
 * Description:       The Post Reading Time plugin automatically calculates and displays the estimated time it will take to read your posts or pages. This improves user experience by helping readers gauge the time commitment before they start reading.
 * Version:           1.0.0
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            Asaduzzaman nur
 * Author URI:        https://asadnur.com
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       post-reading-plugin
 * Domain Path:       /languages
 */
defined(constant_name: ('ABSPATH')) || exit;

//  register_activation_hook(
// 	__FILE__,
// 	'pluginprefix_function_to_run'
// );
// register_deactivation_hook(
// 	__FILE__,
// 	'pluginprefix_function_to_run'
// );

 require_once plugin_dir_path( __FILE__ ) .'includes/my_fast_plugin.php';

new post_read_time();