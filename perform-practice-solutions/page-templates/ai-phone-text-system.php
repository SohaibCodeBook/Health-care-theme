<?php
/**
 * Template Name: AI Phone and Text System
 * Description: Fully automated phone and SMS front desk for healthcare practices.
 *
 * @package Perform_Practice
 */

pps_ai_pts_register_styles();
get_header();
pps_ai_pts_force_styles();

$cap_icons = array(
	'fa-circle-question',
	'fa-user-check',
	'fa-calendar-plus',
	'fa-calendar-xmark',
	'fa-route',
	'fa-comment-sms',
	'fa-bell',
);

$bento_layout = array(
	array( 'span' => 'feature', 'num' => 1 ),
	array( 'span' => 'feature', 'num' => 3 ),
	array( 'span' => 'wide',  'num' => 2 ),
	array( 'span' => 'wide',  'num' => 5 ),
	array( 'span' => '',      'num' => 4 ),
	array( 'span' => '',      'num' => 6 ),
	array( 'span' => '',      'num' => 7 ),
);
?>

<div class="ai-pts-page">

<section class="ai-pts-hero" id="top">
	<div class="ai-pts-hero__bg" aria-hidden="true">
		<div class="ai-pts-hero__grid"></div>
		<div class="ai-pts-hero__orb ai-pts-hero__orb--1"></div>
		<div class="ai-pts-hero__orb ai-pts-hero__orb--2"></div>
		<div class="ai-pts-hero__orb ai-pts-hero__orb--3"></div>
	</div>

	<div class="pps-container ai-pts-hero__inner">
		<div class="ai-pts-hero__content">
			<p class="ai-pts-eyebrow">
				<i class="fa-solid fa-wand-magic-sparkles" aria-hidden="true"></i>
				<?php echo esc_html( page_ai_pts( 'hero_eyebrow' ) ); ?>
			</p>
			<h1 class="ai-pts-hero__title"><?php echo esc_html( page_ai_pts( 'hero_title' ) ); ?></h1>
			<p class="ai-pts-hero__subtitle"><?php echo esc_html( page_ai_pts( 'hero_subtitle' ) ); ?></p>
			<p class="ai-pts-hero__lead"><?php echo esc_html( page_ai_pts( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary ai-pts-btn-glow" href="<?php echo esc_url( page_ai_pts( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_ai_pts( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost ai-pts-btn-ghost" href="<?php echo esc_url( page_ai_pts( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_ai_pts( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="ai-pts-hero__badges">
				<li><i class="fa-solid fa-shield-halved" aria-hidden="true"></i> HIPAA-aware</li>
				<li><i class="fa-solid fa-clock" aria-hidden="true"></i> 24/7 coverage</li>
				<li><i class="fa-solid fa-plug" aria-hidden="true"></i> EMR sync</li>
			</ul>
		</div>

		<div class="ai-pts-hero__visual pps-reveal" aria-hidden="true">
			<div class="ai-pts-float-card ai-pts-float-card--sms">
				<i class="fa-solid fa-comment-sms"></i>
				<span>SMS confirmation sent</span>
			</div>
			<div class="ai-pts-float-card ai-pts-float-card--emr">
				<i class="fa-solid fa-calendar-check"></i>
				<span>EMR appointment booked</span>
			</div>

			<div class="ai-pts-device">
				<div class="ai-pts-device__notch"></div>
				<div class="ai-pts-console">
					<header class="ai-pts-console__bar">
						<span class="ai-pts-console__dot"></span>
						<span class="ai-pts-console__dot"></span>
						<span class="ai-pts-console__dot"></span>
						<span class="ai-pts-console__label">Live AI Front Desk</span>
						<span class="ai-pts-console__status"><i class="fa-solid fa-circle"></i> Active</span>
					</header>
					<div class="ai-pts-console__body">
						<div class="ai-pts-call">
							<div class="ai-pts-call__pulse">
								<i class="fa-solid fa-phone-volume"></i>
							</div>
							<div>
								<strong>Inbound call</strong>
								<span>New patient · Insurance question</span>
							</div>
							<em>Answered</em>
						</div>
						<div class="ai-pts-thread">
							<div class="ai-pts-thread__msg ai-pts-thread__msg--ai">
								<span>AI Assistant</span>
								<p>Thanks for calling. I can help with scheduling and insurance questions. Are you a new or returning patient?</p>
							</div>
							<div class="ai-pts-thread__msg ai-pts-thread__msg--user">
								<span>Caller</span>
								<p>New patient — knee pain evaluation.</p>
							</div>
							<div class="ai-pts-thread__msg ai-pts-thread__msg--ai">
								<span>AI Assistant</span>
								<p>I found an opening with Dr. Rivera tomorrow at 10:30 AM. Should I book that and text a confirmation?</p>
							</div>
						</div>
						<div class="ai-pts-console__footer">
							<div class="ai-pts-console__stat">
								<strong>EMR</strong>
								<span>Appointment synced</span>
							</div>
							<div class="ai-pts-console__stat">
								<strong>SMS</strong>
								<span>Confirmation sent</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ai-pts-metrics" aria-label="<?php esc_attr_e( 'Key benefits', 'perform-practice' ); ?>">
	<div class="pps-container">
		<div class="ai-pts-metrics__grid">
			<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
				<article class="ai-pts-metric pps-reveal">
					<span class="ai-pts-metric__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( 1 === $i ? 'fa-clock' : ( 2 === $i ? 'fa-calendar-check' : 'fa-stethoscope' ) ); ?>"></i>
					</span>
					<div>
						<h2><?php echo esc_html( page_ai_pts( "highlight_{$i}_title" ) ); ?></h2>
						<p><?php echo esc_html( page_ai_pts( "highlight_{$i}_text" ) ); ?></p>
					</div>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-pts-capabilities" id="capabilities">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_pts( 'cap_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_pts( 'cap_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_pts( 'cap_lead' ) ); ?></p>
		</div>
		<p class="ai-pts-capabilities__intro pps-reveal"><?php echo esc_html( page_ai_pts( 'cap_intro' ) ); ?></p>
		<div class="ai-pts-bento">
			<?php foreach ( $bento_layout as $item ) : ?>
				<?php
				$i    = $item['num'];
				$mod  = $item['span'];
				$class = 'ai-pts-bento__item pps-reveal';
				if ( 'feature' === $mod ) {
					$class .= ' ai-pts-bento__item--feature';
				} elseif ( 'wide' === $mod ) {
					$class .= ' ai-pts-bento__item--wide';
				}
				?>
				<article class="<?php echo esc_attr( $class ); ?>">
					<span class="ai-pts-bento__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $cap_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<h3><?php echo esc_html( page_ai_pts( "cap_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_ai_pts( "cap_{$i}_text" ) ); ?></p>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-pts-flow" id="how-it-works">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php esc_html_e( 'How It Works', 'perform-practice' ); ?></p>
			<h2 class="pps-section-title"><?php esc_html_e( 'From first ring to booked appointment', 'perform-practice' ); ?></h2>
		</div>
		<div class="ai-pts-flow__grid">
			<article class="ai-pts-flow__step pps-reveal">
				<span class="ai-pts-flow__num">01</span>
				<h3><?php esc_html_e( 'Call comes in', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'The AI answers instantly, identifies the caller\'s need, and handles FAQs without putting anyone on hold.', 'perform-practice' ); ?></p>
			</article>
			<article class="ai-pts-flow__step pps-reveal">
				<span class="ai-pts-flow__num">02</span>
				<h3><?php esc_html_e( 'Qualify & route', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'New patients are qualified, matched to the right provider, and routed based on clinical need and availability.', 'perform-practice' ); ?></p>
			</article>
			<article class="ai-pts-flow__step pps-reveal">
				<span class="ai-pts-flow__num">03</span>
				<h3><?php esc_html_e( 'Book & confirm', 'perform-practice' ); ?></h3>
				<p><?php esc_html_e( 'Appointments sync to your EMR in real time while SMS confirmations keep the patient informed.', 'perform-practice' ); ?></p>
			</article>
		</div>
	</div>
</section>

<section class="pps-section ai-pts-emr" id="integration">
	<div class="pps-container ai-pts-emr__grid">
		<div class="ai-pts-emr__panel pps-reveal" aria-hidden="true">
			<div class="ai-pts-emr__diagram">
				<div class="ai-pts-emr__node ai-pts-emr__node--phone">
					<i class="fa-solid fa-phone"></i>
					<span>Voice &amp; SMS</span>
				</div>
				<div class="ai-pts-emr__connector"></div>
				<div class="ai-pts-emr__node ai-pts-emr__node--ai">
					<i class="fa-solid fa-microchip"></i>
					<span>AI Engine</span>
				</div>
				<div class="ai-pts-emr__connector"></div>
				<div class="ai-pts-emr__node ai-pts-emr__node--emr">
					<i class="fa-solid fa-database"></i>
					<span>Your EMR</span>
				</div>
			</div>
			<div class="ai-pts-emr__sync">
				<i class="fa-solid fa-arrows-rotate" aria-hidden="true"></i>
				<?php esc_html_e( 'Real-time two-way sync', 'perform-practice' ); ?>
			</div>
		</div>
		<div class="ai-pts-emr__body pps-reveal">
			<p class="pps-eyebrow"><?php echo esc_html( page_ai_pts( 'emr_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_pts( 'emr_title' ) ); ?></h2>
			<p class="ai-pts-emr__lead"><?php echo esc_html( page_ai_pts( 'emr_lead' ) ); ?></p>
			<p><?php echo esc_html( page_ai_pts( 'emr_text' ) ); ?></p>
			<div class="ai-pts-emr__note">
				<i class="fa-solid fa-circle-info" aria-hidden="true"></i>
				<p><?php echo esc_html( page_ai_pts( 'emr_note' ) ); ?></p>
			</div>
		</div>
	</div>
</section>

<section class="pps-section ai-pts-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_pts( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_pts( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_ai_pts( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_ai_pts( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-pts-cta">
	<div class="pps-container">
		<div class="ai-pts-cta-panel pps-reveal">
			<div class="ai-pts-cta-panel__glow" aria-hidden="true"></div>
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_ai_pts( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_ai_pts( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_ai_pts( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_ai_pts( 'cta_button' ) ); ?>
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
				<p><?php esc_html_e( 'Tell us about your practice workflows and EMR. We’ll walk through how an automated phone and text system could fit your front desk.', 'perform-practice' ); ?></p>
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
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your call volume, EMR, and front desk goals.', 'perform-practice' ); ?>"></textarea>
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
