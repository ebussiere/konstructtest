<?php
require('getfeed.php');
/**
 * Plugin Name: RSS Test Plugin
 * Description: RSS Test Plugin
 * Author: Eddy B.
 * Version: 1.0.0
 * 
 * @param array  $atts    Shortcode attributes. Default empty.
 * @param string $content Shortcode content. Default null.
 * @param string $tag     Shortcode tag (name). Default empty.
 * @return string Shortcode output.
 */



//Define function called by short code
function kd_feed_func($atts = [], $content = null, $tag = '')
{
  // normalize attribute keys, lowercase
  $atts = array_change_key_case((array) $atts, CASE_LOWER);

  // override default attributes with user attributes
  $wporg_atts = shortcode_atts(
    array(
      'number_of_posts' => '0',
    ),
    $atts,
    $tag
  );
  return getFeed($atts['number_of_posts']);
}
add_shortcode('kd_feed', 'kd_feed_func');
