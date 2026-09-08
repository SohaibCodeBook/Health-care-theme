<?php
/**
 * Shared AI agent profile pages (Rosa, Vera, Rex, Cora, Ava).
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

require_once PPS_THEME_DIR . '/inc/agents/rosa.php';
require_once PPS_THEME_DIR . '/inc/agents/vera.php';
require_once PPS_THEME_DIR . '/inc/agents/rex.php';
require_once PPS_THEME_DIR . '/inc/agents/cora.php';
require_once PPS_THEME_DIR . '/inc/agents/ava.php';

/**
 * Registered AI agents and their content callbacks.
 *
 * @return array<string, callable>
 */
function pps_ai_agent_registry() {
	return array(
		'rosa' => 'pps_ai_agent_rosa_content',
		'vera' => 'pps_ai_agent_vera_content',
		'rex'  => 'pps_ai_agent_rex_content',
		'cora' => 'pps_ai_agent_cora_content',
		'ava'  => 'pps_ai_agent_ava_content',
	);
}

/**
 * Get agent content by slug.
 *
 * @param string $slug Agent slug.
 * @return array|null
 */
function pps_ai_agent_get( $slug ) {
	$registry = pps_ai_agent_registry();
	$slug     = sanitize_key( $slug );

	if ( ! isset( $registry[ $slug ] ) || ! is_callable( $registry[ $slug ] ) ) {
		return null;
	}

	$data = call_user_func( $registry[ $slug ] );
	return is_array( $data ) ? $data : null;
}

/**
 * Resolve agent slug for the current page.
 *
 * @return string
 */
function pps_ai_agent_current_slug() {
	if ( ! is_singular( 'page' ) ) {
		return '';
	}

	$page = get_queried_object();
	if ( ! ( $page instanceof WP_Post ) ) {
		return '';
	}

	$meta = get_post_meta( $page->ID, '_pps_ai_agent', true );
	if ( $meta ) {
		return sanitize_key( $meta );
	}

	if ( isset( pps_ai_agent_registry()[ $page->post_name ] ) ) {
		return $page->post_name;
	}

	return '';
}

/**
 * Whether current request is an AI agent profile page.
 *
 * @return bool
 */
function pps_is_ai_agent_page() {
	if ( is_page_template( 'page-templates/ai-agent.php' ) ) {
		return true;
	}

	return '' !== pps_ai_agent_current_slug();
}

/**
 * Permalink for an agent page.
 * Always returns a URL for registered agents so Meet CTAs stay visible.
 *
 * @param string $slug Agent slug.
 * @return string
 */
function pps_ai_agent_page_url( $slug ) {
	$slug = sanitize_key( $slug );
	if ( ! $slug ) {
		return '';
	}

	$page = get_page_by_path( 'ai-agents/' . $slug );
	if ( ! $page ) {
		$page = get_page_by_path( $slug );
	}

	if ( ! $page ) {
		$by_meta = get_posts(
			array(
				'post_type'      => 'page',
				'post_status'    => 'publish',
				'posts_per_page' => 1,
				'fields'         => 'ids',
				'meta_key'       => '_pps_ai_agent',
				'meta_value'     => $slug,
			)
		);
		if ( ! empty( $by_meta[0] ) ) {
			$page = get_post( (int) $by_meta[0] );
		}
	}

	if ( $page instanceof WP_Post ) {
		$meta = get_post_meta( $page->ID, '_pps_ai_agent', true );
		if ( $meta && sanitize_key( $meta ) !== $slug ) {
			return '';
		}
		return get_permalink( $page );
	}

	// Registered agent: still expose expected URL so Meet buttons render.
	if ( isset( pps_ai_agent_registry()[ $slug ] ) ) {
		return home_url( user_trailingslashit( 'ai-agents/' . $slug ) );
	}

	return '';
}

/**
 * Register agent page assets.
 */
function pps_ai_agent_register_assets() {
	pps_enqueue_theme_style( 'pps-ai-agent-page', '/assets/css/ai-agent-page.css', array() );

	$js_path = PPS_THEME_DIR . '/assets/js/ai-agent-page.js';
	$js_ver  = file_exists( $js_path ) ? (string) filemtime( $js_path ) : PPS_THEME_VERSION;
	wp_enqueue_script(
		'pps-ai-agent-page',
		PPS_THEME_URI . '/assets/js/ai-agent-page.js',
		array(),
		$js_ver,
		true
	);

	if ( ! has_action( 'wp_head', 'pps_ai_agent_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_agent_print_inline_css', 204 );
	}
}

/**
 * Print agent page CSS inline (InfinityFree-friendly).
 */
function pps_ai_agent_print_inline_css() {
	if ( pps_is_ai_agent_page() ) {
		pps_print_theme_style_inline( 'pps-ai-agent-page', '/assets/css/ai-agent-page.css' );
	}
}

/**
 * Force agent page CSS after header.
 */
