<?php
/**
 * About Us / Meet Kevin Rausch — content, Customizer, page setup.
 * Content sourced from https://performpracticesolutions.com/meet-kevin-rausch/
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content for the About page.
 *
 * @return array
 */
function pps_about_defaults() {
	return array(
		'seo_title' => 'Meet Kevin Rausch | Perform Practice Solutions',
		'seo_desc'  => 'Meet Kevin Rausch, PT — CEO of Perform Practice Solutions. Decades of practice ownership and consulting helping PT, OT, chiropractic, and speech therapy practices thrive.',

		'hero_eyebrow'   => 'About Us',
		'hero_title'     => 'Meet Kevin Rausch',
		'hero_lead'      => 'With decades of multiple PT practice ownership experience and 10+ years of consulting for Physical Therapy, Chiropractic, Speech Therapy, and Occupational Therapy practices — including buying and selling, marketing, billing, and more — Kevin is the person to speak with when you want to simplicity amidst the chaos, to create more revenue, manage your staff more effectively, and build your brand.',
		'hero_name'      => 'Kevin Rausch, PT',
		'hero_role'      => 'CEO of Perform Practice Solutions',
		'hero_cta'       => 'Book a time for us to chat',
		'hero_cta_url'   => '#contact',
		'hero_image'     => '',

		'story_eyebrow' => 'His Story',
		'story_title'   => 'From practice ownership to helping owners thrive',
		'story_1'       => 'As a business owner for over 16 years, I have faced different difficulties on a daily basis that have made me realize how challenging it is to achieve success in the field of PT. There are not many resources out there to guide you through all the steps that you have to take in order to make your practice function properly — and most of the time it feels like any decision you make could negatively affect all that you have worked on.',
		'story_2'       => 'After over a decade of practice & errors, and having ownership of multiple practices, I finally found successful tools and methodologies to own and run a profitable PT practice. And others started to notice; people would come to me to ask for advice and that\'s when I knew I had to step up for the ones that want to successfully run their practice.',
		'story_3'       => 'Perform Practice Solutions was created to help PT, OT, and other practices thrive by providing high-quality services & resources so practice owners can focus on what really matters: the patients.',

		'mission_title' => 'At PPS, our goal is to help you run your practice by providing you with efficient, customized strategies.',
		'mission_cta'   => 'Contact Us',
		'mission_cta_url' => '#contact',

		'timeline_eyebrow' => 'Career Journey',
		'timeline_title'   => 'Experience built inside real practices',
		'tl_1_year'        => '2003',
		'tl_1_title'       => 'Adjunct Professor, Concordia University',
		'tl_1_text'        => 'Adjunct Professor, Concordia University 2003',
		'tl_2_year'        => '2006 – Present',
		'tl_2_title'       => 'Rausch Physical Therapy, INC: President & Founder',
		'tl_2_text'        => '4 locations · 150 employees · PT, Pelvic Therapy, Massage, Pilates, Yoga',
		'tl_3_year'        => '2007',
		'tl_3_title'       => 'Founder & President, Home Programs Inc',
		'tl_3_text'        => 'Founder & President, Home Programs Inc 2007',
		'tl_4_year'        => '2011 – Present',
		'tl_4_title'       => 'Waypoint Children\'s Foundation',
		'tl_4_text'        => 'Fishing & whale watching trips for underprivileged youths in the Southern California area.',
		'tl_5_year'        => '2012',
		'tl_5_title'       => 'Founder, Natural Running Series',
		'tl_5_text'        => 'Founder, Natural Running Series 2012',
		'tl_6_year'        => '2016 – Present',
		'tl_6_title'       => 'Perform Practice Solutions',
		'tl_6_text'        => 'Billing, Contracting, Credentialing, Digital Marketing, Executive Coaching, Practice Brokership',

		'cred_eyebrow' => 'Credentials',
		'cred_title'   => 'Publications, speaking, and education',
		'cred_image'   => '',

		'pub_title' => 'Publications',
		'pub_1'     => 'Journal of Orthopedic & Sports Physical Therapy',
		'pub_2'     => 'PT Magazine',

		'speak_title' => 'Public Speaking',
		'speak_1'     => 'Key Note Speaker, Independent Physical Therapy Association',
		'speak_2'     => 'APTA National Conference(s)',
		'speak_3'     => 'Physical Therapy Business and Marketing Conference(s)',
		'speak_4'     => 'Combine Sections Meeting (CSM) National Conference(s)',
		'speak_5'     => 'California Physical Therapy Association (CPTA) State Conference',
		'speak_note'  => 'Kevin has spoken at national and statewide conferences in CA, Nevada, Illinois, Arizona, and Florida. Topics have included Revenue Stream development, Digital Marketing, Community Marketing, Memberships in the PT Practice, Front Office Best Practices, Billing Best Practices, and more.',

		'edu_title'   => 'Education',
		'edu_1_school' => 'Nova Southeastern University',
		'edu_1_degree' => 'Master\'s, Physical Therapy 2003',
		'edu_2_school' => 'Cal Baptist University',
		'edu_2_degree' => 'B.S., Exercise Physiology, 2001',

		'services_eyebrow' => 'What We Provide',
		'services_title'   => 'Our services',
		'svc_1_title'      => 'Perform Billing Solutions',
		'svc_1_text'       => 'Our transparent billing platform shows you exactly where your dollars are, creating an efficient and streamlined system to optimize cash flow.',
		'svc_1_url'        => '/medical-billing-solutions/',
		'svc_2_title'      => 'Virtual Staffing',
		'svc_2_text'       => 'Our virtual staffing services are the right solution to make your practice more profitable and efficient. You won\'t believe the time — & money!',
		'svc_2_url'        => '/virtual-medical-assistant/',
		'svc_3_title'      => 'Perform Marketing Solutions',
		'svc_3_text'       => 'Our medical marketing services take all of the guesswork out of promoting and building your practice. We provide comprehensive packages designed to fit each client\'s unique needs.',
		'svc_3_url'        => '/digital-marketing-healthcare-agency/',
		'svc_4_title'      => 'Credentialing/Contract',
		'svc_4_text'       => 'Staying in-network and up-to-date with credentials is essential to your success. Perform Practice Solutions handles every detail of the credentialing and contracting process so your healthcare team stays compliant and your revenue keeps flowing.',
		'svc_4_url'        => '/medical-credentialing-services/',
		'svc_5_title'      => 'AI development',
		'svc_5_text'       => 'Reduce your practice\'s admin work and improve the patient experience by building simple, secure automation — such as intake/scheduling assistants, reminders, and reporting — tailored to your workflows and systems. Schedule your free consultation to get a custom AI roadmap.',
		'svc_5_url'        => '/ai-development/',

		'test_eyebrow' => 'What Healthcare Providers Say About Us',
		'test_title'   => 'Trusted by practice owners across the United States',
		'test_1_quote' => 'I\'ve worked with Kevin and his team for 3 years. They take care of all of my billing and marketing needs. Their system is top-notch and their advice is unmatched. I highly recommend.',
		'test_1_name'  => 'Scott',
		'test_1_meta'  => 'Practice Owner & PT — Florida',
		'test_2_quote' => 'You don\'t know what you don\'t know. I am so glad I got Perform Practice Solutions to help me figure out the gaps in my Occupational Therapy business. Kevin Rausch is reliable, responsible, and professional.',
		'test_2_name'  => 'Marie Hall',
		'test_2_meta'  => 'California',
		'test_3_quote' => 'I am an Occupational Therapist — and I quickly realized the administration and behind-the-scenes responsibilities of starting my clinic were beyond my scope. Enter Perform Practice Solutions and Kevin Rausch.',
		'test_3_name'  => 'David Adell',
		'test_3_meta'  => 'Tennessee',

		'cta_title'      => 'Let\'s chat',
		'cta_text'       => 'Take the first step to getting started with our many services. Let\'s talk about healthcare billing, eligibility, marketing, practice sales, and credentialing — or other questions you might have about practice ownership.',
		'cta_button'     => 'Book a Strategy Session',
		'cta_button_url' => '#contact',
	);
}

