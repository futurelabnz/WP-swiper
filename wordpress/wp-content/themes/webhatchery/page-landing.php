<?php
/**
 * Template Name: s01 Landing with logo
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery');
?>

<div class="slide1">
  <img class="logo" src="<?php echo $gallery[0]['url'];?>">
  <p>
    <?php echo $post->post_title; ?>
  </p>
</div>