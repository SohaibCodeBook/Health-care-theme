<?php
/**
 * AI Development — Front Desk Support and Automation Tools.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from legacy front desk automation page.
 *
 * @return array
 */
function pps_ai_fd_defaults() {
	return array(
		'seo_title' => 'Front Desk Support and Automation Tools | Perform Practice Solutions',
		'seo_desc'  => 'Purpose-built front desk automation that handles admin tasks, reminders, intake, and EMR workflows so your team can focus on patients. Book a free discovery call.',

		'hero_eyebrow'   => 'Front Desk Support and Automation Tools',
		'hero_title'     => 'Free Your Front Desk to Do What Only People Can Do',
		'hero_subtitle'  => 'Purpose-built automation that handles the administrative grind so your team can focus entirely on patients.',
		'hero_lead'      => 'Your front desk team is talented, trained, and patient-centered. So why are they spending hours each week on repetitive data entry, follow-up tasks, and administrative busywork that could be handled automatically? Perform Practice Solutions\' Front Desk Support and Automation Tools take those tasks off your team\'s plate completely, running quietly in the background while your staff focuses on the patients walking through your door.',
		'hero_cta'       => 'Book a Free Discovery Call',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See What Gets Automated',
		'hero_cta_2_url' => '#workflows',

		'highlight_1_title' => 'Admin Work Automated',
		'highlight_1_text'  => 'Repetitive, time-draining tasks handled automatically, without staff involvement.',
		'highlight_2_title' => 'Team Time Reclaimed',
		'highlight_2_text'  => 'Your front desk team gets their day back, focused on face-to-face patient care.',
		'highlight_3_title' => 'Fewer Errors, Less Friction',
		'highlight_3_text'  => 'Consistent automated processes reduce manual mistakes and keep operations running clean.',

		'workflow_eyebrow' => 'Automations',
		'workflow_title'   => 'The Tasks Your Team Should Never Do Manually Again',
		'workflow_lead'    => 'High-volume, error-prone, and time-consuming. These are exactly the tasks automation was built for.',
		'workflow_intro'   => 'We build automation workflows tailored to your practice\'s specific operations, identifying the administrative tasks eating the most time and replacing them with reliable, hands-free systems. Common workflows we build for practices include:',

		'workflow_1_title' => 'Appointment Reminders',
		'workflow_1_text'  => 'Automated text and email reminders go out at the right intervals, reducing no-shows without any manual sends from your team.',
		'workflow_2_title' => 'New Patient Intake',
		'workflow_2_text'  => 'Digital intake forms collected and pushed into your EMR automatically. No paper, no re-entry, no delays.',
		'workflow_3_title' => 'Insurance Verification',
		'workflow_3_text'  => 'Eligibility checks are triggered and logged automatically before appointments, so staff are not scrambling last minute.',
		'workflow_4_title' => 'Follow-Up Sequences',
		'workflow_4_text'  => 'Post-visit follow-ups, satisfaction check-ins, and reactivation campaigns run automatically based on patient milestones.',
		'workflow_5_title' => 'Internal Task Triggers',
		'workflow_5_text'  => 'When a specific event happens, a form submitted, an appointment booked, a cancellation received, the right internal task fires automatically.',
		'workflow_6_title' => 'Reporting & Dashboards',
		'workflow_6_text'  => 'Automated reporting delivered on a set schedule so leadership always has the data they need, without pulling it manually.',

		'impact_eyebrow' => 'The shift',
		'impact_title'   => 'When Admin Is Automated, Everything Improves',
		'impact_lead'    => 'Less friction in the back office means better care at the front desk.',
		'impact_text'    => 'The goal is not just to save time. It is to change what your team spends their time on. When front desk staff are not buried in administrative work, they are more present for patients, more accurate in their communication, and more focused on the interactions that actually require a human touch.',
		'impact_closing' => 'Perform Practice Solutions builds the automation layer that makes that shift possible. The result is a practice where technology handles the routine and your people handle the rest.',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently Asked Questions',
		'faq_1_q'     => 'How do we figure out which tasks to automate first?',
		'faq_1_a'     => 'We start with a workflow audit. We look at what your front desk team spends the most time on, where mistakes tend to happen, and where delays in your process are affecting the patient experience. From there, we prioritize the highest-impact automations to build first.',
		'faq_2_q'     => 'Will our team need to learn new software or change how they work?',
		'faq_2_a'     => 'Minimal adjustment. Our automations are built to work within your existing tools and workflows, not to replace them with something new. For most practices, the biggest change is simply noticing that tasks they used to do manually are just done.',
		'faq_3_q'     => 'Can these tools integrate with our EMR?',
		'faq_3_a'     => 'Yes. EMR integration is a core part of how we build these workflows. Whether it is pulling availability, writing appointment data, logging intake responses, or triggering events based on scheduling changes, we connect directly to your system of record.',
		'faq_4_q'     => 'How long does it take to get set up?',
		'faq_4_a'     => 'Timeline varies based on the complexity and number of workflows being built. Most practices see their first automations live within a few weeks of kick-off. We will give you a realistic timeline during your discovery call based on your specific situation.',
		'faq_5_q'     => 'Is there ongoing support after the automation is built?',
		'faq_5_a'     => 'Yes. We provide ongoing support to monitor, maintain, and adjust your automations as your practice evolves. If something changes in your workflow, a new provider, a new service, an updated protocol, we are there to update the system accordingly.',

		'cta_title'      => 'Reclaim Your Team\'s Time',
		'cta_text'       => 'Book a discovery call and we\'ll audit your front desk workflows, identify the highest-impact automations, and show you what your team could get back every week.',
		'cta_button'     => 'Book a Free Discovery Call',
		'cta_button_url' => '#contact',
	);
}

