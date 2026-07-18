<?php
/**
 * Medical Credentialing Services page — content, Customizer, page + menu setup.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Default content from Medical Credentialing Services.docx.
 *
 * @return array
 */
function pps_cred_defaults() {
	return array(
		'seo_title' => 'Medical Credentialing Services That Get Providers Enrolled Faster | Perform Practice Solutions',
		'seo_desc'  => 'Expert medical credentialing services that streamline provider enrollment and cut administrative delays. Get your team credentialed faster with a proven process.',

		'hero_eyebrow'   => 'Medical Credentialing Services',
		'hero_title'     => 'Professional medical credentialing services that accelerate provider enrollment',
		'hero_lead'      => 'Medical credentialing is the verification and documentation process that confirms a healthcare provider\'s qualifications, licenses, and training before that provider can practice and receive insurance reimbursement. Without it, qualified physicians, nurse practitioners, and other clinical staff cannot legally bill insurers or see patients through most networks.',
		'hero_note'      => 'In short: if a provider isn\'t credentialed, they can\'t get paid, and your practice can\'t grow.',
		'hero_text'      => 'Perform Practice Solutions offers dedicated medical provider credentialing services that handle the paperwork, verification delays, and payer requirements so your practice can focus on patient care instead of chasing documents across multiple state and federal databases.',
		'hero_cta'       => 'Schedule a Consultation',
		'hero_cta_url'   => '#contact',
		'hero_cta_2'     => 'See the Process',
		'hero_cta_2_url' => '#process',

		'why_eyebrow' => 'Why It Matters',
		'why_title'   => 'Why medical credentialing matters for your practice',
		'why_text'    => 'Healthcare providers across the United States face credentialing as a mandatory regulatory step, yet it remains one of the most time consuming administrative processes in medicine. Credentialing involves coordinating documents from medical schools, residency programs, licensing boards, malpractice carriers, and multiple insurance companies. A missing signature or an incomplete application can send the entire file back to the beginning. Meanwhile, your new provider sits idle, unable to generate revenue or treat patients.',
		'why_lead'    => 'Working with a professional partner for your medical billing and credentialing services removes that friction and protects your practice in three key ways:',

		'benefit_1_title' => 'Faster Enrollment and Revenue',
		'benefit_1_text'  => 'Most providers complete credentialing within 6-8 weeks when managed professionally, versus 12+ weeks when handled internally. That translates to weeks of billable patient visits your practice would have lost.',
		'benefit_2_title' => 'Reduced Compliance Risk',
		'benefit_2_text'  => 'A credentialing error can trigger insurance denials or put your practice out of network with major payers. Professional credentialing ensures every requirement is met the first time across every plan you contract with.',
		'benefit_3_title' => 'Complete Documentation Trail',
		'benefit_3_text'  => 'Credentialing services maintain organized, auditable records of every step, protecting your practice during insurance audits or regulatory inquiries.',
		'why_closing'     => 'Practices that outsource credentialing report fewer enrollment rejections and faster turnaround on high-priority network contracts, which directly impacts cash flow during provider onboarding.',

		'process_eyebrow' => 'How It Works',
		'process_title'   => 'How Perform Practice Solutions medical credentialing services work',
		'step_1_title'    => 'Initial Information Gathering and Timeline Planning',
		'step_1_text'     => 'The process begins with collecting all required information from the provider. This includes education history, training details, licensing numbers, malpractice insurance information, and DEA/state board certifications. A credentialing specialist in your region reviews what you have, identifies gaps, and creates a tailored timeline so you understand when enrollment is realistic. This step sets expectations and prevents delays caused by missing or incomplete documentation later.',
		'step_2_title'    => 'Primary Source Verification',
		'step_2_text'     => 'This is where the actual credentialing work happens. Specialists contact medical schools, residency programs, fellowship institutions, and licensing boards directly to verify every credential. They also obtain malpractice insurance verification and confirm board certifications. In the United States, this step requires navigating different state medical board systems, the NPDB (National Practitioner Data Bank), and DEA databases. Each has unique submission processes and timelines. A credentialing service knows exactly how to expedite these requests and follow up when responses lag.',
		'step_3_title'    => 'Payer-Specific Application Completion',
		'step_3_text'     => 'Insurance contracts each have their own enrollment forms and requirements. While the core credential information stays the same, different payers request different documentation, ask for different physician specialties to be listed, or require specific contract language. Your credentialing partner completes each payer application accurately and submits it with the complete verification file, reducing the likelihood of rejection and resubmission cycles that stretch timelines into months.',
		'step_4_title'    => 'Credential Committee Review and Approval',
		'step_4_text'     => 'Most practices require credentialing or peer review committee approval before a provider can be employed or contracted. Your credentialing service prepares the complete credential file with all primary source verifications, ensures it meets your committee\'s standards, and supports the approval process. This removes the coordination burden from your office manager or HR team.',
		'step_5_title'    => 'Ongoing Monitoring and Recredentialing',
		'step_5_text'     => 'Credentialing doesn\'t end at enrollment. Medical providers require recredentialing every two to three years, and some payers require updates more frequently. A credentialing service monitors your providers\' expiring credentials, initiates recredentialing cycles automatically, and resubmits to payers before contracts lapse. This prevents gaps in coverage that could halt billing.',

		'apart_eyebrow' => 'What Sets Us Apart',
		'apart_title'   => 'What sets Perform Practice Solutions professional credentialing services apart',
		'apart_1_title' => 'Deep Regulatory Knowledge',
		'apart_1_text'  => 'Specialists understand state licensing requirements, insurance payer networks, and compliance rules. They catch issues internal staff might miss and proactively address them before they cause delays.',
		'apart_2_title' => 'Established Database Relationships',
		'apart_2_text'  => 'Credentialing firms have direct contacts with medical schools, licensing boards, and payer credentialing departments. This reduces response time from weeks to days in many cases.',
		'apart_3_title' => 'Guaranteed Turnaround',
		'apart_3_text'  => 'Most reputable services commit to specific timelines and provide transparency on status. You know when to expect enrollment instead of wondering where applications are stuck.',
		'apart_4_title' => 'Multi-Payer Expertise',
		'apart_4_text'  => 'A credentialing service manages enrollment across dozens of insurance plans simultaneously. Your practice doesn\'t have to become expert in each payer\'s unique requirements.',
		'apart_5_title' => 'Error Recovery',
		'apart_5_text'  => 'When applications are rejected or require revision, credentialing specialists immediately identify what went wrong, correct it, and resubmit. This prevents the common scenario where an incomplete application sits in a payer\'s queue for weeks.',

		'focus_eyebrow' => 'Why Practices Choose Us',
		'focus_title'   => 'Why practices choose Perform Practice Solutions with their medical credentialing services',
		'focus_lead'    => 'Credentialing isn\'t a side service we offer. It\'s a core part of what we do every day.',
		'focus_text_1'  => 'General billing companies often treat credentialing as secondary to billing. They may not know how Medicare credentials a physical therapist versus how a commercial payer handles a behavioral health provider, or which payers in your state require specific documentation and how to push back when an application stalls in internal review.',
		'focus_text_2'  => 'Perform Practice Solutions only works with insurance billing practices. As a full medical billing and credentialing service, our specialists know your payer landscape, your specialty\'s requirements, and the fastest realistic path to getting your providers enrolled and earning revenue.',
		'focus_text_3'  => 'That specialized focus is what separates a credentialing process that wraps up in 90 days from one that drags on for six months or ends in a stack of denied claims.',

		'test_eyebrow' => 'What Practice Owners Are Saying',
		'test_title'   => 'Trusted by providers who need enrollment done right',
		'test_1_quote' => 'As a busy PT clinic owner I just did not have the time to navigate the physical therapy credentialing process, so I contacted Perform Practice Solutions. It has been unbelievably helpful and convenient.',
		'test_1_name'  => 'Donna',
		'test_1_meta'  => 'Lake Worth, FL',
		'test_2_quote' => 'Opening a new practice can be overwhelming. Perform Practice Solutions was there for me every step of the way, ensuring I was properly credentialed with all the necessary insurance companies.',
		'test_2_name'  => 'Dr. Emily H.',
		'test_2_meta'  => 'Pain Management Specialist',
		'test_3_quote' => 'I was initially hesitant to outsource credentialing, but Perform Practice Solutions made the process seamless. Their attention to detail is impeccable.',
		'test_3_name'  => 'Dr. Michael S.',
		'test_3_meta'  => 'DPT',

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions about medical credentialing services',
		'faq_1_q'     => 'How long does medical credentialing typically take?',
		'faq_1_a'     => 'Most providers complete credentialing within 6 to 8 weeks when the process is handled by a professional service. Timeline depends on how quickly primary sources respond and how fast each payer processes applications. Expedited service can sometimes reduce this to 4 to 5 weeks for high priority contracts.',
		'faq_2_q'     => 'What are medical provider credentialing services?',
		'faq_2_a'     => 'Medical provider credentialing services verify a healthcare provider\'s education, training, licenses, malpractice history, and board certifications, then manage the applications required to enroll that provider with insurance payers. The goal is to get a provider approved to bill insurance and see patients as quickly and accurately as possible.',
		'faq_3_q'     => 'What\'s the difference between medical billing and credentialing services?',
		'faq_3_a'     => 'Medical billing services manage claims submission, payment posting, and revenue cycle work after a provider is already enrolled with a payer. Medical billing and credentialing services combine that ongoing billing support with the upfront enrollment work that gets a provider approved by insurance companies in the first place. Many practices choose a single medical billing and credentialing service so both functions stay coordinated under one team.',
		'faq_4_q'     => 'Why should a practice use a medical billing and credentialing service instead of separate vendors?',
		'faq_4_a'     => 'A combined medical billing and credentialing service keeps enrollment status and billing activity connected, which prevents claims from being submitted under expired or incomplete credentials. It also means one team is accountable for the full revenue cycle, from initial enrollment through ongoing recredentialing and claims follow up.',
		'faq_5_q'     => 'What\'s the difference between finding a credentialing service and handling it in house?',
		'faq_5_a'     => 'In house credentialing requires staff training, ongoing compliance knowledge, and time to manage multiple databases and payer systems. Outsourced medical billing credentialing services specialize in this work exclusively, stay current on payer requirements, and carry professional liability coverage. Most practices save both time and money by outsourcing.',

		'cta_title'      => 'Get your providers credentialed without the administrative burden',
		'cta_text'       => 'Medical credentialing is too critical to rush and too complex to handle casually. Whether you\'re onboarding a single provider or scaling your practice, a credentialing service that understands every regulatory and payer requirement saves you weeks of delays and the risk of costly enrollment mistakes.',
		'cta_text_2'     => 'Ready to streamline your provider enrollment process? Schedule a consultation to discuss your credentialing timeline and learn how professional services can accelerate your provider\'s path to revenue-generating practice.',
		'cta_button'     => 'Schedule a Consultation',
		'cta_button_url' => '#contact',
	);
}

