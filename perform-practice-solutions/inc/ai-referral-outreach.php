<?php
/**
 * AI Development — Fully Automated New Client Referral Outreach.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from legacy referral outreach page.
 *
 * @return array
 */
function pps_ai_ref_defaults() {
	return array(
		'seo_title' => 'Fully Automated New Client Referral Outreach | Perform Practice Solutions',
		'seo_desc'  => 'Turn every incoming referral into a booked appointment with instant automated outreach across text, email, and voice. Book a free discovery call.',

		'hero_eyebrow'   => 'Fully Automated New Client Referral Outreach',
		'hero_title'     => 'Stop Losing Referrals to Slow Follow-Up',
		'hero_subtitle'  => 'Turn every incoming referral into a booked appointment, automatically.',
		'hero_lead'      => 'New patient and doctor referrals are time-sensitive. Every hour without a response is an hour another practice uses to win that patient over. Perform Practice Solutions\' Fully Automated New Client Referral Outreach eliminates the lag entirely, instantly engaging, nurturing, and converting referrals before your team needs to get involved.',
		'hero_cta'       => 'Book a Free Discovery Call',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See the Workflow',
		'hero_cta_2_url' => '#workflow',

		'highlight_1_title' => 'Instant Engagement',
		'highlight_1_text'  => 'Automated outreach fires the moment a referral comes in. No delays, no missed windows.',
		'highlight_2_title' => 'Multi-Channel Follow-Up',
		'highlight_2_text'  => 'Reach referrals by text, email, and voice, wherever they are most likely to respond.',
		'highlight_3_title' => 'Conversion-Optimized',
		'highlight_3_text'  => 'Proven sequences built to turn cold leads into confirmed, scheduled appointments.',

		'workflow_eyebrow' => 'The Workflow',
		'workflow_title'   => 'From Referral to Booked, Hands-Free',
		'workflow_lead'    => 'A fully automated workflow that handles the follow-up so your team does not have to.',
		'workflow_intro'   => 'The moment a referral lands, whether from a physician, a current patient, or an online inquiry, our system takes over. Instant personalized outreach goes out, follow-up sequences kick in, and the referral is guided all the way to a scheduled appointment. Your staff stays focused on patient care. We handle everything in between.',

		'step_1_title' => 'Referral Received',
		'step_1_text'  => 'A new referral triggers the workflow instantly. No manual action required.',
		'step_2_title' => 'Automated Outreach',
		'step_2_text'  => 'A personalized message goes out within seconds via text, email, or voicemail drop.',
		'step_3_title' => 'Nurture Sequence',
		'step_3_text'  => 'If there is no response, timed follow-ups continue across channels over the next 48 to 72 hours.',
		'step_4_title' => 'Appointment Booked',
		'step_4_text'  => 'Once engaged, the referral is guided directly to scheduling, confirmed and locked in.',

		'stack_eyebrow' => 'Growth Stack',
		'stack_title'   => 'Our Most Popular Growth Stack',
		'stack_lead'    => 'Meta and Google Ads + Automated Outreach: The fastest way to fill your schedule.',
		'stack_intro'   => 'For practices ready to grow, our top-performing workflow pairs paid advertising with fully automated outreach into one seamless system. Meta and Google Ads drive a steady stream of qualified new patient leads directly into your pipeline, and the moment a lead submits their information, automated outreach takes over.',
		'stack_note'    => 'No waiting. No manual follow-up. No leads falling through the cracks.',
		'stack_1_title' => 'Meta and Google Ads',
		'stack_1_text'  => 'Targeted ad campaigns built specifically for healthcare, driving new patient inquiries at a predictable, scalable cost.',
		'stack_2_title' => 'Automated Lead Outreach',
		'stack_2_text'  => 'Every new lead receives an instant, personalized message, starting a conversation before your competitors even see the inquiry.',
		'stack_3_title' => 'Conversion Sequences',
		'stack_3_text'  => 'Multi-step follow-up via text and email keeps leads engaged until they book, without a single manual touchpoint from your team.',
		'stack_closing' => 'This stack is built for practices that want more than visibility. It is for practices that want a full pipeline, a packed schedule, and a system that works even when the office is closed.',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently Asked Questions',
		'faq_1_q'     => 'How quickly does the automated outreach go out after a referral comes in?',
		'faq_1_a'     => 'Within seconds. The moment a referral is received, whether from a physician\'s office, an online form, or a current patient, the system fires an initial outreach message automatically. Speed is everything in referral conversion, and this workflow is built around that reality.',
		'faq_2_q'     => 'Does this work for both patient referrals and doctor referrals?',
		'faq_2_a'     => 'Yes. The workflow can be configured to handle both incoming patient self-referrals and physician-to-practice referrals, with messaging tailored appropriately for each audience.',
		'faq_3_q'     => 'What if a lead does not respond to the first message?',
		'faq_3_a'     => 'The system does not stop after one touch. A multi-step follow-up sequence runs automatically over the following 48 to 72 hours, varying by channel and message content, until the lead either responds or is marked inactive.',
		'faq_4_q'     => 'Do I need to be running ads for this to work?',
		'faq_4_a'     => 'No. The automated outreach workflow functions with any lead source: physician referrals, walk-ins, existing patient referrals, or website inquiries. Pairing it with our Meta and Google Ads stack is optional but significantly amplifies volume.',
		'faq_5_q'     => 'How do I get started?',
		'faq_5_a'     => 'Book a free discovery call with our team. We will walk through your current referral process, identify where leads are being lost, and show you exactly how the automated workflow would fit your practice.',

		'cta_title'      => 'Book Your Free Discovery Call',
		'cta_text'       => 'Let\'s build your referral system — so every lead gets an instant response and a clear path to a booked appointment.',
		'cta_button'     => 'Book a Free Discovery Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * Referral outreach page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_ai_ref( $key, $default = '' ) {
	$defaults = pps_ai_ref_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_ai_ref_' . $key, $default );
}

/**
 * Register Customizer fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_ai_ref_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_ai_ref',
		array(
			'title'    => __( 'AI — Referral Outreach', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 15,
		)
	);

	foreach ( pps_ai_ref_defaults() as $key => $default ) {
		$setting_id  = 'pps_ai_ref_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_intro|_note|_a|seo_desc|_subtitle|_closing)$/', $key );
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
				'section' => 'pps_section_ai_ref',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_ai_ref_customize_register', 24 );

/**
 * Whether current page uses the referral outreach template.
 *
 * @return bool
 */
function pps_is_ai_ref_page() {
	$template = 'page-templates/ai-referral-outreach.php';

	if ( is_page_template( $template ) || is_page_template( 'ai-referral-outreach.php' ) ) {
		return true;
	}

	if ( is_page( 'referral-outreach' ) ) {
		return true;
	}

	$page_id = get_queried_object_id();
	if ( $page_id ) {
		$assigned = get_page_template_slug( $page_id );
		if ( $template === $assigned || 'ai-referral-outreach.php' === $assigned ) {
			return true;
		}
	}

	$page = get_queried_object();
	return ( $page instanceof WP_Post && 'page' === $page->post_type && 'referral-outreach' === $page->post_name );
}

/**
 * Register referral outreach page stylesheet.
 */
function pps_ai_ref_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-referral-outreach', '/assets/css/ai-referral-outreach.css', array() );

	if ( ! has_action( 'wp_head', 'pps_ai_ref_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_ref_print_inline_css', 200 );
	}
}

