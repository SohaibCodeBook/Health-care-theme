<?php
/**
 * Template Name: Medical Billing Solutions
 * Description: Main medical billing solutions page with editorial layout, timeline process, and feature grid. Content editable via Customizer → PPS — Service Pages → Medical Billing Solutions.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="mbs-hero" id="top">
	<div class="pps-container mbs-hero__grid">
		<div class="mbs-hero__content">
			<p class="pps-eyebrow"><?php echo esc_html( page_mbs( 'hero_eyebrow' ) ); ?></p>
			<h1 class="mbs-hero__title"><?php echo esc_html( page_mbs( 'hero_title' ) ); ?></h1>
			<p class="mbs-hero__lead"><?php echo esc_html( page_mbs( 'hero_lead' ) ); ?></p>
			<p class="mbs-hero__note"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> <?php echo esc_html( page_mbs( 'hero_note' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_mbs( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_mbs( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( page_mbs( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_mbs( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="mbs-hero__chips">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<li><i class="fa-solid fa-check" aria-hidden="true"></i> <?php echo esc_html( page_mbs( "chip_{$i}" ) ); ?></li>
				<?php endfor; ?>
			</ul>
		</div>

		<div class="mbs-hero__visual" aria-hidden="true">
			<div class="mbs-ledger">
				<div class="mbs-ledger__head">
					<span class="mbs-ledger__title">Claims today</span>
					<span class="mbs-ledger__badge">Live</span>
				</div>
				<div class="mbs-ledger__row">
					<span class="mbs-ledger__dot is-paid"></span>
					<div>
						<strong>PT eval — 97161</strong>
						<small>Submitted 8:04 AM</small>
					</div>
					<span class="mbs-ledger__status is-paid">Paid</span>
				</div>
				<div class="mbs-ledger__row">
					<span class="mbs-ledger__dot is-paid"></span>
					<div>
						<strong>Therapeutic exercise — 97110</strong>
						<small>Submitted 8:04 AM</small>
					</div>
					<span class="mbs-ledger__status is-paid">Paid</span>
				</div>
				<div class="mbs-ledger__row">
					<span class="mbs-ledger__dot is-pending"></span>
					<div>
						<strong>Manual therapy — 97140</strong>
						<small>Payer review · day 2</small>
					</div>
					<span class="mbs-ledger__status is-pending">Tracking</span>
				</div>
				<div class="mbs-ledger__row">
					<span class="mbs-ledger__dot is-flag"></span>
					<div>
						<strong>OT session — 97530</strong>
						<small>Denial caught — appeal filed</small>
					</div>
					<span class="mbs-ledger__status is-flag">Appealed</span>
				</div>
				<div class="mbs-ledger__foot">
					<span><strong>98%</strong> clean claim rate</span>
					<span><strong>~3 wks</strong> bill to paid</span>
				</div>
			</div>
			<div class="mbs-float-card">
				<i class="fa-solid fa-bell" aria-hidden="true"></i>
				<div>
					<strong>Appeal window protected</strong>
					<small>0 claims expired this quarter</small>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="pps-section mbs-why" id="why">
	<div class="pps-container mbs-why__grid">
		<div class="mbs-why__body pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_mbs( 'why_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'why_title' ) ); ?></h2>
			<p><?php echo esc_html( page_mbs( 'why_text_1' ) ); ?></p>
			<p><?php echo esc_html( page_mbs( 'why_text_2' ) ); ?></p>
			<p><?php echo esc_html( page_mbs( 'why_text_3' ) ); ?></p>
		</div>
		<aside class="mbs-why__stat pps-reveal">
			<span class="mbs-why__stat-value"><?php echo esc_html( page_mbs( 'why_stat' ) ); ?></span>
			<p><?php echo esc_html( page_mbs( 'why_stat_label' ) ); ?></p>
		</aside>
	</div>
</section>

<section class="pps-section mbs-results" id="results">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="color:var(--pps-accent);justify-content:center;"><?php echo esc_html( page_mbs( 'results_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'results_title' ) ); ?></h2>
		</div>
		<div class="mbs-results-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="mbs-result-card pps-reveal">
					<span class="mbs-result-card__value"><?php echo esc_html( page_mbs( "result_{$i}_value" ) ); ?></span>
					<h3><?php echo esc_html( page_mbs( "result_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_mbs( "result_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section mbs-process" id="process">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_mbs( 'process_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'process_title' ) ); ?></h2>
		</div>
		<ol class="mbs-timeline">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<li class="mbs-timeline__item pps-reveal">
					<span class="mbs-timeline__marker"><?php echo esc_html( $i ); ?></span>
					<div class="mbs-timeline__card">
						<h3><?php echo esc_html( page_mbs( "step_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_mbs( "step_{$i}_text" ) ); ?></p>
					</div>
				</li>
			<?php endfor; ?>
		</ol>
	</div>
</section>

<section class="pps-section mbs-include" id="included">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_mbs( 'include_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'include_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_mbs( 'include_lead' ) ); ?></p>
		</div>
		<div class="mbs-include-grid">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<article class="mbs-include-card pps-reveal">
					<span class="mbs-include-card__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr( page_mbs( "include_{$i}_icon" ) ); ?>"></i></span>
					<h3><?php echo esc_html( page_mbs( "include_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_mbs( "include_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section mbs-testimonials" id="stories">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_mbs( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'test_title' ) ); ?></h2>
		</div>
		<div class="mbs-test-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<blockquote class="mbs-test-card pps-reveal">
					<i class="fa-solid fa-quote-left" aria-hidden="true"></i>
					<p><?php echo esc_html( page_mbs( "test_{$i}_quote" ) ); ?></p>
					<footer>
						<strong><?php echo esc_html( page_mbs( "test_{$i}_name" ) ); ?></strong>
						<span><?php echo esc_html( page_mbs( "test_{$i}_meta" ) ); ?></span>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section mbs-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_mbs( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 8; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_mbs( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_mbs( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section mbs-cta">
	<div class="pps-container">
		<div class="mbs-cta-panel pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_mbs( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_mbs( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_mbs( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_mbs( 'cta_button' ) ); ?>
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
