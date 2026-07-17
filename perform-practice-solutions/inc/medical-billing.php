<?php
/**
 * Medical Billing Solutions page — content defaults, Customizer, page setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content for the Medical Billing Solutions page (from client docx).
 *
 * @return array
 */
function pps_mbs_defaults() {
	return array(
		'seo_title' => 'Medical Billing Solutions | Perform Practice Solutions',
		'seo_desc'  => 'Professional medical billing solutions that reduce claim denials, speed up reimbursement, and improve practice revenue. Expert support across the U.S.',

		'hero_eyebrow'   => 'Medical Billing Solutions',
		'hero_title'     => 'Medical billing solutions that protect your revenue from day one',
		'hero_lead'      => 'Perform Practice Solutions delivers medical billing solutions built to streamline claim processing, reduce payment delays, and recover lost revenue for healthcare practices nationwide. Our team manages everything from claim submission to patient collections, so your providers can focus on patient care instead of chasing payments.',
		'hero_note'      => 'Your providers see patients. We handle everything else.',
		'hero_cta'       => 'Book a Free Strategy Session',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See How It Works',
		'hero_cta_2_url' => '#process',

		'chip_1' => 'Full revenue cycle management',
		'chip_2' => 'Works inside your existing EMR',
		'chip_3' => 'Allied health specialists',

		'why_eyebrow' => 'Why It Matters',
		'why_title'   => 'Why medical billing solutions matter for your allied health practice',
		'why_text_1'  => 'Not all medical billing is the same, and the difference shows up on your bottom line. When billing errors slip through, the consequences compound quickly. A miscoded session, a missing authorization, or an outdated fee schedule can mean weeks of delayed revenue or a permanent write off.',
		'why_text_2'  => 'Most practices do not discover these problems until the appeal window has already closed, which is exactly why proactive denial management matters so much for long-term financial health.',
		'why_text_3'  => 'Perform Practice Solutions was built around the specific needs of allied health providers. Our billing specialists understand the payer environments, documentation requirements, and coding standards that apply to your specialty. That expertise is what separates consistent cash flow from constant revenue leakage.',
		'why_stat'       => '65%',
		'why_stat_label' => 'of denied claims are never reworked (national average). Our clients do not accept that number.',

		'results_eyebrow' => 'The Results You Can Expect',
		'results_title'   => 'What changes when specialists run your billing',
		'result_1_value'  => '20–30%',
		'result_1_title'  => 'Faster cash flow',
		'result_1_text'   => 'Practices typically see payments post 20 to 30 percent faster when billing is handled by specialists familiar with payer-specific requirements.',
		'result_2_value'  => 'Higher',
		'result_2_title'  => 'Collection rates',
		'result_2_text'   => 'Systematic denial tracking and resubmission protocols recover money that would otherwise be written off.',
		'result_3_value'  => 'Less',
		'result_3_title'  => 'Administrative burden',
		'result_3_text'   => 'Your staff focuses on patient care instead of billing paperwork, appeals, and follow-up calls.',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'How our medical billing solutions work',
		'step_1_title'    => 'Practice assessment and setup',
		'step_1_text'     => 'We review your current billing workflow, fee schedules, payer contracts, and claim history to find exactly where money is being lost — undercoding, delayed submissions, or denials that were never appealed. We confirm credentialing status with major payers and align your system for efficient daily submission. Many practices discover they have been leaving revenue on the table for months, sometimes years.',
		'step_2_title'    => 'Daily claims submission and tracking',
		'step_2_text'     => 'Every patient encounter generates a clean claim that goes out the same day. Real-time tracking monitors claim status across all payers, flags anything that stalls, and catches denials immediately so the appeal window never closes before we act.',
		'step_3_title'    => 'Denial resolution',
		'step_3_text'     => 'Every denied claim gets a root-cause investigation. Whether it is a coding error, missing documentation, an eligibility problem, or a payer policy dispute, we correct it and resubmit with full supporting documentation. Most claims are recovered on first appeal.',
		'step_4_title'    => 'Patient billing and follow up',
		'step_4_text'     => 'After insurance pays, patient statements go out promptly and clearly. We manage follow-up calls and payment arrangements so your staff never has to chase balances or navigate uncomfortable collection conversations.',
		'step_5_title'    => 'Monthly and quarterly reviews',
		'step_5_text'     => 'Every month you receive a report covering claim volume, approval rates, average days to payment, and denial reasons by payer. Every quarter, you sit down with our CEO for a deeper conversation about your practice’s financial health.',

		'include_eyebrow' => 'What’s Included',
		'include_title'   => 'What our medical billing solutions actually include',
		'include_lead'    => 'You are not handing your billing off to a call center. You are gaining a specialized team that works inside your existing EMR, understands your specialty’s documentation requirements, and treats your revenue like it matters.',
		'include_1_icon'  => 'fa-file-circle-check',
		'include_1_title' => 'Claim submission and clean claim rates',
		'include_1_text'  => 'We review CPT coding accuracy, modifier usage, and payer-specific requirements before anything touches an insurance portal — fewer denials up front, faster payment cycles on the back end.',
		'include_2_icon'  => 'fa-rotate-left',
		'include_2_title' => 'Denial management and appeals',
		'include_2_text'  => 'We work every denial actively, identify patterns, and fix the upstream issue so the same problem does not repeat.',
		'include_3_icon'  => 'fa-hourglass-half',
		'include_3_title' => 'Accounts receivable follow up',
		'include_3_text'  => 'A/R aging past 90 days is a clear sign billing is breaking down. We monitor it continuously and follow up on outstanding balances systematically.',
		'include_4_icon'  => 'fa-chart-column',
		'include_4_title' => 'Real-time reporting and transparency',
		'include_4_text'  => 'Our billing platform integrates directly with your EMR so you can see claim status, payment trends, and denial breakdowns any time.',
		'include_5_icon'  => 'fa-id-card-clip',
		'include_5_title' => 'Credentialing coordination',
		'include_5_text'  => 'A new provider hire can cost $8,000–$15,000 in delayed revenue if credentialing is not handled proactively. We manage the entire process so providers generate revenue as fast as possible.',
		'include_6_icon'  => 'fa-file-signature',
		'include_6_title' => 'Payer contract review and negotiation',
		'include_6_text'  => 'Are you getting paid what your contracts say you should be? We audit payer fee schedules and identify underpayments that have been quietly compounding for years.',

		'test_eyebrow'  => 'Client Stories',
		'test_title'    => 'What practice owners tell us when they make the switch',
		'test_1_quote'  => 'I’ve been burned by so many bad billers and billing companies, but since I switched to Perform Practice Solutions I’ve been making more money. And it happened so fast.',
		'test_1_name'   => 'Tom',
		'test_1_meta'   => 'Practice Owner & Physical Therapist, Arizona',
		'test_2_quote'  => 'Perform Practice Solutions has done superb work for my practice. Our billing has never been more organized, efficient, or prompt. I cannot think of anyone who would do a better job in all aspects of medical billing.',
		'test_2_name'   => 'Lindsay Walker',
		'test_2_meta'   => 'General Practitioner, New Jersey',
		'test_3_quote'  => 'Perform Practice Solutions saves you time, gets you paid, and helps you spend more time with your patients. They take the billing headache off your hands and are better at it than anyone.',
		'test_3_name'   => 'Amanda Newton',
		'test_3_meta'   => 'Occupational Therapist, Texas',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions about medical billing solutions',
		'faq_1_q'     => 'What are medical billing solutions?',
		'faq_1_a'     => 'Medical billing solutions are the systems, processes, and specialized services that manage a healthcare practice’s full revenue cycle — from claim submission and payer follow up to denial resolution and patient collections. A strong solution reduces errors, speeds up reimbursement, and protects the practice from lost or written-off revenue.',
		'faq_2_q'     => 'What are the top 5 denials in medical billing?',
		'faq_2_a'     => 'The most common denial reasons are missing or invalid prior authorization, eligibility and coverage issues, incorrect or incomplete coding, missing documentation, and duplicate claim submissions. Effective denial management addresses each at the root cause rather than simply resubmitting the same claim.',
		'faq_3_q'     => 'What is a medical billing collections solution?',
		'faq_3_a'     => 'It is the structured process a practice uses to pursue outstanding patient balances after insurance has paid its portion — clear patient statements, organized follow-up calls, and manageable payment arrangements, handled in a way that protects the patient relationship while still recovering revenue.',
		'faq_4_q'     => 'What is a virtual medical billing solution?',
		'faq_4_a'     => 'It allows a practice to outsource billing operations to a remote specialized team without hiring in-house staff or changing its existing EMR system — certified billing expertise, real-time reporting, and dedicated support while keeping overhead low.',
		'faq_5_q'     => 'What is included in a medical bill review solution?',
		'faq_5_a'     => 'Auditing payer contracts, fee schedules, and claim histories to identify underpayments, coding gaps, and missed revenue opportunities. This review often uncovers thousands of dollars in revenue a practice did not know it was owed.',
		'faq_6_q'     => 'Do you offer customized medical billing solutions for different specialties?',
		'faq_6_a'     => 'Yes. Solutions are built around each practice’s specialty, payer mix, and patient volume. A physical therapy practice, an occupational therapy clinic, and a general practitioner’s office all have different coding rules and documentation requirements, so a one-size-fits-all approach does not work.',
		'faq_7_q'     => 'What does medical billing outsourcing cost for an allied health practice?',
		'faq_7_a'     => 'Pricing is typically based on a percentage of collected revenue. The exact rate depends on practice size, provider count, patient volume, and claim complexity. We are always open to a direct conversation about what partnership would cost — and what it would return.',
		'faq_8_q'     => 'How is Perform Practice Solutions different from other medical billing companies?',
		'faq_8_a'     => 'Transparency, access, and specialization. You have a named contact, real-time reporting, monthly meetings with our COO, and quarterly sessions with our CEO. We specialize in allied health, so we understand the coding, authorization, and payer dynamics specific to your specialty.',

		'cta_title'      => 'Ready to stop leaving revenue on the table?',
		'cta_text'       => 'If denied claims, slow reimbursements, or the day-to-day weight of managing billing are holding your practice back, we can change that. Book a free strategy session and find out exactly how much revenue your current billing process is leaving behind.',
		'cta_button'     => 'Book a Free Strategy Session',
		'cta_button_url' => '#contact',
	);
}

