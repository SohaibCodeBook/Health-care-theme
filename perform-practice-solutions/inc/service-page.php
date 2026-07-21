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
		'physical-therapy-billing-services'      => __( 'Physical Therapy Billing', 'perform-practice' ),
		'chiropractic-billing-services'          => __( 'Chiropractic Billing', 'perform-practice' ),
		'pain-management-billing-services'       => __( 'Pain Management Billing', 'perform-practice' ),
		'orthopedic-medical-billing-services'    => __( 'Orthopedic Medical Billing', 'perform-practice' ),
		'occupational-therapy-billing-services'  => __( 'Occupational Therapy Billing', 'perform-practice' ),
		'speech-therapy-billing-services'        => __( 'Speech Therapy Billing', 'perform-practice' ),
		'pediatrics-billing-services'            => __( 'Pediatrics Billing', 'perform-practice' ),
		'plastic-surgery-billing-services'       => __( 'Plastic Surgery Billing', 'perform-practice' ),
		'podiatry-billing-services'              => __( 'Podiatry Billing', 'perform-practice' ),
		'psychiatry-billing-services'            => __( 'Psychiatry Billing', 'perform-practice' ),
		'psychology-billing-services'            => __( 'Psychology Billing', 'perform-practice' ),
		'pulmonology-billing-services'           => __( 'Pulmonology Billing', 'perform-practice' ),
		'rheumatology-billing-services'          => __( 'Rheumatology Billing', 'perform-practice' ),
		'telemedicine-billing-services'          => __( 'Telemedicine Billing', 'perform-practice' ),
		'urology-billing-services'               => __( 'Urology Billing', 'perform-practice' ),
		'wound-care-billing-services'            => __( 'Wound Care Billing', 'perform-practice' ),
	);
}

/**
 * Placeholder specialty content (same structure as PT page). Replace later with full copy.
 *
 * @param string $label     Specialty label, e.g. "Chiropractic".
 * @param string $seo_title Meta title.
 * @param string $seo_desc  Meta description.
 * @return array
 */