/**
 * Credentialing page content helper.
 *
 * @param string $key     Setting key.
 * @param string $default Optional default.
 * @return string
 */
function page_cred( $key, $default = '' ) {
	$defaults = pps_cred_defaults();
	if ( '' === $default && isset( $defaults[ $key ] ) ) {
		$default = $defaults[ $key ];
	}
	return (string) get_theme_mod( 'pps_cred_' . $key, $default );
}

/**
 * Register Customizer settings for the credentialing page.
 *
 * @param WP_Customize_Manager $wp_customize Customizer.
 */
function pps_cred_customize_register( $wp_customize ) {
	$wp_customize->add_section(
		'pps_section_cred',
		array(
			'title'    => __( 'Medical Credentialing', 'perform-practice' ),
			'panel'    => 'pps_panel_services',
			'priority' => 10,
		)
	);

	foreach ( pps_cred_defaults() as $key => $default ) {
		$setting_id  = 'pps_cred_' . $key;
		$is_textarea = (bool) preg_match( '/(_text(_\d+)?|_lead|_note|_a|_quote|_closing|seo_desc)$/', $key );
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
				'section' => 'pps_section_cred',
				'type'    => $is_url ? 'url' : ( $is_textarea ? 'textarea' : 'text' ),
			)
		);
	}
}
add_action( 'customize_register', 'pps_cred_customize_register', 22 );

