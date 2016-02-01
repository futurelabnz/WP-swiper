<?php
/**
 * Template Name: s03 Wordpress Demo
 *
 * @package    WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field( 'gallery', $page->ID );
?>


<div class="slide1 demo-page">
	<h2 class="demo-title">
		<?php echo esc_html( $page->post_title ); ?>
	</h2>

	<div class="row">
		<div class="col-md-12">
			<div style="position:relative;">
				<img class="demo" src="<?php echo esc_url( $gallery[0]['url'] ); ?>">
				<img class="arrow" src="<?php echo esc_url( $gallery[1]['url'] ); ?>">
			</div>
			<p class="">
				<?php echo wp_kses_post( $page->post_content ); ?>
			</p>
		</div>
	</div>

	<!-- <div class="btn yellow"><a href=""> </a></div> -->
</div>
