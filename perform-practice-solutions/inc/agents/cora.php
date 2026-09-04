<?php
/**
 * Cora — AI Communication Assistant page content.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Cora agent page content.
 *
 * @return array
 */
function pps_ai_agent_cora_content() {
	return array(
		'slug'         => 'cora',
		'name'         => 'Cora',
		'letter'       => 'C',
		'role'         => 'Your AI Communication Assistant',
		'acronym'      => 'Communication Outreach & Response Assistant',
		'placement'    => 'Runs text & phone automation on Tebra',
		'audience'     => 'Practice managers',
		'seo_title'    => 'Cora — AI Phone & Text Assistant for Tebra | Perform Practice Solutions',
		'seo_desc'     => 'Cora answers the phone, texts patients back within seconds, and confirms tomorrow\'s schedule while your practice sleeps. Every call answered. Every message returned.',

		'hero_title'   => 'Cora, Your AI Communication Assistant',
		'hero_lead'    => 'Cora answers the phone, texts patients back within seconds, and confirms tomorrow\'s schedule while your practice sleeps. Every call answered. Every message returned. No new headcount.',
		'hero_cta'     => 'See Cora in action',
		'hero_cta_url' => '#contact',
		'hero_note'    => 'Built for allied health practices on Tebra. HIPAA-aligned from day one.',
		'hero_tagline' => 'Every Call Answered. Every Patient Kept.',

		'highlights'   => array(
			array(
				'icon'  => 'fa-calendar-days',
				'title' => 'Knows your practice',
				'text'  => 'Cora knows your schedule, your services, and your patients.',
			),
			array(
				'icon'  => 'fa-phone',
				'title' => 'Answers every call',
				'text'  => 'Answers every call, day or night, in your practice\'s voice.',
			),
			array(
				'icon'  => 'fa-comment-sms',
				'title' => 'Texts back in seconds',
				'text'  => 'Texts back a missed call in seconds, before the patient calls someone else.',
			),
			array(
				'icon'  => 'fa-bell',
				'title' => 'Confirms without clicks',
				'text'  => 'Confirms, reschedules, and reminds without a single staff click.',
			),
		),

		'problem_title'   => 'Most practices don\'t lose patients on care. They lose them on hold.',
		'problem_body'    => 'A missed call at 4:50pm is a patient who books somewhere else by 5:15pm. Voicemails pile up. Reminder calls get pushed to whoever has a free minute. Confirmation texts go out late, and the Tuesday schedule fills with no-shows nobody saw coming. None of this is a staffing problem. It is a coverage problem. Your front desk can only be in one conversation at a time.',
		'problem_close'   => 'Cora takes the phone and text line off your team\'s plate and keeps every patient conversation moving. One assistant. Full coverage. No busy signal.',
		'problem_cta'     => 'Book a 15-minute walkthrough',
		'problem_cta_url' => '#contact',

		'onboard_eyebrow'      => 'Onboarding',
		'onboard_title'        => 'Onboarding that takes an afternoon, not a quarter',
		'onboard_intro'        => 'Getting started with Cora is intentionally simple. Connect your practice, point her at what you already use, and she starts answering.',
		'onboard_cta'          => 'Start your setup',
		'onboard_cta_url'      => '#contact',
		'onboard_phone_header' => 'Cora · Communication setup',
		'onboard_steps'        => array(
			array(
				'title'        => 'Introduce your practice',
				'text'         => 'Tell Cora who you are, what you treat, your hours, your locations, and how you like patients spoken to. She works from your language, not a generic script.',
				'phone_title'  => 'Practice profile',
				'phone_user'   => 'We\'re a PT clinic, open Mon–Fri, warm and direct tone.',
				'phone_agent'  => 'Got it. I\'ll speak in your voice and answer from your hours and services.',
				'phone_status' => array( 'Hours saved', 'Tone set', 'Services loaded' ),
				'phone_card'   => array(
					'title' => 'Practice profile',
					'meta'  => 'Voice & hours',
					'badge' => 'Ready',
				),
			),
			array(
				'title'        => 'Connect your phone line and Tebra',
				'text'         => 'Link your existing number and your Tebra calendar so Cora can see availability, confirm real appointments, and write back to the chart without duplicate entry.',
				'phone_title'  => 'Line + Tebra',
				'phone_user'   => 'Connect our main number and Tebra calendar.',
				'phone_agent'  => 'Connected. I can answer the line and book into live availability.',
				'phone_status' => array( 'Phone linked', 'Tebra synced', 'Write-back on' ),
				'phone_card'   => array(
					'title' => 'Main line',
					'meta'  => 'Live answering',
					'badge' => 'Connected',
				),
			),
			array(
				'title'        => 'Upload what you already have',
				'text'         => 'Drop in your intake scripts, your voicemail greeting, your FAQ sheet, your cancellation policy. Cora reads them and follows them. No rebuild required.',
				'phone_title'  => 'Scripts loaded',
				'phone_user'   => 'Here are our greeting, FAQ, and cancellation policy.',
				'phone_agent'  => 'Read and ready. I\'ll follow what you already wrote.',
				'phone_status' => array( 'Greeting saved', 'FAQ loaded', 'Policy applied' ),
				'phone_card'   => array(
					'title' => 'cancellation_policy.pdf',
					'meta'  => 'Practice document',
					'badge' => 'Ready',
				),
			),
			array(
				'title'        => 'Set the rules of engagement',
				'text'         => 'Decide what Cora handles alone, what needs a human, and when to escalate. Billing questions, clinical questions, angry callers: you set the line and she holds it.',
				'phone_title'  => 'Escalation rules',
				'phone_user'   => 'Escalate clinical and billing disputes. Handle scheduling alone.',
				'phone_agent'  => 'Rules locked. Routine calls stay with me — sensitive ones go to staff with context.',
				'phone_status' => array( 'Scope set', 'Escalation on', 'Consent respected' ),
				'phone_card'   => array(
					'title' => 'Engagement policy',
					'meta'  => 'Practice rules',
					'badge' => 'Active',
				),
			),
			array(
				'title'        => 'Review and refine',
				'text'         => 'Every call and thread is logged and readable. Listen back, correct a phrasing once, and Cora applies it from then on.',
				'phone_title'  => 'Call review',
				'phone_user'   => 'Tighten how we phrase the 24-hour cancel policy.',
				'phone_agent'  => 'Updated. I\'ll use the new phrasing on the next call.',
				'phone_status' => array( 'Calls logged', 'Phrase corrected', 'Applied live' ),
				'phone_card'   => array(
					'title' => 'Overnight confirmations',
					'meta'  => '14 confirmed by text',
					'badge' => 'Live',
				),
			),
		),

		'cap_eyebrow'  => 'What Cora Does',
		'cap_title'    => 'Your always-on communication assistant',
		'cap_intro'    => 'Cora handles the inbound and outbound patient conversations your front desk cannot always get to. She works across phone, text, and email, and she keeps one continuous memory of the conversation so a patient never has to repeat themselves.',
		'cap_cta'      => 'See Cora in action',
		'cap_cta_url'  => '#contact',
		'capabilities' => array(
			array(
				'icon'  => 'fa-phone',
				'title' => 'Answer every inbound call',
				'text'  => 'Pick up on the first ring, day or night, weekends and holidays included.',
			),
			array(
				'icon'  => 'fa-comment-sms',
				'title' => 'Text back missed calls in seconds',
				'text'  => 'The moment a call goes unanswered, Cora sends a text and keeps the conversation alive.',
			),
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'Confirm appointments automatically',
				'text'  => 'Reach out ahead of every visit and update the schedule the moment a patient replies.',
			),
			array(
				'icon'  => 'fa-bell',
				'title' => 'Send reminders that reduce no-shows',
				'text'  => 'Timed, personalized nudges across text and voice, not one generic blast.',
			),
			array(
				'icon'  => 'fa-arrows-rotate',
				'title' => 'Handle reschedules and cancellations',
				'text'  => 'Offer real open slots from the live calendar and rebook without a callback.',
			),
			array(
				'icon'  => 'fa-rotate',
				'title' => 'Run recall and reactivation outreach',
				'text'  => 'Reach lapsed patients and past discharges with a message that sounds like your practice.',
			),
			array(
				'icon'  => 'fa-heart-pulse',
				'title' => 'Follow up after every visit',
				'text'  => 'Check in on how a patient is doing and route anything clinical to the right person.',
			),
			array(
				'icon'  => 'fa-file-signature',
				'title' => 'Chase outstanding forms and paperwork',
				'text'  => 'Remind patients about intake, consent, and insurance documents until they are done.',
			),
			array(
				'icon'  => 'fa-handshake',
				'title' => 'Escalate to a human with full context',
				'text'  => 'When staff step in, they see the entire conversation history, not a blank screen.',
			),
			array(
				'icon'  => 'fa-circle-question',
				'title' => 'Answer routine patient questions',
				'text'  => 'Hours, parking, what to bring, what to wear, whether you take a plan — asked and answered.',
			),
			array(
				'icon'  => 'fa-sitemap',
				'title' => 'Route calls to the right person',
				'text'  => 'Billing, scheduling, clinical, new patient. Cora knows the difference and directs accordingly.',
			),
			array(
				'icon'  => 'fa-link',
				'title' => 'Keep one thread across channels',
				'text'  => 'A conversation that starts as a text and continues on the phone stays one conversation.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Log every interaction back to Tebra',
				'text'  => 'Notes, outcomes, and status updates land where your team already looks.',
			),
			array(
				'icon'  => 'fa-moon',
				'title' => 'Cover after hours and overflow',
				'text'  => 'Evenings, lunch breaks, and the ten minutes your front desk stepped away.',
			),
			array(
				'icon'  => 'fa-flag',
				'title' => 'Flag what needs attention',
				'text'  => 'Surface the callers who are frustrated, urgent, or at risk of dropping off.',
			),
			array(
				'icon'  => 'fa-chart-column',
				'title' => 'Report on what actually happened',
				'text'  => 'Calls answered, texts returned, appointments confirmed, patients recovered.',
			),
		),

		'benefits_eyebrow'      => 'Benefits',
		'benefits_title'        => 'Your front desk,',
		'benefits_title_accent' => 'easy mode',
		'benefits_intro'        => 'Cora turns phone and text coverage into a repeatable system that holds up when the lobby is full.',
		'benefits_cta'          => 'See what a week with Cora looks like',
		'benefits_cta_url'      => '#contact',
		'benefits'              => array(
			array(
				'icon'  => 'fa-phone-volume',
				'title' => 'No more missed calls',
				'text'  => 'Every ring is answered and every unanswered one gets a text back within seconds.',
			),
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'Fewer empty slots',
				'text'  => 'Confirmations and reminders run on schedule, so Tuesday\'s calendar holds up.',
			),
			array(
				'icon'  => 'fa-mug-hot',
				'title' => 'A calmer front desk',
				'text'  => 'Staff stop triaging the phone and start finishing the work in front of them.',
			),
			array(
				'icon'  => 'fa-gauge-high',
				'title' => 'Coverage that scales',
				'text'  => 'Busy season, flu season, a call-out. Cora does not need overtime.',
			),
		),

		'showcase' => array(
			'sidebar_role'       => 'Phone & text',
			'new_chat_label'     => 'New conversation',
			'input_placeholder'  => 'Ask Cora about coverage…',
			'cta_label'          => 'See Cora in action',
			'cta_url'            => '#contact',
			'user_message'       => 'We had 9 missed calls after 5pm yesterday. Can Cora cover that?',
			'agent_message'      => 'Yes. I\'ll answer the line after hours and text back anyone who misses — confirmations included.',
			'status_items'       => array(
				'After-hours answering on',
				'Missed-call texts live',
				'Confirmations queued',
				'Tebra notes writing back',
			),
			'history_empty'      => 'No open conversations waiting',
		),

		'memory_eyebrow' => 'Practice memory',
		'memory_title'   => 'Cora remembers your practice',
		'memory_intro'   => 'Everything Cora learns about your practice lives in one place, so your messaging never drifts and nothing gets lost between staff, shifts, or seasons.',
		'memory_cta'     => 'See what Cora learns about your practice',
		'memory_cta_url' => '#contact',
		'memory_points'  => array(
			array(
				'title' => 'Always current',
				'text'  => 'Change your hours, your policy, or a phrase you dislike, and Cora uses the new version on the very next call.',
			),
			array(
				'title' => 'Context that compounds',
				'text'  => 'The more conversations Cora handles, the better she gets at your patients, your objections, and your schedule patterns.',
			),
			array(
				'title' => 'One source of truth',
				'text'  => 'Every staff member and every channel works from the same information, so a patient hears the same answer no matter who or what they reach.',
			),
		),

		'security_eyebrow' => 'Security',
		'security_title'   => 'Patient data, handled the way it should be',
		'security_intro'   => 'Cora is built for allied health practices that need HIPAA-aligned coverage on phone and text.',
		'security_cta'     => 'Read our security overview',
		'security_cta_url' => '#contact',
		'security_points'  => array(
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'HIPAA aligned',
				'text'  => 'Cora operates under a signed business associate agreement. PHI is encrypted and every interaction is logged for audit.',
			),
			array(
				'icon'  => 'fa-lock',
				'title' => 'Encrypted in transit and at rest',
				'text'  => 'Protected health information is encrypted. Access is role-scoped to your practice.',
			),
			array(
				'icon'  => 'fa-message',
				'title' => 'Consent-aware outreach',
				'text'  => 'Outreach respects consent status, quiet hours, and opt-out requests so text messaging stays within TCPA requirements.',
			),
		),

		'why_eyebrow' => 'Why practices choose Cora',
		'why_title'   => 'What practice managers notice in the first week',
		'why_cta'     => 'See Cora in action',
		'why_cta_url' => '#contact',
		'why_cards'   => array(
			array(
				'icon'  => 'fa-bolt',
				'title' => 'Responds instantly, never robotically',
				'text'  => 'Cora answers in seconds and in your voice, without the scripted stall that makes patients hang up.',
			),
			array(
				'icon'  => 'fa-hand',
				'title' => 'Knows when to hand off',
				'text'  => 'Clinical questions, complaints, and anything sensitive go to a person immediately, with full context attached.',
			),
			array(
				'icon'  => 'fa-link',
				'title' => 'One conversation, every channel',
				'text'  => 'A patient who texts, calls, and texts again is talking to one assistant with one memory, not three disconnected systems.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Works from your documents',
				'text'  => 'Your scripts and policies are the source. Cora follows what you already wrote instead of asking you to write it again.',
			),
			array(
				'icon'  => 'fa-chart-line',
				'title' => 'Improves from real outcomes',
				'text'  => 'What gets approved, corrected, or escalated shapes what Cora does next. She tightens with use.',
			),
			array(
				'icon'  => 'fa-sun',
				'title' => 'Never calls out sick',
				'text'  => 'Holidays, lunch hours, flu season, and the week your front desk is short two people.',
			),
		),

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_cta'     => 'Still have questions? Book a call',
		'faq_cta_url' => '#contact',
		'faqs'        => array(
			array(
				'q' => 'What is an AI communication assistant?',
				'a' => 'An AI communication assistant is software that answers patient calls and messages on behalf of a practice. It picks up inbound calls, responds to texts, confirms and reschedules appointments, and sends reminders automatically, handling routine conversations end to end while escalating anything clinical or sensitive to human staff.',
			),
			array(
				'q' => 'Will patients know they are talking to AI?',
				'a' => 'Cora identifies herself as your practice\'s virtual assistant at the start of every conversation. Patients are never misled. Most callers care far more about reaching someone immediately than about who answers, and any caller who asks for a person is connected or called back the same day.',
			),
			array(
				'q' => 'Does Cora work with Tebra?',
				'a' => 'Yes. Cora connects directly to your Tebra calendar and patient records, so she books into real availability, updates appointment status the moment a patient confirms, and writes conversation notes back to the chart. Your front desk sees everything in the system they already use, with no duplicate entry.',
			),
			array(
				'q' => 'Is Cora HIPAA compliant?',
				'a' => 'Cora operates under a signed business associate agreement. Protected health information is encrypted in transit and at rest, access is role-scoped, and every interaction is logged for audit. Outreach also respects consent status, quiet hours, and opt-out requests, so text messaging stays within TCPA requirements.',
			),
			array(
				'q' => 'What happens when a patient asks something Cora cannot answer?',
				'a' => 'Cora escalates. Clinical questions, billing disputes, complaints, and anything outside her defined scope route to the right staff member with the full conversation attached. Your team picks up mid-thread instead of starting cold, and you decide in advance exactly where that line sits.',
			),
			array(
				'q' => 'How long does setup take?',
				'a' => 'Most practices are live within a few business days. Setup involves connecting your phone number and Tebra account, uploading the scripts and policies you already use, and reviewing how Cora should handle escalations. There is no rebuild of your workflows and no new software for your front desk to learn.',
			),
			array(
				'q' => 'Can Cora make outbound calls too?',
				'a' => 'Yes. Cora runs outbound confirmation calls, reminder sequences, recall campaigns for lapsed patients, and follow-ups after a visit. Outbound outreach follows your consent rules and quiet hours, and cascades across voice, text, and email so patients are reached on the channel they actually respond to.',
			),
		),

		'final_title'   => 'Every call answered, starting this week.',
		'final_text'    => 'See how many calls your practice is missing right now, and what a full week of coverage would look like.',
		'final_cta'     => 'Book your walkthrough',
		'final_cta_url' => '#contact',

		'contact_title' => 'See Cora in action',
		'contact_text'  => 'Tell us about your call and text volume and we\'ll show you how Cora covers your practice.',
		'voice_sample'  => 'Confirmed 14 appointments by text overnight — no missed calls.',
	);
}
