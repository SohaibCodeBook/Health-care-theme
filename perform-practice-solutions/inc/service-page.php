<?php
/**
 * Specialty service page content helpers + Customizer.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Service page slugs registered for Customizer editing.
 *
 * Add a slug here when you want a dedicated Customizer section.
 * Any page using the Specialty Service template still works with generic defaults.
 *
 * @return array
 */
function pps_service_customizer_slugs() {
	return array(
		'physical-therapy-billing-services' => __( 'Physical Therapy Billing', 'perform-practice' ),
	);
}

/**
 * Default content for a service page slug.
 *
 * @param string $slug Page slug.
 * @return array
 */
function pps_service_defaults_for( $slug ) {
	$catalog = array(
		'physical-therapy-billing-services' => array(
			'seo_title' => 'Physical Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Expert physical therapy billing services for USA practices. Reduce denials, speed up reimbursement, and recover lost revenue. Get a free claim audit today.',

			'hero_eyebrow'    => 'Physical Therapy Billing Services',
			'hero_title'      => 'Changing the way PT practices bill and operate',
			'hero_lead'       => 'Too many physical therapy practices get burned by in-house billers or agencies that leave money on the table. Our PT billing experts work around the clock to maximize claims, partner with your front desk, and bill daily — with an average 3-week bill-to-paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow' => 'Who We Help',
			'problem_title'   => 'Unhappy with your current PT billing service?',
			'problem_text'    => 'Feel like you’re overpaying for limited billing support — or unclear where your dollars actually are? Perform Practice Solutions is committed to changing how medical billing works for physical therapy practices. With a transparent billing platform, we work with your front office to improve patient data processing and pursue every dollar you’ve earned.',
			'problem_note'    => 'We’re on your team — and we want you to get paid.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'PT billing done the way it’s meant to be done',
			'offer_lead'    => 'Full-service physical therapy billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full Revenue Cycle Management for PT practices',
			'offer_2'       => 'AI-powered patient billing and collections support',
			'offer_3'       => 'Daily billing with front-desk collaboration',
			'offer_4'       => 'Best-practices coaching and denial prevention',
			'offer_5'       => 'Chat support for your front desk team',
			'offer_6'       => 'Monthly report reviews and quarterly deep analysis',
			'offer_7'       => 'EMR integration — we work with the systems you already use',
			'offer_8'       => 'Insurance claims and patient-balance management',

			'analysis_eyebrow'  => 'Free Analysis',
			'analysis_title'    => 'Free physical therapy billing service analysis',
			'analysis_text'     => 'Want to see how your current biller rates? Take a few minutes to request our medical billing service analysis and get an honest look at denials, turnaround, and recoverable revenue.',
			'analysis_cta'      => 'Get Your Free Analysis',
			'analysis_cta_url'  => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from visit to payment',
			'process_1_title' => 'Connect & audit',
			'process_1_text'  => 'We review your current claims, denial patterns, and front-desk workflows to find the leaks.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and submitted daily — not in slow weekly batches.',
			'process_3_title' => 'Recover & report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'    => 'New PT billing clients',
			'promo_text'     => 'Get three months of FREE Front Desk 101 Coaching & Training when you switch your physical therapy billing to PPS.',
			'promo_cta'      => 'Claim This Offer',
			'promo_cta_url'  => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Physical therapy billing questions we hear most',
			'faq_1_q'     => 'What billing challenges are common in PT practices?',
			'faq_1_a'     => 'Common issues include claim denials, coding errors, slow payments, authorization gaps, and patient billing confusion.',
			'faq_2_q'     => 'How do you ensure billing accuracy and reduce claim denials?',
			'faq_2_a'     => 'Our team uses precise coding, follows current payer rules, and reviews claims before submission to prevent avoidable errors and denials.',
			'faq_3_q'     => 'What technologies do you use for PT billing?',
			'faq_3_a'     => 'We use proven billing platforms that integrate well with most EMR and practice management systems for efficiency and transparency.',
			'faq_4_q'     => 'How transparent is your billing process?',
			'faq_4_a'     => 'We provide clear, regular reporting on claim status, payments, denials, and revenue performance so you always know where your dollars are.',
			'faq_5_q'     => 'Can you handle both insurance claims and patient payments?',
			'faq_5_a'     => 'Yes. We manage the full billing cycle — insurance claims, patient payments, and collections follow-up.',

			'cta_title'      => 'Ready to get paid faster for the care you deliver?',
			'cta_text'       => 'Let’s map a billing strategy around your PT practice — cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
	);

	if ( isset( $catalog[ $slug ] ) ) {
		return $catalog[ $slug ];
	}

	// Generic fallback for other specialty pages using the same template.
	$title = is_singular() ? get_the_title() : 'Specialty Billing Services';
	return array(
		'seo_title'       => $title . ' | Perform Practice Solutions',
		'seo_desc'        => 'Expert ' . strtolower( $title ) . ' from Perform Practice Solutions. Reduce denials, speed reimbursement, and protect practice revenue.',
		'hero_eyebrow'    => $title,
		'hero_title'      => 'Billing support built around how your practice runs',
		'hero_lead'       => 'Perform Practice Solutions delivers specialized billing support to reduce denials, improve collections, and give your team more time for patients.',
		'hero_cta'        => 'Book a Strategy Session',
		'hero_cta_url'    => '#contact',
		'hero_stat'       => '3 weeks',
		'hero_stat_label' => 'average bill-to-paid time',
		'problem_eyebrow' => 'Who We Help',
		'problem_title'   => 'Unhappy with your current billing service?',
		'problem_text'    => 'If you’re unclear where your dollars are — or tired of slow reimbursements — our transparent billing platform and specialty-trained team can help.',
		'problem_note'    => 'We’re on your team — and we want you to get paid.',
		'offer_eyebrow'   => 'What You Get',
		'offer_title'     => 'Billing done the way it’s meant to be done',
		'offer_lead'      => 'End-to-end revenue cycle support with clear reporting and daily follow-through.',
		'offer_1'         => 'Full Revenue Cycle Management',
		'offer_2'         => 'AI-powered billing and collections support',
		'offer_3'         => 'Daily billing and front-desk collaboration',
		'offer_4'         => 'Denial prevention and best-practices coaching',
		'offer_5'         => 'Chat support for your front desk',
		'offer_6'         => 'Monthly and quarterly performance reviews',
		'offer_7'         => 'EMR integration with systems you already use',
		'offer_8'         => 'Insurance and patient-balance management',
		'analysis_eyebrow'=> 'Free Analysis',
		'analysis_title'  => 'Free billing service analysis',
		'analysis_text'   => 'Request an honest look at your current billing performance, denials, and recoverable revenue.',
		'analysis_cta'    => 'Get Your Free Analysis',
		'analysis_cta_url'=> '#contact',
		'process_eyebrow' => 'How It Works',
		'process_title'   => 'A clearer path from visit to payment',
		'process_1_title' => 'Connect & audit',
		'process_1_text'  => 'We review claims, denials, and workflows to find the leaks.',
		'process_2_title' => 'Bill daily with precision',
		'process_2_text'  => 'Claims are scrubbed and submitted daily for faster cash flow.',
		'process_3_title' => 'Recover & report',
		'process_3_text'  => 'We pursue unpaid claims and keep you informed every month.',
		'promo_title'     => 'New billing clients',
		'promo_text'      => 'Ask about onboarding offers and Front Desk 101 coaching when you switch to PPS.',
		'promo_cta'       => 'Talk to Our Team',
		'promo_cta_url'   => '#contact',
		'faq_eyebrow'     => 'FAQs',
		'faq_title'       => 'Billing questions we hear most',
		'faq_1_q'         => 'What billing challenges are common in specialty practices?',
		'faq_1_a'         => 'Claim denials, coding errors, slow payments, and patient billing confusion are among the most common issues.',
		'faq_2_q'         => 'How do you reduce claim denials?',
		'faq_2_a'         => 'We use precise coding, follow payer rules, and review claims before submission.',
		'faq_3_q'         => 'What software do you use?',
		'faq_3_a'         => 'We use proven billing platforms that work with most EMR and practice management systems.',
		'faq_4_q'         => 'How will I receive updates?',
		'faq_4_a'         => 'You’ll get clear reporting on claim status, payments, and revenue performance.',
		'faq_5_q'         => 'Do you handle patient payments too?',
		'faq_5_a'         => 'Yes — insurance claims, patient payments, and collections follow-up.',
		'cta_title'       => 'Ready to improve collections and reduce billing stress?',
		'cta_text'        => 'Book a strategy session and we’ll map the right billing path for your practice.',
		'cta_button'      => 'Book a Strategy Session',
		'cta_button_url'  => '#contact',
	);
}

/**
 * Current service page slug.
 *
 * @return string
 */
function pps_current_service_slug() {
	if ( is_singular( 'page' ) ) {
		return (string) get_post_field( 'post_name', get_queried_object_id() );
	}
	return 'physical-therapy-billing-services';
}

/**
 * Service page content helper (Customizer-first, slug-based).
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_service( $key, $default = '' ) {
	$slug     = pps_current_service_slug();
	$mod_key  = 'pps_svc_' . str_replace( '-', '_', $slug ) . '_' . $key;
	$defaults = pps_service_defaults_for( $slug );

	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}

	return (string) get_theme_mod( $mod_key, $default );
}

/**
 * Whether current page uses specialty service template.
 *
 * @return bool
 */
function pps_is_specialty_service_page() {
	if ( ! is_singular( 'page' ) ) {
		return false;
	}
	$template = get_page_template_slug( get_queried_object_id() );
	return 'page-templates/specialty-service.php' === $template;
}

/**
 * Register Customizer settings for service pages.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_service_customize_register( $wp_customize ) {
	$wp_customize->add_panel(
		'pps_panel_services',
		array(
			'title'       => __( 'PPS — Service Pages', 'perform-practice' ),
			'description' => __( 'Editable content for specialty service page templates. Assign the “Specialty Service Page” template to a page, then edit its copy here (for registered specialties).', 'perform-practice' ),
			'priority'    => 32,
		)
	);

	foreach ( pps_service_customizer_slugs() as $slug => $label ) {
		$section_id = 'pps_section_svc_' . str_replace( '-', '_', $slug );
		$wp_customize->add_section(
			$section_id,
			array(
				'title' => $label,
				'panel' => 'pps_panel_services',
			)
		);

		$defaults = pps_service_defaults_for( $slug );
		foreach ( $defaults as $key => $default ) {
			$setting_id = 'pps_svc_' . str_replace( '-', '_', $slug ) . '_' . $key;
			$is_textarea = (bool) preg_match( '/(_text|_lead|_note|_desc|_a)$/', $key ) || 'seo_desc' === $key;
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
					'section' => $section_id,
					'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_service_customize_register', 20 );

/**
 * Prefer service Customizer SEO title when on specialty template.
 *
 * @param string $title Title.
 * @return string
 */
function pps_service_document_title( $title ) {
	if ( ! pps_is_specialty_service_page() ) {
		return $title;
	}
	$custom = page_service( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_service_document_title', 25 );

/**
 * Output service meta description (Customizer / defaults).
 * Runs before generic page meta so specialty pages get the right description once.
 */
function pps_service_meta_description() {
	if ( ! pps_is_specialty_service_page() ) {
		return;
	}
	$desc = page_service( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_service_meta_description', 1 );

/**
 * Skip duplicate meta description on specialty service pages.
 *
 * @return void
 */
function pps_skip_generic_seo_meta_on_service_pages() {
	if ( pps_is_specialty_service_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_skip_generic_seo_meta_on_service_pages' );

/**
 * Assign specialty template + SEO to the PT billing page.
 */
function pps_assign_pt_service_template() {
	if ( get_option( 'pps_pt_service_template_version' ) === '1.0.0' ) {
		return;
	}

	$page = get_page_by_path( 'physical-therapy-billing-services' );
	if ( ! $page ) {
		return;
	}

	update_post_meta( $page->ID, '_wp_page_template', 'page-templates/specialty-service.php' );
	update_post_meta( $page->ID, '_pps_seo_title', 'Physical Therapy Billing Services | Perform Practice Solutions' );
	update_post_meta( $page->ID, '_pps_seo_description', 'Expert physical therapy billing services for USA practices. Reduce denials, speed up reimbursement, and recover lost revenue. Get a free claim audit today.' );
	update_option( 'pps_pt_service_template_version', '1.0.0' );
}
add_action( 'after_setup_theme', 'pps_assign_pt_service_template', 40 );
