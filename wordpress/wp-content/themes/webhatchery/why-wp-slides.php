<?php
/**
 * Template Name: s05 Why Wordpress slides
 *
 * @package WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field('gallery',$subchild->ID);
//print_r($child);
?>

<h3><?php echo $subchild->post_title; ?></h3>

<div class="row">
  <div class="col-sm-6"><img class="icons" src="<?php echo $gallery[0]['url'];?>"></div>
  <div class="col-sm-6"><p><?php echo $subchild->post_content; ?></p></div>

</div>