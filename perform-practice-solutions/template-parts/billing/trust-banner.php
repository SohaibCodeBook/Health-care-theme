<?php
/**
 * Trust stats banner for billing service pages.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$trust_items = array(
	array(
		'icon' => 'fa-user-doctor',
		'text' => __( 'Trusted by 790+ Physicians', 'perform-practice' ),
	),
	array(
		'icon' => 'fa-award',
		'text' => __( 'Catering to 40+ Specialties', 'perform-practice' ),
	),
	array(
		'icon' => 'fa-certificate',
		'text' => __( '70+ Certified Medical Billers & Coders', 'perform-practice' ),
	),
	array(
		'icon' => 'fa-file-invoice-dollar',
		'text' => __( 'AI-in-One Automated Billing Solution', 'perform-practice' ),
	),
	array(
		'icon' => 'fa-star',
		'text' => __( 'Up to 90% First Pass Resolution Rate', 'perform-practice' ),
	),
);
?>

<section class="svc-trust-banner" aria-label="<?php esc_attr_e( 'Why practices trust Perform Practice Solutions', 'perform-practice' ); ?>">
	<div class="pps-container">
		<ul class="svc-trust-banner__grid">
			<?php foreach ( $trust_items as $item ) : ?>
				<li class="svc-trust-banner__item pps-reveal">
					<span class="svc-trust-banner__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $item['icon'] ); ?>"></i>
					</span>
					<p><?php echo esc_html( $item['text'] ); ?></p>
				</li>
			<?php endforeach; ?>
		</ul>
	</div>
</section>
