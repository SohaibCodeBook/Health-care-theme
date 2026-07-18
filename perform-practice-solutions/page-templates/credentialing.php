<?php
/**
 * Template Name: Medical Credentialing Services
 * Description: Credentialing hub page with enrollment pathway layout. Content editable via Customizer → PPS — Service Pages → Medical Credentialing.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="cred-hero" id="top">
	<div class="pps-container cred-hero__grid">
		<div class="cred-hero__content">
			<p class="pps-eyebrow cred-hero__eyebrow"><?php echo esc_html( page_cred( 'hero_eyebrow' ) ); ?></p>
			<h1 class="cred-hero__title"><?php echo esc_html( page_cred( 'hero_title' ) ); ?></h1>
			<p class="cred-hero__lead"><?php echo esc_html( page_cred( 'hero_lead' ) ); ?></p>
			<p class="cred-hero__note"><?php echo esc_html( page_cred( 'hero_note' ) ); ?></p>
			<p class="cred-hero__text"><?php echo esc_html( page_cred( 'hero_text' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_cred( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_cred( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--secondary" href="<?php echo esc_url( page_cred( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_cred( 'hero_cta_2' ) ); ?>
				</a>
			</div>
		</div>

		<div class="cred-hero__visual" aria-hidden="true">
			<div class="cred-pathway">
				<div class="cred-pathway__head">
					<span>Enrollment pathway</span>
					<strong>6–8 weeks typical</strong>
				</div>
				<ol class="cred-pathway__steps">
					<li class="is-done"><span>01</span><em>Gather docs</em></li>
					<li class="is-done"><span>02</span><em>Verify sources</em></li>
					<li class="is-active"><span>03</span><em>Payer apps</em></li>
					<li><span>04</span><em>Committee</em></li>
					<li><span>05</span><em>Monitor</em></li>
				</ol>
				<div class="cred-pathway__status">
					<div>
						<small>Primary source verification</small>
						<strong>NPDB · DEA · State boards</strong>
					</div>
					<span class="cred-pathway__pill">In progress</span>
				</div>
			</div>
			<div class="cred-speed-card">
				<span class="cred-speed-card__value">6–8</span>
				<span class="cred-speed-card__label">weeks average enrollment vs 12+ weeks in-house</span>
			</div>
		</div>
	</div>
</section>

<section class="pps-section cred-why" id="why">
	<div class="pps-container">
		<div class="cred-why__intro pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_cred( 'why_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'why_title' ) ); ?></h2>
			<p><?php echo esc_html( page_cred( 'why_text' ) ); ?></p>
			<p class="cred-why__lead"><?php echo esc_html( page_cred( 'why_lead' ) ); ?></p>
		</div>
		<div class="cred-benefit-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="cred-benefit-card pps-reveal">
					<span class="cred-benefit-card__num"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<h3><?php echo esc_html( page_cred( "benefit_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_cred( "benefit_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
		<p class="cred-why__closing pps-reveal"><?php echo esc_html( page_cred( 'why_closing' ) ); ?></p>
	</div>
</section>

<section class="pps-section cred-process" id="process">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_cred( 'process_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'process_title' ) ); ?></h2>
		</div>
		<div class="cred-process-stack">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<article class="cred-process-card pps-reveal">
					<div class="cred-process-card__rail">
						<span><?php echo esc_html( sprintf( 'Step %d', $i ) ); ?></span>
					</div>
					<div class="cred-process-card__body">
						<h3><?php echo esc_html( page_cred( "step_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_cred( "step_{$i}_text" ) ); ?></p>
					</div>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section cred-apart" id="difference">
	<div class="pps-container">
		<div class="cred-apart-shell pps-reveal">
			<div class="cred-apart-shell__intro">
				<p class="pps-eyebrow" style="color:var(--pps-accent);"><?php echo esc_html( page_cred( 'apart_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'apart_title' ) ); ?></h2>
			</div>
			<ul class="cred-apart-list">
				<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
					<li class="pps-reveal">
						<span class="cred-apart-list__icon" aria-hidden="true"><i class="fa-solid fa-shield-halved"></i></span>
						<div>
							<strong><?php echo esc_html( page_cred( "apart_{$i}_title" ) ); ?></strong>
							<p><?php echo esc_html( page_cred( "apart_{$i}_text" ) ); ?></p>
						</div>
					</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>

<section class="pps-section cred-focus" id="focus">
	<div class="pps-container">
		<div class="cred-focus-panel pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_cred( 'focus_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'focus_title' ) ); ?></h2>
			<p class="cred-focus-panel__lead"><?php echo esc_html( page_cred( 'focus_lead' ) ); ?></p>
			<p><?php echo esc_html( page_cred( 'focus_text_1' ) ); ?></p>
			<p><?php echo esc_html( page_cred( 'focus_text_2' ) ); ?></p>
			<p class="cred-focus-panel__close"><?php echo esc_html( page_cred( 'focus_text_3' ) ); ?></p>
		</div>
	</div>
</section>

<section class="pps-section cred-testimonials" id="stories">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_cred( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'test_title' ) ); ?></h2>
		</div>
		<div class="cred-test-strip">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<blockquote class="cred-test-item pps-reveal">
					<p>“<?php echo esc_html( page_cred( "test_{$i}_quote" ) ); ?>”</p>
					<footer>
						<strong><?php echo esc_html( page_cred( "test_{$i}_name" ) ); ?></strong>
						<span><?php echo esc_html( page_cred( "test_{$i}_meta" ) ); ?></span>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section cred-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_cred( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_cred( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_cred( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section cred-cta">
	<div class="pps-container">
		<div class="cred-cta-panel pps-reveal">
			<h2 class="pps-section-title"><?php echo esc_html( page_cred( 'cta_title' ) ); ?></h2>
			<p><?php echo esc_html( page_cred( 'cta_text' ) ); ?></p>
			<p><?php echo esc_html( page_cred( 'cta_text_2' ) ); ?></p>
			<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_cred( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_cred( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Discuss your credentialing timeline', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about the providers you need enrolled and we’ll map a realistic path to network participation.', 'perform-practice' ); ?></p>
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
				<h3><?php esc_html_e( 'Request a consultation', 'perform-practice' ); ?></h3>
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
							<option value="Billing"><?php esc_html_e( 'Billing', 'perform-practice' ); ?></option>
							<option value="Marketing"><?php esc_html_e( 'Marketing', 'perform-practice' ); ?></option>
							<option value="Credentialing/Contracting" selected><?php esc_html_e( 'Credentialing/Contracting', 'perform-practice' ); ?></option>
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
