<?php
/**
 * Coaching for Healthcare Professionals — content, Customizer, page + menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from Coaching for Healthcare Professionals.docx.
 *
 * @return array
 */
function pps_coach_defaults() {
	return array(
		'seo_title' => 'Coaching Services for Healthcare Professionals | Perform Practice Solutions',
		'seo_desc'  => 'Expert coaching for healthcare professionals to boost leadership skills, reduce burnout, and drive practice growth. Proven strategies for physicians, nurses, and clinic leaders.',

		'hero_eyebrow'   => 'Coaching for Healthcare Professionals',
		'hero_title'     => 'Coaching for healthcare professionals that transforms practice and leadership',
		'hero_lead'      => 'Professional coaching tailored to healthcare professionals helps you navigate the unique pressures of clinical practice, strengthen your leadership capabilities, and build a sustainable career without sacrificing your well-being.',
		'hero_text'      => 'As a dedicated healthcare professional coach, Kevin Rausch and the team at Perform Practice Solutions built this program for exactly that scenario.',
		'hero_note'      => 'If you are a physical therapist, occupational therapist, chiropractor, or speech pathologist who runs a clinic and feels more like an employee than a CEO, this program is designed to change that. Owners across the United States have used this system to get out of the daily chaos, build teams that operate without them, and grow revenue without burning out.',
		'hero_cta'       => 'Schedule a Strategy Call',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'Who It’s For',
		'hero_cta_2_url' => '#audience',

		'audience_eyebrow' => 'Who It’s For',
		'audience_title'   => 'Who this healthcare coaching program is for',
		'audience_lead'    => 'This program is built for Allied Health practice owners in the United States who are ready to run their clinic with intention. You are the right fit if:',
		'audience_1'       => 'You own or co-own an Allied Health practice with 2 to 10 or more providers and you feel stretched thin across clinical care and daily operations',
		'audience_2'       => 'Your clinic generates solid patient volume but cash flow feels inconsistent and profit margins are tighter than they should be',
		'audience_3'       => 'Your front desk drops leads, mismanages the schedule, or has no real system for reactivating past patients',
		'audience_4'       => 'You cannot step away from the clinic without things falling apart, and that reality is wearing on you',
		'audience_5'       => 'You are relying entirely on insurance reimbursements and want to build additional revenue streams that give you more control',
		'audience_6'       => 'You make major business decisions based on instinct rather than numbers, and you want to change that',
		'audience_closing' => 'The ideal client is an established, growth-minded Allied Health practice owner who is generating revenue but is held back by operational friction, administrative burden, and the absence of real business infrastructure. This program gives you the tools and the support to fix that.',

		'deliver_eyebrow' => 'What You Get',
		'deliver_title'   => 'What Perform Practice Solutions healthcare coaching and consulting program delivers',
		'deliver_lead'    => 'This is not a generic leadership seminar or an online course you watch and forget. The Perform Practice Solutions coaching program is a hands on, structured engagement built around leadership coaching for healthcare professionals, going deep into your specific clinic and building real systems alongside you.',
		'deliver_1_title' => 'Clinic Health Analysis and Gap Identification',
		'deliver_1_text'  => 'Kevin and our team start by conducting a thorough review of your clinic\'s current operations. This includes your billing performance, scheduling patterns, front office processes, provider productivity, and revenue model. The goal is to surface the exact places where time and money are being lost, so you are solving the right problems instead of guessing.',
		'deliver_2_title' => 'The Perform Metrics Dashboard',
		'deliver_2_text'  => 'One of the most powerful shifts in this program is replacing gut-feel management with actual data. Your clinic is integrated with a custom analytics dashboard that tracks your key performance indicators in real time. When revenue dips or patient volume drops, you will know exactly where the breakdown is, whether it is scheduling, phone conversions, provider coding efficiency, or something else entirely. Decisions become clear and objective, not emotional.',
		'deliver_3_title' => 'Operational Process Blueprints',
		'deliver_3_text'  => 'You will leave this program with standardized, repeatable systems that your team can follow without you standing over them. This includes front office protocols, optimized scheduling frameworks, provider workflow standards, and clear accountability structures. When your staff knows exactly what to do and how to measure it, your clinic runs more smoothly whether you are in the building or not.',
		'deliver_4_title' => 'Alternative Revenue Stream Development',
		'deliver_4_text'  => 'Kevin brings personal expertise in helping Allied Health owners diversify income beyond insurance reimbursements. Depending on your clinic\'s specialty and market, this may include integrating cash-based services such as fitness memberships, Pilates, massage, or specialized wellness programs. These additions create a financial foundation that is not entirely at the mercy of payer rate changes.',

		'diff_eyebrow' => 'What Makes Us Different',
		'diff_title'   => 'What makes Perform Practice Solutions different',
		'diff_1_title' => 'Direct access to Kevin Rausch, CEO',
		'diff_1_text'  => 'You are not handed off to a junior coach or a generic program. Kevin works with you personally throughout the engagement.',
		'diff_2_title' => 'A direct line to your dedicated business manager',
		'diff_2_text'  => 'Support does not wait for the next scheduled session. You have someone available to help you move through day-to-day questions and operational challenges.',
		'diff_3_title' => 'Built specifically for Allied Health',
		'diff_3_text'  => 'This is not a general business coaching program adapted for healthcare. Every framework, every system, and every strategy is designed for the realities of physical therapy, occupational therapy, chiropractic, and speech pathology practices.',
		'diff_4_title' => 'Customized to your clinic',
		'diff_4_text'  => 'The program is tailored to fit your practice size, specialty, team structure, revenue model, and goals, not a one-size-fits-all curriculum.',
		'diff_5_title' => 'Metrics-driven from day one',
		'diff_5_text'  => 'The Perform Metrics Dashboard replaces guesswork with real data so you can see exactly what is improving and where more attention is needed.',
		'diff_6_title' => 'Revenue diversification expertise',
		'diff_6_text'  => 'Kevin brings hands-on experience helping Allied Health owners integrate cash-based services that meaningfully expand income beyond insurance dependence.',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_1_q'     => 'What is allied health practice coaching?',
		'faq_1_a'     => 'Allied health practice coaching is a structured, one-on-one engagement that helps clinic owners build the business systems, leadership skills, and financial visibility they need to run a profitable, self-sustaining practice. At Perform Practice Solutions, this means working directly with Kevin Rausch to analyze your clinic operations, implement real-time performance tracking, standardize your team\'s processes, and develop revenue streams that go beyond insurance reimbursements.',
		'faq_2_q'     => 'What makes the best coaching for healthcare professionals?',
		'faq_2_a'     => 'The best coaching for healthcare professionals goes beyond generic business advice and speaks directly to the realities of running a clinical practice: inconsistent cash flow, staff who need clear systems, and the difficulty of stepping away without things falling apart. Perform Practice Solutions delivers this through direct, personal access to Kevin Rausch rather than a junior coach or a prerecorded course. The program is built specifically for Allied Health owners, uses real-time data through the Perform Metrics Dashboard instead of guesswork, and is customized to your clinic\'s size, specialty, and goals. That combination of clinical relevance, hands-on access, and measurable results is what separates effective coaching for healthcare professionals from a general leadership seminar.',
		'faq_3_q'     => 'What does healthcare executive coaching look like at Perform Practice Solutions?',
		'faq_3_a'     => 'Healthcare executive coaching at Perform Practice Solutions is designed for Allied Health owners who are ready to lead like a CEO instead of operating like the busiest employee in the building. The engagement covers the core responsibilities of running a practice at the executive level: reading and acting on financial and operational metrics, building leadership structures your team can execute without you, and developing revenue strategy that reduces dependence on insurance reimbursements. Rather than theoretical leadership frameworks, this coaching is grounded in your clinic\'s actual numbers and translated into decisions you can make with confidence.',
		'faq_4_q'     => 'Is this program available to practice owners across the United States?',
		'faq_4_a'     => 'Yes. All coaching sessions are conducted virtually, which means this program is accessible to Allied Health practice owners in all 50 states. Whether you are in a major metro market or a rural community, the program works in your environment.',

		'cta_title'      => 'Ready to build a clinic that works without you running every part of it?',
		'cta_text'       => 'If you are an Allied Health practice owner in the United States who is ready to move from daily operational chaos to a structured, scalable business, this is the right starting point.',
		'cta_text_2'     => 'Schedule a strategy call with Kevin Rausch and the Perform Practice Solutions team to walk through your clinic\'s current situation and explore what this program can unlock for you. There is no obligation. This call is a real conversation about your clinic, your goals, and whether the program is a match for where you are right now.',
		'cta_button'     => 'Schedule a Strategy Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * Coaching page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_coach( $key, $default = '' ) {
	$defaults = pps_coach_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_coach_' . $key, $default );
}

/**
 * Register Customizer for coaching page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_coach_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_coach',
		array(
			'title'    => __( 'Healthcare Coaching', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 20,
		)
	);

	foreach ( pps_coach_defaults() as $key => $default ) {
		$setting_id  = 'pps_coach_' . $key;
		$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_a|_closing|seo_desc|audience_\d+)$/', $key );
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
				'section' => 'pps_section_coach',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_coach_customize_register', 24 );

/**
 * Whether current page uses coaching template.
 *
 * @return bool
 */
function pps_is_coach_page() {
	return is_page_template( 'page-templates/coaching.php' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_coach_document_title( $title ) {
	if ( ! pps_is_coach_page() ) {
		return $title;
	}
	$custom = page_coach( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_coach_document_title', 26 );

/**
 * Meta description.
 */
function pps_coach_meta_description() {
	if ( ! pps_is_coach_page() ) {
		return;
	}
	$desc = page_coach( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_coach_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_coach_skip_generic_meta() {
	if ( pps_is_coach_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_coach_skip_generic_meta' );

/**
 * Add Coaching item to the primary menu.
 *
 * @param int $page_id Page ID.
 */
function pps_attach_coach_to_primary_menu( $page_id ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $page_id ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	$coach_item_id = 0;
	$about_pos     = 50;

	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent !== 0 ) {
			continue;
		}
		$slug = get_post_field( 'post_name', $item->object_id );
		if ( 'coaching-for-healthcare-professionals' === $slug || 'Coaching' === $item->title ) {
			$coach_item_id = (int) $item->ID;
		}
		if ( 'about-us' === $slug ) {
			$about_pos = (int) $item->menu_order;
		}
	}

	if ( $coach_item_id ) {
		wp_update_nav_menu_item(
			$menu_id,
			$coach_item_id,
			array(
				'menu-item-title'     => 'Coaching',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => (int) $page_id,
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => 0,
			)
		);
		return;
	}

	wp_update_nav_menu_item(
		$menu_id,
		0,
		array(
			'menu-item-title'     => 'Coaching',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => (int) $page_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => 0,
			'menu-item-position'  => max( 1, $about_pos - 1 ),
		)
	);
}

/**
 * Create coaching page, assign template/SEO, update menu.
 */
function pps_setup_coach_page() {
	$version = '1.0.1';
	if ( get_option( 'pps_coach_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_coach_defaults();
	$page     = get_page_by_path( 'coaching-for-healthcare-professionals' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Coaching for Healthcare Professionals',
				'post_name'   => 'coaching-for-healthcare-professionals',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/coaching.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_coach_to_primary_menu( $page_id );
	update_option( 'pps_coach_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_coach_page', 44 );
