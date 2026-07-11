<?php
/**
 * Theme Customizer settings and helpers.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Get a theme mod with default fallback.
 *
 * @param string $key     Setting key.
 * @param mixed  $default Default value.
 * @return mixed
 */
function pps_mod( $key, $default = '' ) {
	return get_theme_mod( $key, $default );
}

/**
 * Global site data helper.
 *
 * @param string $key Setting key without prefix.
 * @return string
 */
function site_data( $key ) {
	$defaults = array(
		'phone'         => '(833) 764-0178',
		'email'         => 'Info@PerformPracticeSolutions.com',
		'contact_email' => 'Info@PerformPracticeSolutions.com',
		'address'       => '1050 East Flamingo Rd, Suite 107-2470 Las Vegas, NV 89119',
		'cta_label'     => 'Book a Strategy Session',
		'cta_url'       => '#contact',
		'brand_name'    => 'Perform Practice Solutions',
		'brand_short'   => 'PPS',
	);

	$mod_key = 'pps_global_' . $key;
	$default = isset( $defaults[ $key ] ) ? $defaults[ $key ] : '';

	return (string) pps_mod( $mod_key, $default );
}

/**
 * Homepage content helper.
 *
 * @param string $key     Setting key without prefix.
 * @param string $default Optional override default.
 * @return string
 */
function page_home( $key, $default = '' ) {
	$defaults = pps_home_defaults();
	$mod_key  = 'pps_home_' . $key;

	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}

	return (string) pps_mod( $mod_key, $default );
}

/**
 * Default homepage copy (from Home content.md).
 *
 * @return array
 */
