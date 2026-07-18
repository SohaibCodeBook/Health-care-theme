<?php
/**
 * Template Name: Virtual Medical Assistant
 * Description: Med VA hub page with image-led layout. Content editable via Customizer → PPS — Service Pages → Virtual Medical Assistant.
 *
 * @package Perform_Practice
 */

get_header();

$hero_image = page_va( 'hero_image' );
$why_image  = page_va( 'why_image' );
?>

<section class="va-hero" id="top">
	<div class="pps-container va-hero__grid">
		<div class="va-hero__content">
			<p class="pps-eyebrow"><?php echo esc_html( page_va( 'hero_eyebrow' ) ); ?></p>
			<h1 class="va-hero__title"><?php echo esc_html( page_va( 'hero_title' ) ); ?></h1>
			<p class="va-hero__lead"><?php echo esc_html( page_va( 'hero_lead' ) ); ?></p>
			<p class="va-hero__text"><?php echo esc_html( page_va( 'hero_text' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_va( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_va( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( page_va( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_va( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="va-hero__trust">
				<li><i class="fa-solid fa-lock" aria-hidden="true"></i> HIPAA compliant</li>
				<li><i class="fa-solid fa-laptop-medical" aria-hidden="true"></i> EMR integrated</li>
				<li><i class="fa-solid fa-clock" aria-hidden="true"></i> 5–10 hrs/week back</li>
			</ul>
		</div>

		<div class="va-hero__media pps-reveal">
			<figure class="va-hero__figure">
				<img
					src="<?php echo esc_url( $hero_image ); ?>"
					alt="<?php esc_attr_e( 'Virtual medical assistant supporting a healthcare practice', 'perform-practice' ); ?>"
					width="800"
					height="450"
					loading="eager"
					decoding="async"
				>
			</figure>
			<div class="va-hero__badge">
				<strong>30–40%</strong>
				<span>faster admin task completion</span>
			</div>
		</div>
	</div>
</section>

<section class="pps-section va-why" id="why">
	<div class="pps-container va-why__grid">
		<div class="va-why__media pps-reveal">
			<figure>
				<img
					src="<?php echo esc_url( $why_image ); ?>"
					alt="<?php esc_attr_e( 'Organized medical front desk and scheduling support', 'perform-practice' ); ?>"
					width="600"
					height="450"
					loading="lazy"
					decoding="async"
				>
			</figure>
		</div>
		<div class="va-why__body pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_va( 'why_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_va( 'why_title' ) ); ?></h2>
			<p><?php echo esc_html( page_va( 'why_text' ) ); ?></p>
			<p class="va-why__lead"><?php echo esc_html( page_va( 'why_lead' ) ); ?></p>
			<ul class="va-why-list">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<li>
						<strong><?php echo esc_html( page_va( "why_{$i}_title" ) ); ?></strong>
						<span><?php echo esc_html( page_va( "why_{$i}_text" ) ); ?></span>
					</li>
				<?php endfor; ?>
			</ul>
			<p class="va-why__closing"><?php echo esc_html( page_va( 'why_closing' ) ); ?></p>
		</div>
	</div>
</section>

<section class="pps-section va-process" id="process">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_va( 'process_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_va( 'process_title' ) ); ?></h2>
		</div>
		<div class="va-process-rail">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<article class="va-process-step pps-reveal">
					<span class="va-process-step__num"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<h3><?php echo esc_html( page_va( "step_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_va( "step_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section va-tasks" id="tasks">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_va( 'tasks_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_va( 'tasks_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_va( 'tasks_lead' ) ); ?></p>
		</div>
		<div class="va-task-mosaic">
			<?php for ( $i = 1; $i <= 7; $i++ ) : ?>
				<article class="va-task-card pps-reveal<?php echo 1 === $i ? ' va-task-card--wide' : ''; ?>">
					<span class="va-task-card__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr( page_va( "task_{$i}_icon" ) ); ?>"></i></span>
					<h3><?php echo esc_html( page_va( "task_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_va( "task_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section va-cost" id="cost">
	<div class="pps-container">
		<div class="va-cost-shell pps-reveal">
			<div class="va-cost-shell__copy">
				<p class="pps-eyebrow" style="color:var(--pps-accent);"><?php echo esc_html( page_va( 'cost_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_va( 'cost_title' ) ); ?></h2>
				<p><?php echo esc_html( page_va( 'cost_text_1' ) ); ?></p>
				<p><?php echo esc_html( page_va( 'cost_text_2' ) ); ?></p>
				<p><?php echo esc_html( page_va( 'cost_text_3' ) ); ?></p>
				<p class="va-cost-shell__close"><?php echo esc_html( page_va( 'cost_text_4' ) ); ?></p>
			</div>
			<div class="va-cost-stats">
				<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
					<div class="va-cost-stat">
						<strong><?php echo esc_html( page_va( "cost_{$i}_value" ) ); ?></strong>
						<span><?php echo esc_html( page_va( "cost_{$i}_label" ) ); ?></span>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</section>

<section class="pps-section va-testimonials" id="stories">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_va( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_va( 'test_title' ) ); ?></h2>
		</div>
		<div class="va-test-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<blockquote class="va-test-card pps-reveal">
					<p><?php echo esc_html( page_va( "test_{$i}_quote" ) ); ?></p>
					<footer>
						<strong><?php echo esc_html( page_va( "test_{$i}_name" ) ); ?></strong>
						<span><?php echo esc_html( page_va( "test_{$i}_meta" ) ); ?></span>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section va-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_va( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_va( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_va( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_va( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section va-cta">
	<div class="pps-container">
		<div class="va-cta-panel pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_va( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_va( 'cta_text' ) ); ?></p>
				<p><?php echo esc_html( page_va( 'cta_text_2' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_va( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_va( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Find the right virtual medical assistant', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about your practice workload and we’ll map how a Med VA can support scheduling, authorizations, and patient communication.', 'perform-practice' ); ?></p>
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
							<option value="Credentialing/Contracting"><?php esc_html_e( 'Credentialing/Contracting', 'perform-practice' ); ?></option>
							<option value="Front-Desk 101"><?php esc_html_e( 'Front-Desk 101', 'perform-practice' ); ?></option>
							<option value="Eligibility Services"><?php esc_html_e( 'Eligibility Services', 'perform-practice' ); ?></option>
							<option value="Med VA" selected><?php esc_html_e( 'Med VA / Virtual Assistant', 'perform-practice' ); ?></option>
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