function pps_ai_agent_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-agent-page', '/assets/css/ai-agent-page.css' );
}

/**
 * Enqueue assets on agent pages.
 */
function pps_ai_agent_enqueue_assets() {
	if ( pps_is_ai_agent_page() ) {
		pps_ai_agent_register_assets();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_agent_enqueue_assets', 27 );

/**
 * Document title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_agent_document_title( $title ) {
	if ( ! pps_is_ai_agent_page() ) {
		return $title;
	}

	$agent = pps_ai_agent_get( pps_ai_agent_current_slug() );
	if ( $agent && ! empty( $agent['seo_title'] ) ) {
		return $agent['seo_title'];
	}

	return $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_agent_document_title', 30 );

/**
 * Meta description.
 */
function pps_ai_agent_meta_description() {
	if ( ! pps_is_ai_agent_page() ) {
		return;
	}

	$agent = pps_ai_agent_get( pps_ai_agent_current_slug() );
	if ( $agent && ! empty( $agent['seo_desc'] ) ) {
		echo '<meta name="description" content="' . esc_attr( $agent['seo_desc'] ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_agent_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_agent_skip_generic_meta() {
	if ( pps_is_ai_agent_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_agent_skip_generic_meta' );

/**
 * Body class.
 *
 * @param array $classes Classes.
 * @return array
 */
function pps_ai_agent_body_class( $classes ) {
	if ( pps_is_ai_agent_page() ) {
		$classes[] = 'pps-ai-agent-page';
		$slug      = pps_ai_agent_current_slug();
		if ( $slug ) {
			$classes[] = 'pps-ai-agent-' . sanitize_html_class( $slug );
		}
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_agent_body_class' );

/**
 * Force shared template for agent pages.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_agent_template_include( $template ) {
	if ( ! is_singular( 'page' ) ) {
		return $template;
	}

	$slug = pps_ai_agent_current_slug();
	if ( ! $slug || ! pps_ai_agent_get( $slug ) ) {
		return $template;
	}

	$custom = locate_template( 'page-templates/ai-agent.php' );
	return $custom ? $custom : $template;
}
add_filter( 'template_include', 'pps_ai_agent_template_include', 99 );

/**
 * Ensure parent + agent pages exist and use the shared template.
 * Re-runs whenever a registered agent is missing a page.
 */
function pps_setup_ai_agent_pages() {
	$version     = '1.2.1';
	$version_ok  = get_option( 'pps_ai_agent_pages_version' ) === $version;
	$missing     = false;

	foreach ( array_keys( pps_ai_agent_registry() ) as $slug ) {
		if ( ! get_page_by_path( 'ai-agents/' . $slug ) && ! get_page_by_path( $slug ) ) {
			$missing = true;
			break;
		}
	}

	if ( $version_ok && ! $missing ) {
		return;
	}

	$parent = get_page_by_path( 'ai-agents' );
	if ( ! $parent ) {
		$parent_id = wp_insert_post(
			array(
				'post_title'   => 'AI Agents',
				'post_name'    => 'ai-agents',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_content' => '',
			)
		);
		if ( ! $parent_id || is_wp_error( $parent_id ) ) {
			return;
		}
		$parent = get_post( $parent_id );
	}

	foreach ( pps_ai_agent_registry() as $slug => $callback ) {
		$agent = is_callable( $callback ) ? call_user_func( $callback ) : null;
		if ( ! is_array( $agent ) ) {
			continue;
		}

		$page = get_page_by_path( 'ai-agents/' . $slug );
		if ( ! $page ) {
			$page = get_page_by_path( $slug );
		}

		$title = isset( $agent['name'] ) ? $agent['name'] : ucfirst( $slug );
		if ( ! empty( $agent['role'] ) ) {
			$title = $agent['name'] . ' — ' . $agent['role'];
		}

		if ( $page ) {
			$page_id = (int) $page->ID;
			if ( (int) $page->post_parent !== (int) $parent->ID || $page->post_name !== $slug ) {
				wp_update_post(
					array(
						'ID'          => $page_id,
						'post_parent' => (int) $parent->ID,
						'post_name'   => $slug,
					)
				);
			}
		} else {
			$page_id = wp_insert_post(
				array(
					'post_title'  => $title,
					'post_name'   => $slug,
					'post_status' => 'publish',
					'post_type'   => 'page',
					'post_parent' => (int) $parent->ID,
				)
			);
		}

		if ( ! $page_id || is_wp_error( $page_id ) ) {
			continue;
		}

		update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-agent.php' );
		update_post_meta( $page_id, '_pps_ai_agent', $slug );

		if ( ! empty( $agent['seo_title'] ) ) {
			update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $agent['seo_title'] ) );
		}
		if ( ! empty( $agent['seo_desc'] ) ) {
			update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $agent['seo_desc'] ) );
		}
	}

	update_option( 'pps_ai_agent_pages_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_agent_pages', 48 );
