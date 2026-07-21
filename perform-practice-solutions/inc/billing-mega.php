<?php
/**
 * Medical Billing specialty pages + mega menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Billing hub page ID (medical-billing-solutions preferred).
 *
 * @return int
 */
function pps_billing_hub_page_id() {
	static $page_id = null;

	if ( null !== $page_id ) {
		return $page_id;
	}

	$page = get_page_by_path( 'medical-billing-solutions' );
	if ( $page ) {
		$page_id = (int) $page->ID;
		return $page_id;
	}

	$page    = get_page_by_path( 'billing-solutions' );
	$page_id = $page ? (int) $page->ID : 0;
	return $page_id;
}

/**
 * Billing hub page URL.
 *
 * @return string
 */
function pps_billing_hub_url() {
	$hub_id = pps_billing_hub_page_id();
	return $hub_id ? get_permalink( $hub_id ) : home_url( '/medical-billing-solutions/' );
}

/**
 * Whether a top-level menu item is the Billing Solutions mega parent.
 *
 * @param WP_Post $item  Menu item.
 * @param int     $depth Menu depth.
 * @return bool
 */
function pps_is_billing_nav_parent( $item, $depth = 0 ) {
	if ( 0 !== (int) $depth || (int) $item->menu_item_parent !== 0 ) {
		return false;
	}

	$classes = is_array( $item->classes ) ? $item->classes : array();
	if ( in_array( 'pps-mega-billing', $classes, true ) ) {
		return true;
	}

	$hub_id = pps_billing_hub_page_id();
	if ( $hub_id && (int) $item->object_id === $hub_id ) {
		return true;
	}

	$slug = get_post_field( 'post_name', $item->object_id );
	return in_array( $slug, array( 'billing-solutions', 'medical-billing-solutions' ), true );
}

/**
 * Featured billing specialty pages (full SEO from sheet).
 *
 * @return array
 */
function pps_billing_featured_pages() {
	return array(
		array(
			'slug'        => 'physical-therapy-billing-services',
			'title'       => 'Physical Therapy Billing Services',
			'seo_title'   => 'Physical Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your physical therapy billing to PT billing experts. Daily claim submission, denial prevention, and a 3 week average bill to paid cycle. Book a strategy session today.',
			'group'       => 'featured',
			'icon'        => 'fa-person-walking',
		),
		array(
			'slug'        => 'chiropractic-billing-services',
			'title'       => 'Chiropractic Billing Services',
			'seo_title'   => 'Chiropractic Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your chiropractic billing to specialists who know CMT codes, Medicare AT modifiers, and medical necessity documentation. Book a strategy session today.',
			'group'       => 'featured',
			'icon'        => 'fa-bone',
		),
		array(
			'slug'        => 'pain-management-billing-services',
			'title'       => 'Pain Management Billing Services',
			'seo_title'   => 'Pain Management Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your pain management billing to experts in prior authorizations, injection coding, and payer audits. Faster reimbursement, fewer denials. Book a strategy session.',
			'group'       => 'featured',
			'icon'        => 'fa-heart-pulse',
		),
		array(
			'slug'        => 'orthopedic-medical-billing-services',
			'title'       => 'Orthopedic Medical Billing Services',
			'seo_title'   => 'Orthopedic Medical Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your orthopedic billing to experts in surgical coding, global periods, and modifier compliance. Cleaner claims and faster payment. Book a strategy session.',
			'group'       => 'featured',
			'icon'        => 'fa-crutch',
		),
		array(
			'slug'        => 'occupational-therapy-billing-services',
			'title'       => 'Occupational Therapy Billing Services',
			'seo_title'   => 'Occupational Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your OT billing to experts in timed codes, the 8 minute rule, and Medicare therapy thresholds. Cleaner claims, faster payment. Book a strategy session.',
			'group'       => 'featured',
			'icon'        => 'fa-hand-holding-hand',
		),
		array(
			'slug'        => 'speech-therapy-billing-services',
			'title'       => 'Speech Therapy Billing Services',
			'seo_title'   => 'Speech Therapy Billing Services | Perform Practice Solutions',
			'seo_desc'    => 'Outsource your speech therapy billing to experts in SLP evaluation codes, Medicare thresholds, and pediatric payers. Cleaner claims, faster payment. Book a strategy session.',
			'group'       => 'featured',
			'icon'        => 'fa-comments',
		),
	);
}

