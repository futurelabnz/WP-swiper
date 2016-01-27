<?php
/**
 * Template Name: s02 Side Content -
 *
 * @package    WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field( 'gallery', $child->ID );
//print_r($child);
?>
<div class="slide1">
	<div class="row">
		<div class="col-md-6 columns">
			<img class="slide-image one" src="<?php echo esc_url( $gallery[0]['url'] ); ?>">
			<img class="slide-image two" src="<?php echo esc_url( $gallery[1]['url'] ); ?>">
			<img class="slide-image three" src="<?php echo esc_url( $gallery[2]['url'] ); ?>">
			<img class="slide-image four" src="<?php echo esc_url( $gallery[3]['url'] ); ?>">
		</div>
		<div class="col-md-6 columns">
			<div class="text-box">
				<h2>
					<?php echo esc_html( $child->post_title ); ?>
				</h2>
				<p class="home-content-text">
					<?php echo wp_kses_post( $child->post_content ); ?>
				</p>
			</div>
		</div>
	</div>
</div>
