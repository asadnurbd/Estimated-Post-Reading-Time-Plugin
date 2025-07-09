<?php
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