/**
 * Whether current page uses the credentialing template.
 *
 * @return bool
 */
function pps_is_cred_page() {
	return is_page_template( 'page-templates/credentialing.php' );
}

/**
 * SEO title for credentialing page.
 *
 * @param string $title Title.
 * @return string
 */
function pps_cred_document_title( $title ) {
	if ( ! pps_is_cred_page() ) {
		return $title;
	}
	$custom = page_cred( 'seo_title' );
	return $custom ? $custom : $title;
}
add_filter( 'pre_get_document_title', 'pps_cred_document_title', 26 );

/**
 * Meta description for credentialing page.
 */
function pps_cred_meta_description() {
	if ( ! pps_is_cred_page() ) {
		return;
	}
	$desc = page_cred( 'seo_desc' );
	if ( $desc ) {
		echo '<meta name="description" content="' . esc_attr( $desc ) . '" />' . "\n";
	}
}
add_action( 'wp_head', 'pps_cred_meta_description', 1 );

/**
 * Avoid duplicate meta description.
 */
function pps_cred_skip_generic_meta() {
	if ( pps_is_cred_page() ) {
		remove_action( 'wp_head', 'pps_output_seo_meta_description', 1 );
	}
}
add_action( 'wp', 'pps_cred_skip_generic_meta' );

