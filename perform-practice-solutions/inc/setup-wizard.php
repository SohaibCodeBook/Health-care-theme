<?php
/**
 * Theme activation: create pages, menu, and front page.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Run setup once on theme activation.
 */
function pps_theme_activation() {
	if ( get_option( 'pps_theme_setup_done' ) ) {
		return;
	}

	$pages = array(
		'home'              => array(
			'title'    => 'Home',
			'content'  => '<!-- Homepage content is managed via Appearance → Customize → PPS — Homepage -->',
			'template' => '',
		),
		'billing-solutions' => array(
			'title'   => 'Billing Solutions',
			'content' => '<p>Billing Solutions page content will be designed in a later phase. Edit this page or use the Customizer when available.</p>',
		),
		'credentialing'     => array(
			'title'   => 'Credentialing',
			'content' => '<p>Credentialing page content will be designed in a later phase.</p>',
		),
		'med-va'            => array(
			'title'   => 'Med VA',
			'content' => '<p>Virtual staffing (Med VA) page content will be designed in a later phase.</p>',
		),
		'digital-marketing-healthcare-agency' => array(
			'title'   => 'Digital Marketing Healthcare Agency',
			'content' => '<p>Digital marketing for healthcare practices — managed via the Digital Marketing template.</p>',
		),
		'ai-development'    => array(
			'title'   => 'AI Development',
			'content' => '<p>AI Development overview. Child pages cover specific automation offerings.</p>',
		),
		'phone-text-system' => array(
			'title'   => 'Fully Automated Phone and Text System',
			'content' => '<p>Phone and text automation details will be designed in a later phase.</p>',
			'parent'  => 'ai-development',
		),
		'referral-outreach' => array(
			'title'   => 'Fully Automated New Client Referral Outreach',
			'content' => '<p>Referral outreach automation details will be designed in a later phase.</p>',
			'parent'  => 'ai-development',
		),
		'website-chatbot'   => array(
			'title'   => 'Fully Automated and Integrated Website Chatbot',
			'content' => '<p>Website chatbot details will be designed in a later phase.</p>',
			'parent'  => 'ai-development',
		),
		'front-desk-tools'  => array(
			'title'   => 'Front Desk Support and Automation Tools',
			'content' => '<p>Front desk automation details will be designed in a later phase.</p>',
			'parent'  => 'ai-development',
		),
		'about-us'          => array(
			'title'   => 'About Us',
			'content' => '<p>About Us page content will be designed in a later phase.</p>',
		),
		'blog'              => array(
			'title'   => 'Blog',
			'content' => '',
		),
		'contact-us'        => array(
			'title'    => 'Contact Us',
			'content'  => '<!-- Contact page content is managed via the Contact Us template and Customizer. -->',
			'template' => 'page-templates/contact.php',
		),
	);

	$created = array();

	foreach ( $pages as $slug => $data ) {
		$path     = ! empty( $data['parent'] ) ? $data['parent'] . '/' . $slug : $slug;
		$existing = get_page_by_path( $path );
		if ( ! $existing && ! empty( $data['parent'] ) ) {
			$existing = get_page_by_path( $slug );
		}
		if ( $existing ) {
			$created[ $slug ] = (int) $existing->ID;
			if ( ! empty( $data['template'] ) ) {
				update_post_meta( $existing->ID, '_wp_page_template', $data['template'] );
			}
			continue;
		}

		$parent_id = 0;
		if ( ! empty( $data['parent'] ) && isset( $created[ $data['parent'] ] ) ) {
			$parent_id = $created[ $data['parent'] ];
		}

		$page_id = wp_insert_post(
			array(
				'post_title'   => $data['title'],
				'post_name'    => $slug,
				'post_content' => isset( $data['content'] ) ? $data['content'] : '',
				'post_status'  => 'publish',
				'post_type'    => 'page',
				'post_parent'  => $parent_id,
			)
		);

		if ( ! is_wp_error( $page_id ) ) {
			$created[ $slug ] = (int) $page_id;
			if ( ! empty( $data['template'] ) ) {
				update_post_meta( $page_id, '_wp_page_template', $data['template'] );
			}
		}
	}

	if ( ! empty( $created['home'] ) ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $created['home'] );
	}

	if ( ! empty( $created['blog'] ) ) {
		update_option( 'page_for_posts', $created['blog'] );
	}

	pps_create_primary_menu( $created );

	update_option( 'pps_theme_setup_done', 1 );
}
add_action( 'after_switch_theme', 'pps_theme_activation' );