/**
 * Additional specialty billing pages from the SEO sheet.
 *
 * @return array
 */
function pps_billing_specialty_pages() {
	$names = array(
		'Allergy and Immunology Billing Services',
		'Anesthesiology Billing Services',
		'Behavioral Therapy (ABA) Billing Services',
		'Cardiology Billing Services',
		'Dental Billing Services',
		'Dermatology Billing Services',
		'Diabetes Billing Services',
		'DME (Durable Medical Equipment) Billing Services',
		'Emergency Medicine Billing Services',
		'Endocrinology Billing Services',
		'Family Medicine Billing Services',
		'Gastroenterology Billing Services',
		'General Surgery Billing Services',
		'Genetic Counseling Billing Services',
		'Hematology Billing Services',
		'Home Health Billing Services',
		'Internal Medicine Billing Services',
		'Nephrology Billing Services',
		'Neurology Billing Services',
		'Neurosurgery Billing Services',
		'Obstetrics and Gynecology Billing Services',
		'Oncology Billing Services',
		'Ophthalmology Billing Services',
		'Pediatrics Billing Services',
		'Plastic Surgery Billing Services',
		'Podiatry Billing Services',
		'Preventive Medicine Billing Services',
		'Psychiatry Billing Services',
		'Psychology Billing Services',
		'Pulmonology Billing Services',
		'Radiology Billing Services',
		'Rheumatology Billing Services',
		'Telemedicine Billing Services',
		'Urology Billing Services',
		'Wound Care Billing Services',
	);

	// Prefer unique SEO from specialty service page defaults when available.
	$seo_overrides = array(
		'pediatrics-billing-services'      => array(
			'seo_title' => 'Pediatrics Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pediatric billing to experts in well-child visits, vaccine billing, and Medicaid plans. Get a free billing service analysis today.',
		),
		'plastic-surgery-billing-services' => array(
			'seo_title' => 'Plastic Surgery Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your plastic surgery billing to experts in reconstructive vs cosmetic separation, medical necessity documentation, and surgical coding. Get a free billing service analysis today.',
		),
		'podiatry-billing-services'        => array(
			'seo_title' => 'Podiatry Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your podiatry billing to experts in routine foot care rules, Q modifiers, and DME claims. Get a free billing service analysis today.',
		),
		'psychiatry-billing-services'      => array(
			'seo_title' => 'Psychiatry Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your psychiatry billing to experts in E/M plus psychotherapy add-ons, telehealth claims, and med management coding. Get a free billing service analysis today.',
		),
		'psychology-billing-services'      => array(
			'seo_title' => 'Psychology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your psychology billing to experts in therapy session codes, testing billing by hour, and behavioral health networks. Get a free billing service analysis today.',
		),
		'pulmonology-billing-services'     => array(
			'seo_title' => 'Pulmonology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pulmonology billing to experts in PFT coding, sleep study claims, and chronic respiratory care programs. Get a free billing service analysis today.',
		),
		'rheumatology-billing-services'    => array(
			'seo_title' => 'Rheumatology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your rheumatology billing to experts in infusion coding, biologic authorizations, and complex E/M capture. Get a free billing service analysis today.',
		),
		'telemedicine-billing-services'    => array(
			'seo_title' => 'Telemedicine Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your telemedicine billing to experts in place of service codes, telehealth modifiers, and multi-state payer rules. Get a free billing service analysis today.',
		),
		'urology-billing-services'         => array(
			'seo_title' => 'Urology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your urology billing to experts in cystoscopy coding, in-office procedures, and surgical global periods. Get a free billing service analysis today.',
		),
		'wound-care-billing-services'      => array(
			'seo_title' => 'Wound Care Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your wound care billing to experts in debridement coding, skin substitute claims, and measurement documentation. Get a free billing service analysis today.',
		),
	);

	$pages = array();
	foreach ( $names as $name ) {
		$slug = sanitize_title( $name );
		$row  = array(
			'slug'      => $slug,
			'title'     => $name,
			'seo_title' => $name . ' | Perform Practice Solutions',
			'seo_desc'  => 'Perform Practice Solutions provides specialized ' . strtolower( $name ) . ' to reduce denials, improve collections, and protect your practice revenue.',
			'group'     => 'specialty',
		);
		if ( isset( $seo_overrides[ $slug ] ) ) {
			$row['seo_title'] = $seo_overrides[ $slug ]['seo_title'];
			$row['seo_desc']  = $seo_overrides[ $slug ]['seo_desc'];
		}
		$pages[] = $row;
	}

	return $pages;
}

