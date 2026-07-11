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
		'digital-marketing' => array(
			'title'   => 'Digital Marketing',
			'content' => '<p>Digital Marketing page content will be designed in a later phase.</p>',
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
			'title'   => 'Contact Us',
			'content' => '<p>Prefer the homepage contact form, or reach us by phone or email.</p>',
		),
	);

	$created = array();

	foreach ( $pages as $slug => $data ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$created[ $slug ] = (int) $existing->ID;
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
		array( 'slug' => 'billing-solutions', 'title' => 'Billing Solutions' ),
		array( 'slug' => 'credentialing', 'title' => 'Credentialing' ),
		array( 'slug' => 'med-va', 'title' => 'Med VA' ),
		array( 'slug' => 'digital-marketing', 'title' => 'Digital Marketing' ),
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
