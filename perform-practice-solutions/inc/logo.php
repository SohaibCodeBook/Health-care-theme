<?php
/**
 * Logo output helper.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Render site logo or text fallback.
 *
 * @param string $context Context class modifier.
 */
function pps_the_logo( $context = 'header' ) {
	$brand = site_data( 'brand_name' );
	$short = site_data( 'brand_short' );
	$class = 'site-logo-link site-logo-link--' . sanitize_html_class( $context );

	echo '<a class="' . esc_attr( $class ) . '" href="' . esc_url( home_url( '/' ) ) . '">';

	if ( has_custom_logo() ) {
		$logo_id = get_theme_mod( 'custom_logo' );
		$logo    = wp_get_attachment_image_src( $logo_id, 'full' );
		if ( $logo ) {
			printf(
				'<img class="site-logo-img" src="%1$s" alt="%2$s" width="%3$d" height="%4$d" />',
				esc_url( $logo[0] ),
				esc_attr( $brand ),
				(int) $logo[1],
				(int) $logo[2]
			);
		}
	} else {
		echo '<span class="site-logo-mark" aria-hidden="true">' . esc_html( $short ) . '</span>';
		echo '<span class="site-logo-text">';
		echo '<span class="site-logo-text__name">' . esc_html( $brand ) . '</span>';
		if ( 'header' === $context ) {
			echo '<span class="site-logo-text__tag">' . esc_html__( 'Practice Growth Partners', 'perform-practice' ) . '</span>';
		}
		echo '</span>';
	}

	echo '</a>';
}
