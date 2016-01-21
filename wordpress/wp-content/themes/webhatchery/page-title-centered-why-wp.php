<?php
/**
 * Template Name: s03 Why Use Wordpress
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery',$page->ID);
//print_r($child);
?>



<div class="slide1">
   <h2 class="title">
    <?php echo $page->post_title; ?>
  </h2>

  <div class="row">
  	   <div class="col-md-8">
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