/**
 * Build primary navigation menu.
 *
 * @param array $pages Map of slug => page ID.
 */
function pps_create_primary_menu( $pages ) {
	$menu_name = 'Primary Menu';
	$menu_id   = wp_create_nav_menu( $menu_name );

	if ( is_wp_error( $menu_id ) ) {
		$existing = wp_get_nav_menu_object( $menu_name );
		if ( ! $existing ) {
			return;
		}
		$menu_id = (int) $existing->term_id;
	}

	$top_items = array(
		array( 'slug' => 'home', 'title' => 'Home' ),
		array( 'slug' => 'billing-solutions', 'title' => 'Billing Solutions', 'children' => array() ),
		array( 'slug' => 'credentialing', 'title' => 'Credentialing' ),
		array( 'slug' => 'med-va', 'title' => 'Med VA' ),
		array( 'slug' => 'digital-marketing-healthcare-agency', 'title' => 'Digital Marketing' ),
		array( 'slug' => 'ai-development', 'title' => 'AI Development', 'children' => array(
			array( 'slug' => 'phone-text-system', 'title' => 'Fully Automated Phone and Text System' ),
			array( 'slug' => 'referral-outreach', 'title' => 'Fully Automated New Client Referral Outreach' ),
			array( 'slug' => 'website-chatbot', 'title' => 'Fully Automated and Integrated Website Chatbot' ),
			array( 'slug' => 'front-desk-tools', 'title' => 'Front Desk Support and Automation Tools' ),
		) ),
		array( 'slug' => 'about-us', 'title' => 'About Us' ),
		array( 'slug' => 'blog', 'title' => 'Blog' ),
	);

	$position = 1;
	foreach ( $top_items as $item ) {
		if ( empty( $pages[ $item['slug'] ] ) ) {
			continue;
		}

		$parent_item_id = wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'     => $item['title'],
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $pages[ $item['slug'] ],
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-position'  => $position++,
			)
		);

		if ( ! empty( $item['children'] ) && ! is_wp_error( $parent_item_id ) ) {
			foreach ( $item['children'] as $child ) {
				if ( empty( $pages[ $child['slug'] ] ) ) {
					continue;
				}
				wp_update_nav_menu_item(
					$menu_id,
					0,
					array(
						'menu-item-title'     => $child['title'],
						'menu-item-object'    => 'page',
						'menu-item-object-id' => $pages[ $child['slug'] ],
						'menu-item-type'      => 'post_type',
						'menu-item-status'    => 'publish',
						'menu-item-parent-id' => $parent_item_id,
						'menu-item-position'  => $position++,
					)
				);
			}
		}
	}

	$locations            = get_theme_mod( 'nav_menu_locations', array() );
	$locations['primary'] = (int) $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

/**
 * Canonical AI Development child pages (slug => meta).
 *
 * @return array
 */
function pps_ai_development_children() {
	return array(
		'phone-text-system' => array(
			'title'    => 'Fully Automated Phone and Text System',
			'template' => 'page-templates/ai-phone-text-system.php',
		),
		'referral-outreach' => array(
			'title'    => 'Fully Automated New Client Referral Outreach',
			'template' => 'page-templates/ai-referral-outreach.php',
		),
		'website-chatbot'   => array(
			'title'    => 'Fully Automated and Integrated Website Chatbot',
			'template' => 'page-templates/ai-website-chatbot.php',
		),
		'front-desk-tools'  => array(
			'title'    => 'Front Desk Support and Automation Tools',
			'template' => 'page-templates/ai-front-desk-tools.php',
		),
	);
}

/**
 * Resolve the correct AI child page, fix *-2 slugs, trash duplicates.
 *
 * @param int    $parent_id Parent AI Development page ID.
 * @param string $slug      Desired post_name.
 * @param array  $meta      title + template.
 * @return int Page ID or 0.
 */
