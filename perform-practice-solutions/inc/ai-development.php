<?php
/**
 * AI Development — parent overview / summary page.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content for the AI Development hub.
 *
 * @return array
 */
function pps_ai_dev_defaults() {
	return array(
		'seo_title' => 'AI Development | Perform Practice Solutions',
		'seo_desc'  => 'Custom AI automation for healthcare practices: phone and text, referral outreach, website chatbots, and front desk tools — built around your EMR and workflows.',

		'hero_eyebrow'   => 'AI Development',
		'hero_title'     => 'Automation Built Around How Your Practice Runs',
		'hero_subtitle'  => 'Four purpose-built systems that answer patients, capture referrals, convert website visitors, and clear front-desk busywork.',
		'hero_lead'      => 'Missed calls, slow referral follow-up, and after-hours website traffic should not cost you patients. Perform Practice Solutions designs AI automation that plugs into your EMR and day-to-day workflows — so your team stays focused on care while the system handles the repetitive work.',
		'hero_cta'       => 'Book a Free Discovery Call',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'Explore solutions',
		'hero_cta_2_url' => '#solutions',

		'solutions_eyebrow' => 'Our AI Solutions',
		'solutions_title'   => 'Choose the system that fits your biggest bottleneck',
		'solutions_lead'    => 'Each offering works on its own or as part of a connected front-office stack. Click through for full details.',

		'card_1_title' => 'Fully Automated Phone and Text System',
		'card_1_text'  => 'An intelligent voice and SMS front desk that answers calls, qualifies patients, and books, reschedules, or cancels appointments 24/7 — synced to your EMR.',
		'card_1_cta'   => 'Explore Phone & Text',
		'card_1_icon'  => 'fa-solid fa-phone-volume',
		'card_1_slug'  => 'phone-text-system',

		'card_2_title' => 'Fully Automated New Client Referral Outreach',
		'card_2_text'  => 'Turn every incoming referral into a booked appointment with automated outreach sequences that nurture relationships and fill your schedule.',
		'card_2_cta'   => 'Explore Referral Outreach',
		'card_2_icon'  => 'fa-solid fa-share-nodes',
		'card_2_slug'  => 'referral-outreach',

		'card_3_title' => 'Fully Automated and Integrated Website Chatbot',
		'card_3_text'  => 'A custom chatbot on your site that answers questions, screens leads, and books new patients from your homepage — day or night.',
		'card_3_cta'   => 'Explore Website Chatbot',
		'card_3_icon'  => 'fa-solid fa-comments',
		'card_3_slug'  => 'website-chatbot',

		'card_4_title' => 'Front Desk Support and Automation Tools',
		'card_4_text'  => 'Purpose-built automation for the administrative grind so your front desk can focus on patients instead of repetitive tasks.',
		'card_4_cta'   => 'Explore Front Desk Tools',
		'card_4_icon'  => 'fa-solid fa-desktop',
		'card_4_slug'  => 'front-desk-tools',

		'why_eyebrow' => 'Why practices choose us',
		'why_title'   => 'Not generic software — automation fitted to your workflows',
		'why_lead'    => 'We configure routing, messaging, and EMR connections around how your practice actually operates.',
		'why_1_title' => 'EMR-connected',
		'why_1_text'  => 'Appointments, updates, and handoffs write back to your system of record.',
		'why_2_title' => 'Built for allied health',
		'why_2_text'  => 'Designed for PT, OT, speech, chiropractic, and outpatient clinics — not retail chatbots.',
		'why_3_title' => 'Human when it matters',
		'why_3_text'  => 'Routine work is automated; urgent or complex cases escalate to your team.',

		'cta_title'      => 'Ready to automate your front office?',
		'cta_text'       => 'Tell us where calls, referrals, or website traffic are slipping through — we will map the right AI stack for your practice.',
		'cta_button'     => 'Book a Free Discovery Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * AI Development overview content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_ai_dev( $key, $default = '' ) {
	$defaults = pps_ai_dev_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_ai_dev_' . $key, $default );
}

/**
 * Permalink for an AI Development child page.
 *
 * @param string $slug Child page slug.
 * @return string
 */
function pps_ai_dev_child_url( $slug ) {
	$slug = sanitize_title( $slug );
	$page = get_page_by_path( 'ai-development/' . $slug );
	if ( ! $page ) {
		$page = get_page_by_path( $slug );
	}
	if ( $page instanceof WP_Post ) {
		return get_permalink( $page );
	}
	return home_url( '/ai-development/' . $slug . '/' );
}

/**
 * Register Customizer fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_ai_dev_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_ai_dev',
		array(
			'title'    => __( 'AI — Development Overview', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 13,
		)
	);

	foreach ( pps_ai_dev_defaults() as $key => $default ) {
		$setting_id  = 'pps_ai_dev_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_intro|_note|_a|seo_desc|_subtitle)$/', $key );
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
				'section' => 'pps_section_ai_dev',
				'type'    => $is_textarea ? 'textarea' : 'text',
			)
		);
	}
}
add_action( 'customize_register', 'pps_ai_dev_customize_register' );

/**
 * Whether current request is the AI Development hub.
 *
 * @return bool
 */
function pps_is_ai_dev_page() {
	$template = 'page-templates/ai-development.php';

	if ( is_page_template( $template ) || is_page_template( 'ai-development.php' ) ) {
		return true;
	}

	if ( is_page( 'ai-development' ) ) {
		return true;
	}

	$page = get_queried_object();
	if ( $page instanceof WP_Post && 'page' === $page->post_type && 'ai-development' === $page->post_name ) {
		$assigned = get_page_template_slug( $page->ID );
		return ( '' === $assigned || $template === $assigned || 'ai-development.php' === $assigned );
	}

	return false;
}

/**
 * Register page stylesheet.
 */
function pps_ai_dev_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-development', '/assets/css/ai-development.css', array() );
	pps_ai_suite_register_styles();

	if ( ! has_action( 'wp_head', 'pps_ai_dev_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_dev_print_inline_css', 200 );
	}
}

