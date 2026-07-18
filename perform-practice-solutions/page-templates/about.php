<?php
/**
 * Template Name: About Us / Meet Kevin Rausch
 * Description: Founder story, career timeline, credentials, and services. Content from Meet Kevin Rausch page — editable via Customizer → PPS — Service Pages → About Us / Meet Kevin.
 *
 * @package Perform_Practice
 */

get_header();

$hero_image = page_about( 'hero_image' );
$svc_icons  = array( 'fa-file-invoice-dollar', 'fa-headset', 'fa-bullhorn', 'fa-id-card', 'fa-robot' );
?>

<section class="about-hero" id="top">
	<div class="pps-container about-hero__grid">
		<div class="about-hero__content">
			<p class="pps-eyebrow"><?php echo esc_html( page_about( 'hero_eyebrow' ) ); ?></p>
			<h1 class="about-hero__title"><?php echo esc_html( page_about( 'hero_title' ) ); ?></h1>
			<p class="about-hero__lead"><?php echo esc_html( page_about( 'hero_lead' ) ); ?></p>
			<div class="about-hero__identity">
				<strong><?php echo esc_html( page_about( 'hero_name' ) ); ?></strong>
				<span><?php echo esc_html( page_about( 'hero_role' ) ); ?></span>
			</div>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( page_about( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_about( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-calendar-check" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost" href="#story">
					<?php esc_html_e( 'Read His Story', 'perform-practice' ); ?>
				</a>
			</div>
		</div>

		<aside class="about-hero__aside pps-reveal" aria-label="<?php esc_attr_e( 'Kevin Rausch portrait', 'perform-practice' ); ?>">
			<figure class="about-hero__portrait">
				<img
					src="<?php echo esc_url( $hero_image ); ?>"
					alt="<?php echo esc_attr( page_about( 'hero_name' ) ); ?>"
					width="480"
					height="600"
					loading="eager"
					decoding="async"
				>
			</figure>
			<ul class="about-hero__stats" aria-label="<?php esc_attr_e( 'Highlights', 'perform-practice' ); ?>">
				<li><strong>16+</strong><span><?php esc_html_e( 'years as owner', 'perform-practice' ); ?></span></li>
				<li><strong>10+</strong><span><?php esc_html_e( 'years consulting', 'perform-practice' ); ?></span></li>
				<li><strong>4</strong><span><?php esc_html_e( 'PT locations', 'perform-practice' ); ?></span></li>
			</ul>
		</aside>
	</div>
</section>

<section class="pps-section about-story" id="story">
	<div class="pps-container about-story__grid">
		<div class="about-story__intro pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_about( 'story_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'story_title' ) ); ?></h2>
		</div>
		<div class="about-story__letter pps-reveal">
			<span class="about-story__quote" aria-hidden="true">“</span>
			<p><?php echo esc_html( page_about( 'story_1' ) ); ?></p>
			<p><?php echo esc_html( page_about( 'story_2' ) ); ?></p>
			<p><?php echo esc_html( page_about( 'story_3' ) ); ?></p>
			<footer>
				<strong><?php echo esc_html( page_about( 'hero_name' ) ); ?></strong>
				<span><?php echo esc_html( page_about( 'hero_role' ) ); ?></span>
			</footer>
		</div>
	</div>
</section>

<section class="about-mission">
	<div class="pps-container">
		<div class="about-mission__panel pps-reveal">
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'mission_title' ) ); ?></h2>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_about( 'mission_cta_url' ) ); ?>">
				<?php echo esc_html( page_about( 'mission_cta' ) ); ?>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>