function pps_resolve_ai_child_page( $parent_id, $slug, $meta ) {
	$parent_id = (int) $parent_id;
	$slug      = sanitize_title( $slug );
	$candidates = array();

	$by_template = get_posts(
		array(
			'post_type'              => 'page',
			'post_status'            => array( 'publish', 'draft', 'private' ),
			'posts_per_page'         => 20,
			'meta_key'               => '_wp_page_template',
			'meta_value'             => $meta['template'],
			'no_found_rows'          => true,
			'update_post_meta_cache' => false,
			'update_post_term_cache' => false,
		)
	);
	foreach ( $by_template as $post ) {
		$candidates[ (int) $post->ID ] = $post;
	}

	foreach ( array( 'ai-development/' . $slug, 'ai-development/' . $slug . '-2', $slug, $slug . '-2' ) as $path ) {
		$page = get_page_by_path( $path );
		if ( $page ) {
			$candidates[ (int) $page->ID ] = $page;
		}
	}

	if ( $parent_id ) {
		$kids = get_pages(
			array(
				'parent'      => $parent_id,
				'post_status' => 'publish,draft,private',
			)
		);
		foreach ( (array) $kids as $page ) {
			if ( $page->post_name === $slug || 0 === strpos( $page->post_name, $slug . '-' ) ) {
				$candidates[ (int) $page->ID ] = $page;
			}
		}
	}

	$preferred = null;
	foreach ( $candidates as $page ) {
		if ( get_post_meta( $page->ID, '_wp_page_template', true ) === $meta['template'] ) {
			$preferred = $page;
			break;
		}
	}
	if ( ! $preferred ) {
		foreach ( $candidates as $page ) {
			if ( $page->post_name === $slug ) {
				$preferred = $page;
				break;
			}
		}
	}
	if ( ! $preferred && $candidates ) {
		$preferred = reset( $candidates );
	}

	if ( ! $preferred ) {
		$page_id = wp_insert_post(
			array(
				'post_title'  => $meta['title'],
				'post_name'   => $slug,
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => $parent_id,
			)
		);
		if ( ! $page_id || is_wp_error( $page_id ) ) {
			return 0;
		}
		update_post_meta( $page_id, '_wp_page_template', $meta['template'] );
		return (int) $page_id;
	}

	$preferred_id = (int) $preferred->ID;

	foreach ( $candidates as $page ) {
		if ( (int) $page->ID === $preferred_id ) {
			continue;
		}
		$name = $page->post_name;
		if ( $name === $slug || 0 === strpos( $name, $slug . '-' ) ) {
			wp_trash_post( (int) $page->ID );
		}
	}

	// Free clean slug if another published page still holds it.
	$holder = get_page_by_path( 'ai-development/' . $slug );
	if ( ! $holder ) {
		$holder = get_page_by_path( $slug );
	}
	if ( $holder && (int) $holder->ID !== $preferred_id ) {
		wp_trash_post( (int) $holder->ID );
	}

	wp_update_post(
		array(
			'ID'          => $preferred_id,
			'post_title'  => $meta['title'],
			'post_name'   => $slug,
			'post_parent' => $parent_id,
			'post_status' => 'publish',
		)
	);
	update_post_meta( $preferred_id, '_wp_page_template', $meta['template'] );

	return $preferred_id;
}

/**
 * Point AI Development submenu items at the canonical child pages.
 *
 * @param int   $parent_page_id AI Development page ID.
 * @param array $resolved       slug => page ID.
 * @param array $children_meta  slug => meta.
 */
