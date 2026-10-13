<?php
/**
 * Preferred EMR systems logo marquee.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$title = function_exists( 'page_home' ) ? page_home( 'spec_eyebrow' ) : '';
if ( '' === $title ) {
	$title = __( 'Preferred by Leading EMR Systems', 'perform-practice' );
}

$emr_logos = array(
	array( 'file' => 'stride.png', 'alt' => 'Stride' ),
	array( 'file' => 'tebra.png', 'alt' => 'Tebra' ),
	array( 'file' => 'athena.png', 'alt' => 'athenahealth' ),
	array( 'file' => 'raintree.png', 'alt' => 'Raintree' ),
	array( 'file' => 'curemd.png', 'alt' => 'CureMD' ),
);
?>
<section class="pps-section home-emr" id="emr">
	<div class="pps-container pps-reveal">
		<h2 class="pps-section-title home-emr__title"><?php echo esc_html( $title ); ?></h2>
	</div>
	<div class="emr-marquee" aria-label="<?php esc_attr_e( 'Preferred EMR systems', 'perform-practice' ); ?>">
		<div class="emr-marquee__track">
			<?php
			// Duplicate the set so the marquee loops seamlessly.
			for ( $loop = 0; $loop < 2; $loop++ ) :
				?>
				<div class="emr-marquee__group" <?php echo 1 === $loop ? 'aria-hidden="true"' : 'role="list"'; ?>>
					<?php foreach ( $emr_logos as $logo ) : ?>
						<div class="emr-logos__item" <?php echo 0 === $loop ? 'role="listitem"' : ''; ?>>
							<img
								class="emr-logos__img"
								src="<?php echo esc_url( PPS_THEME_URI . '/assets/images/emr-systems/' . $logo['file'] ); ?>"
								alt="<?php echo 0 === $loop ? esc_attr( $logo['alt'] ) : ''; ?>"
								width="168"
								height="70"
								loading="lazy"
								decoding="async"
							>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>
