<?php
/**
 * Template Name: s02 Side Content - 
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery', $child->ID);
//print_r($child);
?>
<div class="slide1">
	<div class="row">
		<div class="col-md-6 columns">
			<img class="slide-image one" src="<?php echo $gallery[0]['url'];?>">	
			<img class="slide-image two" src="<?php echo $gallery[1]['url'];?>">	
			<img class="slide-image three" src="<?php echo $gallery[2]['url'];?>">	
			<img class="slide-image four" src="<?php echo $gallery[3]['url'];?>">
		</div>
		<div class="col-md-6 columns">
			<h2>
			   <?php echo $child->post_title; ?>
			</h2>
      		<p class="home-content-text">
			   <?php echo $child->post_content; ?>
			</p>
		</div>
	</div>
</div>