/**
 * Point Credentialing menu item at the new hub page.
 *
 * @param int $page_id Credentialing page ID.
 */
function pps_attach_cred_to_primary_menu( $page_id ) {
	$locations = get_nav_menu_locations();
	if ( empty( $locations['primary'] ) || ! $page_id ) {
		return;
	}

	$menu_id = (int) $locations['primary'];
	$items   = wp_get_nav_menu_items( $menu_id );
	if ( ! $items ) {
		return;
	}

	$cred_item_id = 0;
	foreach ( $items as $item ) {
		if ( (int) $item->menu_item_parent !== 0 ) {
			continue;
		}
		$slug = get_post_field( 'post_name', $item->object_id );
		if ( in_array( $slug, array( 'credentialing', 'medical-credentialing-services' ), true ) ) {
			$cred_item_id = (int) $item->ID;
			break;
		}
		if ( 'Credentialing' === $item->title ) {
			$cred_item_id = (int) $item->ID;
			break;
		}
	}

	if ( $cred_item_id ) {
		wp_update_nav_menu_item(
			$menu_id,
			$cred_item_id,
			array(
				'menu-item-title'     => 'Credentialing',
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
			'menu-item-title'     => 'Credentialing',
			'menu-item-object'    => 'page',
			'menu-item-object-id' => (int) $page_id,
			'menu-item-type'      => 'post_type',
			'menu-item-status'    => 'publish',
			'menu-item-parent-id' => 0,
			'menu-item-position'  => 3,
		)
	);
}

/**
 * Create credentialing page, assign template/SEO, update menu.
 */
function pps_setup_cred_page() {
	$version = '1.0.0';
	if ( get_option( 'pps_cred_page_version' ) === $version ) {
		return;
	}

	$defaults = pps_cred_defaults();
	$page     = get_page_by_path( 'medical-credentialing-services' );

	if ( $page ) {
		$page_id = (int) $page->ID;
	} else {
		$page_id = wp_insert_post(
			array(
				'post_title'  => 'Medical Credentialing Services',
				'post_name'   => 'medical-credentialing-services',
				'post_status' => 'publish',
				'post_type'   => 'page',
			)
		);
	}

	if ( ! $page_id || is_wp_error( $page_id ) ) {
		return;
	}

	update_post_meta( $page_id, '_wp_page_template', 'page-templates/credentialing.php' );
	update_post_meta( $page_id, '_pps_seo_title', sanitize_text_field( $defaults['seo_title'] ) );
	update_post_meta( $page_id, '_pps_seo_description', sanitize_text_field( $defaults['seo_desc'] ) );
	pps_attach_cred_to_primary_menu( $page_id );
	update_option( 'pps_cred_page_version', $version );
}
add_action( 'after_setup_theme', 'pps_setup_cred_page', 42 );

/**
 * Redirect legacy /credentialing/ to the new hub URL.
 */
function pps_redirect_legacy_credentialing() {
	if ( is_admin() || ! is_page( 'credentialing' ) ) {
		return;
	}

	$target = get_page_by_path( 'medical-credentialing-services' );
	if ( ! $target ) {
		return;
	}

	wp_safe_redirect( get_permalink( $target ), 301 );
	exit;
}
add_action( 'template_redirect', 'pps_redirect_legacy_credentialing' );
