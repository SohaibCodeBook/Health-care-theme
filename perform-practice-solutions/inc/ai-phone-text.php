<?php
/**
 * AI Development — Fully Automated Phone and Text System.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from legacy phone & text automation page.
 *
 * @return array
 */
function pps_ai_pts_defaults() {
	return array(
		'seo_title' => 'Fully Automated Phone and Text System | Perform Practice Solutions',
		'seo_desc'  => 'An intelligent voice and SMS system that answers calls, qualifies patients, books appointments 24/7, and syncs directly with your EMR. Book a free discovery call.',

		'hero_eyebrow'    => 'Fully Automated Phone and Text System',
		'hero_title'      => 'Your Practice Answers Even When No One Is at the Desk',
		'hero_subtitle'   => 'An intelligent voice and SMS system that handles calls, qualifies patients, and books appointments 24/7.',
		'hero_lead'       => 'Missed calls mean missed patients. Whether it is after hours, during a packed morning, or on a holiday, your practice cannot afford to leave callers on hold or voicemail. Perform Practice Solutions\' Fully Automated Phone and Text System acts as an always-on intelligent front desk. It answers calls, handles common questions, qualifies new patient inquiries, and syncs directly with your EMR to schedule, reschedule, or cancel appointments with the right provider, in real time.',
		'hero_cta'        => 'Book a Free Discovery Call',
		'hero_cta_url'    => '#contact',
		'hero_cta_2'      => 'See How It Works',
		'hero_cta_2_url'  => '#capabilities',

		'highlight_1_title' => '24/7 Live Response',
		'highlight_1_text'  => 'Every call gets answered, after hours, weekends, and holidays included.',
		'highlight_2_title' => 'EMR-Integrated Scheduling',
		'highlight_2_text'  => 'Appointments booked, rescheduled, or canceled in real time, directly in your system.',
		'highlight_3_title' => 'Clinically Aware Routing',
		'highlight_3_text'  => 'Patients are matched to the right provider based on their clinical needs, automatically.',

		'cap_eyebrow' => 'Capabilities',
		'cap_title'   => 'Everything Your Front Desk Handles, Automated',
		'cap_lead'    => 'Intelligent by design. Seamless for patients. Invisible to your team.',
		'cap_intro'   => 'This is not a phone tree or a basic voicemail system. It is a fully conversational AI that understands context, answers real questions, and takes meaningful action. Here is what it handles from the moment a patient or provider calls:',

		'cap_1_title' => 'Answers FAQs',
		'cap_1_text'  => 'Insurance questions, location and hours, provider availability. The system responds accurately without tying up staff.',
		'cap_2_title' => 'Qualifies New Inquiries',
		'cap_2_text'  => 'Gathers key information from new patient callers to assess clinical fit before routing or scheduling.',
		'cap_3_title' => 'Schedules Appointments',
		'cap_3_text'  => 'Books new patients into the right provider\'s open slot, in real time, directly within your EMR.',
		'cap_4_title' => 'Reschedules & Cancels',
		'cap_4_text'  => 'Handles changes gracefully, updating your EMR instantly and sending confirmations automatically.',
		'cap_5_title' => 'Routes by Clinical Need',
		'cap_5_text'  => 'Not every patient should see every provider. The system matches callers to the right clinician based on their reason for calling.',
		'cap_6_title' => 'SMS Follow-Up',
		'cap_6_text'  => 'After every call interaction, automated text confirmations or next-step messages keep the patient informed and on track.',
		'cap_7_title' => 'Escalation Protocols',
		'cap_7_text'  => 'When a call requires a human, whether urgent, complex, or sensitive, the system flags and routes it appropriately.',

		'emr_eyebrow' => 'Integration',
		'emr_title'   => 'Connected Directly to Your EMR',
		'emr_lead'    => 'No double-entry. No lag. No data living outside your system.',
		'emr_text'    => 'The system integrates directly with your existing EMR platform, reading live availability, writing appointments, and updating records in real time. Your staff never has to cross-reference, re-enter, or reconcile data. What happens on the phone is immediately reflected in your system of record.',
		'emr_note'    => 'Ask us about compatibility with your specific EMR platform during your discovery call.',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently Asked Questions',
		'faq_1_q'     => 'Can this system handle calls completely on its own, or does it still require staff involvement?',
		'faq_1_a'     => 'For the majority of routine calls, scheduling, FAQ responses, rescheduling, and cancellations, the system operates entirely on its own. It is designed to handle high volumes of predictable inquiries without any staff involvement, while flagging edge cases and urgent calls for human follow-up.',
		'faq_2_q'     => 'Which EMR platforms does this integrate with?',
		'faq_2_a'     => 'We support integration with a wide range of EMR platforms used across physical therapy and outpatient healthcare practices. Compatibility depends on the platform and its API access. We confirm fit during the onboarding process before any build begins.',
		'faq_3_q'     => 'How does the system know which provider to book a patient with?',
		'faq_3_a'     => 'During setup, we configure clinical routing logic based on your providers\' specializations, availability preferences, and your practice\'s scheduling protocols. The system applies that logic every time it routes a new patient.',
		'faq_4_q'     => 'What happens if a caller has an urgent or emergency situation?',
		'faq_4_a'     => 'The system is programmed with escalation protocols. If a caller\'s situation falls outside routine scheduling or requires immediate human attention, the system routes the call appropriately, to a live staff member or a designated emergency contact.',
		'faq_5_q'     => 'Is patient data secure?',
		'faq_5_a'     => 'Yes. The system is built with HIPAA compliance as a baseline requirement. All call data, patient interactions, and scheduling activity are handled with the security standards required for healthcare environments.',

		'cta_title'      => 'Book Your Free Discovery Call',
		'cta_text'       => 'See how an always-on phone and text system can capture more patients, reduce front desk load, and keep your schedule full — without adding headcount.',
		'cta_button'     => 'Book a Free Discovery Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * Phone & text system page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_ai_pts( $key, $default = '' ) {
	$defaults = pps_ai_pts_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_ai_pts_' . $key, $default );
}

/**
 * Register Customizer fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_ai_pts_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_ai_pts',
		array(
			'title'    => __( 'AI — Phone & Text System', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 14,
		)
	);

	foreach ( pps_ai_pts_defaults() as $key => $default ) {
		$setting_id  = 'pps_ai_pts_' . $key;
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
				'section' => 'pps_section_ai_pts',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_ai_pts_customize_register', 24 );

/**
 * Whether current page uses the phone & text template.
 *
 * @return bool
 */
function pps_is_ai_pts_page() {
	$template = 'page-templates/ai-phone-text-system.php';

	if ( is_page_template( $template ) || is_page_template( 'ai-phone-text-system.php' ) ) {
		return true;
	}

	if ( is_page( 'phone-text-system' ) ) {
		return true;
	}

	$page_id = get_queried_object_id();
	if ( $page_id ) {
		$assigned = get_page_template_slug( $page_id );
		if ( $template === $assigned || 'ai-phone-text-system.php' === $assigned ) {
			return true;
		}
	}

	$page = get_queried_object();
	return ( $page instanceof WP_Post && 'page' === $page->post_type && 'phone-text-system' === $page->post_name );
}

/**
 * Register phone & text page stylesheet.
 */
function pps_ai_pts_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-phone-text', '/assets/css/ai-phone-text.css', array() );

	if ( ! has_action( 'wp_head', 'pps_ai_pts_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_pts_print_inline_css', 200 );
	}
}

