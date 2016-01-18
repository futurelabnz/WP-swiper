<?php
/**
 * Template Name: s03  - one col centered contents 
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery', $child->ID);
//print_r($child);
?>
<div class="slide1">
	<div class="row">
		<div class="col-md-12 columns">
		
			<h2>
			   <?php echo $child->post_title; ?>
			</h2>
      		<p class="home-content-text">
			   <?php echo $child->post_content; ?>
			</p>
			<img class="slide-image one" src="<?php echo $gallery[0]['url'];?>">	
			<img class="slide-image two background" src="<?php echo $gallery[1]['url'];?>">	
			
		</div>
	</div>
</div>
