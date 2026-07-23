<?php
/**
 * AI Development — Fully Automated and Integrated Website Chatbot.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from legacy website chatbot page.
 *
 * @return array
 */
function pps_ai_chat_defaults() {
	return array(
		'seo_title' => 'Fully Automated and Integrated Website Chatbot | Perform Practice Solutions',
		'seo_desc'  => 'A custom AI chatbot for your healthcare website that answers questions, screens leads, and books new patients directly into your EMR. Book a free discovery call.',

		'hero_eyebrow'   => 'Fully Automated and Integrated Website Chatbot',
		'hero_title'     => 'Your Website Should Be Converting Not Just Informing',
		'hero_subtitle'  => 'A custom AI chatbot that answers questions, screens leads, and books new patients right from your homepage.',
		'hero_lead'      => 'Most practice websites do a decent job of presenting information, but they leave the next step entirely up to the visitor. That means potential patients scroll past, questions go unanswered, and people click away before ever reaching out. Perform Practice Solutions\' Fully Automated and Integrated Website Chatbot changes that: a custom-built AI that sits on your homepage, engages visitors the moment they land, and converts curiosity into confirmed appointments, all without a staff member lifting a finger.',
		'hero_cta'       => 'Book a Free Discovery Call',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See What It Does',
		'hero_cta_2_url' => '#capabilities',

		'highlight_1_title' => 'Always-On Engagement',
		'highlight_1_text'  => 'Greets every visitor and answers questions instantly. No wait, no form, and no phone call required.',
		'highlight_2_title' => 'Smart Lead Screening',
		'highlight_2_text'  => 'Qualifies visitors based on their responses before routing them to scheduling.',
		'highlight_3_title' => 'Direct EMR Booking',
		'highlight_3_text'  => 'Books new clients into your EMR in real time. Confirmed, captured, and ready for care.',

		'cap_eyebrow' => 'Capabilities',
		'cap_title'   => 'More Than a Chat Widget, A Front Desk on Your Website',
		'cap_lead'    => 'Built for healthcare. Trained on your practice. Connected to your systems.',
		'cap_intro'   => 'Every chatbot is built specifically for your practice. During onboarding, we train it on your services, providers, accepted insurance, and scheduling protocols, so it represents your practice accurately from day one. It is not a generic assistant dropped onto your site. It knows your practice the way a well-trained team member does. Here is what it handles from the moment a visitor lands:',

		'cap_1_title' => 'Instant Q&A',
		'cap_1_text'  => 'Answers questions about services, providers, insurance, location, hours, and more, in real time, without delay.',
		'cap_2_title' => 'Lead Screening',
		'cap_2_text'  => 'Asks the right intake questions to determine whether a visitor is a good fit before any appointment is made.',
		'cap_3_title' => 'Real-Time Booking',
		'cap_3_text'  => 'Guides qualified visitors directly through scheduling, with appointments landing in your EMR immediately.',
		'cap_4_title' => 'After-Hours Coverage',
		'cap_4_text'  => 'The chatbot does not clock out. Visitors who land on your site at midnight can still get answers and book.',
		'cap_5_title' => 'Seamless Handoff',
		'cap_5_text'  => 'When a conversation requires human follow-up, the chatbot captures all context and routes it cleanly to your team.',
		'cap_6_title' => 'Fully Custom-Built',
		'cap_6_text'  => 'Designed to match your practice\'s tone and workflows, not a one-size-fits-all template dropped onto your homepage.',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently Asked Questions',
		'faq_1_q'     => 'How is the chatbot trained for our specific practice?',
		'faq_1_a'     => 'During onboarding, we work directly with your team to collect the information the chatbot needs: services offered, provider bios, insurance accepted, scheduling preferences, and common FAQs. The result is a chatbot that sounds like a knowledgeable member of your team, not a generic AI assistant.',
		'faq_2_q'     => 'Does the chatbot actually book appointments, or does it just collect contact info?',
		'faq_2_a'     => 'It books real appointments. When a visitor completes the screening process and selects a time, that appointment is written directly into your EMR in real time, confirmed for both the patient and your scheduling system.',
		'faq_3_q'     => 'What happens if a visitor asks something the chatbot cannot answer?',
		'faq_3_a'     => 'The chatbot is built with graceful fallback logic. If a question falls outside its training, it acknowledges that clearly and routes the visitor toward the appropriate next step, whether that is a phone number, an email address, or a callback request.',
		'faq_4_q'     => 'Can the chatbot handle multiple conversations at once?',
		'faq_4_a'     => 'Yes, with no degradation in response quality or speed. Whether one visitor or one hundred are on your site simultaneously, every conversation gets the same consistent, attentive experience.',
		'faq_5_q'     => 'Will it match the look and feel of our website?',
		'faq_5_a'     => 'Yes. The chatbot is designed to blend into your existing site, matching your brand\'s color palette, tone, and visual style so it feels like a natural extension of your practice, not a third-party add-on.',

		'cta_title'      => 'See What a Custom Chatbot Could Do for Your Practice',
		'cta_text'       => 'Book a discovery call and we\'ll walk through how a custom chatbot could turn your homepage into a 24/7 front desk that converts visitors into booked patients.',
		'cta_button'     => 'Book a Discovery Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * Website chatbot page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_ai_chat( $key, $default = '' ) {
	$defaults = pps_ai_chat_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_ai_chat_' . $key, $default );
}

/**
 * Register Customizer fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_ai_chat_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_ai_chat',
		array(
			'title'    => __( 'AI — Website Chatbot', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 16,
		)
	);

	foreach ( pps_ai_chat_defaults() as $key => $default ) {
		$setting_id  = 'pps_ai_chat_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_intro|_a|seo_desc|_subtitle)$/', $key );
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
				'section' => 'pps_section_ai_chat',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_ai_chat_customize_register', 24 );

/**
 * Whether current page uses the website chatbot template.
 *
 * @return bool
 */
function pps_is_ai_chat_page() {
	$template = 'page-templates/ai-website-chatbot.php';

	if ( is_page_template( $template ) || is_page_template( 'ai-website-chatbot.php' ) ) {
		return true;
	}

	if ( is_page( 'website-chatbot' ) ) {
		return true;
	}

	$page_id = get_queried_object_id();
	if ( $page_id ) {
		$assigned = get_page_template_slug( $page_id );
		if ( $template === $assigned || 'ai-website-chatbot.php' === $assigned ) {
			return true;
		}
	}

	$page = get_queried_object();
	return ( $page instanceof WP_Post && 'page' === $page->post_type && 'website-chatbot' === $page->post_name );
}

/**
 * Register chatbot page stylesheet (safe to call from template or wp_enqueue_scripts).
 */
function pps_ai_chat_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-website-chatbot', '/assets/css/ai-website-chatbot.css', array() );

	// Inline fallback — some hosts fail to serve /assets/css/*.css.
	if ( ! has_action( 'wp_head', 'pps_ai_chat_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_chat_print_inline_css', 200 );
	}
}

