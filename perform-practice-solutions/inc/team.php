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
		'member_1_bio_full' => "I bring over a decade of experience helping healthcare practices unlock growth, maximize revenue, and build high-performing operations that scale. My expertise combines client strategy, revenue cycle management, workflow optimization, credentialing, and business development to help practices grow smarter, stronger, and more profitably from startup through expansion. At Perform Practice Solutions, we are also leading the way in AI innovation for the allied health sector, developing smarter tools that automate tasks, increase efficiency, and create a better experience for both providers and patients.\n\nI transform operational bottlenecks into revenue-driving growth engines.\n\nWhen I am not helping practices grow, you can usually find me behind a camera, exploring somewhere new, or camping under the stars. Put me in a Jeep in the middle of the Utah desert, and I am a happy girl.",
		'member_1_phone' => '833-764-0178',
		'member_1_email' => 'Courtney@PerformPracticeSolutions.com',
		'member_1_image' => '',

		'member_2_name'  => 'Kari Landrum',
		'member_2_title' => 'Business Manager',
		'member_2_bio'   => "With twenty years experience in health care, Kari is one of Perform Practice Solutions's Master...",
		'member_2_bio_full' => "With twenty years experience in health care, Kari is one of Perform Practice Solutions's Master Billers!\n\nKari loves to spend her time with her new puppy and her family, while discovering the outdoors of Wyoming.",
		'member_2_phone' => '833-764-0178',
		'member_2_email' => 'Kari@PerformPracticeSolutions.com',
		'member_2_image' => '',

		'member_3_name'  => 'Kris Jorge',
		'member_3_title' => 'Sales & Marketing Director',
		'member_3_bio'   => 'With over a decade in sales and marketing, Kris Jorge helps businesses uncover revenue growth...',
		'member_3_bio_full' => "With over a decade in sales and marketing, Kris Jorge helps businesses uncover revenue growth opportunities and drive client acquisition through high-impact campaigns. From launching services to building lasting market presence, Kris turns strategic vision into measurable results.\n\nWhen Kris isn't driving results in the boardroom, you'll likely find him on two wheels — riding motorcycles is his way of clearing his head and embracing the open road. A passionate advocate for animals, Kris actively rescues stray cats and gives them a second chance at a loving home.",
		'member_3_phone' => '702-600-0483',
		'member_3_email' => 'Kris@PerformPracticeSolutions.com',
		'member_3_image' => '',

		'member_4_name'  => 'Gianni Gonzalez',
		'member_4_title' => 'Provider Credentialing & Enrollment Expert',
		'member_4_bio'   => "Every day a provider isn't credentialed is revenue walking out the door. With 20+ years...",
		'member_4_bio_full' => "Every day a provider isn't credentialed is revenue walking out the door.\n\nWith 20+ years in healthcare revenue cycle management, I've made it my mission to ensure providers are enrolled, credentialed, and reimbursement-ready — without the runaround.\n\nI partner with medical practices of all sizes to remove the complexity from credentialing. From navigating maze-like payer requirements to staying ahead of re-credentialing deadlines, I handle it all — so nothing falls through the cracks and your practice never misses a dollar it's earned.\n\n\"When I'm not chasing down credentialing approvals, I'm chasing sunsets in places with hard-to-pronounce names.\"",
		'member_4_phone' => '702-725-4950',
		'member_4_email' => 'Credentialing@PerformPT.net',
		'member_4_image' => '',

		'member_5_name'  => 'Leo Benedict Pascual',
		'member_5_title' => 'Customer Success Manager / VA Manager',
		'member_5_bio'   => 'With over a decade of leadership experience in the insurance and healthcare verticals, Leo specializes...',
		'member_5_bio_full' => "With over a decade of leadership experience in the insurance and healthcare verticals, Leo specializes in optimizing revenue cycle processes and elevating patient experience through efficient front-end and back-end operations. He has a strong track record of leading high-performing teams, improving workflow efficiency, and ensuring seamless coordination between call centers and operations. His approach focuses on turning operational challenges into scalable, results-driven solutions.\n\nOutside of work, Leo enjoys gaming and watching movies, whether it's diving into competitive matches or getting lost in a great story on screen.",
		'member_5_phone' => '949-392-5244',
		'member_5_email' => 'Leo@PerformPracticeSolutions.com',
		'member_5_image' => '',

		'member_6_name'  => 'Shaira',
		'member_6_title' => '',
		'member_6_bio'   => 'With over 7 years of experience in digital marketing, Shaira helps businesses grow their online presence through creative content, engaging social media...',
		'member_6_bio_full' => "With over 7 years of experience in digital marketing, Shaira helps businesses grow their online presence through creative content, engaging social media, strategic advertising, and data-driven marketing.\n\nShe enjoys bringing ideas to life through content and creative campaigns that connect with people while keeping business goals at the center of the strategy.\n\nWhen she's not working on her latest project, you'll likely find her spending time with her dogs, exploring new places and foods, or planning her next beach getaway.",
		'member_6_phone' => '',
		'member_6_email' => 'shaira@performpt.net',
		'member_6_image' => '',

		'member_7_name'  => 'Raneighia Astillero',
		'member_7_title' => 'Content Marketing',
		'member_7_bio'   => 'Raneighia Astillero is a Digital Marketing Specialist with 7 years of experience in SEO, website management, and ads strategy. She helps businesses get found in search...',
		'member_7_bio_full' => "Raneighia Astillero is a Digital Marketing Specialist with 7 years of experience in SEO, website management, and ads strategy. She helps businesses get found in search, keep their websites fast and current, and run paid campaigns that spend with purpose.\n\nHer approach is diagnostic: find out why the numbers look the way they do, then fix it, so clients see more qualified traffic, stronger conversion, and a budget that earns its keep.\n\nOutside of work, she plays tennis and answers to a pug named Drake.",
		'member_7_phone' => '',
		'member_7_email' => 'raneya@performpt.net',
		'member_7_image' => '',
	);
}

