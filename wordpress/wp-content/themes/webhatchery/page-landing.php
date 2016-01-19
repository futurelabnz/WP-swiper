<?php
/**
 * Template Name: s01 Landing with logo
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery',$page->ID);
?>

<div class="slide1">
  <img class="logo" src="<?php echo $gallery[0]['url'];?>">
  <img class="swipe" src="<?php echo $gallery[1]['url'];?>">
  <p>
    <?php echo $page->post_title; ?>
  </p>
  <p>
    <?php echo $page->post_content; ?>
  </p>
</div>