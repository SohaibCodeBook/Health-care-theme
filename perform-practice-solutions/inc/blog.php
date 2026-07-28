<?php
/**
 * Blog templates — helpers, styles, body classes.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Whether the current view is part of the blog.
 *
 * @return bool
 */
function pps_is_blog_view() {
	if ( is_singular( 'post' ) ) {
		return true;
	}

	if ( is_home() || is_category() || is_tag() || is_author() || is_date() ) {
		return true;
	}

	return is_search() && ! is_page();
}

/**
 * Estimated reading time in minutes.
 *
 * @param int|null $post_id Post ID.
 * @return int
 */
function pps_blog_reading_time( $post_id = null ) {
	$post_id = $post_id ? (int) $post_id : get_the_ID();
	$content = get_post_field( 'post_content', $post_id );
	$words   = str_word_count( wp_strip_all_tags( (string) $content ) );

	return max( 1, (int) ceil( $words / 200 ) );
}

/**
 * Blog archive URL.
 *
 * @return string
 */
function pps_blog_url() {
	$posts_page_id = (int) get_option( 'page_for_posts' );
	if ( $posts_page_id ) {
		$url = get_permalink( $posts_page_id );
		if ( $url ) {
			return $url;
		}
	}

	return home_url( '/blog/' );
}

/**
 * Force blog CSS in head (for hosts that miss enqueued files).
 */
function pps_blog_force_styles() {
	if ( ! pps_is_blog_view() ) {
		return;
	}
	pps_print_theme_style_inline( 'pps-blog', '/assets/css/blog.css' );
}
add_action( 'wp_head', 'pps_blog_force_styles', 99 );

/**
 * Register blog stylesheet.
 */
function pps_blog_register_styles() {
	pps_enqueue_theme_style( 'pps-blog', '/assets/css/blog.css', array() );
}

/**
 * Enqueue blog assets.
 */
function pps_blog_enqueue_assets() {
	if ( pps_is_blog_view() ) {
		pps_blog_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_blog_enqueue_assets', 25 );

/**
 * Body class for blog views.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_blog_body_class( $classes ) {
	if ( pps_is_blog_view() ) {
		$classes[] = 'pps-blog-page';
	}
	if ( is_singular( 'post' ) ) {
		$classes[] = 'pps-single-post';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_blog_body_class' );

/**
 * Blog archive intro copy.
 *
 * @return string
 */
function pps_blog_archive_lead() {
	return __( 'Practical insights on medical billing, credentialing, practice growth, and healthcare operations for allied health and specialty providers.', 'perform-practice' );
}