function pps_home_defaults() {
	return array(
		'hero_brand'              => 'Perform Practice Solutions',
		'hero_title'              => 'Medical Practice Management Services Built to Help You Focus on Care',
		'hero_lead'               => 'Running a healthcare practice means wearing a dozen hats you never trained for. We deliver medical practice management services covering billing, credentialing, virtual staffing, digital marketing, coaching, and AI automation — built around how your practice actually runs.',
		'hero_cta_primary'        => 'Book a Strategy Session',
		'hero_cta_primary_url'    => '#contact',
		'hero_cta_secondary'      => 'Explore Our Services',
		'hero_cta_secondary_url'  => '#services',
		'hero_visual_caption'     => 'From getting you paid faster to giving your front desk room to breathe.',

		'services_eyebrow'        => 'Our Services',
		'services_title'          => 'Complete Medical Practice Management for Every Specialty',
		'services_lead'           => 'Designed for physical therapy, chiropractic, occupational therapy, speech therapy, and specialty medical practices. Each service works independently or as a fully integrated system.',

		'service_1_title'         => 'Medical Billing Solutions',
		'service_1_text'          => 'Know exactly where every dollar stands with daily billing, claim scrubbing, and real-time revenue cycle visibility.',
		'service_1_url'           => '/billing-solutions/',
		'service_1_icon'          => 'fa-solid fa-file-invoice-dollar',

		'service_2_title'         => 'Medical Credentialing Services',
		'service_2_text'          => 'Full provider enrollment and payer contracting — with AI monitoring that flags stalled applications before they cost billable weeks.',
		'service_2_url'           => '/credentialing/',
		'service_2_icon'          => 'fa-solid fa-id-card-clip',

		'service_3_title'         => 'Virtual Medical Assistant',
		'service_3_text'          => 'Trained virtual staff for calls, scheduling, intake, benefits verification, and prior authorization tracking.',
		'service_3_url'           => '/med-va/',
		'service_3_icon'          => 'fa-solid fa-headset',

		'service_4_title'         => 'AI Automation & Workflows',
		'service_4_text'          => 'Custom EMR-integrated automation for scheduling, intake, reminders, referral outreach, and chatbots.',
		'service_4_url'           => '/ai-development/',
		'service_4_icon'          => 'fa-solid fa-microchip',

		'service_5_title'         => 'Digital Marketing Agency',
		'service_5_text'          => 'SEO, content, social, email, and design built around your specialty to attract the right patients.',
		'service_5_url'           => '/digital-marketing/',
		'service_5_icon'          => 'fa-solid fa-bullhorn',

		'service_6_title'         => 'Coaching for Healthcare Pros',
		'service_6_text'          => 'CEO Kevin Rausch coaches owners with systems, dashboards, and accountability so the practice grows even when you step away.',
		'service_6_url'           => '/about-us/',
		'service_6_icon'          => 'fa-solid fa-chalkboard-user',

		'about_eyebrow'           => 'Who We Are',
		'about_title'             => 'Built by People Who Have Actually Run a Practice',
		'about_text'              => 'Perform Practice Solutions was built for owners tired of losing time to admin work that has nothing to do with patient care. We handle billing, credentialing, marketing, staffing, and eligibility verification so you can run a more efficient, less stressful business. We are not a generic outsourcing firm — our team understands PT, chiropractic, OT, and speech therapy practices because we have worked inside them, typically supporting owners with 2 to 10 or more providers.',
		'about_cta'               => 'See If We\'re a Fit for Your Practice',
		'about_cta_url'           => '#contact',
		'about_float_label'       => 'Average revenue lift',
		'about_float_value'       => '+16%',
		'about_float_note'        => 'after onboarding',

		'insights_eyebrow'        => 'Results',
		'insights_title'          => 'Results Our Practice Management Clients See',
		'insights_lead'           => 'We built our medical practice management services around measurable outcomes, not vague promises.',
		'insights_note'           => 'The future of healthcare isn\'t just about better medicine. It\'s about smarter systems.',

		'help_eyebrow'            => 'EMR Transitions',
		'help_title'              => 'Already Planning an EMR Transition? We\'ve Got You Covered',
		'help_text'               => 'Switching EMR systems is one of the riskiest windows for collections to dip. We help clients baseline A/R days, denial rate, and clean claim percentage before go-live, then run daily charge reconciliation and rejection review for the first two weeks after cutover so revenue stays on track.',
		'help_note'               => 'We also confirm payer enrollment, fee schedule mapping, and clearinghouse connections ahead of time.',
		'help_cta'                => 'Contact Us Now',
		'help_cta_url'            => '#contact',

		'auto_eyebrow'            => 'AI & Automation',
		'auto_title'              => 'Your Practice Runs on Workflows. We Make Those Workflows Run Themselves',
		'auto_lead'               => 'Every practice depends on recurring tasks: scheduling, reminders, intake, authorization, follow-up, and reporting.',
		'auto_text'               => 'Handled manually, these tasks eat up hours your team could spend with patients. We build custom, AI-powered automation designed around how your practice actually operates — integrated directly with your EMR and built to scale. No generic software. No one-size-fits-all tools. Just automation with results you can measure from day one.',
		'auto_cta'                => 'See What Automation Can Do for Your Practice',
		'auto_cta_url'            => '/ai-development/',
		'auto_1_title'            => 'Phone & Text Automation',
		'auto_1_text'             => 'Automated phone and text systems that keep patients informed without tying up your front desk.',
		'auto_2_title'            => 'Referral Outreach',
		'auto_2_text'             => 'Referral outreach sequences that nurture relationships and help fill your schedule.',
		'auto_3_title'            => 'Website Chatbots',
		'auto_3_text'             => 'Integrated chatbots that answer questions and capture leads around the clock.',
		'auto_4_title'            => 'Documentation Support',
		'auto_4_text'             => 'Documentation and reporting support for clinicians so less time is lost to manual admin.',

		'founder_eyebrow'         => 'Coaching',
		'founder_name'            => 'Kevin Rausch, PT, MPT',
		'founder_role_1'          => 'CEO, Perform Practice Solutions',
		'founder_role_2'          => 'Practice Owner & Coach',
		'founder_role_3'          => 'Systems & Accountability',
		'founder_text'            => 'Running a successful practice takes more than clinical skill. Kevin works directly with owners to build the systems, dashboards, and team accountability behind a practice that grows and profits even when the owner steps away. Bi-monthly coaching sessions use a real-time metrics dashboard to replace guesswork with data-driven decisions.',
		'founder_cta'             => 'Get a Custom Quote',
		'founder_cta_url'         => '#contact',

		'stats_eyebrow'           => 'Revenue Reality',
		'stats_title'             => 'You\'re Probably Leaving Revenue on the Table',
		'stats_lead'              => 'Every unresolved claim, missed credential renewal, or inefficient front desk process is money your practice has already earned and simply isn\'t collecting.',
		'stat_1_value'            => '15%',
		'stat_1_label'            => 'of submitted claims are denied, creating unnecessary revenue uncertainty.',
		'stat_2_value'            => '65%',
		'stat_2_label'            => 'of denied claims are never resolved — that revenue is gone for good.',
		'stat_3_value'            => '10–15%',
		'stat_3_label'            => 'of total practice revenue is typically recoverable with proper follow-up.',
		'stats_cta'               => 'Find Out What You\'re Missing',
		'stats_cta_url'           => '#contact',

		'support_eyebrow'         => 'Who We Support',
		'support_title'           => 'Get the Support Your Practice Deserves, Without the Hassle',
		'support_text'            => 'Running a healthcare practice shouldn\'t feel like constantly putting out fires. Perform Practice Solutions simplifies the toughest parts of practice management so you can focus on what matters most — taking care of your patients. Our services flex from a single provider office to a multi-site group.',
		'support_cta'             => 'Book a Growth Session',
		'support_cta_url'         => '#contact',
		'support_q1'              => 'Solo clinics and small practices',
		'support_q2'              => 'Multi-specialty groups, hospitals, and health systems',
		'support_q3'              => 'Medical billing companies',
		'support_q4'              => 'Outpatient surgery centers',
		'support_q5'              => 'Nursing homes and assisted living facilities',
		'support_q6'              => 'Laboratories',

		'spec_eyebrow'            => 'Preferred by Leading EMR Systems',
		'spec_title'              => 'Specialty-Specific Practice Management, Not Guesswork',
		'spec_lead'               => 'We integrate with platforms you already use and specialize in the billing codes, payer requirements, and operational challenges of PT, chiropractic, OT, and speech therapy — plus a growing range of specialty medical providers.',
		'spec_cta'                => 'Contact Us Now',
		'spec_cta_url'            => '#contact',
		'spec_1'                  => 'Tride',
		'spec_2'                  => 'Tebra',
		'spec_3'                  => 'Athena Health',
		'spec_4'                  => 'Raintree',
		'spec_5'                  => 'CureMD',
		'spec_6'                  => 'PT · OT · Speech · Chiro',

		'faq_eyebrow'             => 'FAQs',
		'faq_title'               => 'Questions practice owners ask us',
		'faq_1_q'                 => 'What are medical practice management services?',
		'faq_1_a'                 => 'Medical practice management services cover the operational and financial functions that keep a healthcare practice running, including billing, credentialing, staffing, marketing, and eligibility verification. Perform Practice Solutions provides these as standalone services or as a fully integrated system.',
		'faq_2_q'                 => 'How can Perform Practice Solutions help me transition into practice ownership?',
		'faq_2_a'                 => 'We guide new owners through every stage of practice ownership, helping you understand daily operations and build efficient, profitable systems from the start.',
		'faq_3_q'                 => 'What are the biggest challenges you help practice owners overcome?',
		'faq_3_a'                 => 'We help practice owners manage staff, streamline workflows, simplify billing, improve patient satisfaction, and stay compliant using proven, practical solutions.',
		'faq_4_q'                 => 'Do you tailor your services to different specialties like speech therapy or chiropractic?',
		'faq_4_a'                 => 'Yes. We learn the specific workflows, billing requirements, and patient care models of each specialty, then build strategies suited to PT, speech therapy, chiropractic, or occupational therapy practices.',
		'faq_5_q'                 => 'Can you help with staff management and workflow improvements?',
		'faq_5_a'                 => 'Yes. We improve staffing structures, communication, and patient flow to boost productivity and build a stronger, more consistent team.',

		'test_eyebrow'            => 'Social Proof',
		'test_title'              => 'What Healthcare Providers Say About Our Practice Management Services',
		'test_lead'               => 'Practice owners across the country trust Perform Practice Solutions to manage billing, credentialing, marketing, and staffing so they can focus on patient care.',
		'test_1_quote'            => 'As a busy PT clinic owner I did not have the time to navigate the credentialing process. Perform Practice Solutions has been unbelievably helpful and convenient.',
		'test_1_name'             => 'Donna',
		'test_1_meta'             => 'Lake Worth, FL',
		'test_2_quote'            => 'I\'m very grateful for how you manage our billing so well. Everything is handled quickly, efficiently, and always with genuine care and professionalism.',
		'test_2_name'             => 'Michael Feldman',
		'test_2_meta'             => 'Chiropractor, California',
		'test_3_quote'            => 'PPS has done superb work for my practice. Our billing has never been more organized, efficient, or prompt.',
		'test_3_name'             => 'Lindsay Walker',
		'test_3_meta'             => 'Occupational Therapist, New Jersey',
		'test_4_quote'            => 'I\'ve been burned by so many billing companies, but since I switched to Perform Practice Solutions I\'ve been making more money — and it happened fast.',
		'test_4_name'             => 'Tom',
		'test_4_meta'             => 'Practice Owner & PT, Arizona',
		'test_5_quote'            => 'Partnering with Perform Practice Solutions was the best decision I\'ve made. Their team is knowledgeable, efficient, and always available.',
		'test_5_name'             => 'S. P.',
		'test_5_meta'             => 'Psychiatrist',
		'test_6_quote'            => 'I\'ve worked with Kevin and his team for 3 years. They take care of all of my billing and marketing needs. Their system is top-notch.',
		'test_6_name'             => 'Scott',
		'test_6_meta'             => 'Practice Owner & PT, Florida',

		'contact_eyebrow'         => 'Let\'s Chat',
		'contact_title'           => 'Flexible Packages Built Around Your Practice',
		'contact_lead'            => 'Whether you need one service or a fully outsourced back office, our pricing scales with you. Billing runs as a percentage of monthly collections — so we\'re only successful when your practice is.',
		'contact_form_title'      => 'Book a Strategy Session',
		'contact_form_lead'       => 'Share a few details and our team will follow up shortly. Or call (833) 764-0178.',
	);
}

