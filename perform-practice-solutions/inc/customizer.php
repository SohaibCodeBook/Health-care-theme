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
 * Default homepage copy (from live site content, redesigned structure).
 *
 * @return array
 */
function pps_home_defaults() {
	return array(
		'hero_brand'       => 'Perform Practice Solutions',
		'hero_title'       => 'Make Care Your Primary Focus',
		'hero_lead'        => 'From getting you paid to providing office support — PPS maps your path with streamlined services that help you have more capacity to provide care.',
		'hero_cta_primary' => 'Book a Strategy Session',
		'hero_cta_primary_url' => '#contact',
		'hero_cta_secondary' => 'Explore Our Services',
		'hero_cta_secondary_url' => '#services',
		'hero_visual_caption' => 'Built for clinics ready to grow with clarity.',

		'services_eyebrow' => 'Our Services',
		'services_title'   => 'What We Provide',
		'services_lead'    => 'End-to-end practice support — billing, staffing, marketing, credentialing, and custom AI automation.',

		'service_1_title'  => 'Perform Billing Solutions',
		'service_1_text'   => 'Our transparent billing platform shows you exactly where your dollars are, creating an efficient and streamlined system to optimize cash flow.',
		'service_1_url'    => '/billing-solutions/',
		'service_1_icon'   => 'fa-solid fa-file-invoice-dollar',

		'service_2_title'  => 'Virtual Staffing',
		'service_2_text'   => 'Our virtual staffing services are the right solution to make your practice more profitable and efficient. You won’t believe the time — and money — you save.',
		'service_2_url'    => '/med-va/',
		'service_2_icon'   => 'fa-solid fa-headset',

		'service_3_title'  => 'Perform Marketing Solutions',
		'service_3_text'   => 'Our medical marketing services take the guesswork out of promoting and building your practice with packages designed for your unique needs.',
		'service_3_url'    => '/digital-marketing/',
		'service_3_icon'   => 'fa-solid fa-bullhorn',

		'service_4_title'  => 'Credentialing / Contract',
		'service_4_text'   => 'Perform Practice Solutions handles every detail of credentialing and contracting so your team stays compliant and your revenue keeps flowing.',
		'service_4_url'    => '/credentialing/',
		'service_4_icon'   => 'fa-solid fa-id-card-clip',

		'service_5_title'  => 'AI Development',
		'service_5_text'   => 'Reduce admin work and improve the patient experience with secure automation — intake, scheduling, reminders, and reporting — tailored to your workflows.',
		'service_5_url'    => '/ai-development/',
		'service_5_icon'   => 'fa-solid fa-microchip',

		'about_eyebrow'    => 'Who We Are',
		'about_title'      => 'PPS — Medical Billing and Credentialing Solutions in the USA',
		'about_text'       => 'Perform Practice Solutions is the secret weapon for successful practices all over the U.S. We simplify the most challenging — and resource-draining — aspects of managing a healthcare organization, including industry-specific marketing, billing, sales consulting, credentialing, and patient eligibility verification. We help you run your business with more efficiency and less stress.',
		'about_cta'        => 'Read More',
		'about_cta_url'    => '/about-us/',

		'help_eyebrow'     => 'Need Help',
		'help_title'       => 'Need help navigating the reality of owning your own practice or clinic?',
		'help_text'        => 'Perform Practice Solutions helps clinic owners nationwide adjust to the ever-changing reality of practice ownership. We work with you to create a business that works for you rather than against you — with support for your largest challenges, innovative solutions, marketing, and transparent billing.',
		'help_note'        => 'It’s not easy, but it is possible.',
		'help_cta'         => 'Learn About Us',
		'help_cta_url'     => '/about-us/',

		'auto_eyebrow'     => 'AI & Automation',
		'auto_title'       => 'Your Practice Runs on Workflows. We Make Those Workflows Run Themselves',
		'auto_lead'        => 'Purpose-built automation for healthcare practices that are ready to stop doing things the hard way.',
		'auto_text'        => 'Every practice runs on recurring tasks: scheduling, reminders, intake, authorization, follow-up, and reporting. PPS builds custom AI-powered automations designed around how your practice actually operates — integrated with your EMR and built to scale. No generic software. Just automation that fits and delivers measurable results.',
		'auto_cta'         => 'See What Automation Can Do',
		'auto_cta_url'     => '/ai-development/',
		'auto_1_title'     => 'Phone & Text Automation',
		'auto_1_text'      => 'Fully automated phone and text systems that keep patients informed without tying up your front desk.',
		'auto_2_title'     => 'Referral Outreach',
		'auto_2_text'      => 'Automated new-client referral outreach that nurtures relationships and fills your schedule.',
		'auto_3_title'     => 'Website Chatbot',
		'auto_3_text'      => 'A fully automated, integrated chatbot that answers questions and captures leads around the clock.',
		'auto_4_title'     => 'Front Desk Tools',
		'auto_4_text'      => 'Front desk support and automation tools that reduce friction from check-in to follow-up.',

		'founder_eyebrow'  => 'Meet Kevin Rausch',
		'founder_name'     => 'Kevin Rausch, PT, MPT',
		'founder_role_1'   => 'President of Rausch Physical Therapy',
		'founder_role_2'   => 'Founder of homeprograms.net',
		'founder_role_3'   => 'Founder of Waypoint Children’s Foundation',
		'founder_text'     => 'Kevin is a nationally renowned speaker whose mission is to take the healthcare profession to the next level. As a successful business creator and owner, Kevin has built numerous clinics and organizations from the ground up.',
		'founder_cta'      => 'Read More',
		'founder_cta_url'  => '/about-us/',

		'stats_eyebrow'    => 'Live Support',
		'stats_title'      => 'You’re probably leaving a lot on the table',
		'stats_lead'       => 'Missing revenue is often hiding in denials, follow-up gaps, and unresolved claims.',
		'stat_1_value'     => '15%',
		'stat_1_label'     => 'of submitted claims are denied, creating revenue uncertainty.',
		'stat_2_value'     => '65%',
		'stat_2_label'     => 'of denied claims stay unresolved, permanently costing practices.',
		'stat_3_value'     => '10–15%',
		'stat_3_label'     => 'of total revenue is recoverable with proper follow-up.',

		'support_eyebrow'  => 'Missing Revenue',
		'support_title'    => 'Get the support your practice deserves — without the hassle.',
		'support_text'     => 'Running a healthcare practice shouldn’t feel like you’re constantly putting out fires. Perform Practice Solutions simplifies marketing, billing, credentialing, and everything in between so you can focus on patients.',
		'support_cta'      => 'Book a Growth Session',
		'support_cta_url'  => '#contact',
		'support_q1'       => 'Are your marketing efforts attracting the right patients?',
		'support_q2'       => 'Are you billing correctly and maximizing your reimbursements?',
		'support_q3'       => 'Are you handling patient eligibility verification quickly and accurately?',
		'support_q4'       => 'Do you have the right strategies to boost your practice’s growth?',
		'support_q5'       => 'Are your team members up-to-date on the latest billing codes and regulations?',
		'support_q6'       => 'Is your practice leveraging the right tools to track and manage revenue?',

		'spec_eyebrow'     => 'Preferred by Leading EMR Systems',
		'spec_title'       => 'We know your field.',
		'spec_lead'        => 'Our specialty-specific teams don’t just know the industry — we specialize in marketing, billing, and operations for clinics and practices.',
		'spec_cta'         => 'Contact Us Now',
		'spec_cta_url'     => '#contact',
		'spec_1'           => 'Physical Therapy',
		'spec_2'           => 'Occupational Therapy',
		'spec_3'           => 'Speech Therapy',
		'spec_4'           => 'Chiropractic',
		'spec_5'           => 'Pain Management',
		'spec_6'           => 'Behavioral Health',

		'faq_eyebrow'      => 'FAQs',
		'faq_title'        => 'Questions practice owners ask us',
		'faq_1_q'          => 'How can Perform Practice Solutions help me transition into owning a PT or therapy practice?',
		'faq_1_a'          => 'We guide you through every step — helping you understand daily operations and set up efficient, profitable systems for a smooth transition into ownership.',
		'faq_2_q'          => 'What are the biggest challenges you help practice owners overcome?',
		'faq_2_a'          => 'We help you manage staff, fix workflows, simplify billing, improve patient satisfaction, and stay compliant using practical, proven solutions.',
		'faq_3_q'          => 'How do you tailor consulting for specialties like speech or chiropractic?',
		'faq_3_a'          => 'We learn your specialty’s workflows, billing needs, and patient care, then create strategies that fit PT, speech, chiropractic, or OT practices.',
		'faq_4_q'          => 'Can you assist with staff management and workflow improvements?',
		'faq_4_a'          => 'Yes. We improve staff roles, communication, and patient flow to boost productivity and create a stronger, happier team.',
		'faq_5_q'          => 'What role does financial strategy play in your consulting?',
		'faq_5_a'          => 'We review your revenue, manage expenses, and build a solid budget to support steady growth and long-term profit.',

		'test_eyebrow'     => 'Social Proof',
		'test_title'       => 'What Healthcare Providers Say About Us',
		'test_1_quote'     => 'As a busy PT clinic owner I did not have the time to navigate the credentialing process. Perform Practice Solutions has been unbelievably helpful and convenient.',
		'test_1_name'      => 'Donna',
		'test_1_meta'      => 'Lake Worth, FL',
		'test_2_quote'     => 'I’m very grateful for how you manage our billing so well. Everything is handled quickly, efficiently, and always with genuine care and professionalism.',
		'test_2_name'      => 'Michael Feldman',
		'test_2_meta'      => 'Chiropractor, California',
		'test_3_quote'     => 'PPS has done superb work for my practice. Our billing has never been more organized, efficient, or prompt.',
		'test_3_name'      => 'Lindsay Walker',
		'test_3_meta'      => 'Occupational Therapist, New Jersey',
		'test_4_quote'     => 'I’ve been burned by so many billing companies, but since I switched to Perform Practice Solutions I’ve been making more money — and it happened fast.',
		'test_4_name'      => 'Tom',
		'test_4_meta'      => 'Practice Owner & PT, Arizona',
		'test_5_quote'     => 'Partnering with Perform Practice Solutions was the best decision I’ve made. Their team is knowledgeable, efficient, and always available.',
		'test_5_name'      => 'S. P.',
		'test_5_meta'      => 'Psychiatrist',
		'test_6_quote'     => 'I’ve worked with Kevin and his team for 3 years. They take care of all of my billing and marketing needs. Their system is top-notch.',
		'test_6_name'      => 'Scott',
		'test_6_meta'      => 'Practice Owner & PT, Florida',

		'contact_eyebrow'  => 'Let’s Chat',
		'contact_title'    => 'Take the first step toward a practice that runs with less stress',
		'contact_lead'     => 'Let’s talk about healthcare billing, eligibility, marketing, practice sales, credentialing — or any question you have about practice ownership.',
		'contact_form_title' => 'Book a conversation',
		'contact_form_lead'  => 'Share a few details and our team will follow up shortly.',
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
		'help'     => __( 'Need Help', 'perform-practice' ),
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
		'hero_'     => 'hero',
		'services_' => 'services',
		'service_'  => 'services',
		'about_'    => 'about',
		'help_'     => 'help',
		'auto_'     => 'auto',
		'founder_'  => 'founder',
		'stats_'    => 'stats',
		'stat_'     => 'stats',
		'support_'  => 'support',
		'spec_'     => 'spec',
		'faq_'      => 'faq',
		'test_'     => 'test',
		'contact_'  => 'contact',
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
