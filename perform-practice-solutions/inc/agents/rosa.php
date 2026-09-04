<?php
/**
 * Rosa — AI Referral Coordinator page content.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Rosa agent page content.
 *
 * @return array
 */
function pps_ai_agent_rosa_content() {
	return array(
		'slug'         => 'rosa',
		'name'         => 'Rosa',
		'letter'       => 'R',
		'role'         => 'Your AI Referral Coordinator',
		'acronym'      => 'Referral Outreach & Scheduling Assistant',
		'placement'    => 'Lives inside Tebra EMR',
		'audience'     => 'Referral coordinators',
		'seo_title'    => 'Rosa — AI Referral Coordinator for Tebra | Perform Practice Solutions',
		'seo_desc'     => 'Rosa is an AI referral coordinator that lives inside Tebra. She catches every incoming referral, reaches out by voice, text, and email, and gets patients on the schedule before they fall through the cracks.',

		'hero_title'   => 'Rosa, Your AI Referral Coordinator',
		'hero_lead'    => 'Rosa is an AI referral coordinator that lives inside Tebra. She catches every incoming referral, reaches out to the patient by voice, text, and email, and gets them on the schedule before they fall through the cracks.',
		'hero_cta'     => 'See Rosa in action',
		'hero_cta_url' => '#contact',
		'hero_note'    => 'Works inside your existing Tebra account. No new system for your staff to learn.',
		'hero_tagline' => 'Your Referrals Are Booked Before Anyone Picks Up the Phone',

		'highlights'   => array(
			array(
				'icon'  => 'fa-hospital-user',
				'title' => 'Knows your practice',
				'text'  => 'Rosa knows your practice, your providers, and your schedule inside out.',
			),
			array(
				'icon'  => 'fa-bolt',
				'title' => 'Catches every referral',
				'text'  => 'She catches every new referral the moment it lands in Tebra.',
			),
			array(
				'icon'  => 'fa-comments',
				'title' => 'Multi-channel outreach',
				'text'  => 'She reaches out by voice, text, and email until the patient responds.',
			),
			array(
				'icon'  => 'fa-rotate',
				'title' => 'Closes the loop',
				'text'  => 'She closes the loop with the referring provider, automatically.',
			),
		),

		'problem_title' => 'Most practices do not lose referrals. They lose the follow-up.',
		'problem_body'  => 'A referral arrives. Someone has to notice it, call the patient, leave a voicemail, remember to try again tomorrow, then update the referring office. Between check-ins, phone calls, and a full waiting room, that chain breaks quietly and nobody notices until the referral is 30 days old.',
		'problem_close' => 'Rosa picks up the chain the second the referral lands and does not put it down.',
		'problem_cta'   => 'See how Rosa handles a referral',
		'problem_cta_url' => '#capabilities',

		'onboard_eyebrow' => 'Onboarding',
		'onboard_title'   => 'Simple setup, on purpose',
		'onboard_intro'   => 'Onboarding Rosa takes a working session, not a project plan. She reads what your practice already uses instead of asking you to rebuild it.',
		'onboard_cta'     => 'Book a setup walkthrough',
		'onboard_cta_url' => '#contact',
		'onboard_phone_header' => 'Rosa · Referral setup',
		'onboard_steps'   => array(
			array(
				'title'         => 'Connect Tebra',
				'text'          => 'Link Rosa to your Tebra account so she can see incoming referrals, provider schedules, and appointment availability in real time.',
				'phone_title'   => 'Tebra connected',
				'phone_user'    => 'Connect Rosa to our Tebra account.',
				'phone_agent'   => 'Connected. I can see your referral queue, providers, and open slots.',
				'phone_status'  => array( 'Tebra linked', 'Queue visible', 'Schedules synced' ),
				'phone_card'    => array(
					'title'  => 'Tebra EMR',
					'meta'   => 'Live connection',
					'badge'  => 'Connected',
				),
			),
			array(
				'title'         => 'Upload what you already have',
				'text'          => 'Give Rosa your intake scripts, referral SOPs, and provider preferences. She reads existing documents instead of requiring a rebuild from scratch.',
				'phone_title'   => 'Practice files',
				'phone_user'    => 'Here are our referral SOPs and intake scripts.',
				'phone_agent'   => 'Got them. I\'ll use your existing docs as my playbook — no rebuild needed.',
				'phone_status'  => array( 'SOP uploaded', 'Intake script read', 'Provider prefs saved' ),
				'phone_card'    => array(
					'title'  => 'Referral_SOP.pdf',
					'meta'   => 'Needs review',
					'badge'  => 'Ready',
				),
			),
			array(
				'title'         => 'Set the rules once',
				'text'          => 'Decide how fast she reaches out, how many attempts she makes, which channels she uses, and when a human should step in.',
				'phone_title'   => 'Outreach rules',
				'phone_user'    => 'Call first, then text. Max 4 attempts. Escalate after that.',
				'phone_agent'   => 'Rules locked in. Voice → text → email, with human handoff when needed.',
				'phone_status'  => array( 'Channels set', 'Attempt limit: 4', 'Escalation on' ),
				'phone_card'    => array(
					'title'  => 'Outreach policy',
					'meta'   => 'Practice defaults',
					'badge'  => 'Active',
				),
			),
			array(
				'title'         => 'Watch the first week',
				'text'          => 'Review her outreach, approve her messages, and adjust her tone. Nothing goes out that you have not signed off on.',
				'phone_title'   => 'Week 1 review',
				'phone_user'    => 'Show me today\'s draft outreach before anything sends.',
				'phone_agent'   => '3 drafts ready for approval. Nothing goes out until you sign off.',
				'phone_status'  => array( 'Drafts waiting', 'Tone adjustable', 'Approval required' ),
				'phone_card'    => array(
					'title'  => 'Patient outreach draft',
					'meta'   => 'Needs review',
					'badge'  => 'Approve',
				),
			),
			array(
				'title'         => 'Let her run',
				'text'          => 'Rosa works every referral the same way, every day, including the ones that arrive at 6 PM on a Friday.',
				'phone_title'   => 'Referral live',
				'phone_user'    => 'New PT referral just landed from Dr. Patel.',
				'phone_agent'   => 'On it — contacting the patient now and watching open slots with Dr. Chen.',
				'phone_status'  => array( 'Referral caught', 'Outreach started', 'Calendar ready' ),
				'phone_card'    => array(
					'title'  => 'Dr. Patel referral',
					'meta'   => 'In progress',
					'badge'  => 'Live',
				),
			),
		),

		'cap_eyebrow' => 'What Rosa Does',
		'cap_title'   => 'Your always-on referral coordinator',
		'cap_intro'   => 'Rosa is the teammate who handles the entire path from referral received to appointment scheduled. She works the queue continuously so no referral sits waiting for someone to have a free minute.',
		'cap_cta'     => 'See the full workflow',
		'cap_cta_url' => '#contact',
		'capabilities' => array(
			array(
				'icon'  => 'fa-inbox',
				'title' => 'Monitor the Tebra referral queue',
				'text'  => 'Catches every new referral the moment it appears, day or night.',
			),
			array(
				'icon'  => 'fa-stopwatch',
				'title' => 'Reach out within minutes, not days',
				'text'  => 'Contacts the patient while the referral is still fresh and the provider visit is still top of mind.',
			),
			array(
				'icon'  => 'fa-tower-broadcast',
				'title' => 'Run a voice, text, and email cascade',
				'text'  => 'Starts with a call, follows with a text, backs it up with email. One channel is never the whole strategy.',
			),
			array(
				'icon'  => 'fa-clock-rotate-left',
				'title' => 'Keep trying without nagging',
				'text'  => 'Follows a set attempt schedule with sensible gaps, then hands off to staff when it is time.',
			),
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'Book directly into the calendar',
				'text'  => 'Offers real open slots and writes the appointment straight into Tebra.',
			),
			array(
				'icon'  => 'fa-clipboard-list',
				'title' => 'Collect intake details upfront',
				'text'  => 'Gathers what your front desk would have asked for anyway, before the patient arrives.',
			),
			array(
				'icon'  => 'fa-paper-plane',
				'title' => 'Send closed-loop updates to the referring provider',
				'text'  => 'The referring office learns the patient was scheduled without anyone having to fax, call, or chase.',
			),
			array(
				'icon'  => 'fa-flag',
				'title' => 'Flag the referrals that need a human',
				'text'  => 'Complex cases, unclear orders, and hesitant patients get routed to your coordinator with full context.',
			),
			array(
				'icon'  => 'fa-arrows-rotate',
				'title' => 'Handle rescheduling and no-show recovery',
				'text'  => 'A missed appointment gets a new outreach cycle instead of a note in someone\'s inbox.',
			),
			array(
				'icon'  => 'fa-bell',
				'title' => 'Confirm ahead of the visit',
				'text'  => 'Reminds the patient, confirms the slot, and updates the schedule if plans change.',
			),
			array(
				'icon'  => 'fa-moon',
				'title' => 'Work after hours and weekends',
				'text'  => 'Friday evening referrals get contacted before Monday, not after it.',
			),
			array(
				'icon'  => 'fa-chart-column',
				'title' => 'Report what actually happened',
				'text'  => 'Shows how many referrals came in, how many were reached, how many were scheduled, and how long each step took.',
			),
		),

		'benefits_eyebrow' => 'Benefits',
		'benefits_title'   => 'Your referral pipeline,',
		'benefits_title_accent' => 'easy mode',
		'benefits_intro'   => 'Rosa turns referral handling into a repeatable workflow that holds up on your busiest days.',
		'benefits_cta'     => 'Talk to us about your referral volume',
		'benefits_cta_url' => '#contact',
		'benefits'         => array(
			array(
				'icon'  => 'fa-fire',
				'title' => 'No referral goes cold',
				'text'  => 'Every referral gets contacted on a schedule, not whenever someone remembers.',
			),
			array(
				'icon'  => 'fa-user-check',
				'title' => 'Your coordinator stops chasing',
				'text'  => 'Staff step in for the conversations that need judgment, not for the fifth voicemail.',
			),
			array(
				'icon'  => 'fa-handshake',
				'title' => 'Referring providers keep sending',
				'text'  => 'Closed-loop updates make your practice the easy one to refer to.',
			),
			array(
				'icon'  => 'fa-gauge-high',
				'title' => 'Your schedule fills faster',
				'text'  => 'Faster outreach means shorter time from referral to first visit.',
			),
		),

		'showcase' => array(
			'sidebar_role'   => 'Referral',
			'new_chat_label' => 'New referral',
			'input_placeholder' => 'Ask Rosa about a referral…',
			'cta_label'      => 'See Rosa in action',
			'cta_url'        => '#contact',
			'user_message'   => 'We just got a PT referral from Dr. Patel. Can you take it?',
			'agent_message'  => 'On it. I found the referral in Tebra, checked open slots with Dr. Chen, and started outreach.',
			'status_items'   => array(
				'Tebra queue synced',
				'Patient text sent',
				'Voice attempt scheduled',
				'Referring office update queued',
			),
			'history_empty'  => 'No open referrals waiting',
		),

		'memory_eyebrow' => 'Practice memory',
		'memory_title'   => 'Rosa remembers how your practice works',
		'memory_intro'   => 'Rosa keeps your referral context in one place, so your process does not live in one coordinator\'s head.',
		'memory_cta'     => 'See what Rosa learns about your practice',
		'memory_cta_url' => '#contact',
		'memory_points'  => array(
			array(
				'title' => 'Always current',
				'text'  => 'Your scripts, provider preferences, and scheduling rules live with Rosa, so she never forgets how your practice operates.',
			),
			array(
				'title' => 'Context that compounds',
				'text'  => 'Every referral she works teaches her which openings, timings, and phrasing get patients to answer.',
			),
			array(
				'title' => 'One source of truth',
				'text'  => 'When you refine an intake script or change a scheduling rule, it applies to every referral from that moment on.',
			),
		),

		'security_eyebrow' => 'Security',
		'security_title'   => 'Patient data, handled the way it should be',
		'security_intro'   => 'Rosa is built to meet the privacy standards allied health practices are already held to.',
		'security_cta'     => 'Read our security overview',
		'security_cta_url' => '#contact',
		'security_points'  => array(
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'HIPAA aligned',
				'text'  => 'Protected health information is handled under HIPAA safeguards at every step, from the Tebra connection to the patient conversation.',
			),
			array(
				'icon'  => 'fa-lock',
				'title' => 'Encrypted in transit and at rest',
				'text'  => 'Every referral, message, and recording is encrypted. Access is limited to your practice.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Your data stays yours',
				'text'  => 'Your patient data belongs to your practice. Export it or delete it at any time.',
			),
		),

		'why_eyebrow' => 'Why practices like Rosa',
		'why_title'   => 'Why coordinators actually keep her',
		'why_cta'     => 'See Rosa in action',
		'why_cta_url' => '#contact',
		'why_cards'   => array(
			array(
				'icon'  => 'fa-heart',
				'title' => 'She is persistent, not pushy',
				'text'  => 'Rosa follows a set attempt cadence with real gaps between tries, so patients feel followed up with instead of hounded.',
			),
			array(
				'icon'  => 'fa-comments',
				'title' => 'She hands off with full context',
				'text'  => 'When a coordinator steps in, they see the whole conversation history, not a lone callback note.',
			),
			array(
				'icon'  => 'fa-mobile-screen',
				'title' => 'She works the whole channel mix',
				'text'  => 'Voice, text, and email in one sequence, because the patient who ignores a call often replies to a text.',
			),
			array(
				'icon'  => 'fa-circle-check',
				'title' => 'She closes the loop automatically',
				'text'  => 'The referring provider gets a status update without your staff writing a single message.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'She reads what you already use',
				'text'  => 'Existing scripts and SOPs become her training material, so setup does not mean starting over.',
			),
			array(
				'icon'  => 'fa-sun',
				'title' => 'She never has a busy Monday',
				'text'  => 'Referral volume spikes do not change how fast she responds.',
			),
		),

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_cta'     => 'Still have questions? Book a call',
		'faq_cta_url' => '#contact',
		'faqs'        => array(
			array(
				'q' => 'What is an AI referral coordinator?',
				'a' => 'An AI referral coordinator is software that handles incoming patient referrals from arrival to scheduled appointment. It monitors the referral queue, contacts patients by phone, text, and email, books the appointment, and updates the referring provider. Rosa is an AI referral coordinator built for allied health practices running on Tebra.',
			),
			array(
				'q' => 'How does Rosa work with Tebra?',
				'a' => 'Rosa connects directly to your Tebra account and monitors the referral queue in real time. She reads incoming referrals, checks provider availability, books appointments into the live schedule, and updates referral status as it changes. Your staff keeps working in Tebra exactly as they do now.',
			),
			array(
				'q' => 'How quickly does Rosa contact a new referral?',
				'a' => 'Rosa reaches out within minutes of a referral appearing in Tebra, including evenings and weekends. Speed matters because patients are most likely to answer while the referring provider visit is still recent. Practices that respond within the first hour schedule noticeably more referrals than those that wait a day.',
			),
			array(
				'q' => 'What happens if the patient does not answer?',
				'a' => 'Rosa runs a cascade across voice, text, and email over several days rather than relying on one channel. Each attempt is spaced to feel like follow-up instead of pressure. If the patient still does not respond after the full cycle, Rosa flags the referral for your coordinator with the full contact history attached.',
			),
			array(
				'q' => 'Does Rosa replace my front desk staff?',
				'a' => 'No. Rosa handles the repetitive outreach and scheduling work that keeps staff on the phone instead of with patients. Complex cases, unclear orders, and patients who need a real conversation are routed to your team with full context. Your staff does the judgment work. Rosa does the chasing.',
			),
			array(
				'q' => 'Is Rosa HIPAA compliant?',
				'a' => 'Rosa is built to handle protected health information under HIPAA safeguards. Patient data is encrypted in transit and at rest, access is limited to your practice, and your data remains your property. You can export or delete it at any time. A signed business associate agreement is available on request.',
			),
			array(
				'q' => 'What kinds of practices use Rosa?',
				'a' => 'Rosa is built for allied health practices running on Tebra, including physical therapy, occupational therapy, speech therapy, and chiropractic clinics. She is designed around the referral workflows those practices use, not adapted from a tool built for hospitals or general medical groups.',
			),
			array(
				'q' => 'How long does setup take?',
				'a' => 'Most practices are live within a week. Setup involves connecting Tebra, uploading your existing intake scripts and referral SOPs, and setting outreach rules. Rosa reads what you already use instead of requiring a rebuild. Your first week is spent reviewing her outreach before she runs on her own.',
			),
		),

		'final_title'   => 'Every referral, contacted. Every patient, scheduled.',
		'final_text'    => 'Rosa works the referral queue so your coordinator can work with patients.',
		'final_cta'     => 'Book a demo',
		'final_cta_url' => '#contact',

		'contact_title' => 'See Rosa in action',
		'contact_text'  => 'Tell us about your referral volume and we\'ll show you how Rosa fits your Tebra workflow.',
		'voice_sample'  => 'I caught a new referral in Tebra, reached out to the patient, and got them on the calendar.',
	);
}
