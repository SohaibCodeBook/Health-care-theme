<?php
/**
 * Template Name: Coaching for Healthcare Professionals
 * Description: Leadership coaching page. Content editable via Customizer → PPS — Service Pages → Healthcare Coaching.
 *
 * @package Perform_Practice
 */

get_header();

$founder_image = PPS_THEME_URI . '/assets/images/founder.jpeg';
?>

<section class="coach-hero" id="top">
	<div class="pps-container coach-hero__grid">
		<div class="coach-hero__content">
			<p class="pps-eyebrow"><?php echo esc_html( page_coach( 'hero_eyebrow' ) ); ?></p>
			<h1 class="coach-hero__title"><?php echo esc_html( page_coach( 'hero_title' ) ); ?></h1>
			<p class="coach-hero__lead"><?php echo esc_html( page_coach( 'hero_lead' ) ); ?></p>
			<p class="coach-hero__text"><?php echo esc_html( page_coach( 'hero_text' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_coach( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_coach( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( page_coach( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_coach( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="coach-hero__chips" aria-label="<?php esc_attr_e( 'Built for', 'perform-practice' ); ?>">
				<li><i class="fa-solid fa-person-walking" aria-hidden="true"></i> <?php esc_html_e( 'Physical Therapy', 'perform-practice' ); ?></li>
				<li><i class="fa-solid fa-hand-holding-medical" aria-hidden="true"></i> <?php esc_html_e( 'Occupational Therapy', 'perform-practice' ); ?></li>
				<li><i class="fa-solid fa-bone" aria-hidden="true"></i> <?php esc_html_e( 'Chiropractic', 'perform-practice' ); ?></li>
				<li><i class="fa-solid fa-comment-medical" aria-hidden="true"></i> <?php esc_html_e( 'Speech Pathology', 'perform-practice' ); ?></li>
			</ul>
		</div>

		<aside class="coach-hero__aside pps-reveal" aria-label="<?php esc_attr_e( 'Coach profile', 'perform-practice' ); ?>">
			<figure class="coach-hero__portrait">
				<img
					src="<?php echo esc_url( $founder_image ); ?>"
					alt="<?php esc_attr_e( 'Kevin Rausch, CEO and healthcare coach', 'perform-practice' ); ?>"
					width="420"
					height="520"
					loading="eager"
					decoding="async"
				>
			</figure>
			<div class="coach-hero__aside-card">
				<span class="coach-hero__aside-label"><?php esc_html_e( 'Led by', 'perform-practice' ); ?></span>
				<strong>Kevin Rausch</strong>
				<small><?php esc_html_e( 'CEO · Healthcare Professional Coach', 'perform-practice' ); ?></small>
			</div>
		</aside>
	</div>
</section>

<section class="coach-note-band">
	<div class="pps-container">
		<div class="coach-note-band__inner pps-reveal">
			<span class="coach-note-band__icon" aria-hidden="true"><i class="fa-solid fa-user-doctor"></i></span>
			<p><?php echo esc_html( page_coach( 'hero_note' ) ); ?></p>
		</div>
	</div>
</section>

<section class="pps-section coach-audience" id="audience">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_coach( 'audience_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_coach( 'audience_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_coach( 'audience_lead' ) ); ?></p>
		</div>
		<ul class="coach-fit-grid">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<li class="coach-fit-item pps-reveal">
					<span class="coach-fit-item__mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
					<span><?php echo esc_html( page_coach( "audience_{$i}" ) ); ?></span>
				</li>
			<?php endfor; ?>
		</ul>
		<p class="coach-audience__closing pps-reveal"><?php echo esc_html( page_coach( 'audience_closing' ) ); ?></p>
	</div>
</section>

<section class="pps-section coach-deliver" id="program">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_coach( 'deliver_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_coach( 'deliver_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_coach( 'deliver_lead' ) ); ?></p>
		</div>
		<div class="coach-deliver-grid">
			<?php
			$icons = array( 'fa-magnifying-glass-chart', 'fa-chart-line', 'fa-diagram-project', 'fa-coins' );
			for ( $i = 1; $i <= 4; $i++ ) :
				?>
				<article class="coach-deliver-card pps-reveal">
					<div class="coach-deliver-card__top">
						<span class="coach-deliver-card__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr( $icons[ $i - 1 ] ); ?>"></i></span>
						<span class="coach-deliver-card__num" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					</div>
					<h3><?php echo esc_html( page_coach( "deliver_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_coach( "deliver_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section coach-diff" id="difference">
	<div class="pps-container">
		<div class="coach-diff-shell pps-reveal">
			<div class="coach-diff-shell__intro">
				<p class="pps-eyebrow" style="color:var(--pps-accent);"><?php echo esc_html( page_coach( 'diff_eyebrow' ) ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( page_coach( 'diff_title' ) ); ?></h2>
			</div>
			<div class="coach-diff-grid">
				<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
					<div class="coach-diff-item pps-reveal">
						<span aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
						<div>
							<h3><?php echo esc_html( page_coach( "diff_{$i}_title" ) ); ?></h3>
							<p><?php echo esc_html( page_coach( "diff_{$i}_text" ) ); ?></p>
						</div>
					</div>
				<?php endfor; ?>
			</div>
		</div>
	</div>
</section>

<section class="pps-section coach-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_coach( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_coach( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_coach( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_coach( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section coach-cta">
	<div class="pps-container">
		<div class="coach-cta-panel pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_coach( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_coach( 'cta_text' ) ); ?></p>
				<p><?php echo esc_html( page_coach( 'cta_text_2' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_coach( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_coach( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Schedule a strategy call', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about your clinic and goals. There is no obligation — this is a real conversation about whether the program is a match.', 'perform-practice' ); ?></p>
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
				<h3><?php esc_html_e( 'Request a strategy call', 'perform-practice' ); ?></h3>
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
							<option value="Med VA"><?php esc_html_e( 'Med VA / Virtual Assistant', 'perform-practice' ); ?></option>
							<option value="Coaching" selected><?php esc_html_e( 'Coaching', 'perform-practice' ); ?></option>
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
