<?php
/**
 * Template Name: s05 Why Wordpress slides
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery',$page->ID);
//print_r($child);
?>



<div class="slide1">
  <h2 class="title">So why Wordpress?</h2>
   <h5 class="reason-title">
    <?php echo $page->post_title; ?>
  </h5>

  <div class="row">
  	   <div class="col-md-10">
		  <img class="" src="<?php echo $gallery[0]['url'];?>">

		  <p >
		    <?php echo $page->post_content; ?>
		  </p>

      <div></div>

      <p>See for yourself just how easy WordPress is to edit! </p>
      <a href="#" class="yellow btn">Show Me</a>
      
	  </div>
  </div>

  <!-- <div class="btn yellow"><a href=""> </a></div> -->
</div>