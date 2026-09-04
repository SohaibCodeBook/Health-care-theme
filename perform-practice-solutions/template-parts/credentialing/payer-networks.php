<?php
/**
 * Payer networks & credentialing platforms — credentialing page only.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

if ( ! isset( $payer_groups ) || ! is_array( $payer_groups ) ) {
	$payer_groups = pps_cred_payer_network_groups();
}
?>

<section class="pps-section cred-payer-networks" id="payer-networks">
	<div class="pps-container">
		<div class="cred-payer-networks__head pps-reveal">
			<p class="pps-eyebrow"><?php esc_html_e( 'Payer Networks', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'Plans and platforms we credential with', 'perform-practice' ); ?></h2>
			<p class="cred-payer-networks__lead"><?php esc_html_e( 'From government programs to commercial carriers, BCBS plans, workers\' comp, and core credentialing databases — we manage enrollment across the payers and platforms your practice needs.', 'perform-practice' ); ?></p>
		</div>

		<div class="cred-payer-networks__grid">
			<?php foreach ( $payer_groups as $group ) : ?>
				<article class="cred-payer-card pps-reveal">
					<div class="cred-payer-card__head">
						<span class="cred-payer-card__head-icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $group['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $group['title'] ); ?></h3>
					</div>
					<div class="cred-payer-card__body">
						<ul class="cred-payer-card__list">
							<?php foreach ( $group['items'] as $item ) : ?>
								<li>
									<i class="fa-solid fa-check" aria-hidden="true"></i>
									<span><?php echo esc_html( $item ); ?></span>
								</li>
							<?php endforeach; ?>
						</ul>
					</div>
				</article>
			<?php endforeach; ?>
		</div>

		<div class="cred-payer-networks__timeline pps-reveal">
			<div class="cred-payer-networks__timeline-stat">
				<span><?php esc_html_e( 'Credentialing timeline', 'perform-practice' ); ?></span>
				<strong><?php esc_html_e( 'As fast as 30 days', 'perform-practice' ); ?>*</strong>
			</div>
			<p class="cred-payer-networks__disclaimer"><?php esc_html_e( '*Subject to accuracy of information received by client.', 'perform-practice' ); ?></p>
		</div>
	</div>
</section>
