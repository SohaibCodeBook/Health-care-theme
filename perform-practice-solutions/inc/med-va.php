<?php
/**
 * Virtual Medical Assistant (Med VA) page — content, Customizer, page + menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from Virtual Medical Assistant.docx.
 *
 * @return array
 */
function pps_va_defaults() {
	return array(
		'seo_title' => 'Virtual Medical Assistant Services in the USA | Perform Practice Solutions',
		'seo_desc'  => 'Hire a Virtual Medical Assistant to streamline administrative tasks, reduce overhead, and keep your practice running smoothly. Professional support for U.S. healthcare providers.',

		'hero_eyebrow'   => 'Virtual Medical Assistant',
		'hero_title'     => 'Professional virtual medical assistant for US healthcare providers',
		'hero_lead'      => 'Running a healthcare practice means juggling patient care, scheduling, billing, and a constant stream of administrative work. A virtual medical assistant from Perform Practice Solutions takes that weight off your team so your staff can focus on what matters most: your patients.',
		'hero_text'      => 'We connect practices across the United States with trained, HIPAA compliant virtual medical assistants who handle the daily tasks that keep your front desk, billing, and patient communication running smoothly. Whether you are a solo provider or manage multiple locations, our virtual assistant for medical professionals is built to fit your workflow, your EMR system, and your specialty.',
		'hero_cta'       => 'Schedule a Consultation',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See How It Works',
		'hero_cta_2_url' => '#process',
		'hero_image'     => '',

		'why_eyebrow' => 'Why Now',
		'why_title'   => 'Why your practice needs a virtual medical assistant now',
		'why_text'    => 'Healthcare administrators and practice owners across the United States face the same challenge: growing patient demand paired with rising labor costs and staffing shortages. The administrative workload that doesn\'t directly involve patient interaction still consumes hours each week, pulling you away from revenue-generating activities and creating bottlenecks in patient flow.',
		'why_lead'    => 'A virtual medical assistant solves this by handling:',
		'why_1_title' => 'Appointment Scheduling and Calendar Management',
		'why_1_text'  => 'Reduce no-shows and double bookings while keeping your schedule optimized for maximum patient throughput.',
		'why_2_title' => 'Insurance Verification and Authorization Processing',
		'why_2_text'  => 'Catch coverage gaps and authorization requirements before patients arrive, eliminating claim denials and payment delays.',
		'why_3_title' => 'Patient Communication and Follow-up',
		'why_3_text'  => 'Remind patients of upcoming visits, collect intake information, manage phone inquiries, and handle routine questions—without tying up your clinical staff.',
		'why_closing' => 'Most practices that hire a virtual assistant report completing administrative tasks 30-40% faster, recovering 5-10 hours per week that previously went to back-office work. This directly translates to reduced stress on your in-house team and faster patient throughput.',
		'why_image'   => '',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'How Perform Practice Solutions virtual medical assistant process works',
		'step_1_title'    => 'Initial Consultation and Task Assessment',
		'step_1_text'     => 'We start by understanding your practice\'s specific pain points. Whether you\'re a solo practitioner in rural America or managing a multi-provider clinic, we identify which administrative tasks are consuming the most time and creating friction. This consultation clarifies which functions are best handled remotely and which require on-site presence, ensuring the virtual assistant role aligns with your workflow and compliance requirements.',
		'step_2_title'    => 'Onboarding and System Integration',
		'step_2_text'     => 'Your virtual assistant is trained on your specific practice management software, EHR platform, scheduling system, and internal protocols. Unlike a generic administrative hire, a specialized virtual medical assistant understands HIPAA compliance, patient privacy protocols, and the documentation standards your practice follows. They integrate with your existing team and learn your patient communication preferences, billing procedures, and provider-specific requirements.',
		'step_3_title'    => 'Task Handoff and Workflow Optimization',
		'step_3_text'     => 'Once trained, the assistant takes ownership of assigned tasks. In most practices across the United States, this includes processing new patient intake, confirming appointments 24 hours before visits, managing insurance pre-authorization requests, updating patient contact information, and handling routine patient phone calls. Your in-house staff no longer owns these tasks, freeing them to focus on clinical support or revenue cycle management.',
		'step_4_title'    => 'Ongoing Management and Reporting',
		'step_4_text'     => 'Your virtual assistant provides regular updates on task completion, tracks key metrics (appointment confirmations, insurance verifications processed, average response time to patient inquiries), and adjusts workflows based on feedback. This accountability ensures consistent quality and continuous improvement in your practice\'s operations.',

		'tasks_eyebrow' => 'What They Handle',
		'tasks_title'   => 'Perform Practice Solutions virtual medical assistants handle more than you think',
		'tasks_lead'    => 'Our Medical Virtual Assistants are trained to take on the tasks that pull your clinical staff away from patient care. Here is what they can manage on your behalf:',
		'task_1_icon'   => 'fa-calendar-check',
		'task_1_title'  => 'Scheduling and Appointment Management',
		'task_1_text'   => 'Your MVA handles incoming appointment requests, manages your calendar, sends confirmations, and follows up on cancellations and no-shows. Patients get prompt responses, and your schedule stays full.',
		'task_2_icon'   => 'fa-shield-halved',
		'task_2_title'  => 'Insurance Verification and Eligibility Checks',
		'task_2_text'   => 'Verifying patient benefits before an appointment is one of the most time-consuming tasks in any practice. Our virtual medical assistants handle this proactively, so your front desk is never caught off guard at check-in.',
		'task_3_icon'   => 'fa-file-signature',
		'task_3_title'  => 'Prior Authorizations',
		'task_3_text'   => 'Chasing authorizations takes hours away from your team every week. Your MVA manages the full process — submitting requests, following up with payers, and tracking approvals so treatment is never delayed.',
		'task_4_icon'   => 'fa-user-plus',
		'task_4_title'  => 'Patient Reactivation Outreach',
		'task_4_text'   => 'Your inactive patient list represents real, recoverable revenue. Our virtual medical assistants conduct professional reactivation outreach to bring lapsed patients back into care.',
		'task_5_icon'   => 'fa-phone',
		'task_5_title'  => 'Phone and Voicemail Management',
		'task_5_text'   => 'Missed calls mean missed patients. Your MVA answers calls, responds to voicemails, and handles routine inquiries so every person who reaches out gets a real, professional response.',
		'task_6_icon'   => 'fa-envelope',
		'task_6_title'  => 'Email and Referral Correspondence',
		'task_6_text'   => 'From coordinating with referring physicians to responding to patient inquiries, your VA manages correspondence with professionalism and speed.',
		'task_7_icon'   => 'fa-file-invoice-dollar',
		'task_7_title'  => 'Billing Support and Administrative Tasks',
		'task_7_text'   => 'From entering charges and posting payments to supporting your billing team with data entry and documentation, your MVA helps keep your revenue cycle moving.',

		'cost_eyebrow' => 'The Real Cost',
		'cost_title'   => 'The real cost of not having a virtual medical assistant',
		'cost_text_1'  => 'Most practice owners underestimate what administrative overload is actually costing them.',
		'cost_text_2'  => 'Up to 15 percent of submitted insurance claims are denied on the first pass. Without someone staying on top of authorizations, verification, and billing support, that number climbs. And 65 percent of denied claims are never reworked, which means that revenue is lost for good.',
		'cost_text_3'  => 'Your clinical staff spends an estimated 20 to 30 percent of their time on administrative tasks that have nothing to do with patient care. When your front desk is stretched too thin, patient satisfaction drops, scheduling gaps widen, and your team burns out.',
		'cost_text_4'  => 'A virtual medical assistant addresses all of this at a fraction of the cost of adding an in-office employee.',
		'cost_1_value' => '15%',
		'cost_1_label' => 'of claims denied on first pass',
		'cost_2_value' => '65%',
		'cost_2_label' => 'of denied claims never reworked',
		'cost_3_value' => '20–30%',
		'cost_3_label' => 'of clinical staff time lost to admin',

		'test_eyebrow'  => 'What Practice Owners Are Saying',
		'test_title'    => 'Trusted by practices that needed front-desk capacity without the overhead',
		'test_1_quote'  => 'We were drowning in prior authorizations and our front desk was constantly overwhelmed. Within the first two weeks of working with our virtual medical assistant from Perform Practice Solutions, we cleared a backlog that had been building for months. She works inside our EMR like she has been here for years. I wish we had done this sooner.',
		'test_1_name'   => 'Dr. Tran, PT, DPT',
		'test_1_meta'   => 'Practice Owner',
		'test_2_quote'  => 'I was skeptical at first about having a remote team member handle our insurance verifications and patient scheduling. But the process PPS uses to match and onboard our VA made it seamless. Our no-show rate dropped, our calls are always answered, and our in-office staff finally has time to focus on patients. It has genuinely changed how our office runs.',
		'test_2_name'   => 'S. Kowalski',
		'test_2_meta'   => 'Office Manager',
		'test_3_quote'  => 'We support four providers across two locations, and keeping up with authorizations alone was a full-time problem. Perform Practice Solutions matched us with an MVA who understood our workflows from day one. She handles our referral correspondence, eligibility checks, and reactivation outreach without us having to micromanage a thing. The ROI has been very clear.',
		'test_3_name'   => 'James Okafor',
		'test_3_meta'   => 'Practice Administrator',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_1_q'     => 'What is a virtual medical assistant?',
		'faq_1_a'     => 'A virtual medical assistant is a remote professional trained to support healthcare practices with tasks such as scheduling, patient communication, insurance verification, and administrative work, all while following HIPAA compliance standards.',
		'faq_2_q'     => 'What is the difference between global medical virtual assistants and local in office staff?',
		'faq_2_a'     => 'Global medical virtual assistants work remotely, often at a lower cost than in office hires, while still receiving healthcare specific training. They handle the same administrative responsibilities as onsite staff without the overhead of office space, equipment, or full time benefits.',
		'faq_3_q'     => 'Are medical assistant virtual services secure and HIPAA compliant?',
		'faq_3_a'     => 'Yes. Every virtual assistant placed through Perform Practice Solutions follows strict HIPAA compliant protocols and uses secure systems to protect patient data at every step.',
		'faq_4_q'     => 'How is a virtual healthcare medical assistant trained for my specialty?',
		'faq_4_a'     => 'We match assistants based on your practice type, whether physical therapy, chiropractic, occupational therapy, or speech therapy, and provide onboarding tailored to your specific workflows and EMR system.',
		'faq_5_q'     => 'Can a virtual assistant for medical professionals integrate with my existing EMR?',
		'faq_5_a'     => 'Yes. Our medical virtual assistants are experienced with leading platforms including Tebra, AthenaHealth, Raintree, Stride, and CureMD, so they can step into your existing systems without disrupting daily operations.',
		'faq_6_q'     => 'How quickly can I get started with a virtual medical assistant?',
		'faq_6_a'     => 'After your initial consultation, we typically present qualified candidates within days, and onboarding is designed to be smooth so your practice sees support quickly.',

		'cta_title'      => 'Get your practice running more efficiently',
		'cta_text'       => 'Your time should go toward patient care and growing your practice, not managing appointment calendars and insurance authorizations.',
		'cta_text_2'     => 'A virtual medical assistant removes that friction, giving you back hours each week while reducing operational overhead. If you\'re ready to explore how this service works for your specific practice, schedule a consultation to discuss your needs and see the potential impact.',
		'cta_button'     => 'Schedule a Consultation',
		'cta_button_url' => '#contact',
	);
}

