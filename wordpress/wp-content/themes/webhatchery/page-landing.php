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
  <img style="width: 20px; height: 20px;">
  <p>
    <?php echo $post->post_title; ?>
  </p>
</div>