/**
 * About page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_about( $key, $default = '' ) {
	$defaults = pps_about_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	$value = (string) get_theme_mod( 'pps_about_' . $key, $default );

	if ( '' === $value ) {
		if ( 'hero_image' === $key ) {
			return PPS_THEME_URI . '/assets/images/founder.jpeg';
		}
		if ( 'cred_image' === $key ) {
			return PPS_THEME_URI . '/assets/images/about.jpeg';
		}
	}

	return $value;
}

/**
 * Register Customizer for About page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_about_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_about_page',
		array(
			'title'    => __( 'About Us / Meet Kevin', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 5,
		)
	);

	foreach ( pps_about_defaults() as $key => $default ) {
		$setting_id  = 'pps_about_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_note|_quote|seo_desc|story_\d+|speak_note)$/', $key );
		$is_url      = (bool) preg_match( '/_url$/', $key );
		$is_image    = (bool) preg_match( '/_image$/', $key );

		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $default,
				'sanitize_callback' => $is_url || $is_image ? 'esc_url_raw' : ( $is_textarea ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
			)
		);

		if ( $is_image ) {
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					$setting_id,
					array(
						'label'   => ucwords( str_replace( '_', ' ', $key ) ),
						'section' => 'pps_section_about_page',
					)
				)
			);
		} else {
			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => ucwords( str_replace( '_', ' ', $key ) ),
					'section' => 'pps_section_about_page',
					'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_about_customize_register', 21 );

/**
 * Whether current page uses About template.
 *
 * @return bool
 */
