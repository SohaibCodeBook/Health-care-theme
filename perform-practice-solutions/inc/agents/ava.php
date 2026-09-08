<?php
/**
 * Ava — Account and Voice Assistant page content.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Ava agent page content.
 *
 * @return array
 */
function pps_ai_agent_ava_content() {
	return array(
		'slug'         => 'ava',
		'name'         => 'Ava',
		'letter'       => 'A',
		'role'         => 'Your Account and Voice Assistant',
		'acronym'      => 'Account and Voice Assistant',
		'placement'    => 'Handles billing & account calls practice-wide',
		'audience'     => 'Practice-wide',
		'seo_title'    => 'Ava — AI Billing & Account Voice Assistant | Perform Practice Solutions',
		'seo_desc'     => 'Ava answers inbound patient calls about accounts and billing: FAQs, balances, secure payments, and warm transfers to the right biller — 24/7 with HIPAA-aligned identity verification.',

		'hero_title'   => 'Ava, Your Account and Voice Assistant',
		'hero_lead'    => 'Ava handles inbound patient calls for account and billing matters. She answers FAQs, looks up balances, explains what a patient owes in plain language, takes secure payments, and routes complex issues to the right biller — so your billing team spends less time on the phone and more time resolving real work.',
		'hero_cta'     => 'See Ava take a billing call',
		'hero_cta_url' => '#contact',
		'hero_note'    => 'Built for allied health practices. HIPAA-aligned identity checks before any account details are shared.',
		'hero_tagline' => 'Billing Questions Answered. The Right Biller Briefed.',

		'highlights'   => array(
			array(
				'icon'  => 'fa-phone',
				'title' => 'Answers in one second',
				'text'  => 'Picks up inbound billing calls within a second, 24/7, with no hold queue.',
			),
			array(
				'icon'  => 'fa-user-shield',
				'title' => 'Verifies before disclosing',
				'text'  => 'Two-factor identity check before any balance or account detail is shared.',
			),
			array(
				'icon'  => 'fa-file-invoice-dollar',
				'title' => 'Explains the bill',
				'text'  => 'Reads balances in plain language and walks patients through why they owe what they owe.',
			),
			array(
				'icon'  => 'fa-headset',
				'title' => 'Warm-transfers billers',
				'text'  => 'Routes to the correct biller with a full brief so patients never repeat themselves.',
			),
		),

		'problem_title'   => 'Most practices do not lose billing calls. They lose the time it takes to answer them.',
		'problem_body'    => 'A patient calls about a balance. Someone has to verify who they are, look up the claim, explain a line item, take a payment, or find the right biller. Between statement seasons and a full queue, that call sits on hold — or gets a voicemail that turns into a frustrated callback. Meanwhile your billing team is buried in the same FAQs every afternoon.',
		'problem_close'   => 'Ava picks up the billing line, verifies the caller, handles what she can, and warm-transfers only what needs a human — with the whole story already attached.',
		'problem_cta'     => 'See how Ava handles a balance call',
		'problem_cta_url' => '#capabilities',

		'onboard_eyebrow'      => 'Onboarding',
		'onboard_title'        => 'Simple setup, on purpose',
		'onboard_intro'        => 'Getting Ava live is a working session, not a rebuild. She learns your billing FAQs, routing rules, and payment policies from what your practice already uses.',
		'onboard_cta'          => 'Book a setup walkthrough',
		'onboard_cta_url'      => '#contact',
		'onboard_phone_header' => 'Ava · Billing voice setup',
		'onboard_steps'        => array(
			array(
				'title'        => 'Connect your billing systems',
				'text'         => 'Link Ava to your PM/EMR and billing tools so she can look up balances, claim status, and eligibility on file.',
				'phone_title'  => 'Systems linked',
				'phone_user'   => 'Connect Ava to Tebra and our billing queue.',
				'phone_agent'  => 'Connected. I can verify callers and pull live balance details.',
				'phone_status' => array( 'PM/EMR linked', 'Balances readable', 'Write-back on' ),
				'phone_card'   => array(
					'title' => 'Billing systems',
					'meta'  => 'Live connection',
					'badge' => 'Connected',
				),
			),
			array(
				'title'        => 'Upload your billing knowledge',
				'text'         => 'Give Ava your practice FAQs, payment methods, statement schedule, and billing policy language. She uses your answers, not a generic script.',
				'phone_title'  => 'FAQ library',
				'phone_user'   => 'Here are our billing FAQs and payment policies.',
				'phone_agent'  => 'Loaded. I\'ll answer from your policies and escalate clinical questions immediately.',
				'phone_status' => array( 'FAQs loaded', 'Policies saved', 'Tone set' ),
				'phone_card'   => array(
					'title' => 'Billing_FAQ.pdf',
					'meta'  => 'Practice knowledge',
					'badge' => 'Ready',
				),
			),
			array(
				'title'        => 'Set identity and routing rules',
				'text'         => 'Define how Ava verifies callers, what she can disclose, which intents go to which biller, and when a human must take over.',
				'phone_title'  => 'Routing rules',
				'phone_user'   => 'Verify with DOB + last name. Disputes go to Team B.',
				'phone_agent'  => 'Rules locked. Identity gate on — disputes warm-transfer to Team B with a brief.',
				'phone_status' => array( 'ID gate on', 'Routing mapped', 'Escalation set' ),
				'phone_card'   => array(
					'title' => 'Transfer matrix',
					'meta'  => 'Practice rules',
					'badge' => 'Active',
				),
			),
			array(
				'title'        => 'Configure payments and plans',
				'text'         => 'Turn on secure keypad payment capture, payment links, and any pre-approved payment-plan or prompt-pay options within your limits.',
				'phone_title'  => 'Payments ready',
				'phone_user'   => 'Allow secure phone payments and 3/6-month plans under our ceiling.',
				'phone_agent'  => 'Configured. Card digits stay on the keypad — never in the transcript.',
				'phone_status' => array( 'PCI tokenized pay', 'Links enabled', 'Plan limits set' ),
				'phone_card'   => array(
					'title' => 'Payment policy',
					'meta'  => 'Secure capture',
					'badge' => 'Live',
				),
			),
			array(
				'title'        => 'Review the first week',
				'text'         => 'Listen to calls, check summaries written back to your system, and tighten phrasing. Ava applies corrections from then on.',
				'phone_title'  => 'Week 1 review',
				'phone_user'   => 'What were the top reasons patients called this week?',
				'phone_agent'  => 'Mostly balance confusion and payment plans. Summaries and surveys are in your dashboard.',
				'phone_status' => array( 'Calls logged', 'Summaries posted', 'Themes ranked' ),
				'phone_card'   => array(
					'title' => 'Outcome dashboard',
					'meta'  => 'Needs review',
					'badge' => 'Ready',
				),
			),
		),

		'cap_eyebrow'  => 'What Ava Does',
		'cap_title'    => 'Your always-on account and billing voice line',
		'cap_intro'    => 'Ava is the teammate who handles the path from inbound billing call to resolved question — or a warm handoff to the right biller. She works around the clock so routine account calls never sit in a hold queue.',
		'cap_cta'      => 'See the full workflow',
		'cap_cta_url'  => '#contact',
		'capabilities' => array(
			array(
				'icon'  => 'fa-phone',
				'title' => 'Answer billing calls in one second',
				'text'  => 'Inbound account calls pick up within a second, 24/7, with no hold queue.',
			),
			array(
				'icon'  => 'fa-user-check',
				'title' => 'Verify identity before disclosing',
				'text'  => 'Two-factor match (for example DOB + last name) before any balance or account detail is shared.',
			),
			array(
				'icon'  => 'fa-user-shield',
				'title' => 'Respect who is calling',
				'text'  => 'Detects patient vs guarantor vs unauthorized third party and adjusts what can be shared.',
			),
			array(
				'icon'  => 'fa-circle-question',
				'title' => 'Handle practice and billing FAQs',
				'text'  => 'Hours, insurance accepted, payment methods, statement timing, portal help, and what a balance line item means.',
			),
			array(
				'icon'  => 'fa-ban',
				'title' => 'Never answer clinical questions',
				'text'  => 'Symptoms, medication, and diagnosis escalate immediately to a human or nurse line.',
			),
			array(
				'icon'  => 'fa-file-invoice-dollar',
				'title' => 'Look up and explain balances',
				'text'  => 'Reads current balance by date of service or claim and explains charges, adjustments, and patient responsibility in plain language.',
			),
			array(
				'icon'  => 'fa-receipt',
				'title' => 'Explain-the-bill mode',
				'text'  => 'Walks patients through why they owe what they owe — EOB translation, not just a number readback.',
			),
			array(
				'icon'  => 'fa-credit-card',
				'title' => 'Take secure phone payments',
				'text'  => 'PCI-compliant tokenized keypad entry so card numbers never enter the voice or transcript stream — or send a secure payment link.',
			),
			array(
				'icon'  => 'fa-calendar-days',
				'title' => 'Offer payment plans within policy',
				'text'  => 'Pre-approved 3/6/12-month options within limits you configure, without waiting for a biller on straightforward cases.',
			),
			array(
				'icon'  => 'fa-people-arrows',
				'title' => 'Warm-transfer the right biller',
				'text'  => 'Classifies intent and routes to the assigned biller or team — with a spoken or on-screen brief so nothing is repeated.',
			),
			array(
				'icon'  => 'fa-clipboard-list',
				'title' => 'Pre-work disputes before transfer',
				'text'  => 'Captures which charge, why, and what the patient expects so the biller opens already informed.',
			),
			array(
				'icon'  => 'fa-face-frown',
				'title' => 'Escalate on frustration, not just keywords',
				'text'  => 'Detects rising frustration or confusion and offers a human handoff before the patient has to ask for a representative.',
			),
			array(
				'icon'  => 'fa-house-user',
				'title' => 'Handle household / linked accounts',
				'text'  => 'With authorization on file, address balances across linked family members in one call.',
			),
			array(
				'icon'  => 'fa-link',
				'title' => 'Carry context from sibling agents',
				'text'  => 'If the patient already texted Cora about the same balance, Ava already has that thread.',
			),
			array(
				'icon'  => 'fa-notes-medical',
				'title' => 'Document every call',
				'text'  => 'Structured summaries write back to your PM/EMR or billing system, with recordings and PHI-aware redaction per your policy.',
			),
			array(
				'icon'  => 'fa-chart-column',
				'title' => 'Show why patients are calling',
				'text'  => 'A live view of confusion vs dispute vs can\'t-afford — so you fix root causes, not just call volume.',
			),
		),

		'benefits_eyebrow'      => 'Benefits',
		'benefits_title'        => 'Your billing line,',
		'benefits_title_accent' => 'easy mode',
		'benefits_intro'        => 'Ava turns account and billing calls into a repeatable workflow that holds up during statement season.',
		'benefits_cta'          => 'Talk to us about your billing call volume',
		'benefits_cta_url'      => '#contact',
		'benefits'              => array(
			array(
				'icon'  => 'fa-clock',
				'title' => 'No more hold queues for routine questions',
				'text'  => 'FAQs, balances, and simple payments get handled without waiting for a free biller.',
			),
			array(
				'icon'  => 'fa-user-check',
				'title' => 'Billers only take the hard calls',
				'text'  => 'Disputes, appeals, and edge cases arrive with identity verified and context already captured.',
			),
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'Disclosure stays controlled',
				'text'  => 'Identity gates and role checks keep PHI off the line until the caller is verified.',
			),
			array(
				'icon'  => 'fa-gauge-high',
				'title' => 'Coverage that scales with statement season',
				'text'  => 'Call spikes do not change how fast Ava answers or how carefully she routes.',
			),
		),

		'showcase' => array(
			'sidebar_role'       => 'Billing voice',
			'new_chat_label'     => 'New account call',
			'input_placeholder'  => 'Ask Ava about a balance…',
			'cta_label'          => 'See Ava take a billing call',
			'cta_url'            => '#contact',
			'user_message'       => 'A patient is calling about last month\'s statement — can Ava handle it?',
			'agent_message'      => 'Yes. I\'ll verify identity, explain the balance, and offer a secure payment or warm-transfer if it\'s a dispute.',
			'status_items'       => array(
				'Identity verified',
				'Balance explained',
				'Payment link ready',
				'Summary queued to Tebra',
			),
			'history_empty'      => 'No open billing calls waiting',
		),

		'memory_eyebrow' => 'Practice knowledge',
		'memory_title'   => 'Ava runs on your billing policies, not a generic script',
		'memory_intro'   => 'Everything Ava knows about your FAQs, routing, and payment rules lives in one place your team controls.',
		'memory_cta'     => 'See what Ava would know about your practice',
		'memory_cta_url' => '#contact',
		'memory_points'  => array(
			array(
				'title' => 'Always current',
				'text'  => 'Update a payment method, statement schedule, or routing rule once and every future call reflects it.',
			),
			array(
				'title' => 'Context that compounds',
				'text'  => 'Approved phrasing, dispute patterns, and escalation outcomes tighten how Ava handles the next similar call.',
			),
			array(
				'title' => 'One source of truth',
				'text'  => 'Every biller and every channel works from the same FAQs and policies — including continuity with sibling agents like Cora.',
			),
		),

		'security_eyebrow' => 'Security',
		'security_title'   => 'Patient data, handled the way it should be',
		'security_intro'   => 'Ava is built for account and billing conversations that require identity gates, encryption, and audit-ready logging.',
		'security_cta'     => 'Read our security overview',
		'security_cta_url' => '#contact',
		'security_points'  => array(
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'HIPAA-aligned identity gate',
				'text'  => 'No balance or account detail is shared until the caller passes your two-factor verification rules.',
			),
			array(
				'icon'  => 'fa-lock',
				'title' => 'PCI-aware payment capture',
				'text'  => 'Card numbers are entered by keypad/DTMF tokenized capture or secure link — never spoken into the transcript stream.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Recordings and summaries under your policy',
				'text'  => 'Call recordings, transcripts, and PHI-aware redaction follow your retention rules. Your data stays yours.',
			),
		),

		'why_eyebrow' => 'Why practices like Ava',
		'why_title'   => 'Why billing teams keep her on the line',
		'why_cta'     => 'See Ava take a billing call',
		'why_cta_url' => '#contact',
		'why_cards'   => array(
			array(
				'icon'  => 'fa-receipt',
				'title' => 'She explains the bill, not just the total',
				'text'  => 'Patients get plain-language walkthroughs of charges and responsibility instead of a confusing number readback.',
			),
			array(
				'icon'  => 'fa-headset',
				'title' => 'Transfers arrive pre-worked',
				'text'  => 'Billers get identity, account status, reason, and what was already discussed — not a cold handoff.',
			),
			array(
				'icon'  => 'fa-face-smile',
				'title' => 'She hears frustration early',
				'text'  => 'Tone-aware escalation offers a human before the caller has to demand a representative.',
			),
			array(
				'icon'  => 'fa-scale-balanced',
				'title' => 'Negotiation stays inside your ceiling',
				'text'  => 'Prompt-pay discounts and plan offers follow guardrails you set, with every offer logged for audit.',
			),
			array(
				'icon'  => 'fa-people-group',
				'title' => 'Routes by skill and load',
				'text'  => 'Transfers can weigh workload, payer expertise, and past performance — not just a generic queue.',
			),
			array(
				'icon'  => 'fa-chart-line',
				'title' => 'Shows root causes, not just deflection',
				'text'  => 'Managers see why patients call about billing so statements and policies can improve.',
			),
		),

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_cta'     => 'Still have questions? Book a call',
		'faq_cta_url' => '#contact',
		'faqs'        => array(
			array(
				'q' => 'What is an AI account and voice assistant?',
				'a' => 'An AI account and voice assistant answers inbound patient calls about billing and accounts. It verifies identity, handles FAQs and balance questions, can take secure payments, and warm-transfers complex issues to the right biller with full context. Ava is built for allied health practices that need that coverage without expanding hold times.',
			),
			array(
				'q' => 'How does Ava verify a caller before sharing account details?',
				'a' => 'Ava runs a two-factor identity match using rules you configure — for example date of birth plus last name, or account/MRN plus phone number on file. Until verification passes, she will not disclose balances or account details. Unverified callers can leave a callback number instead.',
			),
			array(
				'q' => 'Can Ava take payments over the phone?',
				'a' => 'Yes. Ava supports PCI-compliant tokenized capture via keypad/DTMF entry so card numbers never enter the voice or transcript stream. She can also send a secure payment link. Payment-plan options can be offered within limits your practice configures.',
			),
			array(
				'q' => 'What happens on a dispute or complex billing question?',
				'a' => 'Ava captures a structured dispute or intent record, then warm-transfers to the correct biller or team with a brief covering who is calling, verification status, account status, and what was already discussed. If that biller is unavailable, she can schedule a callback instead of dropping to cold voicemail.',
			),
			array(
				'q' => 'Does Ava replace my billing staff?',
				'a' => 'No. Ava handles routine FAQs, balance explanations, simple payments, and intake for transfers. Judgment work — appeals, complex negotiations, and exceptions — stays with your billers, who receive fuller context and fewer repetitive calls.',
			),
			array(
				'q' => 'Is Ava HIPAA compliant?',
				'a' => 'Ava is built to handle protected health information under HIPAA safeguards, including identity gates before disclosure, encryption in transit and at rest, and audit-ready call logging. Confirm current compliance documentation and BAA terms with our team before publishing practice-specific claims.',
			),
			array(
				'q' => 'How does Ava work with agents like Cora?',
				'a' => 'When a patient has already texted or emailed about the same balance through a sibling agent such as Cora, Ava can carry that context into the phone call so the patient does not start over. That continuity is part of running a coordinated agent suite.',
			),
			array(
				'q' => 'How long does setup take?',
				'a' => 'Most practices are live after connecting billing systems, uploading FAQs and policies, setting identity and routing rules, and configuring payment options. The first week is spent reviewing calls and summaries before Ava runs with less oversight.',
			),
		),

		'final_title'   => 'Every billing call answered. Every transfer briefed.',
		'final_text'    => 'Ava works the account line so your billers can work the exceptions.',
		'final_cta'     => 'Book a demo',
		'final_cta_url' => '#contact',

		'contact_title' => 'See Ava take a billing call',
		'contact_text'  => 'Tell us about your billing call volume and we\'ll show you how Ava fits your account workflow.',
		'voice_sample'  => 'I verified the caller, explained the balance, and sent a secure payment link — summary is in Tebra.',
	);
}
