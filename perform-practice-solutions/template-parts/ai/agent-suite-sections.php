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
		'slug'     => 'ava',
		'title'    => 'Account and Voice Assistant',
		'audience' => 'Practice-wide',
	),
	array(
		'letter'   => 'R',
		'name'     => 'Rosa',
		'slug'     => 'rosa',
		'title'    => 'Referral Outreach & Scheduling Assistant',
		'audience' => 'Referral coordinators',
	),
	array(
		'letter'   => 'V',
		'name'     => 'Vera',
		'slug'     => 'vera',
		'title'    => 'Visitor Engagement & Response Assistant',
		'audience' => 'Website patients',
	),
	array(
		'letter'   => 'R',
		'name'     => 'Rex',
		'slug'     => 'rex',
		'title'    => 'Reception Efficiency eXpert',
		'audience' => 'Front desk staff',
	),
	array(
		'letter'   => 'C',
		'name'     => 'Cora',
		'slug'     => 'cora',
		'title'    => 'Communication Outreach & Response Assistant',
		'audience' => 'Practice managers',
		'featured' => true,
	),
);

$ai_suite_deepdives = array(
	array(
		'letter'    => 'A',
		'name'      => 'Ava',
		'slug'      => 'ava',
		'title'     => 'Account and voice assistant',
		'audience'  => 'Practice-wide billing callers',
		'placement' => 'AVA — handles billing & account calls',
		'letters'   => array(
			array( 'l' => 'A', 'w' => 'Account' ),
			array( 'l' => 'V', 'w' => 'Voice' ),
			array( 'l' => 'A', 'w' => 'Assistant' ),
		),
		'bio'       => 'Answers inbound billing calls, verifies identity, explains balances, and warm-transfers the right biller — so account questions never sit on hold.',
		'voice'     => 'I verified the caller, explained the balance, and sent a secure payment link.',
	),
	array(
		'letter'    => 'R',
		'name'      => 'Rosa',
		'slug'      => 'rosa',
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
		'slug'      => 'vera',
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
		'slug'      => 'rex',
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
		'slug'      => 'cora',
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
				<?php
				$avatar_url = pps_ai_agent_avatar_url( $agent['name'] );
				$agent_url  = ! empty( $agent['slug'] ) ? pps_ai_agent_page_url( $agent['slug'] ) : '';
				$card_class = 'ai-suite-team-card pps-reveal';
				if ( ! empty( $agent['featured'] ) ) {
					$card_class .= ' ai-suite-team-card--featured';
				}
				if ( $agent_url ) {
					$card_class .= ' ai-suite-team-card--link';
				}
				?>
				<?php if ( $agent_url ) : ?>
					<a class="<?php echo esc_attr( $card_class ); ?>" href="<?php echo esc_url( $agent_url ); ?>">
				<?php else : ?>
					<article class="<?php echo esc_attr( $card_class ); ?>">
				<?php endif; ?>
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
					<?php if ( $agent_url ) : ?>
						<span class="ai-suite-team-card__cta">
							<?php esc_html_e( 'Meet', 'perform-practice' ); ?> <?php echo esc_html( $agent['name'] ); ?>
							<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
						</span>
					<?php endif; ?>
				<?php if ( $agent_url ) : ?>
					</a>
				<?php else : ?>
					</article>
				<?php endif; ?>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="ai-suite ai-suite--deepdives">
	<div class="pps-container">
		<?php
		$deepdive_chunks = array_chunk( $ai_suite_deepdives, 2 );
		foreach ( $deepdive_chunks as $chunk ) :
			?>
			<div class="ai-suite-deepdives__grid">
				<?php foreach ( $chunk as $agent ) : ?>
					<?php include locate_template( 'template-parts/ai/agent-suite-deepdive-card.php' ); ?>
				<?php endforeach; ?>
			</div>
		<?php endforeach; ?>
	</div>
</section>
