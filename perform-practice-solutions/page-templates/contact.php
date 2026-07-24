<?php
/**
 * Template Name: Contact Us
 * Description: Dedicated contact page with inquiry form. Content editable via Customizer → PPS — Service Pages → Contact Us Page.
 *
 * @package Perform_Practice
 */

get_header();

$service_tags = array(
	__( 'Medical billing', 'perform-practice' ),
	__( 'Credentialing', 'perform-practice' ),
	__( 'Digital marketing', 'perform-practice' ),
	__( 'Virtual staffing', 'perform-practice' ),
	__( 'Coaching', 'perform-practice' ),
	__( 'AI automation', 'perform-practice' ),
);
?>

<section class="contact-banner" id="top">
	<div class="pps-container contact-banner__grid">
		<div class="contact-banner__content">
			<p class="pps-eyebrow contact-banner__eyebrow"><?php echo esc_html( page_contact( 'hero_eyebrow' ) ); ?></p>
			<h1 class="contact-banner__title"><?php echo esc_html( page_contact( 'hero_title' ) ); ?></h1>
			<p class="contact-banner__lead"><?php echo esc_html( page_contact( 'hero_lead' ) ); ?></p>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_contact( 'hero_cta_url' ) ); ?>">
				<?php echo esc_html( page_contact( 'hero_cta' ) ); ?>
				<i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
			</a>
		</div>

		<aside class="contact-banner__visual pps-reveal" aria-hidden="true">
			<div class="contact-banner-card">
				<div class="contact-banner-card__head">
					<span class="contact-banner-card__icon"><i class="fa-solid fa-headset"></i></span>
					<div>
						<small><?php esc_html_e( 'Practice support', 'perform-practice' ); ?></small>
						<strong><?php esc_html_e( 'One conversation away', 'perform-practice' ); ?></strong>
					</div>
				</div>
				<ul class="contact-banner-card__tags">
					<?php foreach ( $service_tags as $tag ) : ?>
						<li><?php echo esc_html( $tag ); ?></li>
					<?php endforeach; ?>
				</ul>
				<div class="contact-banner-card__footer">
					<span class="contact-banner-card__pill">
						<i class="fa-solid fa-clock" aria-hidden="true"></i>
						<?php esc_html_e( 'Typical reply within 1 business day', 'perform-practice' ); ?>
					</span>
				</div>
			</div>
		</aside>
	</div>
</section>

<section class="pps-section home-contact" id="contact">
	<div class="pps-container">
		<div class="contact-grid">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php echo esc_html( page_contact( 'contact_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_contact( 'contact_title' ) ); ?></h2>
				<p><?php echo esc_html( page_contact( 'contact_lead' ) ); ?></p>
				<div class="contact-details">
					<div class="contact-detail">
						<i class="fa-solid fa-phone" aria-hidden="true"></i>
						<div>
							<strong><?php esc_html_e( 'Call us', 'perform-practice' ); ?></strong><br>
							<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', site_data( 'phone' ) ) ); ?>">
								<?php echo esc_html( site_data( 'phone' ) ); ?>
							</a>
						</div>
					</div>
					<div class="contact-detail">
						<i class="fa-solid fa-envelope" aria-hidden="true"></i>
						<div>
							<strong><?php esc_html_e( 'Email', 'perform-practice' ); ?></strong><br>
							<a href="<?php echo esc_url( 'mailto:' . site_data( 'email' ) ); ?>">
								<?php echo esc_html( site_data( 'email' ) ); ?>
							</a>
						</div>
					</div>
					<div class="contact-detail">
						<i class="fa-solid fa-location-dot" aria-hidden="true"></i>
						<div>
							<strong><?php esc_html_e( 'Office', 'perform-practice' ); ?></strong><br>
							<?php echo esc_html( site_data( 'address' ) ); ?>
						</div>
					</div>
				</div>
			</div>

			<div class="contact-form pps-reveal">
				<h3><?php echo esc_html( page_contact( 'contact_form_title' ) ); ?></h3>
				<p><?php echo esc_html( page_contact( 'contact_form_lead' ) ); ?></p>
				<form id="pps-contact-form" novalidate>
					<div class="form-row">
						<div class="form-field">
							<label for="pps-first-name"><?php esc_html_e( 'First Name *', 'perform-practice' ); ?></label>
							<input type="text" id="pps-first-name" name="first_name" required autocomplete="given-name">
						</div>
						<div class="form-field">
							<label for="pps-last-name"><?php esc_html_e( 'Last Name *', 'perform-practice' ); ?></label>
							<input type="text" id="pps-last-name" name="last_name" required autocomplete="family-name">
						</div>
					</div>
					<div class="form-row">
						<div class="form-field">
							<label for="pps-email"><?php esc_html_e( 'Email *', 'perform-practice' ); ?></label>
							<input type="email" id="pps-email" name="email" required autocomplete="email">
						</div>
						<div class="form-field">
							<label for="pps-phone"><?php esc_html_e( 'Phone *', 'perform-practice' ); ?></label>
							<input type="tel" id="pps-phone" name="phone" required autocomplete="tel">
						</div>
					</div>
					<div class="form-field">
						<label for="pps-service"><?php esc_html_e( 'How Can We Help You? *', 'perform-practice' ); ?></label>
						<select id="pps-service" name="service" required>
							<option value=""><?php esc_html_e( 'Select Option', 'perform-practice' ); ?></option>
							<option value="Billing"><?php esc_html_e( 'Billing', 'perform-practice' ); ?></option>
							<option value="Marketing"><?php esc_html_e( 'Marketing', 'perform-practice' ); ?></option>
							<option value="Credentialing/Contracting"><?php esc_html_e( 'Credentialing/Contracting', 'perform-practice' ); ?></option>
							<option value="Front-Desk 101"><?php esc_html_e( 'Front-Desk 101', 'perform-practice' ); ?></option>
							<option value="Eligibility Services"><?php esc_html_e( 'Eligibility Services', 'perform-practice' ); ?></option>
							<option value="AI Development"><?php esc_html_e( 'AI Development', 'perform-practice' ); ?></option>
						</select>
					</div>
					<div class="form-field">
						<label for="pps-message"><?php esc_html_e( 'Message', 'perform-practice' ); ?></label>
						<textarea id="pps-message" name="message" rows="4"></textarea>
					</div>
					<button class="pps-btn pps-btn--primary" type="submit">
						<?php esc_html_e( 'Send Message', 'perform-practice' ); ?>
						<i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
					</button>
					<div class="form-message" id="pps-form-message" role="status" aria-live="polite"></div>
				</form>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();
