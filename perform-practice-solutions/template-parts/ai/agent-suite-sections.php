<?php
/**
 * Agent suite positioning sections (from deck — merged 2 slides per block).
 * Inserted after hero on AI service pages.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$ai_suite_agents = array(
	array(
		'letter'   => 'A',
		'slug'     => 'ava',
		'name'     => 'Ava',
		'acronym'  => 'AVA',
		'title'    => 'Account and Voice Assistant',
		'audience' => 'Practice-wide',
	),
	array(
		'letter'   => 'R',
		'slug'     => 'rosa',
		'name'     => 'Rosa',
		'acronym'  => 'ROSA',
		'title'    => 'Referral Outreach & Scheduling Assistant',
		'audience' => 'Referral coordinators',
	),
	array(
		'letter'   => 'V',
		'slug'     => 'vera',
		'name'     => 'Vera',
		'acronym'  => 'VERA',
		'title'    => 'Visitor Engagement & Response Assistant',
		'audience' => 'Website patients',
	),
	array(
		'letter'   => 'R',
		'slug'     => 'rex',
		'name'     => 'Rex',
		'acronym'  => 'REX',
		'title'    => 'Reception Efficiency eXpert',
		'audience' => 'Front desk staff',
	),
	array(
		'letter'   => 'C',
		'slug'     => 'cora',
		'name'     => 'Cora',
		'acronym'  => 'CORA',
		'title'    => 'Communication Outreach & Response Assistant',
		'audience' => 'Practice managers',
		'featured' => true,
	),
);

$ai_suite_deepdives = array(
	array(
		'slug'      => 'rosa',
		'letter'    => 'R',
		'name'      => 'Rosa',
		'acronym'   => 'ROSA',
		'title'     => 'Referral outreach & scheduling assistant',
		'audience'  => 'Referral & medical coordinators',
		'placement' => 'ROSA — lives inside Tebra EMR',
		'letters'   => array(
			array( 'l' => 'R', 'w' => 'Referral' ),
			array( 'l' => 'O', 'w' => 'Outreach' ),
			array( 'l' => 'S', 'w' => 'Scheduling' ),
			array( 'l' => 'A', 'w' => 'Assistant' ),
		),
		'bio'       => 'Catches every incoming referral, reaches out to the patient, and gets them on the schedule — before they fall through the cracks.',
		'voice'     => 'I caught a new referral in Tebra, reached out to the patient, and got them on the calendar.',
	),
	array(
		'slug'      => 'vera',
		'letter'    => 'V',
		'name'      => 'Vera',
		'acronym'   => 'VERA',
		'title'     => 'Visitor engagement & response assistant',
		'audience'  => 'Patients visiting the site',
		'placement' => 'VERA — embedded on the practice website',
		'letters'   => array(
			array( 'l' => 'V', 'w' => 'Visitor Engagement' ),
			array( 'l' => 'R', 'w' => 'Response' ),
			array( 'l' => 'A', 'w' => 'Assistant' ),
		),
		'bio'       => 'The always-on front door of the website — answering questions and booking visits the moment a patient decides to reach out.',
		'voice'     => 'Hi, I\'m Vera. Ask me anything, or I can get you booked in right now.',
	),
	array(
		'slug'      => 'rex',
		'letter'    => 'R',
		'name'      => 'Rex',
		'acronym'   => 'REX',
		'title'     => 'Reception efficiency expert',
		'audience'  => 'Front desk staff & administrators',
		'placement' => 'REX — runs front-desk workflows',
		'letters'   => array(
			array( 'l' => 'R', 'w' => 'Reception' ),
			array( 'l' => 'E', 'w' => 'Efficiency' ),
			array( 'l' => 'X', 'w' => 'eXpert' ),
		),
		'bio'       => 'The behind-the-counter teammate who takes the busywork off the front desk so staff can focus on patients, not paperwork.',
		'voice'     => 'I cleared the intake queue and flagged two forms that need a signature.',
	),
	array(
		'slug'      => 'cora',
		'letter'    => 'C',
		'name'      => 'Cora',
		'acronym'   => 'CORA',
		'title'     => 'Communication outreach & response assistant',
		'audience'  => 'Practice managers',
		'placement' => 'CORA — runs text & phone automation',
		'letters'   => array(
			array( 'l' => 'C', 'w' => 'Communication' ),
			array( 'l' => 'O', 'w' => 'Outreach' ),
			array( 'l' => 'R', 'w' => '& Response' ),
			array( 'l' => 'A', 'w' => 'Assistant' ),
		),
		'bio'       => 'The voice and text line that never misses a call or a message, keeping patients informed without adding to the team\'s workload.',
		'voice'     => 'Confirmed 14 appointments by text overnight — no missed calls.',
		'featured'  => true,
	),
);
?>

<section class="ai-suite ai-suite--intro" id="agent-suite">
	<div class="pps-container">
		<div class="ai-suite-intro__grid">
			<div class="ai-suite-intro__lead pps-reveal">
				<p class="ai-suite-eyebrow"><?php esc_html_e( 'The AI Agent Team', 'perform-practice' ); ?></p>
				<h2 class="ai-suite-title"><?php esc_html_e( 'One human name, one acronym, one job.', 'perform-practice' ); ?></h2>
				<p class="ai-suite-lead"><?php esc_html_e( 'A naming framework for allied healthcare practices — warm, professional, and healthcare-appropriate. It reads like a colleague, not a system.', 'perform-practice' ); ?></p>
				<ul class="ai-suite-roster" aria-label="<?php esc_attr_e( 'Agent suite', 'perform-practice' ); ?>">
					<li>AVA</li>
					<li>ROSA</li>
					<li>VERA</li>
					<li>REX</li>
					<li>CORA</li>
				</ul>
			</div>
			<div class="ai-suite-framework pps-reveal">
				<ol class="ai-suite-framework__list">
					<li>
						<strong><?php esc_html_e( 'A human first name', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'Warm, professional, and healthcare-appropriate — it reads like a colleague, not a system.', 'perform-practice' ); ?></p>
					</li>
					<li>
						<strong><?php esc_html_e( 'Each letter is the job', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'The acronym spells out exactly what the agent does. No guessing, no jargon.', 'perform-practice' ); ?></p>
					</li>
					<li>
						<strong><?php esc_html_e( 'Instant clarity', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'A front-desk coordinator or practice manager gets the point in one glance, no onboarding needed.', 'perform-practice' ); ?></p>
					</li>
				</ol>
				<aside class="ai-suite-ava-card">
					<div class="ai-suite-ava-card__mark" aria-hidden="true">A</div>
					<div>
						<p class="ai-suite-ava-card__name">AVA</p>
						<p class="ai-suite-ava-card__title"><?php esc_html_e( 'Account and Voice Assistant', 'perform-practice' ); ?></p>
						<p class="ai-suite-ava-card__note"><?php esc_html_e( 'The original agent — the naming pattern every other agent in the suite inherits.', 'perform-practice' ); ?></p>
						<ul class="ai-suite-acronym">
							<li><span>A</span> <?php esc_html_e( 'Account', 'perform-practice' ); ?></li>
							<li><span>V</span> <?php esc_html_e( 'Voice', 'perform-practice' ); ?></li>
							<li><span>A</span> <?php esc_html_e( 'Assistant', 'perform-practice' ); ?></li>
						</ul>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--team">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( 'Meet the Team', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'Five agents. Five distinct hires.', 'perform-practice' ); ?></h2>
		</div>
		<div class="ai-suite-team__grid">
			<?php foreach ( $ai_suite_agents as $agent ) : ?>
				<article class="ai-suite-team-card pps-reveal<?php echo ! empty( $agent['featured'] ) ? ' ai-suite-team-card--featured' : ''; ?>">
					<div class="ai-suite-team-card__mark" aria-hidden="true"><?php echo esc_html( $agent['letter'] ); ?></div>
					<h3><?php echo esc_html( $agent['name'] ); ?></h3>
					<p class="ai-suite-team-card__role"><?php echo esc_html( $agent['title'] ); ?></p>
					<p class="ai-suite-team-card__audience"><?php echo esc_html( $agent['audience'] ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--deepdives">
	<div class="pps-container">
		<div class="ai-suite-deepdives__grid">
			<?php foreach ( array_slice( $ai_suite_deepdives, 0, 2 ) as $agent ) : ?>
				<?php include locate_template( 'template-parts/ai/agent-suite-deepdive-card.php' ); ?>
			<?php endforeach; ?>
		</div>
		<div class="ai-suite-deepdives__grid">
			<?php foreach ( array_slice( $ai_suite_deepdives, 2, 2 ) as $agent ) : ?>
				<?php include locate_template( 'template-parts/ai/agent-suite-deepdive-card.php' ); ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--principles">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( 'Positioning', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'One system, five distinct hires', 'perform-practice' ); ?></h2>
		</div>
		<ul class="ai-suite-principles__letters pps-reveal" aria-hidden="true">
			<li>A</li><li>R</li><li>V</li><li>R</li><li>C</li>
		</ul>
		<div class="ai-suite-principles__grid">
			<article class="ai-suite-principle pps-reveal">
				<h3><?php esc_html_e( 'The pattern is the brand, not the roster.', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Once a buyer meets one agent and decodes the pattern, every other agent explains itself — no re-onboarding needed when a practice adds a second or third hire.', 'perform-practice' ); ?></p>
			</article>
			<article class="ai-suite-principle pps-reveal">
				<h3><?php esc_html_e( 'Each name still stands alone.', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'These are sold and priced as five separate point solutions, so each name, quote, and positioning statement has to work with zero context from the others.', 'perform-practice' ); ?></p>
			</article>
			<article class="ai-suite-principle pps-reveal">
				<h3><?php esc_html_e( 'Distinct sound, shared logic.', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Rosa, Vera, Rex, and Cora are chosen for sound variety — not rhyme — so each feels like a different hire, not a different flavor of the same one.', 'perform-practice' ); ?></p>
			</article>
			<article class="ai-suite-principle pps-reveal">
				<h3><?php esc_html_e( 'Never bundle them on one slide for buyers.', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'The shared DNA should be something a customer discovers over time, not something announced — announcing it reframes five products as one bundle.', 'perform-practice' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--market">
	<div class="pps-container">
		<div class="ai-suite-market__grid">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php esc_html_e( 'Competitive Landscape', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php esc_html_e( 'Who else is building this', 'perform-practice' ); ?></h2>
				<p class="ai-suite-lead"><?php esc_html_e( 'Landscape as of August 2026', 'perform-practice' ); ?></p>
				<ol class="ai-suite-market__list">
					<li>
						<strong><?php esc_html_e( 'Referral outreach — Assort Health, ReferralMD', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'Same-hour, multichannel outreach with closed-loop updates back to the referring provider.', 'perform-practice' ); ?></p>
					</li>
					<li>
						<strong><?php esc_html_e( 'Website chatbot — Hyperleap AI, Conferbot', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'Multilingual intake, plus PT-specific engagement that continues past booking.', 'perform-practice' ); ?></p>
					</li>
					<li>
						<strong><?php esc_html_e( 'Front desk — Weave / TrueLark, Vascue', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'Weave leads on adoption; Vascue is allied-health-specific, but built on Cliniko / Nookal, not Tebra.', 'perform-practice' ); ?></p>
					</li>
					<li>
						<strong><?php esc_html_e( 'Text & phone — Weave / TrueLark, Virtual CA', 'perform-practice' ); ?></strong>
						<p><?php esc_html_e( 'After-hours voice coverage, and one continuous thread as a patient moves from chat to text.', 'perform-practice' ); ?></p>
					</li>
				</ol>
			</div>
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php esc_html_e( 'Market Signals', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php esc_html_e( 'What\'s working across the market', 'perform-practice' ); ?></h2>
				<ul class="ai-suite-signals">
					<li>
						<strong><?php esc_html_e( 'Multichannel outreach', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Voice + text + email cascade, not one channel.', 'perform-practice' ); ?></span>
					</li>
					<li>
						<strong><?php esc_html_e( 'Closed-loop updates', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'The referring provider is notified automatically as status changes.', 'perform-practice' ); ?></span>
					</li>
					<li>
						<strong><?php esc_html_e( 'Thread continuity', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Chat, text, and phone share one memory of the conversation.', 'perform-practice' ); ?></span>
					</li>
					<li>
						<strong><?php esc_html_e( 'Fast onboarding', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Reads existing scripts and documents instead of requiring a rebuild.', 'perform-practice' ); ?></span>
					</li>
					<li>
						<strong><?php esc_html_e( 'Full-context handoff', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Staff see the whole conversation the moment they\'re needed.', 'perform-practice' ); ?></span>
					</li>
					<li>
						<strong><?php esc_html_e( 'Post-booking engagement', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Care continues after the appointment is booked, not just up to it.', 'perform-practice' ); ?></span>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--roadmap">
	<div class="pps-container">
		<div class="ai-suite-roadmap__intro pps-reveal">
			<div>
				<p class="pps-eyebrow"><?php esc_html_e( 'The Whitespace', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php esc_html_e( 'No one owns the full lifecycle', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Every competitor found sells a single point solution — a scribe, or a chatbot, or a receptionist — or a faceless enterprise workflow platform with generic, unnamed modules. Nobody has packaged the referral-to-scheduled-to-communicated lifecycle as one coherent, memorable system the way this suite does.', 'perform-practice' ); ?></p>
			</div>
			<div>
				<h2 class="pps-section-title"><?php esc_html_e( 'Allied health on Tebra is underserved', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Vascue is the only AI front desk built specifically for allied health — but it runs on Cliniko and Nookal, not Tebra. The stronger, better-funded players build for general medical or enterprise health systems, not PT, OT, speech, or chiropractic. Tebra-based allied health practices currently have no dedicated, allied-health-fluent AI team built for them.', 'perform-practice' ); ?></p>
			</div>
		</div>

		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( 'Roadmap', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'Concrete improvements to build in', 'perform-practice' ); ?></h2>
		</div>

		<div class="ai-suite-roadmap__grid">
			<article class="ai-suite-roadmap-card pps-reveal">
				<div class="ai-suite-roadmap-card__head"><span>R</span> Rosa</div>
				<ul>
					<li><?php esc_html_e( 'Voice/text/email cascade, not one channel', 'perform-practice' ); ?></li>
					<li><?php esc_html_e( 'Closed-loop updates back to the referring provider', 'perform-practice' ); ?></li>
				</ul>
			</article>
			<article class="ai-suite-roadmap-card pps-reveal">
				<div class="ai-suite-roadmap-card__head"><span>V</span> Vera</div>
				<ul>
					<li><?php esc_html_e( 'Multilingual auto-detect', 'perform-practice' ); ?></li>
					<li><?php esc_html_e( 'Post-booking engagement — forms, home programs', 'perform-practice' ); ?></li>
				</ul>
			</article>
			<article class="ai-suite-roadmap-card pps-reveal">
				<div class="ai-suite-roadmap-card__head"><span>R</span> Rex</div>
				<ul>
					<li><?php esc_html_e( 'Ingests existing scripts/SOPs on setup', 'perform-practice' ); ?></li>
					<li><?php esc_html_e( 'Full-context handoff the moment staff step in', 'perform-practice' ); ?></li>
				</ul>
			</article>
			<article class="ai-suite-roadmap-card ai-suite-roadmap-card--featured pps-reveal">
				<div class="ai-suite-roadmap-card__head"><span>C</span> Cora</div>
				<ul>
					<li><?php esc_html_e( 'Shares Vera\'s thread — one conversation memory', 'perform-practice' ); ?></li>
					<li><?php esc_html_e( 'Texts back within seconds of a missed call', 'perform-practice' ); ?></li>
				</ul>
			</article>
		</div>

		<aside class="ai-suite-suite-edge pps-reveal">
			<p class="ai-suite-eyebrow"><?php esc_html_e( 'Suite-level edge', 'perform-practice' ); ?></p>
			<p><?php esc_html_e( 'One shared patient memory across all five agents — no competitor has stitched referral, chat, front desk, and comms into a single continuous thread.', 'perform-practice' ); ?></p>
		</aside>

		<div class="ai-suite-close pps-reveal">
			<h2><?php esc_html_e( 'Five agents. One framework. Zero confusion.', 'perform-practice' ); ?></h2>
			<p><?php esc_html_e( 'Next: lock voice guidelines for each agent and sequence the rollout.', 'perform-practice' ); ?></p>
		</div>
	</div>
</section>
