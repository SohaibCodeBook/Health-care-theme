<?php
/**
 * Template Name: Digital Marketing Healthcare Agency
 * Description: Healthcare digital marketing hub with social-media visuals. Content editable via Customizer → PPS — Service Pages → Digital Marketing Agency.
 *
 * @package Perform_Practice
 */

get_header();

$hero_image  = page_dm( 'hero_image' );
$apart_image = page_dm( 'apart_image' );
$step_icons  = array( 'fa-magnifying-glass-chart', 'fa-comments', 'fa-globe', 'fa-bullhorn', 'fa-chart-line' );
?>

<section class="dm-hero" id="top">
	<div class="pps-container dm-hero__grid">
		<div class="dm-hero__content">
			<p class="pps-eyebrow"><?php echo esc_html( page_dm( 'hero_eyebrow' ) ); ?></p>
			<h1 class="dm-hero__title"><?php echo esc_html( page_dm( 'hero_title' ) ); ?></h1>
			<p class="dm-hero__lead"><?php echo esc_html( page_dm( 'hero_lead' ) ); ?></p>
			<p class="dm-hero__text"><?php echo esc_html( page_dm( 'hero_text' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_dm( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_dm( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost" href="<?php echo esc_url( page_dm( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_dm( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="dm-hero__chips">
				<li><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> HIPAA-aware campaigns</li>
				<li><i class="fa-brands fa-google" aria-hidden="true"></i> SEO + Google Ads</li>
				<li><i class="fa-brands fa-meta" aria-hidden="true"></i> Social &amp; paid social</li>
			</ul>
		</div>

		<div class="dm-hero__visual pps-reveal" aria-hidden="true">
			<figure class="dm-hero__photo">
				<img
					src="<?php echo esc_url( $hero_image ); ?>"
					alt="<?php esc_attr_e( 'Healthcare digital marketing ads dashboard', 'perform-practice' ); ?>"
					width="800"
					height="533"
					loading="eager"
					decoding="async"
				>
			</figure>
			<div class="dm-social-stack">
				<article class="dm-ad-card dm-ad-card--ig">
					<header>
						<span class="dm-ad-card__avatar"></span>
						<div>
							<strong>Sunrise PT Clinic</strong>
							<small>Sponsored · Instagram</small>
						</div>
						<i class="fa-brands fa-instagram"></i>
					</header>
					<div class="dm-ad-card__body">
						<p>Book your evaluation this week — same-week openings available.</p>
						<span class="dm-ad-card__cta">Book Appointment</span>
					</div>
					<footer>
						<span><i class="fa-solid fa-heart"></i> 248</span>
						<span><i class="fa-solid fa-comment"></i> 32</span>
						<span class="dm-ad-card__live">Live</span>
					</footer>
				</article>
				<article class="dm-ad-card dm-ad-card--fb">
					<header>
						<span class="dm-ad-card__avatar dm-ad-card__avatar--alt"></span>
						<div>
							<strong>Family Wellness Group</strong>
							<small>Facebook Ads</small>
						</div>
						<i class="fa-brands fa-facebook"></i>
					</header>
					<div class="dm-ad-card__metrics">
						<div><strong>+42%</strong><span>qualified leads</span></div>
						<div><strong>$38</strong><span>cost / patient</span></div>
					</div>
				</article>
			</div>
		</div>
	</div>
</section>

<section class="pps-section dm-why" id="why">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_dm( 'why_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'why_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_dm( 'why_text' ) ); ?></p>
		</div>
		<div class="dm-why-stakes pps-reveal">
			<span class="dm-why-stakes__icon" aria-hidden="true"><i class="fa-solid fa-triangle-exclamation"></i></span>
			<p><?php echo esc_html( page_dm( 'why_stakes' ) ); ?></p>
		</div>
		<div class="dm-risk-grid">
			<article class="dm-risk-card pps-reveal">
				<span class="dm-risk-card__icon" aria-hidden="true"><i class="fa-solid fa-sack-dollar"></i></span>
				<h3><?php esc_html_e( 'Wasted ad spend', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'A poorly targeted ad burns budget before it ever reaches a patient who is ready to book.', 'perform-practice' ); ?></p>
			</article>
			<article class="dm-risk-card pps-reveal">
				<span class="dm-risk-card__icon" aria-hidden="true"><i class="fa-solid fa-scale-balanced"></i></span>
				<h3><?php esc_html_e( 'Compliance liability', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'A HIPAA-non-compliant landing page creates real risk for your practice and your patients.', 'perform-practice' ); ?></p>
			</article>
			<article class="dm-risk-card pps-reveal">
				<span class="dm-risk-card__icon" aria-hidden="true"><i class="fa-solid fa-calendar-xmark"></i></span>
				<h3><?php esc_html_e( 'Empty appointment slots', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Messaging that ignores patient objections leaves calendars open and revenue on the table.', 'perform-practice' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="pps-section dm-deliver" id="results">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_dm( 'deliver_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'deliver_title' ) ); ?></h2>
		</div>
		<div class="dm-deliver-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="dm-deliver-card pps-reveal">
					<span class="dm-deliver-card__value"><?php echo esc_html( page_dm( "deliver_{$i}_value" ) ); ?></span>
					<h3><?php echo esc_html( page_dm( "deliver_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_dm( "deliver_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
		<p class="dm-deliver__closing pps-reveal"><?php echo esc_html( page_dm( 'deliver_closing' ) ); ?></p>
	</div>
</section>

<section class="pps-section dm-process" id="process">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_dm( 'process_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'process_title' ) ); ?></h2>
		</div>
		<ol class="dm-process-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<li class="dm-process-step pps-reveal">
					<span class="dm-process-step__num" aria-hidden="true"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<span class="dm-process-step__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr( $step_icons[ $i - 1 ] ); ?>"></i></span>
					<div>
						<h3><?php echo esc_html( page_dm( "step_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_dm( "step_{$i}_text" ) ); ?></p>
					</div>
				</li>
			<?php endfor; ?>
		</ol>
	</div>
</section>

<section class="pps-section dm-apart" id="difference">
	<div class="pps-container dm-apart__grid">
		<div class="dm-apart__media pps-reveal">
			<figure>
				<img
					src="<?php echo esc_url( $apart_image ); ?>"
					alt="<?php esc_attr_e( 'Healthcare clinic social media marketing on mobile', 'perform-practice' ); ?>"
					width="600"
					height="600"
					loading="lazy"
					decoding="async"
				>
			</figure>
			<div class="dm-apart__float" aria-hidden="true">
				<i class="fa-solid fa-users"></i>
				<div>
					<strong>+90 days</strong>
					<span>measurable growth window</span>
				</div>
			</div>
		</div>
		<div class="dm-apart__body pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_dm( 'apart_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'apart_title' ) ); ?></h2>
			<ul class="dm-apart-list">
				<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
					<li>
						<span class="dm-apart-list__mark" aria-hidden="true"><i class="fa-solid fa-check"></i></span>
						<div>
							<strong><?php echo esc_html( page_dm( "apart_{$i}_title" ) ); ?></strong>
							<span><?php echo esc_html( page_dm( "apart_{$i}_text" ) ); ?></span>
						</div>
					</li>
				<?php endfor; ?>
			</ul>
		</div>
	</div>
</section>

<section class="pps-section dm-testimonials" id="testimonials">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_dm( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'test_title' ) ); ?></h2>
		</div>
		<div class="dm-test-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<blockquote class="dm-test-card pps-reveal">
					<p>“<?php echo esc_html( page_dm( "test_{$i}_quote" ) ); ?>”</p>
					<footer>
						<strong><?php echo esc_html( page_dm( "test_{$i}_name" ) ); ?></strong>
						<span><?php echo esc_html( page_dm( "test_{$i}_meta" ) ); ?></span>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section dm-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_dm( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_dm( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_dm( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section dm-cta">
	<div class="pps-container">
		<div class="dm-cta-panel pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_dm( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_dm( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_dm( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_dm( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Schedule a marketing consultation', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about your practice goals. We’ll walk through patient acquisition opportunities and what a compliant growth plan could look like.', 'perform-practice' ); ?></p>
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
							<option value="Marketing" selected><?php esc_html_e( 'Marketing', 'perform-practice' ); ?></option>
							<option value="Credentialing/Contracting"><?php esc_html_e( 'Credentialing/Contracting', 'perform-practice' ); ?></option>
							<option value="Front-Desk 101"><?php esc_html_e( 'Front-Desk 101', 'perform-practice' ); ?></option>
							<option value="Eligibility Services"><?php esc_html_e( 'Eligibility Services', 'perform-practice' ); ?></option>
							<option value="Med VA"><?php esc_html_e( 'Med VA / Virtual Assistant', 'perform-practice' ); ?></option>
							<option value="Coaching"><?php esc_html_e( 'Coaching', 'perform-practice' ); ?></option>
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
