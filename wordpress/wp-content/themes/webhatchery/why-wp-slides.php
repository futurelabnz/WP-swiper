<?php
/**
 * Template Name: s05 Why Wordpress slides
 *
 * @package    WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field( 'gallery', $subchild->ID );
//print_r($child);
?>


<div class="row text-box">
	<div class="col-sm-6">
		<h3 class="mobile_only"><?php echo esc_html( $subchild->post_title ); ?></h3>
		<img class="icons" src="<?php echo esc_url( $gallery[0]['url'] ); ?>"></div>
	<div class="col-sm-6 t-l-desktop">
		<h3 class="desktop_only"><?php echo esc_html( $subchild->post_title ); ?></h3>
		<p><?php echo wp_kses_post( $subchild->post_content ); ?></p></div>
</div>
