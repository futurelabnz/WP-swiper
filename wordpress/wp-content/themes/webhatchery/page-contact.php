<?php
/**
 * Template Name: s04 contact page
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery',$page->ID);
?>

<div class="slide1 contact-page">
   

  <div class="row">
  	   <div class="col-md-6">
		  <!--<h2>
    		<?php echo $page->post_title; ?>
  		  </h2> -->
  		   <p>
		    <?php echo $page->post_content; ?>
		  </p>
	   </div>
	   <div class="col-md-6">
		 
		<?php echo do_shortcode( '[contact-form-7 id="58" title="Contact form 1"]' ); ?>
	  </div>
  </div>

</div>