/**
 * Register Customizer settings.
 *
 * @param WP_Customize_Manager $wp_customize Customizer object.
 */
function pps_customize_register( $wp_customize ) {

	/* ----- Global ----- */
	$wp_customize->add_panel(
		'pps_panel_global',
		array(
			'title'    => __( 'PPS — Global Contact', 'perform-practice' ),
			'priority' => 30,
		)
	);

	$wp_customize->add_section(
		'pps_section_global',
		array(
			'title' => __( 'Contact & CTA', 'perform-practice' ),
			'panel' => 'pps_panel_global',
		)
	);

	$global_fields = array(
		'brand_name'    => array( 'label' => 'Brand name', 'type' => 'text' ),
		'brand_short'   => array( 'label' => 'Brand short name', 'type' => 'text' ),
		'phone'         => array( 'label' => 'Phone', 'type' => 'text' ),
		'email'         => array( 'label' => 'Public email', 'type' => 'email' ),
		'contact_email' => array( 'label' => 'Form notification email', 'type' => 'email' ),
		'address'       => array( 'label' => 'Address', 'type' => 'textarea' ),
		'cta_label'     => array( 'label' => 'Header CTA label', 'type' => 'text' ),
		'cta_url'       => array( 'label' => 'Header CTA URL', 'type' => 'url' ),
	);

	foreach ( $global_fields as $key => $field ) {
		$setting_id = 'pps_global_' . $key;
		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => site_data( $key ),
				'sanitize_callback' => pps_sanitize_callback_for( $field['type'] ),
			)
		);
		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => $field['label'],
				'section' => 'pps_section_global',
				'type'    => ( 'email' === $field['type'] ) ? 'email' : ( ( 'url' === $field['type'] ) ? 'url' : ( ( 'textarea' === $field['type'] ) ? 'textarea' : 'text' ) ),
			)
		);
	}

	/* ----- Homepage ----- */
	$wp_customize->add_panel(
		'pps_panel_home',
		array(
			'title'    => __( 'PPS — Homepage', 'perform-practice' ),
			'priority' => 31,
		)
	);

	$sections = array(
		'hero'     => __( 'Hero', 'perform-practice' ),
		'services' => __( 'Services', 'perform-practice' ),
		'about'    => __( 'Who We Are', 'perform-practice' ),
		'insights' => __( 'Results / Insights', 'perform-practice' ),
		'help'     => __( 'EMR / Need Help', 'perform-practice' ),
		'auto'     => __( 'Automation', 'perform-practice' ),
		'founder'  => __( 'Founder', 'perform-practice' ),
		'stats'    => __( 'Stats', 'perform-practice' ),
		'support'  => __( 'Support CTA', 'perform-practice' ),
		'spec'     => __( 'Specialties', 'perform-practice' ),
		'faq'      => __( 'FAQs', 'perform-practice' ),
		'test'     => __( 'Testimonials', 'perform-practice' ),
		'contact'  => __( 'Contact', 'perform-practice' ),
	);

	foreach ( $sections as $slug => $title ) {
		$wp_customize->add_section(
			'pps_section_home_' . $slug,
			array(
				'title' => $title,
				'panel' => 'pps_panel_home',
			)
		);
	}

	$defaults = pps_home_defaults();
	$section_map = array(
		'hero_'      => 'hero',
		'services_'  => 'services',
		'service_'   => 'services',
		'about_'     => 'about',
		'insights_'  => 'insights',
		'help_'      => 'help',
		'auto_'      => 'auto',
		'founder_'   => 'founder',
		'stats_'     => 'stats',
		'stat_'      => 'stats',
		'support_'   => 'support',
		'spec_'      => 'spec',
		'faq_'       => 'faq',
		'test_'      => 'test',
		'contact_'   => 'contact',
	);

	foreach ( $defaults as $key => $default ) {
		$section_slug = 'hero';
		foreach ( $section_map as $prefix => $slug ) {
			if ( 0 === strpos( $key, $prefix ) ) {
				$section_slug = $slug;
				break;
			}
		}

		$type = 'text';
		if ( false !== strpos( $key, '_text' ) || false !== strpos( $key, '_lead' ) || false !== strpos( $key, '_quote' ) || false !== strpos( $key, '_a' ) || false !== strpos( $key, '_note' ) || false !== strpos( $key, '_label' ) ) {
			$type = 'textarea';
		}
		if ( false !== strpos( $key, '_url' ) ) {
			$type = 'url';
		}

		$setting_id = 'pps_home_' . $key;
		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $default,
				'sanitize_callback' => pps_sanitize_callback_for( $type ),
			)
		);
		$wp_customize->add_control(
			$setting_id,
			array(
				'label'   => ucwords( str_replace( '_', ' ', $key ) ),
				'section' => 'pps_section_home_' . $section_slug,
				'type'    => ( 'url' === $type ) ? 'url' : ( ( 'textarea' === $type ) ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_customize_register' );

/**
 * Pick sanitize callback by control type.
 *
 * @param string $type Control type.
 * @return callable
 */
function pps_sanitize_callback_for( $type ) {
	if ( 'url' === $type ) {
		return 'esc_url_raw';
	}
	if ( 'email' === $type ) {
		return 'sanitize_email';
	}
	if ( 'textarea' === $type ) {
		return 'sanitize_textarea_field';
	}
	return 'sanitize_text_field';
}
