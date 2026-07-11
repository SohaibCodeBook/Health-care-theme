<?php
/**
 * 404 template.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="page-shell">
	<div class="pps-container" style="text-align:center;">
		<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( '404', 'perform-practice' ); ?></p>
		<h1 class="page-shell__title"><?php esc_html_e( 'Page not found', 'perform-practice' ); ?></h1>
		<p style="color:var(--pps-muted);max-width:36rem;margin:0 auto 1.5rem;">
			<?php esc_html_e( 'The page you are looking for may have moved. Head back home to explore our services.', 'perform-practice' ); ?>
		</p>
		<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<?php esc_html_e( 'Back to Home', 'perform-practice' ); ?>
		</a>
	</div>
</section>

<?php
get_footer();
