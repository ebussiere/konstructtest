<?php



function getFeed($postCount = '0')
{
  include_once(ABSPATH . WPINC . '/feed.php');
  // Get feed from the specified feed source.
  $rss = fetch_feed('https://www.konstructdigital.com/feed/');
  $maxitems = 0;
  if (!is_wp_error($rss)) : // Check for error
    // Figure out how many total items there are, but limit it to short code value. 
    $maxitems = $rss->get_item_quantity($postCount);
    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items(0, $maxitems);
  endif;
?>
  <!-- if no items exist indicate no posts -->
  <?php if ($maxitems == 0) : ?>
    <ul>
      <li><?php _e('No Posts'); ?></li>
    </ul>
  <?php else : ?>
    <?php
    echo '<div class="row" style="display:flex;flex-wrap: wrap; justify-content:space-between;">';
    foreach ($rss_items as $item) :
    ?>
      <div class="card" style="width:25%; margin:10px;">
        <img src="https://www.konstructdigital.com/wp-content/uploads/2021/04/SEO-is-dead-banner.jpg" alt="" style="width:100%">
        <a title="<?php printf(__('Posted %s', 'my-text-domain'), $item->get_date('j F Y | g:i a')); ?>" href="<?php echo esc_url($item->get_permalink()); ?>" target="_blank" rel="noopener">

          <?php echo esc_html($item->get_title()); ?></a> - <?php echo esc_html($item->get_date('F j, Y')); ?>
        <p>
          <?php echo substr($item->get_description(), 0, 150); ?> <a title="<?php echo esc_html($item->get_title()); ?>" href="<?php echo esc_url($item->get_permalink()); ?>">...</a></p>
      </div>
<?php endforeach;
    echo '</div>';
  endif;
}
