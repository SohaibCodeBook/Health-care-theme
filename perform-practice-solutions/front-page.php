<?php
/**
 * Front page template — redesigned Home.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="home-hero" id="top">
	<div class="pps-container home-hero__grid">
		<div class="home-hero__content">
			<p class="home-hero__brand"><?php echo esc_html( page_home( 'hero_brand' ) ); ?> <span><?php echo esc_html( site_data( 'brand_short' ) ); ?></span></p>
			<h1 class="home-hero__title"><?php echo esc_html( page_home( 'hero_title' ) ); ?></h1>
			<p class="home-hero__lead"><?php echo esc_html( page_home( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_home( 'hero_cta_primary_url' ) ); ?>">
					<?php echo esc_html( page_home( 'hero_cta_primary' ) ); ?>
					<i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--secondary" href="<?php echo esc_url( page_home( 'hero_cta_secondary_url' ) ); ?>">
					<?php echo esc_html( page_home( 'hero_cta_secondary' ) ); ?>
				</a>
			</div>
		</div>
		<div class="home-hero__visual">
			<?php get_template_part( 'template-parts/hero', 'dashboard' ); ?>
			<p class="home-hero__visual-caption"><?php echo esc_html( page_home( 'hero_visual_caption' ) ); ?></p>
		</div>
	</div>
</section>

<section class="pps-section home-services" id="services">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_home( 'services_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'services_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_home( 'services_lead' ) ); ?></p>
		</div>

		<div class="services-grid">
			<?php
			for ( $i = 1; $i <= 6; $i++ ) :
				$extra = ( 4 === $i ) ? ' service-card--ai' : '';
				?>
				<article class="service-card<?php echo esc_attr( $extra ); ?> pps-reveal">
					<div class="service-card__icon" aria-hidden="true">
						<i class="<?php echo esc_attr( page_home( "service_{$i}_icon" ) ); ?>"></i>
					</div>
					<h3 class="service-card__title"><?php echo esc_html( page_home( "service_{$i}_title" ) ); ?></h3>
					<p class="service-card__text"><?php echo esc_html( page_home( "service_{$i}_text" ) ); ?></p>
					<a class="service-card__link" href="<?php echo esc_url( home_url( page_home( "service_{$i}_url" ) ) ); ?>">
						<?php esc_html_e( 'Learn more', 'perform-practice' ); ?>
						<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
					</a>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section home-about" id="about">
	<div class="pps-container">
		<div class="about-split">
			<div class="about-split__media pps-reveal" role="img" aria-label="<?php esc_attr_e( 'Healthcare team collaborating', 'perform-practice' ); ?>">
				<img
					src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?auto=format&fit=crop&w=1000&q=80"
					alt=""
					width="640"
					height="520"
					loading="lazy"
				>
				<div class="about-float-card">
					<span><?php echo esc_html( page_home( 'about_float_label' ) ); ?></span>
					<strong><?php echo esc_html( page_home( 'about_float_value' ) ); ?></strong>
					<small><?php echo esc_html( page_home( 'about_float_note' ) ); ?></small>
				</div>
			</div>
			<div class="about-split__body pps-reveal">
				<p class="pps-eyebrow"><?php echo esc_html( page_home( 'about_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_home( 'about_title' ) ); ?></h2>
				<p><?php echo esc_html( page_home( 'about_text' ) ); ?></p>
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_home( 'about_cta_url' ) ); ?>">
					<?php echo esc_html( page_home( 'about_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="pps-section home-insights" id="insights">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_home( 'insights_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'insights_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_home( 'insights_lead' ) ); ?></p>
			<p class="insights-note"><?php echo esc_html( page_home( 'insights_note' ) ); ?></p>
		</div>
		<div class="pps-reveal">
			<?php get_template_part( 'template-parts/dashboard', 'collage' ); ?>
		</div>
	</div>
</section>

<section class="pps-section home-need-help" id="need-help">
	<div class="pps-container">
		<div class="need-help-shell pps-reveal">
			<div class="need-help-shell__media">
				<?php get_template_part( 'template-parts/help', 'visual' ); ?>
			</div>
			<div class="need-help-shell__body">
				<p class="pps-eyebrow"><?php echo esc_html( page_home( 'help_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_home( 'help_title' ) ); ?></h2>
				<p><?php echo esc_html( page_home( 'help_text' ) ); ?></p>
				<p class="need-help-note"><strong><?php echo esc_html( page_home( 'help_note' ) ); ?></strong></p>
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_home( 'help_cta_url' ) ); ?>">
					<?php echo esc_html( page_home( 'help_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="pps-section home-automation" id="automation">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_home( 'auto_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'auto_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_home( 'auto_lead' ) ); ?></p>
			<p style="margin-top:1rem;color:var(--pps-muted);max-width:48rem;"><?php echo esc_html( page_home( 'auto_text' ) ); ?></p>
		</div>

		<div class="automation-grid">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<div class="automation-feature pps-reveal">
					<div class="automation-feature__icon" aria-hidden="true">
						<?php
						$icons = array( 1 => 'fa-phone', 2 => 'fa-user-group', 3 => 'fa-comments', 4 => 'fa-desktop' );
						?>
						<i class="fa-solid <?php echo esc_attr( $icons[ $i ] ); ?>"></i>
					</div>
					<div>
						<h3><?php echo esc_html( page_home( "auto_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_home( "auto_{$i}_text" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>

		<div class="automation-cta pps-reveal">
			<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( home_url( page_home( 'auto_cta_url' ) ) ); ?>">
				<?php echo esc_html( page_home( 'auto_cta' ) ); ?>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>

<section class="pps-section home-founder" id="founder">
	<div class="pps-container">
		<div class="founder-card pps-reveal">
			<?php
			$founder_image = page_home( 'founder_image' );
			if ( empty( $founder_image ) ) {
				$founder_image = get_template_directory_uri() . '/assets/images/founder.jpeg';
			}
			?>
			<div class="founder-card__photo">
				<img
					src="<?php echo esc_url( $founder_image ); ?>"
					alt="<?php echo esc_attr( page_home( 'founder_name' ) ); ?>"
					width="480"
					height="600"
					loading="lazy"
				>
			</div>
			<div>
				<p class="pps-eyebrow"><?php echo esc_html( page_home( 'founder_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_home( 'founder_name' ) ); ?></h2>
				<div class="founder-card__roles">
					<span class="founder-chip"><?php echo esc_html( page_home( 'founder_role_1' ) ); ?></span>
					<span class="founder-chip"><?php echo esc_html( page_home( 'founder_role_2' ) ); ?></span>
					<span class="founder-chip"><?php echo esc_html( page_home( 'founder_role_3' ) ); ?></span>
				</div>
				<p><?php echo esc_html( page_home( 'founder_text' ) ); ?></p>
				<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( page_home( 'founder_cta_url' ) ); ?>">
					<?php echo esc_html( page_home( 'founder_cta' ) ); ?>
				</a>
			</div>
		</div>
	</div>
</section>

<section class="pps-section home-stats" id="stats">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="color:var(--pps-accent);"><?php echo esc_html( page_home( 'stats_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'stats_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_home( 'stats_lead' ) ); ?></p>
		</div>
		<div class="stats-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<div class="stat-card pps-reveal">
					<div class="stat-card__value"><?php echo esc_html( page_home( "stat_{$i}_value" ) ); ?></div>
					<p class="stat-card__label"><?php echo esc_html( page_home( "stat_{$i}_label" ) ); ?></p>
				</div>
			<?php endfor; ?>
		</div>
		<div class="pps-section-head pps-section-head--center" style="margin-top:2.25rem;margin-bottom:0;">
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_home( 'stats_cta_url' ) ); ?>">
				<?php echo esc_html( page_home( 'stats_cta' ) ); ?>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>

<section class="pps-section home-support" id="support">
	<div class="pps-container">
		<div class="support-panel pps-reveal">
			<div>
				<p class="pps-eyebrow"><?php echo esc_html( page_home( 'support_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_home( 'support_title' ) ); ?></h2>
				<p style="color:var(--pps-muted);margin-bottom:1.5rem;"><?php echo esc_html( page_home( 'support_text' ) ); ?></p>
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_home( 'support_cta_url' ) ); ?>">
					<?php echo esc_html( page_home( 'support_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
			<ul class="support-list">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
					<li>
						<i class="fa-solid fa-circle-check" aria-hidden="true"></i>
						<span><?php echo esc_html( page_home( "support_q{$i}" ) ); ?></span>
					</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>

<section class="pps-section home-specialties" id="specialties">
	<div class="pps-container pps-reveal">
		<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_home( 'spec_eyebrow' ) ); ?></p>
		<p class="pps-section-lead" style="margin-inline:auto;margin-bottom:1.5rem;"><?php echo esc_html( page_home( 'spec_emr_text' ) ); ?></p>
		<div class="specialty-pills">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<span class="specialty-pill"><?php echo esc_html( page_home( "spec_{$i}" ) ); ?></span>
			<?php endfor; ?>
		</div>
		<h2 class="pps-section-title" style="margin-inline:auto;margin-top:2rem;"><?php echo esc_html( page_home( 'spec_title' ) ); ?></h2>
		<p class="pps-section-lead" style="margin-inline:auto;"><?php echo esc_html( page_home( 'spec_lead' ) ); ?></p>
		<p class="pps-section-lead" style="margin-inline:auto;margin-top:1rem;"><?php echo esc_html( page_home( 'spec_text' ) ); ?></p>
		<a class="pps-btn pps-btn--primary" style="margin-top:1.75rem;" href="<?php echo esc_url( page_home( 'spec_cta_url' ) ); ?>">
			<?php echo esc_html( page_home( 'spec_cta' ) ); ?>
		</a>
	</div>
</section>

<section class="pps-section home-faq" id="faq">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_home( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_home( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_home( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section home-testimonials" id="testimonials">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_home( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_home( 'test_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_home( 'test_lead' ) ); ?></p>
		</div>
		<div class="testimonials-track">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<blockquote class="testimonial-card pps-reveal">
					<p class="testimonial-card__quote"><?php echo esc_html( page_home( "test_{$i}_quote" ) ); ?></p>
					<footer>
						<div class="testimonial-card__author"><?php echo esc_html( page_home( "test_{$i}_name" ) ); ?></div>
						<div class="testimonial-card__meta"><?php echo esc_html( page_home( "test_{$i}_meta" ) ); ?></div>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section home-contact" id="contact">
	<div class="pps-container">
		<div class="contact-grid">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php echo esc_html( page_home( 'contact_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_home( 'contact_title' ) ); ?></h2>
				<p><?php echo esc_html( page_home( 'contact_lead' ) ); ?></p>
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
				<h3><?php echo esc_html( page_home( 'contact_form_title' ) ); ?></h3>
				<p><?php echo esc_html( page_home( 'contact_form_lead' ) ); ?></p>
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
