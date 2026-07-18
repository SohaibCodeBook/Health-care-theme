<?php
/**
 * Theme footer.
 *
 * @package Perform_Practice
 */
?>
</main>

<footer class="site-footer">
	<div class="pps-container">
		<div class="footer-grid">
			<div class="footer-brand">
				<?php pps_the_logo( 'footer' ); ?>
				<p><?php esc_html_e( 'Medical billing, credentialing, marketing, virtual staffing, and AI automation for healthcare practices nationwide.', 'perform-practice' ); ?></p>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'How We Can Help', 'perform-practice' ); ?></h4>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( pps_billing_hub_url() ); ?>"><?php esc_html_e( 'Billing Solutions', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/digital-marketing/' ) ); ?>"><?php esc_html_e( 'Marketing Solutions', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/medical-credentialing-services/' ) ); ?>"><?php esc_html_e( 'Credentialing', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/virtual-medical-assistant/' ) ); ?>"><?php esc_html_e( 'Med VA', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/coaching-for-healthcare-professionals/' ) ); ?>"><?php esc_html_e( 'Coaching', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/ai-development/' ) ); ?>"><?php esc_html_e( 'AI Development', 'perform-practice' ); ?></a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'Useful Links', 'perform-practice' ); ?></h4>
				<ul class="footer-links">
					<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>"><?php esc_html_e( 'About Us', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>"><?php esc_html_e( 'Blog', 'perform-practice' ); ?></a></li>
					<li><a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>"><?php esc_html_e( 'Contact Us', 'perform-practice' ); ?></a></li>
				</ul>
			</div>

			<div class="footer-col">
				<h4><?php esc_html_e( 'Let’s Stay In Touch', 'perform-practice' ); ?></h4>
				<ul class="footer-links">
					<li>
						<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', site_data( 'phone' ) ) ); ?>">
							<?php echo esc_html( site_data( 'phone' ) ); ?>
						</a>
					</li>
					<li>
						<a href="<?php echo esc_url( 'mailto:' . site_data( 'email' ) ); ?>">
							<?php echo esc_html( site_data( 'email' ) ); ?>
						</a>
					</li>
					<li><?php echo esc_html( site_data( 'address' ) ); ?></li>
				</ul>
			</div>
		</div>

		<div class="footer-bottom">
			<p>&copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php echo esc_html( site_data( 'brand_name' ) ); ?>. <?php esc_html_e( 'All rights reserved.', 'perform-practice' ); ?></p>
			<p><?php esc_html_e( 'We make your patient confidentiality our priority.', 'perform-practice' ); ?></p>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

<a class="pps-connect-tab" href="#contact">
	<?php esc_html_e( "Let's Connect", 'perform-practice' ); ?>
	<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
</a>

<button class="pps-back-top" id="pps-back-top" type="button" aria-label="<?php esc_attr_e( 'Back to top', 'perform-practice' ); ?>">
	<i class="fa-solid fa-arrow-up" aria-hidden="true"></i>
</button>

</body>
</html>
