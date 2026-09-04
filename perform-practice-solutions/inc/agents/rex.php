<?php
/**
 * Rex — Reception Efficiency eXpert page content.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Rex agent page content.
 *
 * @return array
 */
function pps_ai_agent_rex_content() {
	return array(
		'slug'         => 'rex',
		'name'         => 'Rex',
		'letter'       => 'R',
		'role'         => 'Your Reception Efficiency eXpert',
		'acronym'      => 'Reception Efficiency eXpert',
		'placement'    => 'Runs front-desk workflows inside Tebra',
		'audience'     => 'Front desk staff',
		'seo_title'    => 'Rex — AI Reception Efficiency Agent for Tebra | Perform Practice Solutions',
		'seo_desc'     => 'Rex clears your intake queue, chases missing signatures, and preps charts before patients arrive — so your front desk stays with patients instead of screens.',

		'hero_title'   => 'Rex, Your Reception Efficiency eXpert',
		'hero_lead'    => 'Meet Rex. The teammate who does the paperwork nobody wants. Rex is the behind-the-counter agent that clears your intake queue, chases the forms still missing a signature, and gets every chart ready before the patient walks in. Your front desk staff stay with patients instead of screens.',
		'hero_cta'     => 'See Rex clear a queue',
		'hero_cta_url' => '#contact',
		'hero_note'    => 'Built for allied health practices running on Tebra. Live in a few business days.',
		'hero_tagline' => 'Your front desk is not slow. It is buried.',

		'highlights'   => array(
			array(
				'icon'  => 'fa-inbox',
				'title' => 'Clears the queue',
				'text'  => 'Clears the intake queue before your first patient arrives.',
			),
			array(
				'icon'  => 'fa-signature',
				'title' => 'Chases signatures',
				'text'  => 'Flags every form still missing a signature, then chases it.',
			),
			array(
				'icon'  => 'fa-folder-open',
				'title' => 'Preps charts',
				'text'  => 'Preps charts and paperwork so appointments start on time.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Uses your SOPs',
				'text'  => 'Learns your existing scripts and SOPs instead of replacing them.',
			),
		),

		'problem_title'   => 'Rex does the parts of the front desk job nobody trained for.',
		'problem_body'    => 'Incomplete intake forms. Insurance details that never came back. A stack of paperwork that has to be sorted before the 8am block starts. None of it is hard. All of it takes time your staff do not have. So the work gets done between patients, during lunch, and after close. The queue never actually empties, it just moves.',
		'problem_close'   => 'Rex works the queue continuously in the background. By the time your staff sit down, the routine items are handled and only the exceptions are waiting.',
		'problem_cta'     => 'Show me what Rex clears in a day',
		'problem_cta_url' => '#capabilities',

		'onboard_eyebrow'      => 'Onboarding',
		'onboard_title'        => 'Simple onboarding, on purpose',
		'onboard_intro'        => 'Rex reads what your practice already uses. There is no process rebuild and no new system for your staff to learn.',
		'onboard_cta'          => 'Start with a setup call',
		'onboard_cta_url'      => '#contact',
		'onboard_phone_header' => 'Rex · Front desk setup',
		'onboard_steps'        => array(
			array(
				'title'        => 'Hand Rex your existing documents',
				'text'         => 'Upload the scripts, intake checklists, and SOPs your front desk already follows. Rex ingests them at setup and works to your process, not a template.',
				'phone_title'  => 'Documents loaded',
				'phone_user'   => 'Here are our intake checklists and front desk SOPs.',
				'phone_agent'  => 'Ingested. I\'ll follow your process — no rebuild around a template.',
				'phone_status' => array( 'SOP uploaded', 'Checklist mapped', 'Scripts ready' ),
				'phone_card'   => array(
					'title' => 'Front_Desk_SOP.pdf',
					'meta'  => 'Practice process',
					'badge' => 'Ready',
				),
			),
			array(
				'title'        => 'Connect Tebra',
				'text'         => 'Rex reads and updates the same records your staff already work in. No parallel system and no double entry.',
				'phone_title'  => 'Tebra connected',
				'phone_user'   => 'Connect Rex to our Tebra account.',
				'phone_agent'  => 'Connected. Updates land where your team already looks.',
				'phone_status' => array( 'Tebra linked', 'Records writable', 'No double entry' ),
				'phone_card'   => array(
					'title' => 'Tebra EMR',
					'meta'  => 'Live connection',
					'badge' => 'Connected',
				),
			),
			array(
				'title'        => 'Set the exception rules',
				'text'         => 'Define what Rex handles alone and what always goes to a person. Anything outside those rules stops and waits for staff.',
				'phone_title'  => 'Exception rules',
				'phone_user'   => 'Escalate anything clinical or unclear. Handle routine intake alone.',
				'phone_agent'  => 'Rules locked. Routine clears automatically — exceptions wait for you.',
				'phone_status' => array( 'Scope set', 'Escalation on', 'No improvising' ),
				'phone_card'   => array(
					'title' => 'Exception policy',
					'meta'  => 'Front desk rules',
					'badge' => 'Active',
				),
			),
			array(
				'title'        => 'Rex works the queue',
				'text'         => 'Intake, forms, chart prep, and follow-up items get worked continuously. Your team opens the day to exceptions, not a backlog.',
				'phone_title'  => 'Queue clearing',
				'phone_user'   => 'What\'s left in tomorrow\'s intake queue?',
				'phone_agent'  => '12 routine items cleared overnight. 2 exceptions waiting with full context.',
				'phone_status' => array( 'Intake processed', 'Forms chased', 'Charts prepped' ),
				'phone_card'   => array(
					'title' => 'Tomorrow\'s schedule',
					'meta'  => '2 exceptions',
					'badge' => 'Ready',
				),
			),
			array(
				'title'        => 'Tighten as you go',
				'text'         => 'Every correction your staff make teaches Rex how your practice handles that case. The exception pile gets smaller each week.',
				'phone_title'  => 'Getting sharper',
				'phone_user'   => 'For this visit type, always require the insurance card image.',
				'phone_agent'  => 'Noted. I\'ll require that going forward for this visit type.',
				'phone_status' => array( 'Correction saved', 'Rule updated', 'Exceptions shrinking' ),
				'phone_card'   => array(
					'title' => 'Visit-type rule',
					'meta'  => 'Staff correction',
					'badge' => 'Learned',
				),
			),
		),

		'cap_eyebrow'  => 'What Rex Does',
		'cap_title'    => 'Your always-on reception efficiency expert',
		'cap_intro'    => 'A reception efficiency agent completes routine front desk administrative work automatically, then hands anything unusual to staff with full context attached. Rex does that work for allied health practices, inside the systems your team already uses.',
		'cap_cta'      => 'See the full capability list',
		'cap_cta_url'  => '#contact',
		'capabilities' => array(
			array(
				'icon'  => 'fa-inbox',
				'title' => 'Clear the intake queue',
				'text'  => 'Incoming intake gets processed and filed instead of stacking up.',
			),
			array(
				'icon'  => 'fa-signature',
				'title' => 'Chase missing signatures',
				'text'  => 'Rex flags every form that is incomplete and follows up until it is not.',
			),
			array(
				'icon'  => 'fa-folder-open',
				'title' => 'Prep charts before the visit',
				'text'  => 'Paperwork, history, and documents ready before the patient arrives.',
			),
			array(
				'icon'  => 'fa-clipboard-check',
				'title' => 'Verify intake is complete',
				'text'  => 'Rex checks each record against what that visit type actually requires.',
			),
			array(
				'icon'  => 'fa-id-card',
				'title' => 'Flag missing insurance details',
				'text'  => 'Gaps surface before the appointment, not at the billing stage.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Keep records current in Tebra',
				'text'  => 'Updates land where your staff already look.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Work from your own SOPs',
				'text'  => 'Rex follows the checklists your practice already wrote.',
			),
			array(
				'icon'  => 'fa-handshake',
				'title' => 'Hand off with full context',
				'text'  => 'When staff step in, they see the whole record and every step already taken.',
			),
			array(
				'icon'  => 'fa-flag',
				'title' => 'Escalate exceptions immediately',
				'text'  => 'Anything outside your rules stops and waits for a human.',
			),
			array(
				'icon'  => 'fa-sitemap',
				'title' => 'Sort the daily paperwork',
				'text'  => 'Documents get routed to the right patient, provider, and visit.',
			),
			array(
				'icon'  => 'fa-list-check',
				'title' => 'Track what is outstanding',
				'text'  => 'A live view of what is missing across tomorrow\'s schedule.',
			),
			array(
				'icon'  => 'fa-building',
				'title' => 'Cover multiple locations',
				'text'  => 'One front desk standard across every clinic you run.',
			),
		),

		'benefits_eyebrow'      => 'Benefits',
		'benefits_title'        => 'Your front desk,',
		'benefits_title_accent' => 'easy mode',
		'benefits_intro'        => 'Rex turns reception admin into a repeatable workflow that holds up on your busiest mornings.',
		'benefits_cta'          => 'Book a walkthrough',
		'benefits_cta_url'      => '#contact',
		'benefits'              => array(
			array(
				'icon'  => 'fa-moon',
				'title' => 'Nothing sits in the queue overnight',
				'text'  => 'Routine work is cleared continuously, not in the gaps between patients.',
			),
			array(
				'icon'  => 'fa-clock',
				'title' => 'Appointments start on time',
				'text'  => 'Charts and paperwork are ready before the patient is in the room.',
			),
			array(
				'icon'  => 'fa-file-invoice-dollar',
				'title' => 'Fewer surprises at billing',
				'text'  => 'Missing details surface days early instead of after the visit.',
			),
			array(
				'icon'  => 'fa-user-group',
				'title' => 'Staff stay with patients',
				'text'  => 'Your front desk stops processing and starts greeting.',
			),
		),

		'showcase' => array(
			'sidebar_role'       => 'Front desk',
			'new_chat_label'     => 'New queue item',
			'input_placeholder'  => 'Ask Rex about intake…',
			'cta_label'          => 'See Rex clear a queue',
			'cta_url'            => '#contact',
			'user_message'       => 'Can you clear tomorrow\'s incomplete intakes before 8am?',
			'agent_message'      => 'On it. I cleared 11 routine items and flagged 2 missing signatures with follow-ups started.',
			'status_items'       => array(
				'Intake processed',
				'Signatures chased',
				'Charts prepped',
				'Exceptions queued',
			),
			'history_empty'      => 'No open queue items waiting',
		),

		'memory_eyebrow' => 'Practice knowledge',
		'memory_title'   => 'Rex learns your practice, not a generic playbook',
		'memory_intro'   => 'Everything Rex knows about how your front desk runs lives in one place your team controls. Your intake checklists, your document standards, your exception rules.',
		'memory_cta'     => 'See what Rex learns about your practice',
		'memory_cta_url' => '#contact',
		'memory_points'  => array(
			array(
				'title' => 'Reads what you already have',
				'text'  => 'Existing scripts and SOPs go in at setup. No rewriting your process to fit the software.',
			),
			array(
				'title' => 'Context that compounds',
				'text'  => 'Every correction your staff make becomes part of how Rex handles that case next time.',
			),
			array(
				'title' => 'One standard everywhere',
				'text'  => 'The same front desk process across providers, visit types, and locations.',
			),
		),

		'security_eyebrow' => 'Security',
		'security_title'   => 'Patient data, handled the way it should be',
		'security_intro'   => 'Rex works inside your Tebra records with the same privacy standards your practice already follows.',
		'security_cta'     => 'Read our security overview',
		'security_cta_url' => '#contact',
		'security_points'  => array(
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'HIPAA aligned',
				'text'  => 'Protected health information is handled under HIPAA safeguards at every step.',
			),
			array(
				'icon'  => 'fa-lock',
				'title' => 'Encrypted in transit and at rest',
				'text'  => 'Records and messages stay encrypted. Access is limited to your practice.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Your data stays yours',
				'text'  => 'Your patient data belongs to your practice. Export it or delete it at any time.',
			),
		),

		'why_eyebrow' => 'Why practices like Rex',
		'why_title'   => 'Why front desk teams keep Rex',
		'why_cta'     => 'See Rex in action',
		'why_cta_url' => '#contact',
		'why_cards'   => array(
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Works your process, not its own',
				'text'  => 'Rex ingests your existing scripts and SOPs at setup instead of asking you to rebuild around it.',
			),
			array(
				'icon'  => 'fa-comments',
				'title' => 'Handoffs come with the whole story',
				'text'  => 'When staff step in, every step Rex already took is right there. No reconstructing what happened.',
			),
			array(
				'icon'  => 'fa-hospital',
				'title' => 'Built on Tebra',
				'text'  => 'Rex works inside the system your practice already runs on, with no parallel records to reconcile.',
			),
			array(
				'icon'  => 'fa-hand-holding-medical',
				'title' => 'Fluent in allied health',
				'text'  => 'Visit types, plans of care, and authorization limits are native concepts, not custom fields.',
			),
			array(
				'icon'  => 'fa-ban',
				'title' => 'Knows its limits',
				'text'  => 'Anything outside your rules stops and goes to a person. Rex never improvises on a patient record.',
			),
			array(
				'icon'  => 'fa-chart-line',
				'title' => 'Gets sharper every week',
				'text'  => 'What your team corrects today is how Rex handles the same case tomorrow.',
			),
		),

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_cta'     => 'Still have questions? Book a call',
		'faq_cta_url' => '#contact',
		'faqs'        => array(
			array(
				'q' => 'What is a reception efficiency agent?',
				'a' => 'A reception efficiency agent is software that completes routine front desk administrative work automatically. It processes intake, chases incomplete forms, prepares charts before appointments, and keeps records current, then escalates anything unusual to staff with the full history attached.',
			),
			array(
				'q' => 'Does Rex answer the phone?',
				'a' => 'No. Rex works behind the counter on administrative tasks rather than on calls. It handles intake processing, forms, chart preparation, and paperwork routing. If phone and text coverage is what your practice needs most, tell us during the setup call and we will point you to the right fit.',
			),
			array(
				'q' => 'Does Rex work with Tebra?',
				'a' => 'Yes. Rex is built for practices running on Tebra and works inside the same records your staff already use. There is no separate system to check and no double entry, so anything Rex completes is visible to your team immediately in the place they expect it.',
			),
			array(
				'q' => 'Will Rex change how our front desk works?',
				'a' => 'No. Rex reads your existing intake checklists, scripts, and SOPs at setup and follows them. Your process stays the same. The difference is that the routine steps in it are already done by the time your staff open the queue each morning.',
			),
			array(
				'q' => 'What happens when something is unusual?',
				'a' => 'Rex stops. Anything outside the rules you set during onboarding is escalated to staff with the full record and every step already taken. Your team makes the call, and Rex learns how you handled it for the next time the same case appears.',
			),
			array(
				'q' => 'Does Rex replace front desk staff?',
				'a' => 'No. Rex removes repetitive administrative work so your team can spend that time with patients. Most practices use Rex to absorb the backlog that used to get done after hours, rather than to reduce the size of their front desk team.',
			),
		),

		'final_title'   => 'The queue does not have to wait for someone to have a spare minute',
		'final_text'    => 'Rex works it all day, so your team can work with patients.',
		'final_cta'     => 'See Rex in action',
		'final_cta_url' => '#contact',

		'contact_title' => 'See Rex clear a queue',
		'contact_text'  => 'Tell us about your front desk backlog and we\'ll show you how Rex fits your Tebra workflow.',
		'voice_sample'  => 'I cleared the intake queue and flagged two forms that need a signature.',
	);
}
