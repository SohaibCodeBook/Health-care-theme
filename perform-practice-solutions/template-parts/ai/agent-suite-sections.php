<?php
/**
 * Agent suite — Meet the Team + agent deep-dive cards.
 * Inserted after hero on AI service pages.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$ai_suite_agents = array(
	array(
		'letter'   => 'A',
		'name'     => 'Ava',
		'title'    => 'Account and Voice Assistant',
		'audience' => 'Practice-wide',
	),
	array(
		'letter'   => 'R',
		'name'     => 'Rosa',
		'title'    => 'Referral Outreach & Scheduling Assistant',
		'audience' => 'Referral coordinators',
	),
	array(
		'letter'   => 'V',
		'name'     => 'Vera',
		'title'    => 'Visitor Engagement & Response Assistant',
		'audience' => 'Website patients',
	),
	array(
		'letter'   => 'R',
		'name'     => 'Rex',
		'title'    => 'Reception Efficiency eXpert',
		'audience' => 'Front desk staff',
	),
	array(
		'letter'   => 'C',
		'name'     => 'Cora',
		'title'    => 'Communication Outreach & Response Assistant',
		'audience' => 'Practice managers',
		'featured' => true,
	),
);

$ai_suite_deepdives = array(
	array(
		'letter'    => 'R',
		'name'      => 'Rosa',
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
		'letter'    => 'V',
		'name'      => 'Vera',
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
		'letter'    => 'R',
		'name'      => 'Rex',
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
		'letter'    => 'C',
		'name'      => 'Cora',
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

<section class="ai-suite ai-suite--team" id="agent-suite">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( 'Meet the Team', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'Five agents. Five distinct hires.', 'perform-practice' ); ?></h2>
		</div>
		<div class="ai-suite-team__grid">
			<?php foreach ( $ai_suite_agents as $agent ) : ?>
				<?php $avatar_url = pps_ai_agent_avatar_url( $agent['name'] ); ?>
				<article class="ai-suite-team-card pps-reveal<?php echo ! empty( $agent['featured'] ) ? ' ai-suite-team-card--featured' : ''; ?>">
					<?php if ( $avatar_url ) : ?>
						<div class="ai-suite-team-card__avatar">
							<img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( $agent['name'] ); ?>" width="88" height="88" loading="lazy" decoding="async">
						</div>
					<?php else : ?>
						<div class="ai-suite-team-card__mark" aria-hidden="true"><?php echo esc_html( $agent['letter'] ); ?></div>
					<?php endif; ?>
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