/**
 * All billing child pages.
 *
 * @return array
 */
function pps_all_billing_child_pages() {
	return array_merge( pps_billing_featured_pages(), pps_billing_specialty_pages() );
}

/**
 * Create or update a billing specialty page (top-level for flat URLs).
 *
 * @param array $data Page data.
 * @return int
 */
function pps_upsert_billing_page( $data ) {
	$existing = get_page_by_path( $data['slug'] );
	$content  = '<p>' . esc_html__( 'This specialty billing page is ready for content. Design and full copy will be added in a later phase.', 'perform-practice' ) . '</p>';

	if ( $existing ) {
		$page_id = (int) $existing->ID;
		wp_update_post(
			array(
				'ID'          => $page_id,
				'post_title'  => $data['title'],
				'post_parent' => 0,
				'post_status' => 'publish',
			)
		);
	} else {
		// Also migrate if page was previously nested under billing-solutions.
		$nested = get_page_by_path( 'billing-solutions/' . $data['slug'] );
		if ( $nested ) {
			$page_id = (int) $nested->ID;
			wp_update_post(
				array(
					'ID'          => $page_id,
					'post_title'  => $data['title'],
					'post_name'   => $data['slug'],
					'post_parent' => 0,
					'post_status' => 'publish',
				)
			);
		} else {
			$page_id = wp_insert_post(
				array(
					'post_title'   => $data['title'],
					'post_name'    => $data['slug'],
					'post_content' => $content,
					'post_status'  => 'publish',
					'post_type'    => 'page',
					'post_parent'  => 0,
				)
			);
		}
	}

	if ( is_wp_error( $page_id ) || ! $page_id ) {
		return 0;
	}

	if ( ! empty( $data['seo_title'] ) ) {
		update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $data['seo_title'] ) );
	}
	if ( ! empty( $data['seo_desc'] ) ) {
		update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $data['seo_desc'] ) );
	}
	if ( ! empty( $data['group'] ) ) {
		update_post_meta( $page_id, '_pps_billing_group', sanitize_key( $data['group'] ) );
	}
	if ( ! empty( $data['icon'] ) ) {
		update_post_meta( $page_id, '_pps_billing_icon', sanitize_text_field( $data['icon'] ) );
	}

	return (int) $page_id;
}

/**
 * Ensure billing parent page exists and has SEO meta.
 *
 * @return int
 */
function pps_ensure_billing_parent_page() {
	$page = get_page_by_path( 'billing-solutions' );
	if ( ! $page ) {
		$page_id = wp_insert_post(
			array(
				'post_title'   => 'Billing Solutions',
				'post_name'    => 'billing-solutions',
				'post_content' => '<p>' . esc_html__( 'Medical billing solutions overview. Full page design coming soon.', 'perform-practice' ) . '</p>',
				'post_status'  => 'publish',
				'post_type'    => 'page',
			)
		);
	} else {
		$page_id = (int) $page->ID;
	}

	if ( $page_id && ! is_wp_error( $page_id ) ) {
		update_post_meta( $page_id, '_pps_seo_title', 'Medical Billing Solutions for Allied Health Practices | Perform Practice Solutions' );
		update_post_meta( $page_id, '_pps_seo_description', 'Expert medical billing solutions that reduce denials, speed up reimbursement, and protect practice revenue. Trusted support for allied health providers across the U.S.' );
	}

	return (int) $page_id;
}