/**
 * Theme image URL helper for VA defaults.
 *
 * @param string $filename Image filename in assets/images.
 * @return string
 */
function pps_va_theme_image( $filename ) {
	return PPS_THEME_URI . '/assets/images/' . ltrim( $filename, '/' );
}

/**
 * VA page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_va( $key, $default = '' ) {
	$defaults = pps_va_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}

	$value = (string) get_theme_mod( 'pps_va_' . $key, $default );

	if ( 'hero_image' === $key && '' === $value ) {
		return pps_va_theme_image( 'va-hero.jpg' );
	}
	if ( 'why_image' === $key && '' === $value ) {
		return pps_va_theme_image( 'va-support.jpg' );
	}

	return $value;
}

/**
 * Register Customizer for Med VA page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_va_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_va',
		array(
			'title'    => __( 'Virtual Medical Assistant', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 15,
		)
	);

	foreach ( pps_va_defaults() as $key => $default ) {
		$setting_id  = 'pps_va_' . $key;
		$is_image    = (bool) preg_match( '/_image$/', $key );
		$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_a|_quote|_closing|seo_desc)$/', $key );
		$is_url      = (bool) preg_match( '/_url$/', $key ) || $is_image;

		$wp_customize->add_setting(
			$setting_id,
			array(
				'default'           => $default,
				'sanitize_callback' => $is_url ? 'esc_url_raw' : ( $is_textarea ? 'sanitize_textarea_field' : 'sanitize_text_field' ),
			)
		);

		if ( $is_image ) {
			$wp_customize->add_control(
				new WP_Customize_Image_Control(
					$wp_customize,
					$setting_id,
					array(
						'label'   => ucwords( str_replace( '_', ' ', $key ) ),
						'section' => 'pps_section_va',
					)
				)
			);
		} else {
			$wp_customize->add_control(
				$setting_id,
				array(
					'label'   => ucwords( str_replace( '_', ' ', $key ) ),
					'section' => 'pps_section_va',
					'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
				)
			);
		}
	}
}
add_action( 'customize_register', 'pps_va_customize_register', 23 );

/**
 * Whether current page is Med VA template.
 *
 * @return bool
 */