function pps_attach_ai_children_to_primary_menu( $parent_page_id, $resolved, $children_meta ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $parent_page_id || ! $resolved ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'any' ) );
	if ( ! $items ) {
		return;
	}

	$ai_menu_item_id = 0;
	foreach ( $items as $item ) {
		if ( 0 !== (int) $item->menu_item_parent ) {
			continue;
		}
		if ( 'page' === $item->object && (int) $item->object_id === (int) $parent_page_id ) {
			$ai_menu_item_id = (int) $item->ID;
			break;
		}
	}
	if ( ! $ai_menu_item_id ) {
		foreach ( $items as $item ) {
			if ( 0 === (int) $item->menu_item_parent && false !== stripos( $item->title, 'AI Development' ) ) {
				$ai_menu_item_id = (int) $item->ID;
				break;
			}
		}
	}
	if ( ! $ai_menu_item_id ) {
		return;
	}

	// Retarget parent menu item to the canonical AI Development page.
	wp_update_nav_menu_item(
		$menu_id,
		$ai_menu_item_id,
		array(
			'menu-item-title'     => 'AI Development',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => (int) $parent_page_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => 0,
		)
	);

	$child_items = array();
	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent === $ai_menu_item_id ) {
			$child_items[] = $item;
		}
	}

	$used_menu_item_ids = array();
	$position           = 1;

	foreach ( $resolved as $slug => $page_id ) {
		$page_id = (int) $page_id;
		if ( ! $page_id || empty( $children_meta[ $slug ] ) ) {
			continue;
		}

		$existing_item_id = 0;
		foreach ( $child_items as $item ) {
			if ( in_array( (int) $item->ID, $used_menu_item_ids, true ) ) {
				continue;
			}
			if ( (int) $item->object_id === $page_id ) {
				$existing_item_id = (int) $item->ID;
				break;
			}
		}
		if ( ! $existing_item_id ) {
			foreach ( $child_items as $item ) {
				if ( in_array( (int) $item->ID, $used_menu_item_ids, true ) ) {
					continue;
				}
				$linked = get_post( (int) $item->object_id );
				if ( $linked && ( $linked->post_name === $slug || 0 === strpos( $linked->post_name, $slug . '-' ) ) ) {
					$existing_item_id = (int) $item->ID;
					break;
				}
			}
		}
		if ( ! $existing_item_id ) {
			foreach ( $child_items as $item ) {
				if ( in_array( (int) $item->ID, $used_menu_item_ids, true ) ) {
					continue;
				}
				if ( false !== stripos( $item->title, $children_meta[ $slug ]['title'] ) || false !== stripos( $children_meta[ $slug ]['title'], $item->title ) ) {
					$existing_item_id = (int) $item->ID;
					break;
				}
			}
		}

		$item_id = wp_update_nav_menu_item(
			$menu_id,
			$existing_item_id,
			array(
				'menu-item-title'     => $children_meta[ $slug ]['title'],
				'menu-item-object'    => 'page',
				'menu-item-object-id' => $page_id,
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => $ai_menu_item_id,
				'menu-item-position'  => $position++,
			)
		);

		if ( $item_id && ! is_wp_error( $item_id ) ) {
			$used_menu_item_ids[] = (int) $item_id;
		}
	}

	// Remove leftover duplicate AI submenu items.
	$items = wp_get_nav_menu_items( $menu_id, array( 'post_status' => 'any' ) );
	if ( $items ) {
		foreach ( $items as $item ) {
			if ( (int) $item->menu_item_parent !== $ai_menu_item_id ) {
				continue;
			}
			if ( ! in_array( (int) $item->ID, $used_menu_item_ids, true ) ) {
				wp_delete_post( (int) $item->ID, true );
			}
		}
	}
}

/**
 * One-time repair: AI child URLs like /phone-text-system-2/ → /phone-text-system/
 * and rewire the primary submenu to those pages.
 */
function pps_repair_ai_development_nav() {
	$version = '1.0.0';
	if ( get_option( 'pps_ai_nav_repair_version' ) === $version ) {
		return;
	}

	$parent = get_page_by_path( 'ai-development' );
	if ( ! $parent ) {
		return;
	}

	$children = pps_ai_development_children();
	$resolved = array();

	foreach ( $children as $slug => $meta ) {
		$page_id = pps_resolve_ai_child_page( (int) $parent->ID, $slug, $meta );
		if ( $page_id ) {
			$resolved[ $slug ] = $page_id;
		}
	}

	if ( $resolved ) {
		pps_attach_ai_children_to_primary_menu( (int) $parent->ID, $resolved, $children );
	}

	update_option( 'pps_ai_nav_repair_version', $version );
}
add_action( 'after_setup_theme', 'pps_repair_ai_development_nav', 55 );
add_action( 'after_switch_theme', 'pps_repair_ai_development_nav', 25 );

/**
 * Redirect duplicate AI slugs (…-2) to the canonical URL.
 */
function pps_redirect_ai_duplicate_slugs() {
	if ( is_admin() || ! is_page() ) {
		return;
	}

	$page = get_queried_object();
	if ( ! ( $page instanceof WP_Post ) || 'page' !== $page->post_type ) {
		return;
	}

	foreach ( array_keys( pps_ai_development_children() ) as $slug ) {
		if ( $page->post_name !== $slug . '-2' && 0 !== strpos( $page->post_name, $slug . '-' ) ) {
			continue;
		}
		$canonical = get_page_by_path( 'ai-development/' . $slug );
		if ( ! $canonical ) {
			$canonical = get_page_by_path( $slug );
		}
		if ( $canonical && (int) $canonical->ID !== (int) $page->ID ) {
			wp_safe_redirect( get_permalink( $canonical ), 301 );
			exit;
		}
	}
}
add_action( 'template_redirect', 'pps_redirect_ai_duplicate_slugs', 1 );