/**
 * Front desk automation page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_ai_fd( $key, $default = '' ) {
	$defaults = pps_ai_fd_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_ai_fd_' . $key, $default );
}

/**
 * Register Customizer fields.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_ai_fd_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_ai_fd',
		array(
			'title'    => __( 'AI — Front Desk Tools', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 17,
		)
	);

	foreach ( pps_ai_fd_defaults() as $key => $default ) {
		$setting_id  = 'pps_ai_fd_' . $key;
		$is_textarea = (bool) preg_match( '/(_text|_lead|_intro|_a|seo_desc|_subtitle|_closing)$/', $key );
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
				'section' => 'pps_section_ai_fd',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_ai_fd_customize_register', 24 );

/**
 * Whether current page uses the front desk tools template.
 *
 * @return bool
 */
function pps_is_ai_fd_page() {
	$template = 'page-templates/ai-front-desk-tools.php';

	if ( is_page_template( $template ) || is_page_template( 'ai-front-desk-tools.php' ) ) {
		return true;
	}

	if ( is_page( 'front-desk-tools' ) ) {
		return true;
	}

	$page_id = get_queried_object_id();
	if ( $page_id ) {
		$assigned = get_page_template_slug( $page_id );
		if ( $template === $assigned || 'ai-front-desk-tools.php' === $assigned ) {
			return true;
		}
	}

	$page = get_queried_object();
	return ( $page instanceof WP_Post && 'page' === $page->post_type && 'front-desk-tools' === $page->post_name );
}

/**
 * Register front desk tools page stylesheet.
 */
function pps_ai_fd_register_styles() {
	pps_enqueue_theme_style( 'pps-ai-front-desk-tools', '/assets/css/ai-front-desk-tools.css', array() );

	if ( ! has_action( 'wp_head', 'pps_ai_fd_print_inline_css' ) ) {
		add_action( 'wp_head', 'pps_ai_fd_print_inline_css', 200 );
	}
}

/**
 * Print front desk tools CSS inline.
 */
function pps_ai_fd_print_inline_css() {
	pps_print_theme_style_inline( 'pps-ai-front-desk-tools', '/assets/css/ai-front-desk-tools.css' );
}

/**
 * Force front desk tools CSS after header.
 */
function pps_ai_fd_force_styles() {
	pps_print_theme_style_inline( 'pps-ai-front-desk-tools', '/assets/css/ai-front-desk-tools.css' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_ai_fd_document_title( $title ) {
	if ( ! pps_is_ai_fd_page() ) {
		return $title;
	}
	$custom = page_ai_fd( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_ai_fd_document_title', 29 );

/**
 * Meta description.
 */
function pps_ai_fd_meta_description() {
	if ( ! pps_is_ai_fd_page() ) {
		return;
	}
	$desc = page_ai_fd( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_ai_fd_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_ai_fd_skip_generic_meta() {
	if ( pps_is_ai_fd_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_ai_fd_skip_generic_meta' );

/**
 * Body class.
 *
 * @param array $classes Body classes.
 * @return array
 */
function pps_ai_fd_body_class( $classes ) {
	if ( pps_is_ai_fd_page() ) {
		$classes[] = 'pps-ai-fd-page';
	}
	return $classes;
}
add_filter( 'body_class', 'pps_ai_fd_body_class' );

/**
 * Enqueue page stylesheet.
 */
function pps_ai_fd_enqueue_assets() {
	if ( pps_is_ai_fd_page() ) {
		pps_ai_fd_register_styles();
	}
}
add_action( 'wp_enqueue_scripts', 'pps_ai_fd_enqueue_assets', 25 );

/**
 * Force template for front-desk-tools slug.
 *
 * @param string $template Template path.
 * @return string
 */
function pps_ai_fd_template_include( $template ) {
	if ( is_page( 'front-desk-tools' ) ) {
		$custom = locate_template( 'page-templates/ai-front-desk-tools.php' );
		if ( $custom ) {
			return $custom;
		}
	}
	return $template;
}
add_filter( 'template_include', 'pps_ai_fd_template_include', 99 );

/**
 * Create page, assign template/SEO.
 */
function pps_setup_ai_fd_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_ai_fd_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_ai_fd_defaults();

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

	$page = get_page_by_path( 'ai-development/front-desk-tools' );
	if ( ! $page ) {
		$page = get_page_by_path( 'front-desk-tools' );
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
				'post_title'  => 'Front Desk Support and Automation Tools',
				'post_name'   => 'front-desk-tools',
				'post_status' => 'publish',
				'post_type'   => 'page',
				'post_parent' => (int) $parent->ID,
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/ai-front-desk-tools.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );

	update_option( 'pps_ai_fd_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_ai_fd_page', 46 );