function pps_is_va_page() {
	return is_page_template( 'page-templates/med-va.php' );
}

/**
 * SEO title.
 *
 * @param string $title Title.
 * @return string
 */
function pps_va_document_title( $title ) {
	if ( ! pps_is_va_page() ) {
		return $title;
	}
	$custom = page_va( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_va_document_title', 26 );

/**
 * Meta description.
 */
function pps_va_meta_description() {
	if ( ! pps_is_va_page() ) {
		return;
	}
	$desc = page_va( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_va_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_va_skip_generic_meta() {
	if ( pps_is_va_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_va_skip_generic_meta' );

/**
 * Point Med VA menu item at the new page.
 *
 * @param int $page_id Page ID.
 */
function pps_attach_va_to_primary_menu( $page_id ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $page_id ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	$va_item_id = 0;
	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent !== 0 ) {
			continue;
		}
		$slug = get_post_field( 'post_name', $item->object_id );
		if ( in_array( $slug, array( 'med-va', 'virtual-medical-assistant' ), true ) ) {
			$va_item_id = (int) $item->ID;
			break;
		}
		if ( 'Med VA' === $item->title ) {
			$va_item_id = (int) $item->ID;
			break;
		}
	}

	if ( $va_item_id ) {
		wp_update_nav_menu_item(
			$menu_id,
			$va_item_id,
			array(
				'menu-item-title'     => 'Med VA',
				'menu-item-object'    => 'page',
				'menu-item-object-id' => (int) $page_id,
				'menu-item-type'      => 'post_type',
				'menu-item-status'    => 'publish',
				'menu-item-parent-id' => 0,
			)
		);
		return;
	}

	wp_update_nav_menu_item(
		$menu_id,
		0,
		array(
			'menu-item-title'     => 'Med VA',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => (int) $page_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => 0,
			'menu-item-position'  => 4,
		)
	);
}

/**
 * Create VA page, assign template/SEO, update menu.
 */
function pps_setup_va_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_va_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_va_defaults();
	$page     = get_page_by_path( 'virtual-medical-assistant' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Virtual Medical Assistant',
				'post_name'   => 'virtual-medical-assistant',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/med-va.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_va_to_primary_menu( $page_id );
	update_option( 'pps_va_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_va_page', 43 );

/**
 * Redirect legacy /med-va/ to the new URL.
 */
function pps_redirect_legacy_med_va() {
	if ( is_admin() || ! is_page( 'med-va' ) ) {
		return;
	}

	$target = get_page_by_path( 'virtual-medical-assistant' );
	if ( ! $target ) {
		return;
	}

	wp_safe_redirect( get_permalink( $target ), 301 );
	exit;
}
add_action( 'template_redirect', 'pps_redirect_legacy_med_va' );
