<?php
/**
 * Vera — Visitor Engagement & Response Assistant page content.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

/**
 * Vera agent page content.
 *
 * @return array
 */
function pps_ai_agent_vera_content() {
	return array(
		'slug'         => 'vera',
		'name'         => 'Vera',
		'letter'       => 'V',
		'role'         => 'Your Visitor Engagement & Response Assistant',
		'acronym'      => 'Visitor Engagement & Response Assistant',
		'placement'    => 'Embedded on the practice website',
		'audience'     => 'Website patients',
		'seo_title'    => 'Vera — AI Website Chat Assistant | Perform Practice Solutions',
		'seo_desc'     => 'Vera is the always-on front door of your website. She answers patient questions, checks insurance and service fit, and books visits the moment someone decides to reach out.',

		'hero_title'   => 'Vera, Your Visitor Engagement & Response Assistant',
		'hero_lead'    => 'Vera is the always-on front door of your website. She answers patient questions in plain language, checks insurance and service fit, and books the visit the moment someone decides to reach out. No forms left hanging. No callbacks that never happen.',
		'hero_cta'     => 'See Vera on your site',
		'hero_cta_url' => '#contact',
		'hero_note'    => 'Live in under a week. No new software for your front desk to learn.',
		'hero_tagline' => 'Your Website Answers Patients Now, Not Tomorrow',

		'highlights'   => array(
			array(
				'icon'  => 'fa-hospital',
				'title' => 'Knows your practice',
				'text'  => 'Vera knows your services, providers, and hours inside out.',
			),
			array(
				'icon'  => 'fa-comments',
				'title' => 'Answers instantly',
				'text'  => 'Answers insurance, pricing, and "do you treat this?" questions instantly.',
			),
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'Books in chat',
				'text'  => 'Books the appointment inside the chat, without a phone call.',
			),
			array(
				'icon'  => 'fa-moon',
				'title' => 'Works after hours',
				'text'  => 'Works nights, weekends, and lunch breaks, when most patients actually browse.',
			),
		),

		'problem_title'   => 'Most practices do not lose patients at the front desk. They lose them at 9 PM.',
		'problem_body'    => 'A patient finds your site after hours, has one question about their insurance, and gets a contact form. No answer comes until tomorrow, so they go back to Google and book with whoever replies first. Meanwhile your front desk spends the morning returning voicemails and answering the same five questions.',
		'problem_close'   => 'Vera picks up that traffic in real time. She answers the question, confirms fit, and gets the visit on the calendar while the patient is still deciding.',
		'problem_cta'     => 'See what Vera answers',
		'problem_cta_url' => '#capabilities',

		'onboard_eyebrow'      => 'Onboarding',
		'onboard_title'        => 'Live in five steps, not five meetings',
		'onboard_intro'        => 'Vera learns your practice from what you already have. Your website, your insurance list, your intake FAQs. Nothing new to write, nothing to rebuild.',
		'onboard_cta'          => 'Start your setup',
		'onboard_cta_url'      => '#contact',
		'onboard_phone_header' => 'Vera · Website setup',
		'onboard_steps'        => array(
			array(
				'title'        => 'Point her at what you have',
				'text'         => 'Share your website, service pages, insurance list, and any intake FAQs.',
				'phone_title'  => 'Practice content',
				'phone_user'   => 'Here is our site, insurance list, and FAQ page.',
				'phone_agent'  => 'Got it. I\'ll answer from your services, hours, and coverage — nothing generic.',
				'phone_status' => array( 'Website indexed', 'Insurance list loaded', 'FAQs ready' ),
				'phone_card'   => array(
					'title' => 'yourpractice.com',
					'meta'  => 'Source of truth',
					'badge' => 'Synced',
				),
			),
			array(
				'title'        => 'Drop in one line of code',
				'text'         => 'Vera embeds on your site with a single snippet. Your site stays exactly as it is.',
				'phone_title'  => 'Widget live',
				'phone_user'   => 'Can you embed without redesigning our site?',
				'phone_agent'  => 'One snippet. Your layout stays the same — I appear when a visitor needs help.',
				'phone_status' => array( 'Snippet installed', 'Chat live', 'No redesign' ),
				'phone_card'   => array(
					'title' => 'Chat widget',
					'meta'  => 'Homepage + services',
					'badge' => 'Live',
				),
			),
			array(
				'title'        => 'Connect your calendar',
				'text'         => 'Link your scheduling system so Vera can see real availability and write confirmed appointments straight back into it.',
				'phone_title'  => 'Calendar linked',
				'phone_user'   => 'Connect Vera to our scheduling system.',
				'phone_agent'  => 'Connected. I can show real openings and book confirmed visits.',
				'phone_status' => array( 'Calendar synced', 'Real slots only', 'Write-back on' ),
				'phone_card'   => array(
					'title' => 'Scheduling system',
					'meta'  => 'Live availability',
					'badge' => 'Connected',
				),
			),
			array(
				'title'        => 'Set your rules',
				'text'         => 'Tell Vera which questions she answers, which ones she escalates, and what she should never say.',
				'phone_title'  => 'Guardrails set',
				'phone_user'   => 'Escalate clinical questions. Never guess on diagnosis.',
				'phone_agent'  => 'Rules locked. I answer services and insurance — clinical goes straight to staff.',
				'phone_status' => array( 'Scope defined', 'Escalation on', 'Tone approved' ),
				'phone_card'   => array(
					'title' => 'Answer policy',
					'meta'  => 'Practice rules',
					'badge' => 'Active',
				),
			),
			array(
				'title'        => 'Watch and refine',
				'text'         => 'Review every conversation from week one. See the questions patients actually ask, then tighten Vera\'s answers around them.',
				'phone_title'  => 'Week 1 insights',
				'phone_user'   => 'What are visitors asking most this week?',
				'phone_agent'  => 'Top asks: insurance fit, first-visit prep, and cash-pay options. Ready to refine.',
				'phone_status' => array( 'Chats reviewed', 'Topics ranked', 'Answers tightened' ),
				'phone_card'   => array(
					'title' => 'Conversation report',
					'meta'  => 'Needs review',
					'badge' => 'Ready',
				),
			),
		),

		'cap_eyebrow'  => 'What Vera Does',
		'cap_title'    => 'Your always-ready front desk for the website',
		'cap_intro'    => 'Vera turns your website from a brochure into a conversation. Every visitor gets an answer in seconds, every qualified visitor gets offered a booking, and your team only steps in when a real person is genuinely needed.',
		'cap_cta'      => 'See Vera in action',
		'cap_cta_url'  => '#contact',
		'capabilities' => array(
			array(
				'icon'  => 'fa-stethoscope',
				'title' => 'Answer service questions',
				'text'  => 'Explain what you treat, how care works, and what a first visit looks like.',
			),
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'Check insurance coverage',
				'text'  => 'Confirm which plans you accept and flag when a patient needs to verify benefits.',
			),
			array(
				'icon'  => 'fa-user-check',
				'title' => 'Qualify before booking',
				'text'  => 'Ask the few questions that tell you whether this patient is a fit for your practice.',
			),
			array(
				'icon'  => 'fa-calendar-plus',
				'title' => 'Book appointments live',
				'text'  => 'Show real openings and confirm the visit inside the chat, in under a minute.',
			),
			array(
				'icon'  => 'fa-arrows-rotate',
				'title' => 'Reschedule and cancel',
				'text'  => 'Handle changes without a phone call, and free the slot for the next patient.',
			),
			array(
				'icon'  => 'fa-language',
				'title' => 'Speak the patient\'s language',
				'text'  => 'Detect the visitor\'s language automatically and continue the conversation in it.',
			),
			array(
				'icon'  => 'fa-clipboard-list',
				'title' => 'Collect intake details',
				'text'  => 'Gather name, contact, referral source, and reason for visit, ready for your EMR.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Send forms after booking',
				'text'  => 'Follow up with intake paperwork so the first visit starts on time.',
			),
			array(
				'icon'  => 'fa-rotate',
				'title' => 'Follow up on unfinished chats',
				'text'  => 'Re-engage visitors who asked a question and left without booking.',
			),
			array(
				'icon'  => 'fa-flag',
				'title' => 'Route urgent cases',
				'text'  => 'Recognize red flags and hand off to a human immediately with full context.',
			),
			array(
				'icon'  => 'fa-location-dot',
				'title' => 'Answer directions and parking',
				'text'  => 'Handle the small logistics questions that eat front desk minutes.',
			),
			array(
				'icon'  => 'fa-credit-card',
				'title' => 'Explain cash pay options',
				'text'  => 'Walk self-pay patients through rates and packages without an awkward call.',
			),
			array(
				'icon'  => 'fa-moon',
				'title' => 'Capture after-hours demand',
				'text'  => 'Turn late-night and weekend traffic into booked visits instead of voicemails.',
			),
			array(
				'icon'  => 'fa-handshake',
				'title' => 'Hand off with the full thread',
				'text'  => 'When staff step in, they see the entire conversation, not a name and a number.',
			),
			array(
				'icon'  => 'fa-chart-column',
				'title' => 'Report what patients ask',
				'text'  => 'Show your team the questions coming up most, so your site and scripts improve.',
			),
		),

		'benefits_eyebrow'      => 'Benefits',
		'benefits_title'        => 'Your front desk,',
		'benefits_title_accent' => 'easy mode',
		'benefits_intro'        => 'Vera turns website visitors into booked visits without interrupting the people already in the clinic.',
		'benefits_cta'          => 'Book a walkthrough',
		'benefits_cta_url'      => '#contact',
		'benefits'              => array(
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'More booked visits from the same traffic',
				'text'  => 'Every visitor gets an answer and an offer to book, not a contact form.',
			),
			array(
				'icon'  => 'fa-bell-slash',
				'title' => 'Fewer interruptions at the desk',
				'text'  => 'Routine questions get handled before they become phone calls.',
			),
			array(
				'icon'  => 'fa-clock',
				'title' => 'Coverage outside clinic hours',
				'text'  => 'Nights, weekends, and holidays are when patients search. Vera is there.',
			),
			array(
				'icon'  => 'fa-face-smile',
				'title' => 'A calmer first impression',
				'text'  => 'Patients get one clear answer instead of a queue.',
			),
		),

		'showcase' => array(
			'sidebar_role'       => 'Website',
			'new_chat_label'     => 'New visitor',
			'input_placeholder'  => 'Ask Vera about services…',
			'cta_label'          => 'See Vera on your site',
			'cta_url'            => '#contact',
			'user_message'       => 'Do you take Blue Cross, and can I book a PT eval this week?',
			'agent_message'      => 'Yes — we accept Blue Cross. I see three openings with Dr. Chen. Want Tuesday at 10:30?',
			'status_items'       => array(
				'Insurance checked',
				'Fit confirmed',
				'Slot offered',
				'Intake form queued',
			),
			'history_empty'      => 'No open chats waiting',
		),

		'memory_eyebrow'  => 'Practice knowledge',
		'memory_title'    => 'Vera runs on your practice, not on generic answers',
		'memory_intro'    => 'Everything Vera knows lives in one place you control. Update it once and every future conversation reflects the change.',
		'memory_cta'      => 'See what Vera would know about your practice',
		'memory_cta_url'  => '#contact',
		'memory_points'   => array(
			array(
				'title' => 'Always current',
				'text'  => 'Your services, providers, hours, insurance list, and pricing live in Vera\'s knowledge base. Change a plan you accept and she stops offering it that day.',
			),
			array(
				'title' => 'Consistent every time',
				'text'  => 'Every patient hears the same answer to the same question, in your practice\'s tone, whether it is Tuesday morning or Sunday night.',
			),
			array(
				'title' => 'Sharper over time',
				'text'  => 'As you approve, correct, or rewrite her answers, Vera\'s future responses tighten around what your practice actually wants said.',
			),
		),

		'security_eyebrow' => 'Security',
		'security_title'   => 'Patient data, handled the way it should be',
		'security_intro'   => 'Vera is built for practices operating under HIPAA — conversations stay protected and under your control.',
		'security_cta'     => 'Read our security overview',
		'security_cta_url' => '#contact',
		'security_points'  => array(
			array(
				'icon'  => 'fa-shield-halved',
				'title' => 'HIPAA aligned',
				'text'  => 'Conversations are handled under HIPAA safeguards, with a business associate agreement available.',
			),
			array(
				'icon'  => 'fa-lock',
				'title' => 'Encrypted in transit and at rest',
				'text'  => 'Visitor chats are encrypted. Access is controlled and logged.',
			),
			array(
				'icon'  => 'fa-database',
				'title' => 'Your data stays yours',
				'text'  => 'Patient conversations belong to your practice and are never used to train models.',
			),
		),

		'why_eyebrow' => 'Why practices keep Vera',
		'why_title'   => 'Why practices keep Vera on the site',
		'why_cta'     => 'See Vera on your site',
		'why_cta_url' => '#contact',
		'why_cards'   => array(
			array(
				'icon'  => 'fa-bolt',
				'title' => 'Answers in seconds, not tomorrow',
				'text'  => 'A patient asking a question at 9 PM gets a real answer at 9 PM, not a form receipt.',
			),
			array(
				'icon'  => 'fa-calendar-check',
				'title' => 'Booking, not just chatting',
				'text'  => 'Most chatbots collect a name. Vera opens the calendar and confirms the visit.',
			),
			array(
				'icon'  => 'fa-language',
				'title' => 'Multilingual without a second setup',
				'text'  => 'She detects the visitor\'s language and keeps going — no separate widget, no toggle to find.',
			),
			array(
				'icon'  => 'fa-file-lines',
				'title' => 'Care continues after the booking',
				'text'  => 'Forms, prep instructions, and reminders go out automatically, so the first visit is not the first time you talk.',
			),
			array(
				'icon'  => 'fa-handshake',
				'title' => 'Handoffs that do not restart',
				'text'  => 'When staff take over, they inherit the whole conversation. The patient never repeats themselves.',
			),
			array(
				'icon'  => 'fa-rocket',
				'title' => 'Live in days, not quarters',
				'text'  => 'She reads what you already have. There is no script writing phase and no rebuild.',
			),
		),

		'faq_eyebrow' => 'FAQs',
		'faq_title'   => 'Frequently asked questions',
		'faq_cta'     => 'Still have questions? Book a call',
		'faq_cta_url' => '#contact',
		'faqs'        => array(
			array(
				'q' => 'What is an AI website assistant?',
				'a' => 'An AI website assistant is software embedded on a practice website that answers visitor questions in real time and books appointments. Unlike a contact form, it responds in seconds, at any hour, using the practice\'s own service, insurance, and scheduling information rather than generic replies.',
			),
			array(
				'q' => 'What does Vera do?',
				'a' => 'Vera is a visitor engagement and response assistant for allied health practices. She answers questions about services, insurance, and pricing, qualifies visitors, books appointments directly into the practice calendar, and sends intake forms afterward. When a question needs a human, she routes it with the full conversation attached.',
			),
			array(
				'q' => 'Does Vera replace my front desk?',
				'a' => 'No. Vera handles the repetitive website questions that interrupt your front desk, so your staff can focus on patients in the building. Anything clinical, urgent, or outside her defined scope goes straight to a person, with the entire conversation included so nothing is repeated.',
			),
			array(
				'q' => 'Can Vera book appointments into my scheduling system?',
				'a' => 'Yes. Once connected to your scheduling system, Vera sees real availability and writes confirmed appointments back into it. Patients choose an actual open slot inside the chat instead of submitting a request that someone has to call back and confirm later.',
			),
			array(
				'q' => 'Is Vera HIPAA compliant?',
				'a' => 'Vera is built for practices operating under HIPAA. Conversations are encrypted in transit and at rest, access is controlled and logged, and a business associate agreement is available. Patient conversations belong to your practice and are never used to train models.',
			),
			array(
				'q' => 'How long does setup take?',
				'a' => 'Most practices are live within a week. Vera reads your existing website, service pages, and insurance information to build her answer library, so there is no script writing phase. Setup is one code snippet on your site plus a scheduling connection.',
			),
			array(
				'q' => 'What languages does Vera speak?',
				'a' => 'Vera detects the visitor\'s language automatically and continues the conversation in it, with no separate widget or language toggle for the patient to find. This lets practices serve multilingual communities without maintaining a second version of the website chat.',
			),
			array(
				'q' => 'What happens if Vera cannot answer something?',
				'a' => 'She says so plainly and hands the conversation to your team, with the full thread attached. Vera never guesses at clinical questions and never presents herself as a clinician. You define exactly which topics she answers and which ones escalate.',
			),
		),

		'final_title'   => 'Your website is open right now. Is anyone answering?',
		'final_text'    => 'Every hour your site sits unattended, someone is asking a question nobody is there to answer. Vera answers it, and books the visit.',
		'final_cta'     => 'See Vera on your site',
		'final_cta_url' => '#contact',

		'contact_title' => 'See Vera on your site',
		'contact_text'  => 'Tell us about your website traffic and we\'ll show you how Vera turns visitors into booked visits.',
		'voice_sample'  => 'Hi, I\'m Vera. Ask me anything, or I can get you booked in right now.',
	);
}