/**
 * Print CSS inline as a cache-bust fallback.
 */
function pps_ai_dev_print_inline_css() {
	if ( pps_is_ai_dev_page() ) {
		pps_print_theme_style_inline( 'pps-ai-development', '/assets/css/ai-development.css' );
	}
}

/**
 * Force styles after header (hosting that strips enqueued CSS).
 */
function pps_ai_dev_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-development', '/assets/css/ai-development.css' );
	pps_ai_suite_force_styles();
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_dev_document_title( $title ) {
	if ( ! pps_is_ai_dev_page() ) {
		return $title;
	}
	$custom = page_ai_dev( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_dev_document_title', 27 );

/**
 * Meta description.
 */
function pps_ai_dev_meta_description() {
	if ( ! pps_is_ai_dev_page() ) {
		return;
	}
	$desc = page_ai_dev( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_dev_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_dev_skip_generic_meta() {
	if ( pps_is_ai_dev_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_dev_skip_generic_meta' );

/**
 * Body class.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_ai_dev_body_class( $classes ) {
	if ( pps_is_ai_dev_page() ) {
		$classes[] = 'pps-ai-dev-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_dev_body_class' );

/**
 * Enqueue assets.
 */
function pps_ai_dev_enqueue_assets() {
	if ( pps_is_ai_dev_page() ) {
		pps_ai_dev_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_dev_enqueue_assets', 25 );

/**
 * Force template for ai-development slug.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_dev_template_include( $template ) {
	if ( is_page( 'ai-development' ) ) {
		$custom = locate_template( 'page-templates/ai-development.php' );
		if ( $custom ) {
			return $custom;
		}
	}
	return $template;
}
add_filter( 'template_include', 'pps_ai_dev_template_include', 99 );

/**
 * Prevent page caches from serving a stale blank HTML snapshot.
 */
function pps_ai_dev_prevent_cache() {
	if ( ! pps_is_ai_dev_page() ) {
		return;
	}

	if ( ! defined( 'DONOTCACHEPAGE' ) ) {
		define( 'DONOTCACHEPAGE', true );
	}
	if ( ! defined( 'DONOTCACHEOBJECT' ) ) {
		define( 'DONOTCACHEOBJECT', true );
	}
	if ( ! defined( 'DONOTCACHEDB' ) ) {
		define( 'DONOTCACHEDB', true );
	}

	nocache_headers();

	if ( ! headers_sent() ) {
		header( 'Cache-Control: no-store, no-cache, must-revalidate, max-age=0' );
		header( 'Pragma: no-cache' );
		header( 'Expires: Wed, 11 Jan 1984 05:00:00 GMT' );
		header( 'X-LiteSpeed-Cache-Control: no-cache' );
	}
}
add_action( 'template_redirect', 'pps_ai_dev_prevent_cache', 0 );
add_action( 'send_headers', 'pps_ai_dev_prevent_cache', 0 );

/**
 * Browser-level cache hints (helps when hosting proxy ignores PHP headers).
 */
function pps_ai_dev_cache_meta() {
	if ( ! pps_is_ai_dev_page() ) {
		return;
	}
	echo '<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />' . "\n";
	echo '<meta http-equiv="Pragma" content="no-cache" />' . "\n";
	echo '<meta http-equiv="Expires" content="0" />' . "\n";
}
add_action( 'wp_head', 'pps_ai_dev_cache_meta', 0 );

/**
 * Ensure AI Development page exists and uses the overview template.
 */
function pps_setup_ai_dev_page() {
	$version = '1.0.1';
	if ( get_option( 'pps_ai_dev_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_ai_dev_defaults();

	$page = get_page_by_path( 'ai-development' );
	if ( ! $page ) {
		$page_id = wp_insert_post(
			array(
				'post_title'   => 'AI Development',
				'post_name'    => 'ai-development',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
		if ( ! $page_id || is_wp_error( $page_id ) ) {
			return;
		}
	} else {
		$page_id = (int) $page->ID;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-development.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

	// Touch the page so host/CDN caches keyed on modified time invalidate.
	wp_update_post(
		array(
			'ID'                => $page_id,
			'post_modified'     => current_time( 'mysql' ),
			'post_modified_gmt' => current_time( 'mysql', 1 ),
		)
	);
	clean_post_cache( $page_id );

	update_option( 'pps_ai_dev_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_dev_page', 45 );
