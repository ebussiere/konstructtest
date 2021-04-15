<?php

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

function getFeed()
{
  include_once(ABSPATH . WPINC . '/feed.php');
  // Get a SimplePie feed object from the specified feed source.
  $rss = fetch_feed('https://www.konstructdigital.com/feed/');
  $maxitems = 0;
  if (!is_wp_error($rss)) : // Checks that the object is created correctly
    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity(7);
    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems);
  endif;
?>
  <?php if ($maxitems == 0) : ?>
    <ul>
      <li><?php _e('No items', 'my-text-domain'); ?></li>
    </ul>
  <?php else : ?>
    <!-- Loop through each feed item and display each item as a hyperlink. -->
    <?php
    echo '<div class="row" style="display:flex;flex-wrap: wrap; justify-content:space-between;">';
    foreach ($rss_items as $item) :
    ?>
      <div class="card" style="width:25%; margin:10px;">
        <img src="https://www.konstructdigital.com/wp-content/uploads/2021/04/SEO-is-dead-banner.jpg" alt="" style="width:100%">
        <a title="<?php printf(__('Posted %s', 'my-text-domain'), $item->get_date('j F Y | g:i a')); ?>" href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank" rel="noopener">

          <?php echo esc_html($item->get_title()); ?></a> - <?php echo esc_html($item->get_date('F j, Y')); ?>
        <p>
          <?php echo substr($item->get_description(), 0, 150); ?> <a title="<?php echo esc_html($item->get_title()); ?>" href="<?php echo esc_url($item->get_permalink()); ?>">Continue Reading</a></p>
      </div>
<?php endforeach;
    echo '</div>';
  endif;
}

//Define function called by short code
function kd_feed_func($atts = [], $content = null, $tag = '')
{
  // normalize attribute keys, lowercase
  $atts = array_change_key_case((array) $atts, CASE_LOWER);

  // override default attributes with user attributes
  $wporg_atts = shortcode_atts(
    array(
      'number_of_posts' => '-1',
    ),
    $atts,
    $tag
  );
  return getFeed();
}
add_shortcode('kd_feed', 'kd_feed_func');