/**
 * Print chatbot CSS inline in <head>.
 */
function pps_ai_chat_print_inline_css() {
	pps_print_theme_style_inline( 'pps-ai-website-chatbot', '/assets/css/ai-website-chatbot.css' );
}

/**
 * Force chatbot CSS after header (absolute fallback if wp_head path missed).
 */
function pps_ai_chat_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-website-chatbot', '/assets/css/ai-website-chatbot.css' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_chat_document_title( $title ) {
	if ( ! pps_is_ai_chat_page() ) {
		return $title;
	}
	$custom = page_ai_chat( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_chat_document_title', 29 );

/**
 * Meta description.
 */
function pps_ai_chat_meta_description() {
	if ( ! pps_is_ai_chat_page() ) {
		return;
	}
	$desc = page_ai_chat( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_chat_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_chat_skip_generic_meta() {
	if ( pps_is_ai_chat_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_chat_skip_generic_meta' );

/**
 * Body class.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_ai_chat_body_class( $classes ) {
	if ( pps_is_ai_chat_page() ) {
		$classes[] = 'pps-ai-chat-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_chat_body_class' );

/**
 * Enqueue page stylesheet.
 */
function pps_ai_chat_enqueue_assets() {
	if ( pps_is_ai_chat_page() ) {
		pps_ai_chat_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_chat_enqueue_assets', 25 );

/**
 * Force template for website-chatbot slug.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_chat_template_include( $template ) {
	if ( is_page( 'website-chatbot' ) ) {
		$custom = locate_template( 'page-templates/ai-website-chatbot.php' );
		if ( $custom ) {
			return $custom;
		}
	}
	return $template;
}
add_filter( 'template_include', 'pps_ai_chat_template_include', 99 );

/**
 * Create page, assign template/SEO.
 */
function pps_setup_ai_chat_page() {
	$version = '1.0.1';
	if ( get_option( 'pps_ai_chat_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_ai_chat_defaults();

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

	$page = get_page_by_path( 'ai-development/website-chatbot' );
	if ( ! $page ) {
		$page = get_page_by_path( 'website-chatbot' );
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
				'post_title'  => 'Fully Automated and Integrated Website Chatbot',
				'post_name'   => 'website-chatbot',
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => (int) $parent->ID,
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-website-chatbot.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

	update_option( 'pps_ai_chat_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_chat_page', 46 );
