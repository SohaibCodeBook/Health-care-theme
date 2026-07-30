<?php
/**
 * Template Name: AI Referral Outreach
 * Description: Fully automated new client referral outreach for healthcare practices.
 *
 * @package Perform_Practice
 */

pps_ai_ref_register_styles();
get_header();
pps_ai_ref_force_styles();
?>

<div class="ai-ref-page">

<section class="ai-ref-hero" id="top">
	<div class="ai-ref-hero__bg" aria-hidden="true">
		<div class="ai-ref-hero__grid"></div>
		<div class="ai-ref-hero__orb ai-ref-hero__orb--1"></div>
		<div class="ai-ref-hero__orb ai-ref-hero__orb--2"></div>
		<div class="ai-ref-hero__orb ai-ref-hero__orb--3"></div>
	</div>

	<div class="pps-container ai-ref-hero__inner">
		<div class="ai-ref-hero__content">
			<p class="ai-ref-eyebrow">
				<i class="fa-solid fa-bolt" aria-hidden="true"></i>
				<?php echo esc_html( page_ai_ref( 'hero_eyebrow' ) ); ?>
			</p>
			<h1 class="ai-ref-hero__title"><?php echo esc_html( page_ai_ref( 'hero_title' ) ); ?></h1>
			<p class="ai-ref-hero__subtitle"><?php echo esc_html( page_ai_ref( 'hero_subtitle' ) ); ?></p>
			<p class="ai-ref-hero__lead"><?php echo esc_html( page_ai_ref( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary ai-ref-btn-glow" href="<?php echo esc_url( page_ai_ref( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_ai_ref( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--secondary ai-ref-btn-ghost" href="<?php echo esc_url( page_ai_ref( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_ai_ref( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="ai-ref-hero__badges">
				<li><i class="fa-solid fa-bolt" aria-hidden="true"></i> Instant outreach</li>
				<li><i class="fa-solid fa-envelope-open-text" aria-hidden="true"></i> Text, email &amp; voice</li>
				<li><i class="fa-solid fa-chart-line" aria-hidden="true"></i> Built to convert</li>
			</ul>
		</div>

		<div class="ai-ref-hero__visual pps-reveal" aria-hidden="true">
			<div class="ai-ref-float ai-ref-float--speed">
				<i class="fa-solid fa-stopwatch"></i>
				<span>Outreach in &lt; 10 sec</span>
			</div>
			<div class="ai-ref-float ai-ref-float--booked">
				<i class="fa-solid fa-calendar-check"></i>
				<span>Appointment booked</span>
			</div>

			<div class="ai-ref-pipeline">
				<div class="ai-ref-pipeline__stage ai-ref-pipeline__stage--in">
					<span class="ai-ref-pipeline__icon"><i class="fa-solid fa-user-plus"></i></span>
					<strong>New referral</strong>
					<small>Physician · Online · Patient</small>
				</div>
				<div class="ai-ref-pipeline__arrow"><i class="fa-solid fa-chevron-right"></i></div>
				<div class="ai-ref-pipeline__stage ai-ref-pipeline__stage--active">
					<span class="ai-ref-pipeline__icon"><i class="fa-solid fa-paper-plane"></i></span>
					<strong>Auto outreach</strong>
					<small>SMS + email sent</small>
				</div>
				<div class="ai-ref-pipeline__arrow"><i class="fa-solid fa-chevron-right"></i></div>
				<div class="ai-ref-pipeline__stage">
					<span class="ai-ref-pipeline__icon"><i class="fa-solid fa-comments"></i></span>
					<strong>Nurture sequence</strong>
					<small>48–72 hr follow-up</small>
				</div>
				<div class="ai-ref-pipeline__arrow"><i class="fa-solid fa-chevron-right"></i></div>
				<div class="ai-ref-pipeline__stage ai-ref-pipeline__stage--done">
					<span class="ai-ref-pipeline__icon"><i class="fa-solid fa-check"></i></span>
					<strong>Booked</strong>
					<small>Confirmed on calendar</small>
				</div>
			</div>

			<div class="ai-ref-inbox">
				<header class="ai-ref-inbox__bar">
					<span class="ai-ref-inbox__dot"></span>
					<span class="ai-ref-inbox__dot"></span>
					<span class="ai-ref-inbox__dot"></span>
					<span class="ai-ref-inbox__label">Live referral queue</span>
					<span class="ai-ref-inbox__count">3 active</span>
				</header>
				<ul class="ai-ref-inbox__list">
					<li class="ai-ref-inbox__item ai-ref-inbox__item--new">
						<span class="ai-ref-inbox__badge">New</span>
						<div>
							<strong>Dr. Patel referral</strong>
							<span>Outreach sent · awaiting reply</span>
						</div>
						<em>12s ago</em>
					</li>
					<li class="ai-ref-inbox__item">
						<span class="ai-ref-inbox__badge ai-ref-inbox__badge--warm">Warm</span>
						<div>
							<strong>Website inquiry</strong>
							<span>Follow-up #2 scheduled</span>
						</div>
						<em>2h ago</em>
					</li>
					<li class="ai-ref-inbox__item ai-ref-inbox__item--done">
						<span class="ai-ref-inbox__badge ai-ref-inbox__badge--done">Booked</span>
						<div>
							<strong>Patient referral</strong>
							<span>Appointment confirmed Thu 2:00 PM</span>
						</div>
						<em>Today</em>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="ai-ref-metrics" aria-label="<?php esc_attr_e( 'Key benefits', 'perform-practice' ); ?>">
	<div class="pps-container">
		<div class="ai-ref-metrics__grid">
			<?php
			$metric_icons = array( 'fa-bolt', 'fa-layer-group', 'fa-bullseye' );
			for ( $i = 1; $i <= 3; $i++ ) :
				?>
				<article class="ai-ref-metric pps-reveal">
					<span class="ai-ref-metric__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $metric_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<div>
						<h2><?php echo esc_html( page_ai_ref( "highlight_{$i}_title" ) ); ?></h2>
						<p><?php echo esc_html( page_ai_ref( "highlight_{$i}_text" ) ); ?></p>
					</div>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-ref-workflow" id="workflow">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_ref( 'workflow_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_ref( 'workflow_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_ref( 'workflow_lead' ) ); ?></p>
		</div>
		<p class="ai-ref-workflow__intro pps-reveal"><?php echo esc_html( page_ai_ref( 'workflow_intro' ) ); ?></p>

		<ol class="ai-ref-timeline">
			<?php for ( $i = 1; $i <= 4; $i++ ) : ?>
				<li class="ai-ref-timeline__step pps-reveal">
					<span class="ai-ref-timeline__num"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<div class="ai-ref-timeline__body">
						<h3><?php echo esc_html( page_ai_ref( "step_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_ai_ref( "step_{$i}_text" ) ); ?></p>
					</div>
				</li>
			<?php endfor; ?>
		</ol>
	</div>
</section>

<section class="pps-section ai-ref-stack" id="growth-stack">
	<div class="pps-container">
		<div class="ai-ref-stack__shell pps-reveal">
			<div class="ai-ref-stack__glow" aria-hidden="true"></div>
			<div class="ai-ref-stack__head">
				<p class="ai-ref-stack__eyebrow"><?php echo esc_html( page_ai_ref( 'stack_eyebrow' ) ); ?></p>
				<h2 class="ai-ref-stack__title"><?php echo esc_html( page_ai_ref( 'stack_title' ) ); ?></h2>
				<p class="ai-ref-stack__lead"><?php echo esc_html( page_ai_ref( 'stack_lead' ) ); ?></p>
				<p class="ai-ref-stack__intro"><?php echo esc_html( page_ai_ref( 'stack_intro' ) ); ?></p>
				<p class="ai-ref-stack__note"><i class="fa-solid fa-circle-check" aria-hidden="true"></i> <?php echo esc_html( page_ai_ref( 'stack_note' ) ); ?></p>
			</div>
			<div class="ai-ref-stack__grid">
				<?php
				$stack_icons = array( 'fa-bullhorn', 'fa-robot', 'fa-diagram-project' );
				for ( $i = 1; $i <= 3; $i++ ) :
					?>
					<article class="ai-ref-stack__card">
						<span class="ai-ref-stack__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $stack_icons[ $i - 1 ] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( page_ai_ref( "stack_{$i}_title" ) ); ?></h3>
						<p><?php echo esc_html( page_ai_ref( "stack_{$i}_text" ) ); ?></p>
					</article>
				<?php endfor; ?>
			</div>
			<p class="ai-ref-stack__closing"><?php echo esc_html( page_ai_ref( 'stack_closing' ) ); ?></p>
		</div>
	</div>
</section>

<section class="pps-section ai-ref-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_ref( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_ref( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_ai_ref( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_ai_ref( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-ref-cta">
	<div class="pps-container">
		<div class="ai-ref-cta-panel pps-reveal">
			<div class="ai-ref-cta-panel__glow" aria-hidden="true"></div>
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_ai_ref( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_ai_ref( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_ai_ref( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_ai_ref( 'cta_button' ) ); ?>
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
				<h2 class="pps-section-title"><?php esc_html_e( 'Book your free discovery call', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Tell us about your referral sources and follow-up process. We’ll show you how automated outreach can fill your schedule faster.', 'perform-practice' ); ?></p>
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
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your referral volume and current follow-up process.', 'perform-practice' ); ?>"></textarea>
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
