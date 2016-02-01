<?php
/**
 * Template for dispalying single post (read full post page).
 *
 * @package webhatchery
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = webhatcheryGetMainColumnSize();
?>
<?php get_sidebar( 'left' ); ?>
<div class="col-md-<?php echo sanitize_html_class( $main_column_size ); ?> content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'content', get_post_format() );

			echo "\n\n";

			webhatcheryPagination();

			echo "\n\n";

			// If comments are open or we have at least one comment, load up the comment template
			if ( comments_open() || '0' != get_comments_number() ) {
				comments_template();
			}

			echo "\n\n";

		} //endwhile;
		?>
	</main>
</div>
<?php get_sidebar( 'right' ); ?>
<?php get_footer(); ?> 
