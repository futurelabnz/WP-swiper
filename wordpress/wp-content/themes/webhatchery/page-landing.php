<?php
/**
 * Template Name: s01 Landing with logo
 *
 * @package    WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field( 'gallery', $page->ID );
?>

<div class="slide1">
	<img class="logo" src="<?php echo esc_url( $gallery[0]['url'] ); ?>">
	<img class="swipe" src="<?php echo esc_url( $gallery[1]['url'] ); ?>">
	<p class="landing-title">
		<?php echo esc_html( $page->post_title ); ?>
	</p>
	<p>
		<?php echo wp_kses_post( $page->post_content ); ?>
	</p>
</div>
