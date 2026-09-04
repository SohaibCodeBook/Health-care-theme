<?php
/**
 * Three-column billing process cards for specialty billing pages.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$process_cards = array(
	array(
		'icon'  => 'fa-clipboard-check',
		'title' => __( 'Data Verification', 'perform-practice' ),
		'pills' => array(
			__( 'Patient Registration', 'perform-practice' ),
			__( 'Prior Eligibility & Benefits Check', 'perform-practice' ),
			__( 'HIPAA compliance', 'perform-practice' ),
		),
		'items' => array(
			__( 'Daily schedule analysis', 'perform-practice' ),
			__( 'Eligibility & insurance checking', 'perform-practice' ),
			__( 'HIPAA compatibility analysis', 'perform-practice' ),
			__( 'Outstanding balance collection', 'perform-practice' ),
			__( 'Prior authorization', 'perform-practice' ),
		),
	),
	array(
		'icon'  => 'fa-file-invoice-dollar',
		'title' => __( 'Billing Process', 'perform-practice' ),
		'pills' => array(
			__( 'Healthcare provider enrollment', 'perform-practice' ),
			__( 'Medical coding', 'perform-practice' ),
			__( 'Claim submission & tracking', 'perform-practice' ),
		),
		'items' => array(
			__( 'Medical coding', 'perform-practice' ),
			__( 'Claim compilation', 'perform-practice' ),
			__( 'Claim attachments', 'perform-practice' ),
			__( 'Claim submission & clearinghouse tracking', 'perform-practice' ),
		),
	),
	array(
		'icon'  => 'fa-money-check-dollar',
		'title' => __( 'Accounts Receivable Management', 'perform-practice' ),
		'pills' => array(
			__( 'Rejection & Denial management', 'perform-practice' ),
			__( 'Payment posting', 'perform-practice' ),
			__( 'Appeal processing', 'perform-practice' ),
		),
		'items' => array(
			__( 'AR management', 'perform-practice' ),
			__( 'Payment posting', 'perform-practice' ),
			__( 'Appeal processing', 'perform-practice' ),
			__( 'Secondary billing', 'perform-practice' ),
		),
	),
);
?>

<section class="pps-section svc-process-cards" id="billing-process">
	<div class="pps-container">
		<div class="svc-process-cards__head pps-reveal">
			<p class="pps-eyebrow"><?php esc_html_e( 'Our Process', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'We Take Care of Your Medical Billing Process Until Your Claims Gets Paid!', 'perform-practice' ); ?></h2>
			<p class="svc-process-cards__lead"><?php esc_html_e( 'We know that it is not just about compiling claims and sending them over to insurance companies. It\'s more than that! Your claim can fall under the accounts receivable category and it is a crucial part of it. And, finding the root cause of denials and rectifying issues is what our team of experts does.', 'perform-practice' ); ?></p>
		</div>

		<div class="svc-process-cards__grid">
			<?php foreach ( $process_cards as $card ) : ?>
				<article class="svc-billing-card pps-reveal">
					<div class="svc-billing-card__head">
						<span class="svc-billing-card__head-icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $card['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
					</div>
					<div class="svc-billing-card__body">
						<ul class="svc-billing-card__pills">
							<?php foreach ( $card['pills'] as $pill ) : ?>
								<li><?php echo esc_html( $pill ); ?></li>
							<?php endforeach; ?>
						</ul>
						<ul class="svc-billing-card__list">
							<?php foreach ( $card['items'] as $item ) : ?>
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
	</div>
</section>
