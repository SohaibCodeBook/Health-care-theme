<?php
/**
 * Template Name: AI Development
 * Description: Overview hub for AI automation offerings.
 *
 * @package Perform_Practice
 */

pps_ai_dev_register_styles();
get_header();
pps_ai_dev_force_styles();
?>

<div class="ai-dev-page">

<section class="ai-dev-hero" id="top">
	<div class="ai-dev-hero__bg" aria-hidden="true">
		<div class="ai-dev-hero__grid"></div>
		<div class="ai-dev-hero__orb ai-dev-hero__orb--1"></div>
		<div class="ai-dev-hero__orb ai-dev-hero__orb--2"></div>
		<div class="ai-dev-hero__orb ai-dev-hero__orb--3"></div>
	</div>

	<div class="pps-container ai-dev-hero__inner">
		<div class="ai-dev-hero__content">
			<p class="ai-dev-eyebrow">
				<i class="fa-solid fa-microchip" aria-hidden="true"></i>
				<?php echo esc_html( page_ai_dev( 'hero_eyebrow' ) ); ?>
			</p>
			<h1 class="ai-dev-hero__title"><?php echo esc_html( page_ai_dev( 'hero_title' ) ); ?></h1>
			<p class="ai-dev-hero__subtitle"><?php echo esc_html( page_ai_dev( 'hero_subtitle' ) ); ?></p>
			<p class="ai-dev-hero__lead"><?php echo esc_html( page_ai_dev( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary ai-dev-btn-glow" href="<?php echo esc_url( page_ai_dev( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_ai_dev( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost ai-dev-btn-ghost" href="<?php echo esc_url( page_ai_dev( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_ai_dev( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="ai-dev-hero__badges">
				<li><i class="fa-solid fa-plug" aria-hidden="true"></i> EMR-integrated</li>
				<li><i class="fa-solid fa-clock" aria-hidden="true"></i> 24/7 coverage</li>
				<li><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> HIPAA-aware</li>
			</ul>
		</div>

		<div class="ai-dev-hero__visual pps-reveal" aria-hidden="true">
			<div class="ai-dev-stack">
				<div class="ai-dev-stack__item">
					<i class="fa-solid fa-phone-volume"></i>
					<span>Phone &amp; Text</span>
				</div>
				<div class="ai-dev-stack__item">
					<i class="fa-solid fa-share-nodes"></i>
					<span>Referral Outreach</span>
				</div>
				<div class="ai-dev-stack__item">
					<i class="fa-solid fa-comments"></i>
					<span>Website Chatbot</span>
				</div>
				<div class="ai-dev-stack__item">
					<i class="fa-solid fa-desktop"></i>
					<span>Front Desk Tools</span>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ai-dev-solutions pps-section" id="solutions">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_ai_dev( 'solutions_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_dev( 'solutions_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_dev( 'solutions_lead' ) ); ?></p>
		</div>

		<div class="ai-dev-cards">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<?php
				$slug = page_ai_dev( "card_{$i}_slug" );
				$url  = pps_ai_dev_child_url( $slug );
				?>
				<a class="ai-dev-card pps-reveal" href="<?php echo esc_url( $url ); ?>">
					<span class="ai-dev-card__icon" aria-hidden="true">
						<i class="<?php echo esc_attr( page_ai_dev( "card_{$i}_icon" ) ); ?>"></i>
					</span>
					<span class="ai-dev-card__num"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<h3 class="ai-dev-card__title"><?php echo esc_html( page_ai_dev( "card_{$i}_title" ) ); ?></h3>
					<p class="ai-dev-card__text"><?php echo esc_html( page_ai_dev( "card_{$i}_text" ) ); ?></p>
					<span class="ai-dev-card__cta">
						<?php echo esc_html( page_ai_dev( "card_{$i}_cta" ) ); ?>
						<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
					</span>
				</a>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="ai-dev-why pps-section" id="why">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_ai_dev( 'why_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_dev( 'why_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_dev( 'why_lead' ) ); ?></p>
		</div>
		<div class="ai-dev-why__grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="ai-dev-why__item pps-reveal">
					<h3><?php echo esc_html( page_ai_dev( "why_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_ai_dev( "why_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<?php get_template_part( 'template-parts/ai/agent-suite-sections' ); ?>

<section class="ai-dev-final" id="final-cta">
	<div class="pps-container ai-dev-final__inner pps-reveal">
		<h2><?php echo esc_html( page_ai_dev( 'cta_title' ) ); ?></h2>
		<p><?php echo esc_html( page_ai_dev( 'cta_text' ) ); ?></p>
		<a class="pps-btn pps-btn--primary ai-dev-btn-glow" href="<?php echo esc_url( page_ai_dev( 'cta_button_url' ) ); ?>">
			<?php echo esc_html( page_ai_dev( 'cta_button' ) ); ?>
			<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
		</a>
	</div>
</section>

<section class="pps-section home-contact" id="contact">
	<div class="pps-container">
		<div class="contact-grid">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php esc_html_e( 'Contact', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php esc_html_e( 'Let us map the right AI stack for your practice', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Share a few details about call volume, referrals, or your website — our team will follow up quickly.', 'perform-practice' ); ?></p>
				<div class="contact-details">
					<div class="contact-detail">
						<i class="fa-solid fa-phone" aria-hidden="true"></i>
						<div>
							<strong><?php esc_html_e( 'Phone', 'perform-practice' ); ?></strong><br>
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
				<h3><?php esc_html_e( 'Request a discovery call', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Share a few details and our team will follow up quickly.', 'perform-practice' ); ?></p>
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
							<option value="AI Development" selected><?php esc_html_e( 'AI Development', 'perform-practice' ); ?></option>
						</select>
					</div>
					<div class="form-field">
						<label for="pps-message"><?php esc_html_e( 'Message', 'perform-practice' ); ?></label>
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about call volume, referrals, website traffic, or front desk goals.', 'perform-practice' ); ?>"></textarea>
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

</div>

<?php
get_footer();
