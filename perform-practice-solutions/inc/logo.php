<?php
/**
 * Logo output helper.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Theme bundled logo paths (header uses dark wordmark; footer uses light).
 *
 * @param string $context header|footer.
 * @return array{url:string,path:string,width:int,height:int}|null
 */
function pps_theme_logo_asset( $context = 'header' ) {
	$file = ( 'footer' === $context ) ? 'pps-logo-light.png' : 'pps-logo.png';
	$rel  = '/assets/images/' . $file;
	$path = PPS_THEME_DIR . $rel;

	if ( ! file_exists( $path ) ) {
		// Fallback if only the default logo exists.
		$rel  = '/assets/images/pps-logo.png';
		$path = PPS_THEME_DIR . $rel;
	}

	if ( ! file_exists( $path ) ) {
		return null;
	}

	$size = @getimagesize( $path );
	$ver  = (string) filemtime( $path );

	return array(
		'url'    => PPS_THEME_URI . $rel . '?ver=' . $ver,
		'path'   => $path,
		'width'  => $size ? (int) $size[0] : 477,
		'height' => $size ? (int) $size[1] : 150,
	);
}

/**
 * Render site logo or text fallback.
 *
 * @param string $context Context class modifier.
 */
function pps_the_logo( $context = 'header' ) {
	$brand   = site_data( 'brand_name' );
	$short   = site_data( 'brand_short' );
	$class   = 'site-logo-link site-logo-link--' . sanitize_html_class( $context );
	$asset   = pps_theme_logo_asset( $context );

	echo '<a class="' . esc_attr( $class ) . '" href="' . esc_url( home_url( '/' ) ) . '">';

	if ( $asset ) {
		printf(
			'<img class="site-logo-img site-logo-img--%1$s" src="%2$s" alt="%3$s" width="%4$d" height="%5$d" decoding="async" />',
			esc_attr( $context ),
			esc_url( $asset['url'] ),
			esc_attr( $brand ),
			(int) $asset['width'],
			(int) $asset['height']
		);
	} elseif ( has_custom_logo() ) {
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
