<?php
/**
 * Our Team page — content, Customizer, page + menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default Our Team content.
 *
 * @return array
 */
function pps_team_defaults() {
	return array(
		'seo_title' => 'Our Team | Perform Practice Solutions',
		'seo_desc'  => 'Meet the Perform Practice Solutions leadership team helping healthcare practices grow revenue, streamline operations, and stay focused on care.',

		'page_title' => 'Our Leadership Team',

		'kevin_badge'     => 'Meet Kevin Rausch',
		'kevin_name'      => 'Kevin Rausch, PT, MPT',
		'kevin_image'     => '',
		'kevin_bio'       => 'Kevin is a nationally renowned speaker whose mission is to take the healthcare profession to the next level. He specializes in medical business operations and marketing, helping clinic owners succeed by sharing his experience as a physical therapist and practice owner and his passion for combining the science of physical therapy with the art of running a business. Kevin is an expert at integrating cash-based services (massage, Pilates, yoga, pelvic PT) to build clinic revenues while offering additional options for patient care.',
		'kevin_highlight' => 'As a successful business creator and owner, Kevin has built numerous clinics and organizations from the ground up.',
		'kevin_bullet_1'  => 'President of Rausch Physical Therapy',
		'kevin_bullet_2'  => 'Founder of homeprograms.net',
		'kevin_bullet_3'  => "Founder of Waypoint Children's Foundation",
		'kevin_edu_title' => 'Education',
		'kevin_edu_1_org' => 'Nova Southeastern University',
		'kevin_edu_1_det' => "Master's, Physical Therapy 2003",
		'kevin_edu_2_org' => 'Cal Baptist University',
		'kevin_edu_2_det' => 'B.S., Exercise Physiology, 2001',
		'kevin_aff_title' => 'Affiliations',
		'kevin_aff_1_role' => 'President',
		'kevin_aff_1_org'  => 'Rausch Physical Therapy',
		'kevin_aff_2_role' => 'Founder',
		'kevin_aff_2_org'  => 'homeprograms.net',
		'kevin_aff_3_role' => 'Founder',
		'kevin_aff_3_org'  => "Waypoint Children's Foundation",

		'member_1_name'  => 'Courtney Crocker',
		'member_1_title' => 'Director of Perform Practice Solutions',
		'member_1_bio'   => 'I bring over a decade of experience helping healthcare practices unlock growth, maximize revenue, and...',
		'member_1_phone' => '833-764-0178',
		'member_1_email' => 'Courtney@PerformPracticeSolutions.com',
		'member_1_image' => '',

		'member_2_name'  => 'Kari Landrum',
		'member_2_title' => 'Business Manager',
		'member_2_bio'   => "With twenty years experience in health care, Kari is one of Perform Practice Solutions's Master...",
		'member_2_phone' => '833-764-0178',
		'member_2_email' => 'Kari@PerformPracticeSolutions.com',
		'member_2_image' => '',

		'member_3_name'  => 'Kris Jorge',
		'member_3_title' => 'Sales & Marketing Director',
		'member_3_bio'   => 'With over a decade in sales and marketing, Kris Jorge helps businesses uncover revenue growth...',
		'member_3_phone' => '702-600-0483',
		'member_3_email' => 'Kris@PerformPracticeSolutions.com',
		'member_3_image' => '',

		'member_4_name'  => 'Gianni Gonzalez',
		'member_4_title' => 'Provider Credentialing & Enrollment Expert',
		'member_4_bio'   => "Every day a provider isn't credentialed is revenue walking out the door. With 20+ years...",
		'member_4_phone' => '702-725-4950',
		'member_4_email' => 'Credentialing@PerformPT.net',
		'member_4_image' => '',

		'member_5_name'  => 'Leo Benedict Pascual',
		'member_5_title' => 'Customer Success Manager / VA Manager',
		'member_5_bio'   => 'With over a decade of leadership experience in the insurance and healthcare verticals, Leo specializes...',
		'member_5_phone' => '949-392-5244',
		'member_5_email' => 'Leo@PerformPracticeSolutions.com',
		'member_5_image' => '',
	);
}

/**
 * Our Team page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_team( $key, $default = '' ) {
	$defaults = pps_team_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	$value = (string) get_theme_mod( 'pps_team_' . $key, $default );
	if ( 'kevin_image' === $key && '' === $value ) {
		return PPS_THEME_URI . '/assets/images/founder.jpeg';
	}
	return $value;
}

/**
 * Structured team members for the template.
 *
 * @return array
 */
