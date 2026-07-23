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
		'Hormone Testing Billing Services',
		'Internal Medicine Billing Services',
		'Labs Billing Services',
		'Nephrology Billing Services',
		'Neurology Billing Services',
		'Neurosurgery Billing Services',
		'Nursing Homes & Assisted Living Facilities Billing Services',
		'Obstetrics and Gynecology Billing Services',
		'Oncology Billing Services',
		'Ophthalmology Billing Services',
		'Outpatient Surgery Centers Billing Services',
		'Pathology Services Billing Services',
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
		'allergy-and-immunology-billing-services' => array(
			'seo_title' => 'Allergy and Immunology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your allergy billing to experts in immunotherapy coding, serum billing, and testing units. Get a free billing service analysis today.',
		),
		'anesthesiology-billing-services' => array(
			'seo_title' => 'Anesthesiology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your anesthesia billing to experts in time-based units, ASA codes, and medical direction modifiers. Get a free billing service analysis today.',
		),
		'behavioral-therapy-aba-billing-services' => array(
			'seo_title' => 'ABA Billing Services | Behavioral Therapy Billing | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your ABA billing to experts in adaptive behavior codes, authorization tracking, and Medicaid requirements. Get a free billing service analysis today.',
		),
		'cardiology-billing-services' => array(
			'seo_title' => 'Cardiology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your cardiology billing to experts in diagnostic testing, cath lab coding, and prior authorizations. Get a free billing service analysis today.',
		),
		'dental-billing-services' => array(
			'seo_title' => 'Dental Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your dental billing to experts in CDT coding, insurance verification, and medical-dental cross coding. Get a free billing service analysis today.',
		),
		'dermatology-billing-services' => array(
			'seo_title' => 'Dermatology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your dermatology billing to experts in lesion coding, biopsy claims, and Mohs surgery billing. Get a free billing service analysis today.',
		),
		'emergency-medicine-billing-services' => array(
			'seo_title' => 'Emergency Medicine Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your emergency medicine billing to experts in E/M leveling, critical care time, and payer downcoding appeals. Get a free billing service analysis today.',
		),
		'endocrinology-billing-services' => array(
			'seo_title' => 'Endocrinology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your endocrinology billing to experts in chronic care management, CGM billing, and complex E/M coding. Get a free billing service analysis today.',
		),
		'family-medicine-billing-services' => array(
			'seo_title' => 'Family Medicine Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your family medicine billing to experts in E/M coding, preventive visit rules, and chronic care management. Get a free billing service analysis today.',
		),
		'gastroenterology-billing-services' => array(
			'seo_title' => 'Gastroenterology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your GI billing to experts in endoscopy coding, screening vs diagnostic colonoscopy rules, and multiple procedure claims. Get a free billing service analysis today.',
		),
		'general-surgery-billing-services' => array(
			'seo_title' => 'General Surgery Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your general surgery billing to experts in global periods, assistant surgeon modifiers, and multiple procedure claims. Get a free billing service analysis today.',
		),
		'hematology-billing-services' => array(
			'seo_title' => 'Hematology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your hematology billing to experts in infusion coding, J-code drug billing, and prior authorizations. Get a free billing service analysis today.',
		),
		'home-health-billing-services' => array(
			'seo_title' => 'Home Health Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your home health billing to experts in PDGM, OASIS accuracy, and Medicare episodic claims. Get a free billing service analysis today.',
		),
		'hormone-testing-billing-services' => array(
			'seo_title' => 'Hormone Testing Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your hormone testing and therapy billing to experts in lab panels, medical necessity coding, and hybrid cash-insurance models. Get a free billing service analysis today.',
		),
		'internal-medicine-billing-services' => array(
			'seo_title' => 'Internal Medicine Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your internal medicine billing to experts in complex E/M coding, chronic care management, and Medicare wellness visits. Get a free billing service analysis today.',
		),
		'labs-billing-services' => array(
			'seo_title' => 'Labs Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your laboratory billing to experts in test panel coding, medical necessity rules, and payer fee schedules. Get a free billing service analysis today.',
		),
		'nephrology-billing-services' => array(
			'seo_title' => 'Nephrology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your nephrology billing to experts in MCP dialysis codes, CKD staging, and transplant follow-up claims. Get a free billing service analysis today.',
		),
		'neurology-billing-services' => array(
			'seo_title' => 'Neurology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your neurology billing to experts in EEG and EMG coding, Botox claims, and prolonged visit capture. Get a free billing service analysis today.',
		),
		'neurosurgery-billing-services' => array(
			'seo_title' => 'Neurosurgery Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your neurosurgery billing to experts in spine coding, co-surgeon claims, and complex operative reports. Get a free billing service analysis today.',
		),
		'nursing-homes-assisted-living-facilities-billing-services' => array(
			'seo_title' => 'Nursing Homes & Assisted Living Facilities Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your nursing home and assisted living billing to experts in SNF claims, PDPM, and Medicare Part A workflows. Get a free billing service analysis today.',
		),
		'oncology-billing-services' => array(
			'seo_title' => 'Oncology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your oncology billing to experts in chemotherapy infusion coding, J-code drug billing, and treatment authorizations. Get a free billing service analysis today.',
		),
		'ophthalmology-billing-services' => array(
			'seo_title' => 'Ophthalmology Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your ophthalmology billing to experts in eye codes vs E/M, cataract co-management, and injection billing. Get a free billing service analysis today.',
		),
		'outpatient-surgery-centers-billing-services' => array(
			'seo_title' => 'Outpatient Surgery Centers Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your ASC billing to experts in facility claims, surgical coding, and implant billing. Get a free billing service analysis today.',
		),
		'pathology-services-billing-services' => array(
			'seo_title' => 'Pathology Services Billing Services | Perform Practice Solutions',
			'seo_desc'  => 'Outsource your pathology billing to experts in professional and technical components, specimen coding, and payer edits. Get a free billing service analysis today.',
		),
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
 * Featured services always come first, then specialty pages in catalog order.
 *
 * @param array $child_ids Map of slug => page ID (canonical order).
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
	$menu_item_by_page    = array();

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
		if ( (int) $item->menu_item_parent === $billing_menu_item_id && 'page' === $item->object ) {
			$menu_item_by_page[ (int) $item->object_id ] = (int) $item->ID;
		}
	}

	$position = 1;
	foreach ( $child_ids as $slug => $page_id ) {
		$page_id = (int) $page_id;
		if ( ! $page_id ) {
			continue;
		}

		$menu_item_id = isset( $menu_item_by_page[ $page_id ] ) ? $menu_item_by_page[ $page_id ] : 0;
		$args         = array(
			'menu-item-title'     => get_the_title( $page_id ),
			'menu-item-object'    => 'page',
			'menu-item-object-id' => $page_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => $billing_menu_item_id,
			'menu-item-position'  => $position,
		);

		$result = wp_update_nav_menu_item( $menu_id, $menu_item_id, $args );
		if ( $result && ! is_wp_error( $result ) && ! $menu_item_id ) {
			$menu_item_by_page[ $page_id ] = (int) $result;
		}

		$position++;
	}
}

/**
 * One-time / updatable setup for billing mega menu pages.
 */
function pps_setup_billing_mega_menu() {
	if ( get_option( 'pps_billing_mega_version' ) === '1.3.4' ) {
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

	update_option( 'pps_billing_mega_version', '1.3.4' );
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
