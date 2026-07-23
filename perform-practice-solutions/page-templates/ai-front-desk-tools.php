<?php
/**
 * Template Name: AI Front Desk Tools
 * Description: Front desk support and automation tools for healthcare practices.
 *
 * @package Perform_Practice
 */

pps_ai_fd_register_styles();
get_header();
pps_ai_fd_force_styles();
?>

<div class="ai-fd-page">

<section class="ai-fd-hero" id="top">
	<div class="ai-fd-hero__bg" aria-hidden="true">
		<div class="ai-fd-hero__grid"></div>
		<div class="ai-fd-hero__orb ai-fd-hero__orb--1"></div>
		<div class="ai-fd-hero__orb ai-fd-hero__orb--2"></div>
		<div class="ai-fd-hero__orb ai-fd-hero__orb--3"></div>
	</div>

	<div class="pps-container ai-fd-hero__inner">
		<div class="ai-fd-hero__content">
			<p class="ai-fd-eyebrow">
				<i class="fa-solid fa-desktop" aria-hidden="true"></i>
				<?php echo esc_html( page_ai_fd( 'hero_eyebrow' ) ); ?>
			</p>
			<h1 class="ai-fd-hero__title"><?php echo esc_html( page_ai_fd( 'hero_title' ) ); ?></h1>
			<p class="ai-fd-hero__subtitle"><?php echo esc_html( page_ai_fd( 'hero_subtitle' ) ); ?></p>
			<p class="ai-fd-hero__lead"><?php echo esc_html( page_ai_fd( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary ai-fd-btn-glow" href="<?php echo esc_url( page_ai_fd( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_ai_fd( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost ai-fd-btn-ghost" href="<?php echo esc_url( page_ai_fd( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_ai_fd( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="ai-fd-hero__badges">
				<li><i class="fa-solid fa-gears" aria-hidden="true"></i> Hands-free workflows</li>
				<li><i class="fa-solid fa-user-group" aria-hidden="true"></i> More patient time</li>
				<li><i class="fa-solid fa-shield-check" aria-hidden="true"></i> Fewer errors</li>
			</ul>
		</div>

		<div class="ai-fd-hero__visual pps-reveal" aria-hidden="true">
			<div class="ai-fd-float ai-fd-float--saved">
				<i class="fa-solid fa-clock"></i>
				<span>12 hrs/week reclaimed</span>
			</div>
			<div class="ai-fd-float ai-fd-float--auto">
				<i class="fa-solid fa-bolt"></i>
				<span>6 workflows running</span>
			</div>

			<div class="ai-fd-console">
				<header class="ai-fd-console__bar">
					<span class="ai-fd-console__dot"></span>
					<span class="ai-fd-console__dot"></span>
					<span class="ai-fd-console__dot"></span>
					<span class="ai-fd-console__title">Front Desk Automation Hub</span>
					<span class="ai-fd-console__status"><i class="fa-solid fa-circle"></i> Live</span>
				</header>

				<div class="ai-fd-console__body">
					<div class="ai-fd-console__col ai-fd-console__col--manual">
						<h4><i class="fa-solid fa-hand"></i> Before</h4>
						<ul>
							<li class="ai-fd-console__task ai-fd-console__task--manual">
								<span>Send appointment reminders</span>
								<em>Manual</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--manual">
								<span>Re-enter intake forms</span>
								<em>Manual</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--manual">
								<span>Check insurance eligibility</span>
								<em>Manual</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--manual">
								<span>Post-visit follow-ups</span>
								<em>Manual</em>
							</li>
						</ul>
					</div>

					<div class="ai-fd-console__arrow">
						<i class="fa-solid fa-arrow-right-long"></i>
					</div>

					<div class="ai-fd-console__col ai-fd-console__col--auto">
						<h4><i class="fa-solid fa-robot"></i> After</h4>
						<ul>
							<li class="ai-fd-console__task ai-fd-console__task--done">
								<span>Reminders sent · 48h &amp; 24h</span>
								<em><i class="fa-solid fa-check"></i> Auto</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--done">
								<span>Intake synced to EMR</span>
								<em><i class="fa-solid fa-check"></i> Auto</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--done">
								<span>Eligibility verified</span>
								<em><i class="fa-solid fa-check"></i> Auto</em>
							</li>
							<li class="ai-fd-console__task ai-fd-console__task--done">
								<span>Follow-up sequence active</span>
								<em><i class="fa-solid fa-check"></i> Auto</em>
							</li>
						</ul>
					</div>
				</div>

				<footer class="ai-fd-console__foot">
					<div class="ai-fd-console__stat">
						<strong>94%</strong>
						<span>Tasks automated</span>
					</div>
					<div class="ai-fd-console__stat">
						<strong>0</strong>
						<span>Manual re-entry</span>
					</div>
					<div class="ai-fd-console__stat">
						<strong>Real-time</strong>
						<span>EMR sync</span>
					</div>
				</footer>
			</div>
		</div>
	</div>
</section>

<section class="ai-fd-metrics" aria-label="<?php esc_attr_e( 'Key benefits', 'perform-practice' ); ?>">
	<div class="pps-container">
		<div class="ai-fd-metrics__grid">
			<?php
			$metric_icons = array( 'fa-gears', 'fa-hourglass-half', 'fa-shield-check' );
			for ( $i = 1; $i <= 3; $i++ ) :
				?>
				<article class="ai-fd-metric pps-reveal">
					<span class="ai-fd-metric__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $metric_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<div>
						<h2><?php echo esc_html( page_ai_fd( "highlight_{$i}_title" ) ); ?></h2>
						<p><?php echo esc_html( page_ai_fd( "highlight_{$i}_text" ) ); ?></p>
					</div>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-fd-workflows" id="workflows">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_fd( 'workflow_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_fd( 'workflow_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_fd( 'workflow_lead' ) ); ?></p>
		</div>
		<p class="ai-fd-workflows__intro pps-reveal"><?php echo esc_html( page_ai_fd( 'workflow_intro' ) ); ?></p>

		<div class="ai-fd-workflow-grid">
			<?php
			$wf_icons = array(
				'fa-bell',
				'fa-file-medical',
				'fa-id-card',
				'fa-envelope-open-text',
				'fa-bolt',
				'fa-chart-pie',
			);
			for ( $i = 1; $i <= 6; $i++ ) :
				?>
				<article class="ai-fd-workflow-card pps-reveal">
					<span class="ai-fd-workflow-card__num"><?php echo esc_html( sprintf( '%02d', $i ) ); ?></span>
					<span class="ai-fd-workflow-card__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $wf_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<h3><?php echo esc_html( page_ai_fd( "workflow_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_ai_fd( "workflow_{$i}_text" ) ); ?></p>
					<span class="ai-fd-workflow-card__tag">Automated</span>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-fd-impact" id="impact">
	<div class="pps-container">
		<div class="ai-fd-impact__shell pps-reveal">
			<div class="ai-fd-impact__glow" aria-hidden="true"></div>
			<div class="ai-fd-impact__content">
				<p class="ai-fd-impact__eyebrow"><?php echo esc_html( page_ai_fd( 'impact_eyebrow' ) ); ?></p>
				<h2><?php echo esc_html( page_ai_fd( 'impact_title' ) ); ?></h2>
				<p class="ai-fd-impact__lead"><?php echo esc_html( page_ai_fd( 'impact_lead' ) ); ?></p>
				<p><?php echo esc_html( page_ai_fd( 'impact_text' ) ); ?></p>
				<p class="ai-fd-impact__closing"><?php echo esc_html( page_ai_fd( 'impact_closing' ) ); ?></p>
			</div>
			<div class="ai-fd-impact__visual" aria-hidden="true">
				<div class="ai-fd-impact__ring">
					<div class="ai-fd-impact__ring-inner">
						<i class="fa-solid fa-user-nurse"></i>
						<strong>Patients first</strong>
						<span>Team focused on care</span>
					</div>
				</div>
				<ul class="ai-fd-impact__list">
					<li><i class="fa-solid fa-check"></i> More present at check-in</li>
					<li><i class="fa-solid fa-check"></i> Clearer communication</li>
					<li><i class="fa-solid fa-check"></i> Human touch where it matters</li>
					<li><i class="fa-solid fa-check"></i> Routine handled by automation</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<section class="pps-section ai-fd-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_fd( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_fd( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_ai_fd( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_ai_fd( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-fd-cta">
	<div class="pps-container">
		<div class="ai-fd-cta-panel pps-reveal">
			<div class="ai-fd-cta-panel__glow" aria-hidden="true"></div>
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_ai_fd( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_ai_fd( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_ai_fd( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_ai_fd( 'cta_button' ) ); ?>
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
				<p><?php esc_html_e( 'Tell us about your front desk workflows and daily admin load. We’ll identify the automations that will give your team the most time back.', 'perform-practice' ); ?></p>
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
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your front desk tasks and current workflow pain points.', 'perform-practice' ); ?>"></textarea>
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
