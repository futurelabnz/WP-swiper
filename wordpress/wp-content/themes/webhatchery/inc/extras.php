<?php
/**
 * Bootstrap Basic theme extras
 * Hook functions that replaced core features.
 *
 * @package webhatchery
 */

if ( ! function_exists( 'webhatcheryExcerptMore' ) ) {
	function webhatcheryExcerptMore( $more ) {
		return ' &hellip;';
	}// webhatcheryExcerptMore
}
add_filter( 'excerpt_more', 'webhatcheryExcerptMore' );


if ( ! function_exists( 'webhatcheryImageSendToEditor' ) ) {
	/**
	 * remove rel attachment that is not valid html element
	 *
	 * @param string  $html
	 * @param integer $id
	 *
	 * @return string
	 */
	function webhatcheryImageSendToEditor( $html, $id ) {
		if ( $id > 0 ) {
			$html = str_replace( 'rel="attachment wp-att-' . $id . '"', '', $html );
		}

		return $html;
	}// webhatcheryImageSendToEditor
}
add_filter( 'image_send_to_editor', 'webhatcheryImageSendToEditor', 10, 2 );


if ( ! function_exists( 'webhatcheryLinkPagesLink' ) ) {
	/**
	 * replace pagination in posts/pages content to support bootstrap pagination class.
	 *
	 * @param string  $link
	 * @param integer $i
	 *
	 * @return string
	 */
	function webhatcheryLinkPagesLink( $link, $i ) {
		if ( strpos( $link, '<a' ) === false ) {
			return '<li class="active"><a href="#">' . $link . '</a></li>';
		} else {
			return '<li>' . $link . '</li>';
		}
	}// webhatcheryLinkPagesLink
}
add_filter( 'wp_link_pages_link', 'webhatcheryLinkPagesLink', 10, 2 );


if ( ! function_exists( 'webhatcheryNavMenuCssClass' ) ) {
	/**
	 * Add custom class to nav menu
	 *
	 * @param array  $classes
	 * @param object $menu_item
	 *
	 * @return array
	 */
	function webhatcheryNavMenuCssClass( $classes = array(), $menu_item = false ) {
		if ( ! is_array( $menu_item->classes ) ) {
			return $classes;
		}

		if ( in_array( 'current-menu-item', $menu_item->classes ) ) {
			$classes[] = 'active';
		}

		if ( in_array( 'menu-item-has-children', $menu_item->classes ) ) {
			$classes[] = 'dropdown';
		}

		if ( in_array( 'sub-menu', $menu_item->classes ) ) {
			$classes[] = 'dropdown-menu';
		}

		return $classes;
	}// webhatcheryNavMenuCssClass
}
add_filter( 'nav_menu_css_class', 'webhatcheryNavMenuCssClass', 10, 2 );


if ( ! function_exists( 'webhatcheryWpTitle' ) ) {
	/**
	 * Filters wp_title to print a neat <title> tag based on what is being viewed.
	 *
	 * copy from underscore theme.
	 */
	function webhatcheryWpTitle( $title, $sep ) {
		global $page, $paged;

		if ( is_feed() ) {
			return $title;
		}

		// Add the blog name
		$title .= get_bloginfo( 'name' );

		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		if ( $site_description && ( is_home() || is_front_page() ) ) {
			$title .= " $sep $site_description";
		}

		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 ) {
			$title .= " $sep " . sprintf( __( 'Page %s', 'webhatchery' ), max( $paged, $page ) );
		}

		return $title;
	}// webhatcheryWpTitle
}
add_filter( 'wp_title', 'webhatcheryWpTitle', 10, 2 );