<section class="pps-section about-timeline" id="journey">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_about( 'timeline_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'timeline_title' ) ); ?></h2>
		</div>
		<ol class="about-tl">
			<?php for ( $i = 1; $i <= 6; $i++ ) : ?>
				<li class="about-tl__item pps-reveal">
					<span class="about-tl__year"><?php echo esc_html( page_about( "tl_{$i}_year" ) ); ?></span>
					<div class="about-tl__card">
						<span class="about-tl__dot" aria-hidden="true"></span>
						<h3><?php echo esc_html( page_about( "tl_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_about( "tl_{$i}_text" ) ); ?></p>
					</div>
				</li>
			<?php endfor; ?>
		</ol>
	</div>
</section>

<section class="pps-section about-creds" id="credentials">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_about( 'cred_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'cred_title' ) ); ?></h2>
		</div>
		<div class="about-creds-shell pps-reveal">
			<div class="about-creds-shell__body">
				<div class="about-cred-block">
					<h3>
						<span class="about-cred-block__icon" aria-hidden="true"><i class="fa-solid fa-book-open"></i></span>
						<?php echo esc_html( page_about( 'pub_title' ) ); ?>
					</h3>
					<ul>
						<li><?php echo esc_html( page_about( 'pub_1' ) ); ?></li>
						<li><?php echo esc_html( page_about( 'pub_2' ) ); ?></li>
					</ul>
				</div>

				<div class="about-cred-block">
					<h3>
						<span class="about-cred-block__icon" aria-hidden="true"><i class="fa-solid fa-microphone-lines"></i></span>
						<?php echo esc_html( page_about( 'speak_title' ) ); ?>
					</h3>
					<ul>
						<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
							<li><?php echo esc_html( page_about( "speak_{$i}" ) ); ?></li>
						<?php endfor; ?>
					</ul>
					<p class="about-cred-block__note"><?php echo esc_html( page_about( 'speak_note' ) ); ?></p>
				</div>

				<div class="about-cred-block">
					<h3>
						<span class="about-cred-block__icon" aria-hidden="true"><i class="fa-solid fa-graduation-cap"></i></span>
						<?php echo esc_html( page_about( 'edu_title' ) ); ?>
					</h3>
					<div class="about-edu">
						<div>
							<strong><?php echo esc_html( page_about( 'edu_1_school' ) ); ?></strong>
							<span><?php echo esc_html( page_about( 'edu_1_degree' ) ); ?></span>
						</div>
						<div>
							<strong><?php echo esc_html( page_about( 'edu_2_school' ) ); ?></strong>
							<span><?php echo esc_html( page_about( 'edu_2_degree' ) ); ?></span>
						</div>
					</div>
				</div>
			</div>

			<figure class="about-creds-shell__media">
				<img
					src="<?php echo esc_url( page_about( 'cred_image' ) ); ?>"
					alt="<?php echo esc_attr( page_about( 'hero_name' ) ); ?>"
					width="816"
					height="1007"
					loading="lazy"
					decoding="async"
				>
			</figure>
		</div>
	</div>
</section>

<section class="pps-section about-services" id="services">
	<div class="pps-container">
		<div class="pps-section-head pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_about( 'services_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'services_title' ) ); ?></h2>
		</div>
		<div class="about-svc-grid">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<article class="about-svc-card pps-reveal">
					<span class="about-svc-card__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr( $svc_icons[ $i - 1 ] ); ?>"></i></span>
					<h3><?php echo esc_html( page_about( "svc_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_about( "svc_{$i}_text" ) ); ?></p>
					<a class="about-svc-card__link" href="<?php echo esc_url( home_url( page_about( "svc_{$i}_url" ) ) ); ?>">
						<?php esc_html_e( 'Learn more', 'perform-practice' ); ?>
						<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
					</a>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section about-testimonials" id="testimonials">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_about( 'test_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_about( 'test_title' ) ); ?></h2>
		</div>
		<div class="about-test-grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<blockquote class="about-test-card pps-reveal">
					<p>“<?php echo esc_html( page_about( "test_{$i}_quote" ) ); ?>”</p>
					<footer>
						<strong><?php echo esc_html( page_about( "test_{$i}_name" ) ); ?></strong>
						<span><?php echo esc_html( page_about( "test_{$i}_meta" ) ); ?></span>
					</footer>
				</blockquote>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section about-cta">
	<div class="pps-container">
		<div class="about-cta-panel pps-reveal">
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_about( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_about( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_about( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_about( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Book a time to talk with Kevin’s team', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about your practice. We’ll discuss billing, credentialing, marketing, staffing, or coaching — and whether PPS is the right partner.', 'perform-practice' ); ?></p>
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
				<h3><?php esc_html_e( 'Request a conversation', 'perform-practice' ); ?></h3>
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