/**
 * Attach billing specialty pages under Billing Solutions in the primary menu.
 *
 * @param array $child_ids Map of slug => page ID.
 */
function pps_attach_billing_mega_menu_items( $child_ids ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	$billing_menu_item_id = 0;
	$existing_child_ids   = array();

	foreach ( $items as $item ) {
		if ( pps_is_billing_nav_parent( $item, 0 ) ) {
			$billing_menu_item_id = (int) $item->ID;
		}
	}

	if ( ! $billing_menu_item_id ) {
		return;
	}

	// Mark parent as mega menu.
	update_post_meta( $billing_menu_item_id, '_menu_item_classes', array( 'menu-item', 'pps-mega-billing', 'menu-item-has-children' ) );

	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent === $billing_menu_item_id ) {
			$existing_child_ids[ (int) $item->object_id ] = (int) $item->ID;
		}
	}

	$position = 100;
	foreach ( $child_ids as $slug => $page_id ) {
		if ( isset( $existing_child_ids[ $page_id ] ) ) {
			continue;
		}

		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'     => get_the_title( $page_id ),
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $page_id,
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => $billing_menu_item_id,
				'menu-item-position'  => $position++,
			)
		);
	}
}

/**
 * One-time / updatable setup for billing mega menu pages.
 */
function pps_setup_billing_mega_menu() {
	if ( get_option( 'pps_billing_mega_version' ) === '1.3.0' ) {
		return;
	}

	pps_ensure_billing_parent_page();

	$child_ids = array();
	foreach ( pps_all_billing_child_pages() as $data ) {
		$id = pps_upsert_billing_page( $data );
		if ( $id ) {
			$child_ids[ $data['slug'] ] = $id;
		}
	}

	pps_attach_billing_mega_menu_items( $child_ids );

	// Flush rewrite rules once after flattening URLs.
	flush_rewrite_rules( false );

	update_option( 'pps_billing_mega_version', '1.3.0' );
}
add_action( 'after_setup_theme', 'pps_setup_billing_mega_menu', 30 );
add_action( 'after_switch_theme', 'pps_setup_billing_mega_menu', 20 );

/**
 * Output custom SEO title when set.
 *
 * @param string $title Document title.
 * @return string
 */
function pps_filter_seo_document_title( $title ) {
	if ( ! is_singular( 'page' ) ) {
		return $title;
	}
	$custom = get_post_meta( get_queried_object_id(), '_pps_seo_title', true );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_filter_seo_document_title', 20 );

/**
 * Output meta description from page meta.
 */
function pps_output_seo_meta_description() {
	if ( ! is_singular( 'page' ) ) {
		return;
	}
	$desc = get_post_meta( get_queried_object_id(), '_pps_seo_description', true );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_output_seo_meta_description', 1 );

/**
 * Add mega class to Billing Solutions menu item.
 *
 * @param array    $classes Menu item classes.
 * @param WP_Post  $item    Menu item.
 * @param stdClass $args    Args.
 * @param int      $depth   Depth.
 * @return array
 */
function pps_nav_menu_css_class( $classes, $item, $args = null, $depth = 0 ) {
	if ( pps_is_billing_nav_parent( $item, $depth ) ) {
		$classes[] = 'pps-mega-billing';
	}
	return $classes;
}
add_filter( 'nav_menu_css_class', 'pps_nav_menu_css_class', 10, 4 );

/**
 * Redirect legacy billing hub URL to the new medical billing page.
 */
function pps_redirect_legacy_billing_hub() {
	if ( is_admin() || ! is_page( 'billing-solutions' ) ) {
		return;
	}

	$target = get_page_by_path( 'medical-billing-solutions' );
	if ( ! $target ) {
		return;
	}

	wp_safe_redirect( get_permalink( $target ), 301 );
	exit;
}
add_action( 'template_redirect', 'pps_redirect_legacy_billing_hub' );
