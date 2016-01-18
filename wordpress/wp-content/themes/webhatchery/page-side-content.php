<?php
/**
 * Template Name: s02 Side Content
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery');
echo $child;
?>
<div class="slide1">
	<div class="row">
		<div class="col-md-6">
			<img class="slide-image" src="<?php echo $gallery[0]['url'];?>">	
		</div>
		<div class="col-md-6">
			<p>
			   <?php echo $post->post_title; ?>
			</p>
		</div>
	</div>
</div>