/**
 * Content helper for the Medical Billing Solutions page.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_mbs( $key, $default = '' ) {
	$defaults = pps_mbs_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_mbs_' . $key, $default );
}

/**
 * Register Customizer section for the Medical Billing Solutions page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_mbs_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_mbs',
		array(
			'title'    => __( 'Medical Billing Solutions', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 5,
		)
	);

	foreach ( pps_mbs_defaults() as $key => $default ) {
		$setting_id  = 'pps_mbs_' . $key;
		$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_a|_quote|_label|seo_desc)$/', $key );
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
				'section' => 'pps_section_mbs',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_mbs_customize_register', 21 );

/**
 * Whether current page is the Medical Billing Solutions page.
 *
 * @return bool
 */
function pps_is_mbs_page() {
	return is_page_template( 'page-templates/medical-billing.php' );
}

/**
 * SEO title for the Medical Billing Solutions page.
 *
 * @param string $title Document title.
 * @return string
 */
function pps_mbs_document_title( $title ) {
	if ( ! pps_is_mbs_page() ) {
		return $title;
	}
	$custom = page_mbs( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_mbs_document_title', 26 );

/**
 * Meta description for the Medical Billing Solutions page.
 */
function pps_mbs_meta_description() {
	if ( ! pps_is_mbs_page() ) {
		return;
	}
	$desc = page_mbs( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_mbs_meta_description', 1 );

/**
 * Avoid duplicate meta description from generic page meta layer.
 */
function pps_mbs_skip_generic_meta() {
	if ( pps_is_mbs_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_mbs_skip_generic_meta' );

/**
 * One-time creation of the Medical Billing Solutions page.
 */
function pps_setup_mbs_page() {
	if ( get_option( 'pps_mbs_page_version' ) === '1.0.0' ) {
		return;
	}

	$defaults = pps_mbs_defaults();
	$page     = get_page_by_path( 'medical-billing-solutions' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Medical Billing Solutions',
				'post_name'   => 'medical-billing-solutions',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/medical-billing.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	update_option( 'pps_mbs_page_version', '1.0.0' );
}
add_action( 'after_setup_theme', 'pps_setup_mbs_page', 41 );
