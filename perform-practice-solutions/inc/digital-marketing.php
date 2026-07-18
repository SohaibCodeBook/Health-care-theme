<?php
/**
 * Digital Marketing Healthcare Agency — content, Customizer, page + menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default theme image URL for DM page.
 *
 * @param string $file Filename in assets/images.
 * @return string
 */
function pps_dm_theme_image( $file ) {
	return PPS_THEME_URI . '/assets/images/' . ltrim( $file, '/' );
}

/**
 * Default content from Digital Marketing Healthcare Agency.docx.
 *
 * @return array
 */
function pps_dm_defaults() {
	return array(
		'seo_title' => 'Digital Marketing Healthcare Agency | Perform Practice Solutions',
		'seo_desc'  => 'Perform Practice Solutions is a digital marketing healthcare agency helping practices grow through SEO, content, and patient acquisition strategies.',

		'hero_eyebrow'   => 'Digital Marketing Healthcare Agency',
		'hero_title'     => 'Helping USA practices attract more qualified patients',
		'hero_lead'      => 'A digital marketing healthcare agency is a specialized marketing partner that builds websites, SEO strategies, and paid advertising campaigns specifically for medical, dental, mental health, and wellness practices, while maintaining compliance with HIPAA and healthcare advertising regulations.',
		'hero_text'      => 'Perform Practice Solutions is a digital marketing healthcare agency serving practices across the United States. We combine the use of digital marketing in healthcare with deep regulatory knowledge, so your practice attracts qualified patients without risking compliance violations or wasted ad spend.',
		'hero_cta'       => 'Schedule a Consultation',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See How It Works',
		'hero_cta_2_url' => '#process',
		'hero_image'     => '',

		'why_eyebrow' => 'The Challenge',
		'why_title'   => 'Why most marketing agencies struggle with healthcare practices',
		'why_text'    => 'Most healthcare providers face a fundamental challenge: traditional marketing agencies don\'t understand the complexity of healthcare messaging. They don\'t know why certain patient education content converts better than others, or how to structure paid campaigns that comply with healthcare advertising rules while still reaching new patients effectively.',
		'why_stakes'  => 'The stakes are higher in healthcare. A poorly targeted ad wastes budget. A HIPAA-non-compliant landing page creates liability. A messaging strategy that doesn\'t address patient objections leaves appointment slots unfilled.',

		'deliver_eyebrow' => 'What This Service Delivers',
		'deliver_title'   => 'Patient growth built for healthcare — not retail playbooks',
		'deliver_1_value' => '30–50%',
		'deliver_1_title' => 'Patient appointment growth without compliance risk',
		'deliver_1_text'  => 'Most practices see a 30-50% increase in qualified inquiries within 90 days when campaigns are built on proper healthcare messaging frameworks and regulatory awareness.',
		'deliver_2_value' => 'Qualified',
		'deliver_2_title' => 'Traffic that converts',
		'deliver_2_text'  => 'Your website and ads attract patients actively seeking your specific services, not tire-kickers or competitors scouting your pricing.',
		'deliver_3_value' => 'HIPAA',
		'deliver_3_title' => 'Peace of mind on regulatory standards',
		'deliver_3_text'  => 'Every campaign element is built with HIPAA considerations and healthcare advertising best practices, so you can focus on patient care.',
		'deliver_closing' => 'The practices we work with across the USA typically spend the first 60 days experiencing inconsistent results because their previous marketing hasn\'t been tailored to healthcare decision-making or compliance requirements.',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'How Perform Practice Solutions digital marketing services for healthcare work',
		'step_1_title'    => 'Audit Your Current Patient Acquisition Channels',
		'step_1_text'     => 'We begin by analyzing how patients currently find you. This includes reviewing your existing website performance data, understanding which services drive the most patient inquiries, and identifying where prospective patients drop off before scheduling an appointment. We also examine your competitors\' digital presence to understand positioning gaps in your market. This foundational step ensures every strategy we build targets your actual growth opportunity, not assumptions.',
		'step_2_title'    => 'Develop Your Healthcare-Specific Messaging Framework',
		'step_2_text'     => 'Healthcare buying decisions are driven by trust, credibility, and understanding of outcomes. We craft messaging that addresses the specific concerns of your target patient demographic. For an orthopedic practice, this means different messaging than a dermatology clinic. For a mental health provider, it means addressing stigma and treatment efficacy questions upfront. This messaging becomes the backbone for your website, ad copy, and patient education content.',
		'step_3_title'    => 'Build and Optimize Your Digital Presence',
		'step_3_text'     => 'Your website is your 24/7 patient acquisition tool. We ensure it clearly communicates your services, addresses common patient questions, and includes appointment scheduling that removes friction from the booking process. We integrate SEO best practices tailored to healthcare searches so patients in your region find you when searching for your specific services. Beyond the website, we establish or optimize your Google Business Profile and other foundational digital properties that impact local visibility across the USA.',
		'step_4_title'    => 'Launch Targeted Paid Campaigns',
		'step_4_text'     => 'Once messaging is clear and your digital foundation is strong, we deploy paid advertising on platforms like Google Ads and Facebook, targeting specific patient demographics and search behaviors. Healthcare advertisers must follow strict platform policies, and we manage compliance at every step. Campaigns are built to move cold prospects toward scheduling by addressing objections and highlighting what makes your practice worth choosing.',
		'step_5_title'    => 'Measure, Report, and Refine',
		'step_5_text'     => 'We provide transparent reporting on how each campaign element performs. You\'ll see not just clicks and impressions, but meaningful metrics like appointment requests, actual appointments scheduled, and cost per new patient. This data guides continuous optimization so your marketing budget works harder each month.',

		'apart_eyebrow' => 'Why Choose Us',
		'apart_title'   => 'What sets Perform Practice Solutions healthcare digital marketing agency apart',
		'apart_image'   => '',
		'apart_1_title' => 'Deep healthcare marketing knowledge',
		'apart_1_text'  => 'Our team has worked with dozens of practices across the USA and understands the regulatory landscape, patient psychology, and messaging strategies that work in healthcare specifically.',
		'apart_2_title' => 'Compliance-first approach',
		'apart_2_text'  => 'Every campaign is built with HIPAA awareness and healthcare advertising compliance embedded, not added as an afterthought.',
		'apart_3_title' => 'Proven patient acquisition results',
		'apart_3_text'  => 'We measure success by new patient appointments and revenue impact, not vanity metrics. Practices working with us typically see measurable appointment growth within 90 days.',
		'apart_4_title' => 'Ongoing strategic partnership',
		'apart_4_text'  => 'We don\'t hand off a campaign and disappear. You receive regular reporting, quarterly strategy reviews, and continuous optimization based on what\'s working.',
		'apart_5_title' => 'Custom strategies for your practice type',
		'apart_5_text'  => 'A pediatric clinic needs different positioning than an urgent care center. Our approach tailors every element to your specific service mix and patient base.',

		'test_eyebrow' => 'What Practice Owners Are Saying',
		'test_title'   => 'Results that show up on the calendar — not just the dashboard',
		'test_1_quote' => 'I spent two years throwing money at agencies that didn\'t understand healthcare. Within 90 days of switching, our qualified consultation requests nearly doubled and our front desk stopped fielding calls from people who weren\'t even a fit for our services. That alone saved us hours every week.',
		'test_1_name'  => 'Dr. Chen',
		'test_1_meta'  => 'Clinic Owner',
		'test_2_quote' => 'What sold me wasn\'t the pitch, it was how much they understood HIPAA and advertising compliance before I even asked. I didn\'t have to explain our regulatory concerns. They already knew the questions to ask. Our new patient appointments grew steadily, and I finally trust what\'s happening with our ad spend.',
		'test_2_name'  => 'M. Diallo',
		'test_2_meta'  => 'Practice Administrator',
		'test_3_quote' => 'We had been burned by a generalist marketing company that treated us like a retail store. This team rebuilt our messaging around how patients actually decide on a dermatologist, and within a few months our website went from collecting dust to actually filling our calendar.',
		'test_3_name'  => 'Dr. Park',
		'test_3_meta'  => 'Clinic Owner',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_1_q'     => 'What is a digital marketing healthcare agency?',
		'faq_1_a'     => 'A digital marketing healthcare agency is a marketing firm that specializes exclusively in promoting medical and healthcare practices online, building strategies around HIPAA compliance, patient trust, and healthcare specific search behavior rather than general business marketing tactics.',
		'faq_2_q'     => 'What makes digital marketing and healthcare different from marketing in other industries?',
		'faq_2_a'     => 'Healthcare marketing must comply with HIPAA, FDA guidance on certain claims, and platform specific advertising policies for medical content. Messaging must also address patient trust and health outcomes, which requires an understanding of how healthcare consumers make decisions differently than typical retail or ecommerce customers.',
		'faq_3_q'     => 'What if our practice has never run paid advertising before?',
		'faq_3_a'     => 'We manage the entire process, including account setup, campaign management, compliance monitoring, and monthly reporting. You receive clear updates on performance and new patient volume without needing any technical marketing knowledge.',
		'faq_4_q'     => 'What factors affect the cost of digital marketing services for healthcare?',
		'faq_4_a'     => 'Cost depends on practice type, competition level in your geographic market, the specific services being promoted, and how aggressively you want to scale patient volume. Custom quotes are typically built around these factors rather than a flat, one size fits all price.',

		'cta_title'      => 'Ready to attract more qualified patients to your practice?',
		'cta_text'       => 'Healthcare practices across the United States are growing predictably by partnering with a dedicated digital marketing healthcare agency instead of relying on inconsistent referrals. If your practice is ready to build a reliable patient acquisition system, schedule a consultation to discuss your specific goals and what is possible for your practice.',
		'cta_button'     => 'Schedule a Consultation',
		'cta_button_url' => '#contact',
	);
}

