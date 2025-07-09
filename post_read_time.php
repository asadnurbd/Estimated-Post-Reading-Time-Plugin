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

 class post_read_time{
    public function __construct(){
        add_filter("the_content", array( $this,"prt_content_read_time") );
        add_action('wp_footer', [$this, 'add_footer_note']); 

 }

 function prt_content_read_time($content) {

       $content2=$content .'<p style="color:blue;">This is my content please do not change</p>';
       $count=str_word_count(strip_tags($content2));
      $cal=ceil($count/200);

    return 'Reading Time :' .'<strong style="color:green; font-weight:bold;">'.$cal. '</strong>'.'<span style="color:green; font-weight:bold;">&nbsp;Munite</span> '. $content2;

 }

 public function add_footer_note() { 
echo '<p style="text-align:center;">Powered by My OOP Plugin</p>'; 
} 
}

new post_read_time();