<?php

/**
 * Plugin Name: test
 * Description: Simple Shortcode Plugin
 * Author: Eddy B.
 * Version: 1.0.0
 */

//Define function called by short code
function test_func()
{
  $txt = "TEST SUCCEEDED!";
  return $txt;
}

//Define "test" short code and specify function to call
add_shortcode('test', 'test_func');
