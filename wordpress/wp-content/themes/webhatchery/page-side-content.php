<?php
/**
 * Template Name: s02 Side Content
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery', $child->ID);
//print_r($child);
?>
<div class="slide1">
	<div class="row">
		<div class="col-md-6">
			<img class="slide-image" src="<?php echo $gallery[0]['url'];?>">	
		</div>
		<div class="col-md-6">
			<p>
			   <?php echo $child->post_title; ?>
			</p>
      <p>
			   <?php echo $child->post_content; ?>
			</p>
		</div>
	</div>
</div>