function pps_is_about_page() {
	return is_page_template( 'page-templates/about.php' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_about_document_title( $title ) {
	if ( ! pps_is_about_page() ) {
		return $title;
	}
	$custom = page_about( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_about_document_title', 26 );

/**
 * Meta description.
 */
function pps_about_meta_description() {
	if ( ! pps_is_about_page() ) {
		return;
	}
	$desc = page_about( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_about_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_about_skip_generic_meta() {
	if ( pps_is_about_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_about_skip_generic_meta' );

/**
 * Point About Us menu item at the about page.
 *
 * @param int $page_id Page ID.
 */
function pps_attach_about_to_primary_menu( $page_id ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $page_id ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent !== 0 ) {
			continue;
		}
		$slug = get_post_field( 'post_name', $item->object_id );
		if ( 'about-us' === $slug || 'meet-kevin-rausch' === $slug || 'About Us' === $item->title ) {
			wp_update_nav_menu_item(
				$menu_id,
				(int) $item->ID,
				array(
					'menu-item-title'     => 'About Us',
					'menu-item-object'    => 'page',
					'menu-item-object-id' => (int) $page_id,
					'menu-item-type'      => 'post_type',
					'menu-item-status'    => 'publish',
					'menu-item-parent-id' => 0,
				)
			);
			return;
		}
	}
}

/**
 * Redirect legacy Meet Kevin URL to About Us.
 */
function pps_redirect_legacy_meet_kevin() {
	if ( ! is_page( 'meet-kevin-rausch' ) ) {
		return;
	}
	$target = get_page_by_path( 'about-us' );
	if ( $target && ! pps_is_about_page() ) {
		// Only redirect if meet-kevin is a different page without our template.
		$tpl = get_page_template_slug( get_queried_object_id() );
		if ( 'page-templates/about.php' !== $tpl ) {
			wp_safe_redirect( get_permalink( $target ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'pps_redirect_legacy_meet_kevin' );

/**
 * Create/update About Us page, assign template/SEO, update menu.
 */
function pps_setup_about_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_about_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_about_defaults();
	$page     = get_page_by_path( 'about-us' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'About Us',
				'post_name'   => 'about-us',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/about.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_about_to_primary_menu( $page_id );
	update_option( 'pps_about_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_about_page', 46 );
