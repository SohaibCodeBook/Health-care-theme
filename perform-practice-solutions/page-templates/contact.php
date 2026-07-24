<?php
/**
 * Template Name: Contact Us
 * Description: Dedicated contact page with inquiry form. Content editable via Customizer → PPS — Service Pages → Contact Us Page.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="contact-hero" id="top">
	<div class="pps-container contact-hero__inner">
		<p class="pps-eyebrow"><?php echo esc_html( page_contact( 'hero_eyebrow' ) ); ?></p>
		<h1 class="contact-hero__title"><?php echo esc_html( page_contact( 'hero_title' ) ); ?></h1>
		<p class="contact-hero__lead"><?php echo esc_html( page_contact( 'hero_lead' ) ); ?></p>
		<div class="pps-btn-group">
			<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_contact( 'hero_cta_url' ) ); ?>">
				<?php echo esc_html( page_contact( 'hero_cta' ) ); ?>
				<i class="fa-solid fa-arrow-down" aria-hidden="true"></i>
			</a>
			<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', site_data( 'phone' ) ) ); ?>">
				<?php echo esc_html( site_data( 'phone' ) ); ?>
			</a>
		</div>
		<ul class="contact-hero__chips" aria-label="<?php esc_attr_e( 'Contact options', 'perform-practice' ); ?>">
			<li>
				<i class="fa-solid fa-phone" aria-hidden="true"></i>
				<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', site_data( 'phone' ) ) ); ?>">
					<?php echo esc_html( site_data( 'phone' ) ); ?>
				</a>
			</li>
			<li>
				<i class="fa-solid fa-envelope" aria-hidden="true"></i>
				<a href="<?php echo esc_url( 'mailto:' . site_data( 'email' ) ); ?>">
					<?php echo esc_html( site_data( 'email' ) ); ?>
				</a>
			</li>
			<li>
				<i class="fa-solid fa-location-dot" aria-hidden="true"></i>
				<span><?php echo esc_html( site_data( 'address' ) ); ?></span>
			</li>
		</ul>
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