/**
 * Bundled team member headshot filenames (member index => file).
 *
 * @return array<int, string>
 */
function pps_team_member_image_files() {
	return array(
		1 => 'Courtney.jpg',
		2 => 'kari.jpg',
		3 => 'kris.jpg',
		4 => 'Gianni.jpg',
		5 => 'leo.jpg',
		6 => 'shaira.jpeg',
		7 => 'raneighia.jpeg',
	);
}

/**
 * Default headshot URI for a team member slot.
 *
 * @param int $index Member index (1–7).
 * @return string
 */
function pps_team_member_default_image( $index ) {
	$files = pps_team_member_image_files();
	$index = (int) $index;
	if ( ! isset( $files[ $index ] ) ) {
		return '';
	}

	$rel  = '/assets/images/our team images/' . $files[ $index ];
	$path = PPS_THEME_DIR . $rel;
	if ( ! file_exists( $path ) ) {
		return '';
	}

	return PPS_THEME_URI . $rel;
}

/**
 * Cache-bust a theme team image URL.
 *
 * @param string $url Image URL.
 * @return string
 */
function pps_team_image_url( $url ) {
	if ( '' === $url || false !== strpos( $url, '?' ) ) {
		return $url;
	}

	$path = str_replace( PPS_THEME_URI, PPS_THEME_DIR, $url );
	if ( ! file_exists( $path ) ) {
		$decoded = str_replace( PPS_THEME_URI, PPS_THEME_DIR, rawurldecode( $url ) );
		if ( file_exists( $decoded ) ) {
			$path = $decoded;
		}
	}

	$ver = file_exists( $path ) ? (string) filemtime( $path ) : PPS_THEME_VERSION;
	return $url . '?ver=' . rawurlencode( $ver );
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
	if ( '' === trim( $value ) && preg_match( '/^member_\d+_bio_full$/', $key ) && isset( $defaults[ $key ] ) && '' !== trim( (string) $defaults[ $key ] ) ) {
		$value = (string) $defaults[ $key ];
	}
	if ( 'kevin_image' === $key && '' === $value ) {
		return PPS_THEME_URI . '/assets/images/founder.jpeg';
	}
	if ( preg_match( '/^member_(\d+)_image$/', $key, $matches ) && '' === $value ) {
		return pps_team_member_default_image( (int) $matches[1] );
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
	for ( $i = 1; $i <= 7; $i++ ) {
		$name = page_team( "member_{$i}_name" );
		if ( '' === trim( $name ) ) {
			continue;
		}
		$members[] = array(
			'id'       => $i,
			'name'     => $name,
			'title'    => page_team( "member_{$i}_title" ),
			'bio'      => page_team( "member_{$i}_bio" ),
			'bio_full' => page_team( "member_{$i}_bio_full" ),
			'phone'    => page_team( "member_{$i}_phone" ),
			'email'    => page_team( "member_{$i}_email" ),
			'image'    => page_team( "member_{$i}_image" ),
		);
	}
	return $members;
}

/**
 * Team members with modal content keyed by member id.
 *
 * @return array<int, array<string, mixed>>
 */
function pps_team_modal_data() {
	$data = array();

	foreach ( pps_team_members() as $member ) {
		$bio_full = trim( (string) ( $member['bio_full'] ?? '' ) );
		if ( '' === $bio_full ) {
			continue;
		}

		$paragraphs = preg_split( '/\n\s*\n/', $bio_full );
		$paragraphs = array_values(
			array_filter(
				array_map( 'trim', is_array( $paragraphs ) ? $paragraphs : array( $bio_full ) )
			)
		);

		$data[ (int) $member['id'] ] = array(
			'name'       => $member['name'],
			'title'      => $member['title'],
			'paragraphs' => $paragraphs,
			'phone'      => $member['phone'],
			'email'      => $member['email'],
			'image'      => pps_team_image_url( $member['image'] ),
		);
	}

	return $data;
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
		$is_textarea = (bool) preg_match( '/(_bio|_bio_full|_highlight|seo_desc)$/', $key );
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

		$script_path = PPS_THEME_DIR . '/assets/js/team.js';
		$script_ver  = file_exists( $script_path ) ? (string) filemtime( $script_path ) : PPS_THEME_VERSION;
		wp_enqueue_script(
			'pps-team',
			PPS_THEME_URI . '/assets/js/team.js',
			array(),
			$script_ver,
			true
		);
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
	$version = '1.6.0';
	if ( get_option( 'pps_team_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_team_defaults();

	for ( $i = 1; $i <= 7; $i++ ) {
		foreach ( array( 'name', 'title', 'bio', 'phone', 'email', 'image' ) as $field ) {
			$key = "member_{$i}_{$field}";
			if ( ! isset( $defaults[ $key ] ) ) {
				continue;
			}
			$setting = 'pps_team_' . $key;
			if ( '' === get_theme_mod( $setting, '' ) && '' !== $defaults[ $key ] ) {
				set_theme_mod( $setting, $defaults[ $key ] );
			}
		}

		$bio_key = "member_{$i}_bio_full";
		if ( ! empty( $defaults[ $bio_key ] ) ) {
			set_theme_mod( 'pps_team_' . $bio_key, $defaults[ $bio_key ] );
		}
	}

	for ( $i = 1; $i <= 7; $i++ ) {
		$setting = 'pps_team_member_' . $i . '_image';
		if ( '' === get_theme_mod( $setting, '' ) ) {
			$image = pps_team_member_default_image( $i );
			if ( $image ) {
				set_theme_mod( $setting, esc_url_raw( $image ) );
			}
		}
	}
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
