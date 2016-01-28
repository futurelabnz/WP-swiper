<?php
/**
 * Template for displaying search form in webhatchery theme
 *
 * @package webhatchery
 */
?>
<form role="search" method="get" class="search-form form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label for="form-search-input" class="sr-only"><?php esc_html_x( 'Search for', 'label', 'webhatchery' ); ?></label>
	<div class="input-group">
		<input type="search" id="form-search-input" class="form-control" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'webhatchery' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label', 'webhatchery' ); ?>">
		<span class="input-group-btn">
			<button type="submit" class="btn btn-default"><?php esc_html_e( 'Search', 'webhatchery' ); ?></button>
		</span>
	</div>
</form>
