<?php
/**
 * Contact Us page — content, Customizer, setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content for the Contact Us page.
 *
 * @return array
 */
function pps_contact_defaults() {
	return array(
		'seo_title' => 'Contact Us | Perform Practice Solutions',
		'seo_desc'  => 'Contact Perform Practice Solutions about medical billing, credentialing, marketing, virtual staffing, coaching, or AI automation for your healthcare practice.',

		'hero_eyebrow' => 'Contact Us',
		'hero_title'   => 'Let\'s talk about your practice',
		'hero_lead'    => 'Whether you need billing support, credentialing help, marketing, virtual staffing, coaching, or AI automation — tell us what you\'re working on and our team will follow up quickly.',
		'hero_cta'     => 'Scroll to the form',
		'hero_cta_url' => '#contact',

		'contact_eyebrow'    => 'Let\'s Chat',
		'contact_title'      => 'Take the first step',
		'contact_lead'       => 'Talk with us about healthcare billing, eligibility, credentialing, marketing, virtual staffing, coaching, or AI automation for your practice.',
		'contact_form_title' => 'Get a Custom Quote',
		'contact_form_lead'  => 'Share a few details and our team will follow up shortly.',
	);
}

/**
 * Contact page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_contact( $key, $default = '' ) {
	$defaults = pps_contact_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_contact_' . $key, $default );
}

/**
 * Register Customizer settings for Contact page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_contact_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_contact_page',
		array(
			'title'    => __( 'Contact Us Page', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 6,
		)
	);

	foreach ( pps_contact_defaults() as $key => $default ) {
		$setting_id  = 'pps_contact_' . $key;
		$is_textarea = (bool) preg_match( '/(_lead|seo_desc)$/', $key );
		$is_url      = (bool) preg_match( '/_url$/', $key );

		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $default,
				'sanitize_callback' => $is_url ? 'esc_url_raw' : ( $is_textarea ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
			)
		);
		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => ucwords( str_replace( '_', ' ', $key ) ),
				'section' => 'pps_section_contact_page',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_contact_customize_register', 21 );

/**
 * Whether current page uses Contact template.
 *
 * @return bool
 */
function pps_is_contact_page() {
	return is_page_template( 'page-templates/contact.php' ) || is_page( 'contact-us' );
}

/**
 * SEO title for Contact page.
 *
 * @param string $title Title.
 * @return string
 */
function pps_contact_document_title( $title ) {
	if ( ! pps_is_contact_page() ) {
		return $title;
	}
	$custom = page_contact( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_contact_document_title', 25 );

/**
 * Meta description for Contact page.
 */
function pps_contact_meta_description() {
	if ( ! pps_is_contact_page() ) {
		return;
	}
	$desc = page_contact( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_contact_meta_description', 1 );

/**
 * Skip duplicate generic meta on Contact page.
 */
function pps_skip_generic_seo_meta_on_contact_page() {
	if ( pps_is_contact_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_skip_generic_seo_meta_on_contact_page' );

/**
 * Create/update Contact Us page and assign template.
 */
function pps_setup_contact_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_contact_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_contact_defaults();
	$page     = get_page_by_path( 'contact-us' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Contact Us',
				'post_name'   => 'contact-us',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/contact.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	update_option( 'pps_contact_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_contact_page', 46 );
