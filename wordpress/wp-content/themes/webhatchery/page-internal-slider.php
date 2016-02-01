<?php
/**
 * Template Name: s06 Internal slider
 *
 * @package    WordPress
 * @subpackage Webhatchery
 */
$gallery = get_field( 'gallery', $page->ID );
?>

<div class="internal-slider" style="width:100%; max-width: 750px; height:auto;">
	<h2 class="reason-title">
		<?php echo esc_html( $child->post_title ); ?>
	</h2>

	<?php $subchildren = get_pages( array( 'parent' => $child->ID, 'sort_column' => 'post_date' ) ); ?>
	<?php if ( ! empty( $subchildren ) ): ?>
		<div class="swiper-container swiper-subchild">
			<div class="swiper-wrapper">
				<?php foreach ( $subchildren as $skey => &$subchild ): ?>
					<div class="swiper-slide xxxxx">
						<?php include( locate_template( get_page_template_slug( $subchild->ID ) ) ); ?>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="swiper-subchild-next"></div>
			<div class="swiper-subchild-prev"></div>
		</div>
	<?php endif; ?>


	<div class="col-md-12">

		<p>See for yourself just how easy WordPress is to edit! </p>
		<a href="http://demo.webhatchery.co.nz/wp-login.php" target="_blank" class="yellow btn">Show Me</a>
	</div>
</div>