function pps_service_placeholder_defaults( $label, $seo_title, $seo_desc ) {
	$short = $label;
	$title = $label . ' Billing Services';

	return array(
		'seo_title' => $seo_title,
		'seo_desc'  => $seo_desc,

		'hero_eyebrow'    => $title,
		'hero_title'      => $label . ' Billing That Gets Practices Paid Faster',
		'hero_lead'       => $title . ' handle claim submission, denial management, and patient collections so your clinic gets paid faster with less admin work. Perform Practice Solutions partners with your front desk, scrubs and submits claims daily, and delivers an average 3 week bill to paid cycle.',
		'hero_cta'        => 'Book a Strategy Session',
		'hero_cta_url'    => '#contact',
		'hero_stat'       => '3 weeks',
		'hero_stat_label' => 'average bill-to-paid time',

		'problem_eyebrow'      => 'Why Outsource',
		'problem_title'        => 'Why outsource your ' . strtolower( $short ) . ' billing?',
		'problem_text'         => 'Outsourcing ' . strtolower( $short ) . ' billing gives your practice a dedicated team of billing specialists without the cost of hiring, training, and managing in-house billers. Practices that partner with a billing company typically see fewer denials, faster reimbursement, and cleaner reporting.',
		'problem_text_2'       => 'An in-house biller means salary, benefits, software, and turnover risk. A generic billing agency means slow batches and no visibility. Perform Practice Solutions is built differently. We bill daily, work directly with your front desk, and show you where every dollar stands.',
		'problem_note'         => 'We are on your team, and we want you to get paid.',
		'problem_card_1_title' => 'Transparent billing',
		'problem_card_1_text'  => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
		'problem_card_2_title' => 'Front desk partnership',
		'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',

		'offer_eyebrow' => 'What You Get',
		'offer_title'   => $short . ' billing done the way it is meant to be done',
		'offer_lead'    => 'Full-service ' . strtolower( $short ) . ' billing built for cleaner claims, faster reimbursement, and clearer reporting.',
		'offer_1'       => 'Full revenue cycle management for ' . strtolower( $short ) . ' practices',
		'offer_2'       => 'Daily claim submission with front desk collaboration',
		'offer_3'       => 'Denial prevention and best-practices coaching',
		'offer_4'       => 'AI-powered patient billing and collections support',
		'offer_5'       => 'Chat support for your front desk team',
		'offer_6'       => 'Monthly report reviews and quarterly deep analysis',
		'offer_7'       => 'EMR integration with the systems you already use',
		'offer_8'       => 'Insurance claims, Medicare compliance, and patient balance management',

		'analysis_eyebrow' => 'Free Analysis',
		'analysis_title'   => 'Free ' . strtolower( $short ) . ' billing service analysis',
		'analysis_text'    => 'Want to see how your current biller rates? Request a free medical billing analysis and get an honest look at your denials, turnaround time, and recoverable revenue.',
		'analysis_cta'     => 'Get Your Free Analysis',
		'analysis_cta_url' => '#contact',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'A clearer path from visit to payment',
		'process_1_title' => 'Connect and audit',
		'process_1_text'  => 'We review your current claims, denial patterns, and front desk workflows to find where revenue is leaking.',
		'process_2_title' => 'Bill daily with precision',
		'process_2_text'  => 'Claims are scrubbed against payer rules and submitted every day, not in slow weekly batches.',
		'process_3_title' => 'Recover and report',
		'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

		'promo_title'   => 'New ' . strtolower( $short ) . ' billing clients',
		'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your ' . strtolower( $short ) . ' billing to Perform Practice Solutions.',
		'promo_cta'     => 'Claim This Offer',
		'promo_cta_url' => '#contact',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => $short . ' billing questions we hear most',
		'faq_1_q'     => 'Why should ' . strtolower( $short ) . ' practices outsource their billing?',
		'faq_1_a'     => 'Outsourcing gives your practice access to specialty billing specialists, daily claim submission, and denial prevention without the cost of hiring and training in-house staff. Most practices that outsource see faster reimbursement, fewer write offs, and more time for patient care.',
		'faq_2_q'     => 'Is outsourcing more affordable than hiring an in-house biller?',
		'faq_2_a'     => 'For most practices, yes. An in-house biller costs a salary, benefits, software, and ongoing training, and turnover puts your revenue at risk. Outsourcing replaces those fixed costs with a predictable partnership that scales with your claim volume.',
		'faq_3_q'     => 'How do you reduce claim denials?',
		'faq_3_a'     => 'We prevent denials before claims go out. Every claim is scrubbed against payer rules, submitted daily, and tracked through payment. When a denial does happen, we correct and resubmit it quickly, then coach your front desk on the root cause.',
		'faq_4_q'     => 'Which EMR systems do you work with?',
		'faq_4_a'     => 'We work inside the systems your practice already uses. There is no software migration required to start. Our team adapts to your existing EMR and clearinghouse workflows.',
		'faq_5_q'     => 'How transparent is your billing process?',
		'faq_5_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis.',
		'faq_6_q'     => 'Can you handle both insurance claims and patient payments?',
		'faq_6_a'     => 'Yes. We manage full revenue cycle management — from insurance claim submission and Medicare compliance to patient balance billing and collections support.',

		'cta_title'      => 'Ready to get paid faster for the care you deliver?',
		'cta_text'       => 'Let\'s map a billing strategy around your ' . strtolower( $short ) . ' practice for cleaner claims, faster cash flow, and less admin stress.',
		'cta_button'     => 'Book a Strategy Session',
		'cta_button_url' => '#contact',
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
			'seo_desc'  => 'Outsource your physical therapy billing to PT billing experts. Daily claim submission, denial prevention, and a 3 week average bill to paid cycle. Book a strategy session today.',

			'hero_eyebrow'    => 'Physical Therapy Billing Services',
			'hero_title'      => 'Physical Therapy Billing That Gets PT Practices Paid Faster',
			'hero_lead'       => 'Physical therapy billing services handle claim submission, denial management, and patient collections so your clinic gets paid faster with less admin work. Perform Practice Solutions partners with your front desk, scrubs and submits claims daily, and delivers an average 3 week bill to paid cycle.',
			'hero_cta'        => 'Book a Strategy Session',
			'hero_cta_url'    => '#contact',
			'hero_stat'       => '3 weeks',
			'hero_stat_label' => 'average bill-to-paid time',

			'problem_eyebrow'       => 'Why Outsource',
			'problem_title'         => 'Why outsource your physical therapy billing?',
			'problem_text'          => 'Outsourcing physical therapy billing gives your practice a dedicated team of PT billing specialists without the cost of hiring, training, and managing in-house billers. Practices that partner with a billing company typically see fewer denials, faster reimbursement, and cleaner reporting.',
			'problem_text_2'        => 'An in-house biller means salary, benefits, software, and turnover risk. A generic billing agency means slow batches and no visibility. Perform Practice Solutions is built differently. We bill daily, work directly with your front desk, and show you where every dollar stands.',
			'problem_note'          => 'We are on your team, and we want you to get paid.',
			'problem_card_1_title'  => 'Transparent billing',
			'problem_card_1_text'   => 'See where every dollar stands, including claims, A/R, denials, and patient balances.',
			'problem_card_2_title'  => 'Front desk partnership',
			'problem_card_2_text'   => 'We coach your team so clean data goes out and clean payments come back.',

			'offer_eyebrow' => 'What You Get',
			'offer_title'   => 'PT billing done the way it is meant to be done',
			'offer_lead'    => 'Full-service physical therapy billing built for cleaner claims, faster reimbursement, and clearer reporting.',
			'offer_1'       => 'Full revenue cycle management for PT practices',
			'offer_2'       => 'Daily claim submission with front desk collaboration',
			'offer_3'       => 'Denial prevention and best-practices coaching',
			'offer_4'       => 'AI-powered patient billing and collections support',
			'offer_5'       => 'Chat support for your front desk team',
			'offer_6'       => 'Monthly report reviews and quarterly deep analysis',
			'offer_7'       => 'EMR integration with Raintree, Tebra, AthenaHealth, and the systems you already use',
			'offer_8'       => 'Insurance claims, Medicare compliance, and patient balance management',

			'analysis_eyebrow' => 'Free Analysis',
			'analysis_title'   => 'Free physical therapy billing service analysis',
			'analysis_text'    => 'Want to see how your current biller rates? Request a free medical billing analysis and get an honest look at your denials, turnaround time, and recoverable revenue.',
			'analysis_cta'     => 'Get Your Free Analysis',
			'analysis_cta_url' => '#contact',

			'process_eyebrow' => 'How It Works',
			'process_title'   => 'A clearer path from visit to payment',
			'process_1_title' => 'Connect and audit',
			'process_1_text'  => 'We review your current claims, denial patterns, and front desk workflows to find where revenue is leaking.',
			'process_2_title' => 'Bill daily with precision',
			'process_2_text'  => 'Claims are scrubbed against payer rules and submitted every day, not in slow weekly batches.',
			'process_3_title' => 'Recover and report',
			'process_3_text'  => 'We chase unpaid claims, manage patient balances, and review performance with you every month.',

			'promo_title'   => 'New PT billing clients',
			'promo_text'    => 'Get three months of free Front Desk 101 Coaching and Training when you switch your physical therapy billing to Perform Practice Solutions.',
			'promo_cta'     => 'Claim This Offer',
			'promo_cta_url' => '#contact',

			'faq_eyebrow' => 'FAQs',
			'faq_title'   => 'Physical therapy billing questions we hear most',
			'faq_1_q'     => 'Why should physical therapy practices outsource their billing?',
			'faq_1_a'     => 'Outsourcing physical therapy billing gives your practice access to PT billing specialists, daily claim submission, and denial prevention without the cost of hiring and training in-house staff. Most practices that outsource see faster reimbursement, fewer write offs, and more time for patient care instead of paperwork.',
			'faq_2_q'     => 'Is outsourcing PT billing more affordable than hiring an in-house biller?',
			'faq_2_a'     => 'For most practices, yes. An in-house biller costs a salary, benefits, software, and ongoing training, and turnover puts your revenue at risk. Outsourcing to Perform Practice Solutions replaces those fixed costs with a predictable partnership that scales with your claim volume and keeps billing running without interruption.',
			'faq_3_q'     => 'How do you reduce claim denials for PT practices?',
			'faq_3_a'     => 'We prevent denials before claims go out. Every claim is scrubbed against payer rules, submitted daily, and tracked through payment. When a denial does happen, we correct and resubmit it quickly, then coach your front desk on the root cause so the same error does not repeat.',
			'faq_4_q'     => 'Which EMR systems do you work with?',
			'faq_4_a'     => 'We work inside the systems your practice already uses, including Raintree, Tebra, AthenaHealth, and CureMD. There is no software migration required to start. Our team adapts to your existing EMR and clearinghouse workflows, so switching to Perform Practice Solutions does not disrupt your schedule or documentation.',
			'faq_5_q'     => 'How transparent is your billing process?',
			'faq_5_a'     => 'Completely transparent. You see where every dollar stands, including claims, A/R, denials, and patient balances. We deliver monthly report reviews and quarterly deep analysis, and your team gets direct chat access to our billers. You never have to wonder what happened to a claim or a payment.',
			'faq_6_q'     => 'Can you handle both insurance claims and patient payments?',
			'faq_6_a'     => 'Yes. Perform Practice Solutions manages full revenue cycle management for PT practices, from insurance claim submission and Medicare compliance to patient balance billing and collections support. We pursue every dollar you have earned across both payer and patient sides, so nothing falls through the cracks.',

			'cta_title'      => 'Ready to get paid faster for the care you deliver?',
			'cta_text'       => 'Let\'s map a billing strategy around your PT practice for cleaner claims, faster cash flow, and less admin stress.',
			'cta_button'     => 'Book a Strategy Session',
			'cta_button_url' => '#contact',
		),
		'chiropractic-billing-services' => pps_service_placeholder_defaults(
			'Chiropractic',
			'Chiropractic Billing Services | Perform Practice Solutions',
			'Outsource your chiropractic billing to specialists who know CMT codes, Medicare AT modifiers, and medical necessity documentation. Book a strategy session today.'
		),
		'pain-management-billing-services' => pps_service_placeholder_defaults(
			'Pain Management',
			'Pain Management Billing Services | Perform Practice Solutions',
			'Outsource your pain management billing to experts in prior authorizations, injection coding, and payer audits. Faster reimbursement, fewer denials. Book a strategy session.'
		),
		'orthopedic-medical-billing-services' => pps_service_placeholder_defaults(
			'Orthopedic',
			'Orthopedic Medical Billing Services | Perform Practice Solutions',
			'Outsource your orthopedic billing to experts in surgical coding, global periods, and modifier compliance. Cleaner claims and faster payment. Book a strategy session.'
		),
		'occupational-therapy-billing-services' => pps_service_placeholder_defaults(
			'Occupational Therapy',
			'Occupational Therapy Billing Services | Perform Practice Solutions',
			'Outsource your OT billing to experts in timed codes, the 8 minute rule, and Medicare therapy thresholds. Cleaner claims, faster payment. Book a strategy session.'
		),
		'speech-therapy-billing-services' => pps_service_placeholder_defaults(
			'Speech Therapy',
			'Speech Therapy Billing Services | Perform Practice Solutions',
			'Outsource your speech therapy billing to experts in SLP evaluation codes, Medicare thresholds, and pediatric payers. Cleaner claims, faster payment. Book a strategy session.'
		),
		'pediatrics-billing-services' => pps_service_placeholder_defaults(
			'Pediatrics',
			'Pediatrics Billing Services | Perform Practice Solutions',
			'Outsource your pediatric billing to experts in well-child visits, vaccine billing, and Medicaid plans. Get a free billing service analysis today.'
		),
		'plastic-surgery-billing-services' => pps_service_placeholder_defaults(
			'Plastic Surgery',
			'Plastic Surgery Billing Services | Perform Practice Solutions',
			'Outsource your plastic surgery billing to experts in reconstructive vs cosmetic separation, medical necessity documentation, and surgical coding. Get a free billing service analysis today.'
		),
		'podiatry-billing-services' => pps_service_placeholder_defaults(
			'Podiatry',
			'Podiatry Billing Services | Perform Practice Solutions',
			'Outsource your podiatry billing to experts in routine foot care rules, Q modifiers, and DME claims. Get a free billing service analysis today.'
		),
		'psychiatry-billing-services' => pps_service_placeholder_defaults(
			'Psychiatry',
			'Psychiatry Billing Services | Perform Practice Solutions',
			'Outsource your psychiatry billing to experts in E/M plus psychotherapy add-ons, telehealth claims, and med management coding. Get a free billing service analysis today.'
		),
		'psychology-billing-services' => pps_service_placeholder_defaults(
			'Psychology',
			'Psychology Billing Services | Perform Practice Solutions',
			'Outsource your psychology billing to experts in therapy session codes, testing billing by hour, and behavioral health networks. Get a free billing service analysis today.'
		),
		'pulmonology-billing-services' => pps_service_placeholder_defaults(
			'Pulmonology',
			'Pulmonology Billing Services | Perform Practice Solutions',
			'Outsource your pulmonology billing to experts in PFT coding, sleep study claims, and chronic respiratory care programs. Get a free billing service analysis today.'
		),
		'rheumatology-billing-services' => pps_service_placeholder_defaults(
			'Rheumatology',
			'Rheumatology Billing Services | Perform Practice Solutions',
			'Outsource your rheumatology billing to experts in infusion coding, biologic authorizations, and complex E/M capture. Get a free billing service analysis today.'
		),
		'telemedicine-billing-services' => pps_service_placeholder_defaults(
			'Telemedicine',
			'Telemedicine Billing Services | Perform Practice Solutions',
			'Outsource your telemedicine billing to experts in place of service codes, telehealth modifiers, and multi-state payer rules. Get a free billing service analysis today.'
		),
		'urology-billing-services' => pps_service_placeholder_defaults(
			'Urology',
			'Urology Billing Services | Perform Practice Solutions',
			'Outsource your urology billing to experts in cystoscopy coding, in-office procedures, and surgical global periods. Get a free billing service analysis today.'
		),
		'wound-care-billing-services' => pps_service_placeholder_defaults(
			'Wound Care',
			'Wound Care Billing Services | Perform Practice Solutions',
			'Outsource your wound care billing to experts in debridement coding, skin substitute claims, and measurement documentation. Get a free billing service analysis today.'
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
		'problem_card_1_title' => 'Transparent billing',
		'problem_card_1_text'  => 'See where every dollar stands — claims, A/R, and patient balances.',
		'problem_card_2_title' => 'Front-desk partnership',
		'problem_card_2_text'  => 'We coach your team so clean data goes out and clean payments come back.',
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
		'faq_6_q'         => 'Which EMR systems do you work with?',
		'faq_6_a'         => 'We adapt to the EMR and clearinghouse systems your practice already uses, so there is no disruptive software migration required.',
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
			$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_desc|_a)$/', $key ) || 'seo_desc' === $key;
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
 * Assign specialty template + SEO to all registered specialty billing pages.
 */
function pps_assign_specialty_service_templates() {
	$content_version = '1.3.0';
	if ( get_option( 'pps_specialty_service_pages_version' ) === $content_version ) {
		return;
	}

	$title_map = array(
		'physical-therapy-billing-services'     => 'Physical Therapy Billing Services',
		'chiropractic-billing-services'         => 'Chiropractic Billing Services',
		'pain-management-billing-services'      => 'Pain Management Billing Services',
		'orthopedic-medical-billing-services'   => 'Orthopedic Medical Billing Services',
		'occupational-therapy-billing-services' => 'Occupational Therapy Billing Services',
		'speech-therapy-billing-services'       => 'Speech Therapy Billing Services',
		'pediatrics-billing-services'           => 'Pediatrics Billing Services',
		'plastic-surgery-billing-services'      => 'Plastic Surgery Billing Services',
		'podiatry-billing-services'             => 'Podiatry Billing Services',
		'psychiatry-billing-services'           => 'Psychiatry Billing Services',
		'psychology-billing-services'           => 'Psychology Billing Services',
		'pulmonology-billing-services'          => 'Pulmonology Billing Services',
		'rheumatology-billing-services'         => 'Rheumatology Billing Services',
		'telemedicine-billing-services'         => 'Telemedicine Billing Services',
		'urology-billing-services'              => 'Urology Billing Services',
		'wound-care-billing-services'           => 'Wound Care Billing Services',
	);

	foreach ( array_keys( pps_service_customizer_slugs() ) as $slug ) {
		$page = get_page_by_path( $slug );
		if ( ! $page ) {
			$page_id = wp_insert_post(
				array(
					'post_title'   => isset( $title_map[ $slug ] ) ? $title_map[ $slug ] : ucwords( str_replace( '-', ' ', $slug ) ),
					'post_name'    => $slug,
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_content' => '',
				)
			);
			if ( ! $page_id || is_wp_error( $page_id ) ) {
				continue;
			}
			$page = get_post( $page_id );
		}

		$defaults = pps_service_defaults_for( $slug );
		update_post_meta( $page->ID, '_wp_page_template', 'page-templates/specialty-service.php' );
		update_post_meta( $page->ID, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
		update_post_meta( $page->ID, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	}

	update_option( 'pps_specialty_service_pages_version', $content_version );
	update_option( 'pps_pt_service_template_version', '1.3.0' );
}
add_action( 'after_setup_theme', 'pps_assign_specialty_service_templates', 40 );
