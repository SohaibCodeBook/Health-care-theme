<?php
/**
 * Shared agent suite sections (Meet the Team + deep-dive cards).
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * AI development page templates that include agent suite sections.
 *
 * @return string[]
 */
function pps_ai_suite_templates() {
	return array(
		'page-templates/ai-development.php',
		'page-templates/ai-phone-text-system.php',
		'page-templates/ai-referral-outreach.php',
		'page-templates/ai-website-chatbot.php',
		'page-templates/ai-front-desk-tools.php',
	);
}

/**
 * Whether the current request is an AI development service page.
 *
 * @return bool
 */
function pps_is_ai_suite_page() {
	foreach ( pps_ai_suite_templates() as $template ) {
		if ( is_page_template( $template ) ) {
			return true;
		}
	}

	$page = get_queried_object();
	if ( ! ( $page instanceof WP_Post ) || 'page' !== $page->post_type ) {
		return false;
	}

	$slug_templates = array(
		'ai-development'     => 'page-templates/ai-development.php',
		'phone-text-system'  => 'page-templates/ai-phone-text-system.php',
		'referral-outreach'  => 'page-templates/ai-referral-outreach.php',
		'website-chatbot'    => 'page-templates/ai-website-chatbot.php',
		'front-desk-tools'   => 'page-templates/ai-front-desk-tools.php',
	);

	if ( ! isset( $slug_templates[ $page->post_name ] ) ) {
		return false;
	}

	$assigned = get_page_template_slug( $page->ID );
	return ( '' === $assigned || $slug_templates[ $page->post_name ] === $assigned );
}

/**
 * Register agent suite stylesheet.
 */
function pps_ai_suite_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-agent-suite', '/assets/css/ai-agent-suite.css', array() );

	if ( ! has_action( 'wp_head', 'pps_ai_suite_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_suite_print_inline_css', 201 );
	}
}

/**
 * Print agent suite CSS inline.
 */
function pps_ai_suite_print_inline_css() {
	if ( pps_is_ai_suite_page() ) {
		pps_print_theme_style_inline( 'pps-ai-agent-suite', '/assets/css/ai-agent-suite.css' );
	}
}

/**
 * Force agent suite CSS after header.
 */
function pps_ai_suite_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-agent-suite', '/assets/css/ai-agent-suite.css' );
}

/**
 * Enqueue agent suite stylesheet on AI development pages.
 */
function pps_ai_suite_enqueue_assets() {
	if ( pps_is_ai_suite_page() ) {
		pps_ai_suite_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_suite_enqueue_assets', 26 );

/**
 * Avatar image URL for a named AI agent.
 *
 * @param string $name Agent display name (e.g. Ava, Rosa).
 * @return string
 */
function pps_ai_agent_avatar_url( $name ) {
	$slug = strtolower( sanitize_file_name( $name ) );
	$path = PPS_THEME_DIR . '/assets/images/ai-agents/' . $slug . '.jpg';

	if ( file_exists( $path ) ) {
		return PPS_THEME_URI . '/assets/images/ai-agents/' . $slug . '.jpg';
	}

	return '';
}
