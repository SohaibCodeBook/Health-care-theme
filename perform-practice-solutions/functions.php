<?php
/**
 * Perform Practice Solutions theme functions.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

define( 'PPS_THEME_VERSION', '1.3.0' );
define( 'PPS_THEME_DIR', get_template_directory() );
define( 'PPS_THEME_URI', get_template_directory_uri() );

require_once PPS_THEME_DIR . '/inc/customizer.php';
require_once PPS_THEME_DIR . '/inc/logo.php';
require_once PPS_THEME_DIR . '/inc/setup-wizard.php';

/**
 * Refresh homepage Customizer defaults when content pack updates.
 * Clears stored home mods so new defaults from Home content.md appear.
 */
function pps_maybe_refresh_home_content() {
	$content_version = '1.3.0';
	if ( get_option( 'pps_home_content_version' ) === $content_version ) {
		return;
	}

	$mods = get_theme_mods();
	if ( is_array( $mods ) ) {
		foreach ( array_keys( $mods ) as $key ) {
			if ( 0 === strpos( $key, 'pps_home_' ) ) {
				remove_theme_mod( $key );
			}
		}
	}

	update_option( 'pps_home_content_version', $content_version );
}
add_action( 'after_setup_theme', 'pps_maybe_refresh_home_content', 20 );

/**
 * Theme setup.
 */
function pps_theme_setup() {
	load_theme_textdomain( 'perform-practice', PPS_THEME_DIR . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support(
		'html5',
		array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 80,
			'width'       => 240,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'perform-practice' ),
			'footer'  => __( 'Footer Menu', 'perform-practice' ),
		)
	);
}
add_action( 'after_setup_theme', 'pps_theme_setup' );

/**
 * Enqueue scripts and styles.
 */
function pps_enqueue_assets() {
	wp_enqueue_style(
		'pps-google-fonts',
		'https://fonts.googleapis.com/css2?family=Figtree:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Sora:wght@500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'bootstrap-5',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css',
		array(),
		'5.3.3'
	);

	wp_enqueue_style(
		'font-awesome-6',
		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css',
		array(),
		'6.5.2'
	);

	wp_enqueue_style(
		'pps-theme',
		get_stylesheet_uri(),
		array( 'bootstrap-5', 'font-awesome-6', 'pps-google-fonts' ),
		PPS_THEME_VERSION
	);

	wp_enqueue_script(
		'bootstrap-5',
		'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js',
		array(),
		'5.3.3',
		true
	);

	wp_enqueue_script(
		'pps-main',
		PPS_THEME_URI . '/assets/js/main.js',
		array(),
		PPS_THEME_VERSION,
		true
	);

	wp_localize_script(
		'pps-main',
		'ppsAjax',
		array(
			'ajaxUrl' => admin_url( 'admin-ajax.php' ),
			'nonce'   => wp_create_nonce( 'pps_contact_nonce' ),
		)
	);
}
add_action( 'wp_enqueue_scripts', 'pps_enqueue_assets' );

/**
 * Custom nav walker for dropdown carets and mobile toggles.
 */
class PPS_Nav_Walker extends Walker_Nav_Menu {

	/**
	 * Starts the list before the elements are added.
	 *
	 * @param string   $output Used to append additional content.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 */
	public function start_lvl( &$output, $depth = 0, $args = null ) {
		$output .= '<ul class="sub-menu">';
	}

	/**
	 * Starts the element output.
	 *
	 * @param string   $output Used to append additional content.
	 * @param WP_Post  $item   Menu item data object.
	 * @param int      $depth  Depth of menu item.
	 * @param stdClass $args   Menu arguments.
	 * @param int      $id     Current item ID.
	 */
	public function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
		$classes   = empty( $item->classes ) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = implode( ' ', array_map( 'esc_attr', array_filter( $classes ) ) );

		$output .= '<li class="' . $class_names . '">';