/**
 * Print referral outreach CSS inline.
 */
function pps_ai_ref_print_inline_css() {
	pps_print_theme_style_inline( 'pps-ai-referral-outreach', '/assets/css/ai-referral-outreach.css' );
}

/**
 * Force referral outreach CSS after header.
 */
function pps_ai_ref_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-referral-outreach', '/assets/css/ai-referral-outreach.css' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_ref_document_title( $title ) {
	if ( ! pps_is_ai_ref_page() ) {
		return $title;
	}
	$custom = page_ai_ref( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_ref_document_title', 28 );

/**
 * Meta description.
 */
function pps_ai_ref_meta_description() {
	if ( ! pps_is_ai_ref_page() ) {
		return;
	}
	$desc = page_ai_ref( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_ref_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_ref_skip_generic_meta() {
	if ( pps_is_ai_ref_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_ref_skip_generic_meta' );

/**
 * Body class.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_ai_ref_body_class( $classes ) {
	if ( pps_is_ai_ref_page() ) {
		$classes[] = 'pps-ai-ref-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_ref_body_class' );

/**
 * Enqueue page stylesheet.
 */
function pps_ai_ref_enqueue_assets() {
	if ( pps_is_ai_ref_page() ) {
		pps_ai_ref_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_ref_enqueue_assets', 25 );

/**
 * Force template for referral-outreach slug.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_ref_template_include( $template ) {
	if ( is_page( 'referral-outreach' ) ) {
		$custom = locate_template( 'page-templates/ai-referral-outreach.php' );
		if ( $custom ) {
			return $custom;
		}
	}
	return $template;
}
add_filter( 'template_include', 'pps_ai_ref_template_include', 99 );

/**
 * Create page, assign template/SEO.
 */
function pps_setup_ai_ref_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_ai_ref_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_ai_ref_defaults();

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

	$page = get_page_by_path( 'ai-development/referral-outreach' );
	if ( ! $page ) {
		$page = get_page_by_path( 'referral-outreach' );
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
				'post_title'  => 'Fully Automated New Client Referral Outreach',
				'post_name'   => 'referral-outreach',
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => (int) $parent->ID,
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-referral-outreach.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

	update_option( 'pps_ai_ref_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_ref_page', 46 );