/**
 * Print phone & text CSS inline.
 */
function pps_ai_pts_print_inline_css() {
	pps_print_theme_style_inline( 'pps-ai-phone-text', '/assets/css/ai-phone-text.css' );
}

/**
 * Force phone & text CSS after header.
 */
function pps_ai_pts_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-phone-text', '/assets/css/ai-phone-text.css' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_pts_document_title( $title ) {
	if ( ! pps_is_ai_pts_page() ) {
		return $title;
	}
	$custom = page_ai_pts( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_pts_document_title', 27 );

/**
 * Meta description.
 */
function pps_ai_pts_meta_description() {
	if ( ! pps_is_ai_pts_page() ) {
		return;
	}
	$desc = page_ai_pts( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_pts_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_pts_skip_generic_meta() {
	if ( pps_is_ai_pts_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_pts_skip_generic_meta' );

/**
 * Body class for AI phone & text page.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_ai_pts_body_class( $classes ) {
	if ( pps_is_ai_pts_page() ) {
		$classes[] = 'pps-ai-pts-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_pts_body_class' );

/**
 * Enqueue page-specific stylesheet.
 */
function pps_ai_pts_enqueue_assets() {
	if ( pps_is_ai_pts_page() ) {
		pps_ai_pts_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_pts_enqueue_assets', 25 );

/**
 * Force correct template for phone-text-system page slug.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_pts_template_include( $template ) {
	if ( is_page( 'phone-text-system' ) ) {
		$custom = locate_template( 'page-templates/ai-phone-text-system.php' );
		if ( $custom ) {
			return $custom;
		}
	}
	return $template;
}
add_filter( 'template_include', 'pps_ai_pts_template_include', 99 );

/**
 * Create page, assign template/SEO, ensure parent ai-development exists.
 */
function pps_setup_ai_pts_page() {
	$version = '1.0.1';
	if ( get_option( 'pps_ai_pts_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_ai_pts_defaults();

	$parent = get_page_by_path( 'ai-development' );
	if ( ! $parent ) {
		$parent_id = wp_insert_post(
			array(
				'post_title'  => 'AI Development',
				'post_name'   => 'ai-development',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
		if ( ! $parent_id || is_wp_error( $parent_id ) ) {
			return;
		}
		$parent = get_post( $parent_id );
	}

	$page = get_page_by_path( 'ai-development/phone-text-system' );
	if ( ! $page ) {
		$page = get_page_by_path( 'phone-text-system' );
	}

	if ( $page ) {
		$page_id = (int) $page->ID;
		if ( (int) $page->post_parent !== (int) $parent->ID ) {
			wp_update_post(
				array(
					'ID'          => $page_id,
					'post_parent' => (int) $parent->ID,
				)
			);
		}
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Fully Automated Phone and Text System',
				'post_name'   => 'phone-text-system',
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => (int) $parent->ID,
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-phone-text-system.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

	update_option( 'pps_ai_pts_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_pts_page', 46 );