/**
 * Digital marketing page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_dm( $key, $default = '' ) {
	$defaults = pps_dm_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	$value = (string) get_theme_mod( 'pps_dm_' . $key, $default );

	if ( '' === $value ) {
		if ( 'hero_image' === $key ) {
			return pps_dm_theme_image( 'dm-hero.jpg' );
		}
		if ( 'apart_image' === $key ) {
			return pps_dm_theme_image( 'dm-social.jpg' );
		}
	}

	return $value;
}

/**
 * Register Customizer for digital marketing page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_dm_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_dm',
		array(
			'title'    => __( 'Digital Marketing Agency', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 12,
		)
	);

	foreach ( pps_dm_defaults() as $key => $default ) {
		$setting_id  = 'pps_dm_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_note|_a|_stakes|_closing|seo_desc|_quote)$/', $key );
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
						'section' => 'pps_section_dm',
					)
				)
			);
		} else {
			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => ucwords( str_replace( '_', ' ', $key ) ),
					'section' => 'pps_section_dm',
					'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_dm_customize_register', 22 );

/**
 * Whether current page uses digital marketing template.
 *
 * @return bool
 */
function pps_is_dm_page() {
	return is_page_template( 'page-templates/digital-marketing.php' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_dm_document_title( $title ) {
	if ( ! pps_is_dm_page() ) {
		return $title;
	}
	$custom = page_dm( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_dm_document_title', 26 );

/**
 * Meta description.
 */
function pps_dm_meta_description() {
	if ( ! pps_is_dm_page() ) {
		return;
	}
	$desc = page_dm( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_dm_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_dm_skip_generic_meta() {
	if ( pps_is_dm_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_dm_skip_generic_meta' );

/**
 * Point Digital Marketing menu item at the new page.
 *
 * @param int $page_id Page ID.
 */
function pps_attach_dm_to_primary_menu( $page_id ) {
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
		if ( 'digital-marketing' === $slug || 'digital-marketing-healthcare-agency' === $slug || 'Digital Marketing' === $item->title ) {
			wp_update_nav_menu_item(
				$menu_id,
				(int) $item->ID,
				array(
					'menu-item-title'     => 'Digital Marketing',
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
 * Redirect legacy /digital-marketing/ URL.
 */
function pps_redirect_legacy_digital_marketing() {
	if ( ! is_page( 'digital-marketing' ) ) {
		return;
	}
	$target = get_page_by_path( 'digital-marketing-healthcare-agency' );
	if ( $target ) {
		wp_safe_redirect( get_permalink( $target ), 301 );
		exit;
	}
}
add_action( 'template_redirect', 'pps_redirect_legacy_digital_marketing' );

/**
 * Create digital marketing page, assign template/SEO, update menu.
 */
function pps_setup_dm_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_dm_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_dm_defaults();
	$page     = get_page_by_path( 'digital-marketing-healthcare-agency' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Digital Marketing Healthcare Agency',
				'post_name'   => 'digital-marketing-healthcare-agency',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/digital-marketing.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_dm_to_primary_menu( $page_id );
	update_option( 'pps_dm_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_dm_page', 45 );
