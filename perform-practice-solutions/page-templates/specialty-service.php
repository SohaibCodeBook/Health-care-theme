<?php
/**
 * Template Name: Specialty Service Page
 * Description: Reusable specialty billing / service page layout. Content is editable via Customizer (PPS — Service Pages) when the page slug is registered, or uses smart defaults from the page title.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="svc-hero" id="top">
	<div class="pps-container svc-hero__grid">
		<div class="svc-hero__content">
			<p class="pps-eyebrow svc-hero__eyebrow"><?php echo esc_html( page_service( 'hero_eyebrow' ) ); ?></p>
			<h1 class="svc-hero__title"><?php echo esc_html( page_service( 'hero_title' ) ); ?></h1>
			<p class="svc-hero__lead"><?php echo esc_html( page_service( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_service( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_service( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
		<div class="svc-hero__panel pps-reveal" aria-hidden="true">
			<div class="svc-hero__panel-glow"></div>
			<div class="svc-hero__stat">
				<span class="svc-hero__stat-value"><?php echo esc_html( page_service( 'hero_stat' ) ); ?></span>
				<span class="svc-hero__stat-label"><?php echo esc_html( page_service( 'hero_stat_label' ) ); ?></span>
			</div>
			<ul class="svc-hero__signals">
				<li><i class="fa-solid fa-check"></i> Daily claim submission</li>
				<li><i class="fa-solid fa-check"></i> Denial prevention</li>
				<li><i class="fa-solid fa-check"></i> Transparent reporting</li>
			</ul>
		</div>
	</div>
</section>

<section class="pps-section svc-problem" id="overview">
	<div class="pps-container">
		<div class="svc-problem-shell pps-reveal">
			<div class="svc-problem-shell__body">
				<p class="pps-eyebrow"><?php echo esc_html( page_service( 'problem_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_service( 'problem_title' ) ); ?></h2>
				<p><?php echo esc_html( page_service( 'problem_text' ) ); ?></p>
				<div class="svc-problem-shell__note">
					<i class="fa-solid fa-handshake" aria-hidden="true"></i>
					<span><?php echo esc_html( page_service( 'problem_note' ) ); ?></span>
				</div>
			</div>
			<div class="svc-problem-shell__aside">
				<div class="svc-aside-card">
					<i class="fa-solid fa-file-invoice-dollar" aria-hidden="true"></i>
					<strong><?php esc_html_e( 'Transparent billing', 'perform-practice' ); ?></strong>
					<p><?php esc_html_e( 'See where every dollar stands — claims, A/R, and patient balances.', 'perform-practice' ); ?></p>
				</div>
				<div class="svc-aside-card">
					<i class="fa-solid fa-users" aria-hidden="true"></i>
					<strong><?php esc_html_e( 'Front-desk partnership', 'perform-practice' ); ?></strong>
					<p><?php esc_html_e( 'We coach your team so clean data goes out and clean payments come back.', 'perform-practice' ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pps-section svc-offer" id="services">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_service( 'offer_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_service( 'offer_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_service( 'offer_lead' ) ); ?></p>
		</div>
		<ul class="svc-offer-grid">
			<?php for ( $i = 1; $i <= 8; $i++ ) : ?>
				<li class="svc-offer-item pps-reveal">
					<span class="svc-offer-item__icon" aria-hidden="true"><i class="fa-solid fa-circle-check"></i></span>
					<span><?php echo esc_html( page_service( "offer_{$i}" ) ); ?></span>
				</li>
			<?php endfor; ?>
		</ul>
	</div>
</section>

<section class="pps-section svc-analysis" id="analysis">
	<div class="pps-container">
		<div class="svc-analysis-band pps-reveal">
			<div>
				<p class="pps-eyebrow" style="color:var(--pps-accent);"><?php echo esc_html( page_service( 'analysis_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_service( 'analysis_title' ) ); ?></h2>
				<p><?php echo esc_html( page_service( 'analysis_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_service( 'analysis_cta_url' ) ); ?>">
				<?php echo esc_html( page_service( 'analysis_cta' ) ); ?>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>

<section class="pps-section svc-process" id="process">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_service( 'process_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_service( 'process_title' ) ); ?></h2>
		</div>
		<div class="svc-process-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="svc-process-card pps-reveal">
					<span class="svc-process-card__step"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<h3><?php echo esc_html( page_service( "process_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_service( "process_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section svc-promo" id="offer">
	<div class="pps-container">
		<div class="svc-promo-shell pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_service( 'promo_title' ) ); ?></h2>
				<p><?php echo esc_html( page_service( 'promo_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_service( 'promo_cta_url' ) ); ?>">
				<?php echo esc_html( page_service( 'promo_cta' ) ); ?>
			</a>
		</div>
	</div>
</section>

<section class="pps-section svc-faq" id="faq">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_service( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_service( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_service( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_service( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section svc-cta-band">
	<div class="pps-container">
		<div class="svc-cta-panel pps-reveal">
			<h2 class="pps-section-title"><?php echo esc_html( page_service( 'cta_title' ) ); ?></h2>
			<p><?php echo esc_html( page_service( 'cta_text' ) ); ?></p>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_service( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_service( 'cta_button' ) ); ?>
				<i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>

<section class="pps-section home-contact" id="contact">
	<div class="pps-container">
		<div class="contact-grid">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php esc_html_e( 'Let’s Chat', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php esc_html_e( 'Take the first step', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Talk with us about billing, eligibility, credentialing, or how we can support your practice ownership goals.', 'perform-practice' ); ?></p>
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
				<h3><?php esc_html_e( 'Request a strategy session', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Tell us about your practice and we’ll follow up quickly.', 'perform-practice' ); ?></p>
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
							<option value="Billing" selected><?php esc_html_e( 'Billing', 'perform-practice' ); ?></option>
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