		$atts           = array();
		$atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
		$atts['target'] = ! empty( $item->target ) ? $item->target : '';
		$atts['rel']    = ! empty( $item->xfn ) ? $item->xfn : '';
		$atts['href']   = ! empty( $item->url ) ? $item->url : '';

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( ! empty( $value ) ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$title = apply_filters( 'the_title', $item->title, $item->ID );

		$item_output  = isset( $args->before ) ? $args->before : '';
		$item_output .= '<a' . $attributes . '>';
		$item_output .= ( isset( $args->link_before ) ? $args->link_before : '' ) . esc_html( $title ) . ( isset( $args->link_after ) ? $args->link_after : '' );

		if ( in_array( 'menu-item-has-children', $classes, true ) && 0 === $depth ) {
			$item_output .= ' <i class="fa-solid fa-chevron-down submenu-caret" aria-hidden="true"></i>';
		}

		$item_output .= '</a>';
		$item_output .= isset( $args->after ) ? $args->after : '';

		$output .= $item_output;
	}
}

/**
 * Fallback menu when no menu is assigned.
 */
function pps_fallback_menu() {
	$pages = array(
		'home'              => __( 'Home', 'perform-practice' ),
		'billing-solutions' => __( 'Billing Solutions', 'perform-practice' ),
		'credentialing'     => __( 'Credentialing', 'perform-practice' ),
		'med-va'            => __( 'Med VA', 'perform-practice' ),
		'digital-marketing' => __( 'Digital Marketing', 'perform-practice' ),
		'ai-development'    => __( 'AI Development', 'perform-practice' ),
		'about-us'          => __( 'About Us', 'perform-practice' ),
		'blog'              => __( 'Blog', 'perform-practice' ),
	);

	echo '<ul class="primary-menu">';
	foreach ( $pages as $slug => $label ) {
		$url = ( 'home' === $slug ) ? home_url( '/' ) : home_url( '/' . $slug . '/' );
		printf(
			'<li class="menu-item"><a href="%1$s">%2$s</a></li>',
			esc_url( $url ),
			esc_html( $label )
		);
	}
	echo '</ul>';
}

/**
 * Handle contact form AJAX.
 */
function pps_handle_contact_form() {
	check_ajax_referer( 'pps_contact_nonce', 'nonce' );

	$first_name = isset( $_POST['first_name'] ) ? sanitize_text_field( wp_unslash( $_POST['first_name'] ) ) : '';
	$last_name  = isset( $_POST['last_name'] ) ? sanitize_text_field( wp_unslash( $_POST['last_name'] ) ) : '';
	$email      = isset( $_POST['email'] ) ? sanitize_email( wp_unslash( $_POST['email'] ) ) : '';
	$phone      = isset( $_POST['phone'] ) ? sanitize_text_field( wp_unslash( $_POST['phone'] ) ) : '';
	$service    = isset( $_POST['service'] ) ? sanitize_text_field( wp_unslash( $_POST['service'] ) ) : '';
	$message    = isset( $_POST['message'] ) ? sanitize_textarea_field( wp_unslash( $_POST['message'] ) ) : '';

	if ( empty( $first_name ) || empty( $last_name ) || empty( $email ) || empty( $phone ) || empty( $service ) ) {
		wp_send_json_error( array( 'message' => __( 'Please fill in all required fields.', 'perform-practice' ) ) );
	}

	if ( ! is_email( $email ) ) {
		wp_send_json_error( array( 'message' => __( 'Please enter a valid email address.', 'perform-practice' ) ) );
	}

	$to      = site_data( 'contact_email' );
	$subject = sprintf( __( 'New inquiry from %s %s', 'perform-practice' ), $first_name, $last_name );
	$body    = "Name: {$first_name} {$last_name}\nEmail: {$email}\nPhone: {$phone}\nService: {$service}\n\nMessage:\n{$message}";
	$headers = array(
		'Content-Type: text/plain; charset=UTF-8',
		'Reply-To: ' . $first_name . ' ' . $last_name . ' <' . $email . '>',
	);

	$sent = wp_mail( $to, $subject, $body, $headers );

	if ( $sent ) {
		wp_send_json_success( array( 'message' => __( 'Thank you! We will be in touch shortly.', 'perform-practice' ) ) );
	}

	wp_send_json_error( array( 'message' => __( 'Something went wrong. Please try again or call us.', 'perform-practice' ) ) );
}
add_action( 'wp_ajax_pps_contact_form', 'pps_handle_contact_form' );
add_action( 'wp_ajax_nopriv_pps_contact_form', 'pps_handle_contact_form' );

/**
 * Body classes.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_body_classes( $classes ) {
	if ( is_front_page() ) {
		$classes[] = 'pps-front-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_body_classes' );