function pps_team_members() {
	$members = array();
	for ( $i = 1; $i <= 5; $i++ ) {
		$name = page_team( "member_{$i}_name" );
		if ( '' === trim( $name ) ) {
			continue;
		}
		$members[] = array(
			'name'  => $name,
			'title' => page_team( "member_{$i}_title" ),
			'bio'   => page_team( "member_{$i}_bio" ),
			'phone' => page_team( "member_{$i}_phone" ),
			'email' => page_team( "member_{$i}_email" ),
			'image' => page_team( "member_{$i}_image" ),
		);
	}
	return $members;
}

/**
 * Register Customizer for Our Team page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_team_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_team_page',
		array(
			'title'    => __( 'Our Team', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 8,
		)
	);

	foreach ( pps_team_defaults() as $key => $default ) {
		$setting_id  = 'pps_team_' . $key;
		$is_textarea = (bool) preg_match( '/(_bio|_highlight|seo_desc)$/', $key );
		$is_image    = (bool) preg_match( '/_image$/', $key );

		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $default,
				'sanitize_callback' => $is_image ? 'esc_url_raw' : ( $is_textarea ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
			)
		);

		if ( $is_image ) {
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					$setting_id,
					array(
						'label'   => ucwords( str_replace( '_', ' ', $key ) ),
						'section' => 'pps_section_team_page',
					)
				)
			);
		} else {
			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => ucwords( str_replace( '_', ' ', $key ) ),
					'section' => 'pps_section_team_page',
					'type'    => $is_textarea ? 'textarea' : 'text',
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_team_customize_register', 26 );

/**
 * Whether current page uses Our Team template.
 *
 * @return bool
 */
function pps_is_team_page() {
	return is_page_template( 'page-templates/our-team.php' ) || is_page( 'our-team' );
}

/**
 * Body class for Our Team page.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_team_body_class( $classes ) {
	if ( pps_is_team_page() ) {
		$classes[] = 'pps-team-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_team_body_class' );

/**
 * Register Our Team stylesheet.
 */
function pps_team_register_styles() {
	pps_enqueue_theme_style( 'pps-team', '/assets/css/team.css', array() );

	if ( ! has_action( 'wp_head', 'pps_team_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_team_print_inline_css', 200 );
	}
}

/**
 * Print Our Team CSS inline.
 */
function pps_team_print_inline_css() {
	if ( ! pps_is_team_page() ) {
		return;
	}
	pps_print_theme_style_inline( 'pps-team', '/assets/css/team.css' );
}

/**
 * Enqueue Our Team stylesheet.
 */
function pps_team_enqueue_assets() {
	if ( pps_is_team_page() ) {
		pps_team_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_team_enqueue_assets', 25 );

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_team_document_title( $title ) {
	if ( ! pps_is_team_page() ) {
		return $title;
	}
	$custom = page_team( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_team_document_title', 26 );

/**
 * Meta description.
 */
function pps_team_meta_description() {
	if ( ! pps_is_team_page() ) {
		return;
	}
	$desc = page_team( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_team_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_team_skip_generic_meta() {
	if ( pps_is_team_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_team_skip_generic_meta' );

/**
 * Add Our Team to the primary menu after About Us.
 *
 * @param int $page_id Page ID.
 */
function pps_attach_team_to_primary_menu( $page_id ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $page_id ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	$team_item_id = 0;
	$about_pos    = 60;

	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent !== 0 ) {
			continue;
		}
		$slug = get_post_field( 'post_name', $item->object_id );
		if ( 'our-team' === $slug || 'Our Team' === $item->title ) {
			$team_item_id = (int) $item->ID;
		}
		if ( 'about-us' === $slug || 'About Us' === $item->title ) {
			$about_pos = (int) $item->menu_order;
		}
	}

	$args = array(
		'menu-item-title'     => 'Our Team',
		'menu-item-object'    => 'page',
		'menu-item-object-id' => (int) $page_id,
		'menu-item-type'      => 'post_type',
		'menu-item-status'    => 'publish',
		'menu-item-parent-id' => 0,
	);

	if ( $team_item_id ) {
		wp_update_nav_menu_item( $menu_id, $team_item_id, $args );
		return;
	}

	$args['menu-item-position'] = $about_pos + 1;
	wp_update_nav_menu_item( $menu_id, 0, $args );
}

/**
 * Create Our Team page, assign template/SEO, update menu.
 */
function pps_setup_team_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_team_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_team_defaults();
	$page     = get_page_by_path( 'our-team' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Our Team',
				'post_name'   => 'our-team',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/our-team.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_team_to_primary_menu( $page_id );
	update_option( 'pps_team_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_team_page', 46 );
