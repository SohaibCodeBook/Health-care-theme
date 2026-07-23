<?php
/**
 * Template Name: AI Website Chatbot
 * Description: Fully automated and integrated website chatbot for healthcare practices.
 *
 * @package Perform_Practice
 */

pps_ai_chat_register_styles();
get_header();
pps_ai_chat_force_styles();
?>

<div class="ai-chat-page">

<section class="ai-chat-hero" id="top">
	<div class="ai-chat-hero__bg" aria-hidden="true">
		<div class="ai-chat-hero__grid"></div>
		<div class="ai-chat-hero__orb ai-chat-hero__orb--1"></div>
		<div class="ai-chat-hero__orb ai-chat-hero__orb--2"></div>
		<div class="ai-chat-hero__orb ai-chat-hero__orb--3"></div>
	</div>

	<div class="pps-container ai-chat-hero__inner">
		<div class="ai-chat-hero__content">
			<p class="ai-chat-eyebrow">
				<i class="fa-solid fa-robot" aria-hidden="true"></i>
				<?php echo esc_html( page_ai_chat( 'hero_eyebrow' ) ); ?>
			</p>
			<h1 class="ai-chat-hero__title"><?php echo esc_html( page_ai_chat( 'hero_title' ) ); ?></h1>
			<p class="ai-chat-hero__subtitle"><?php echo esc_html( page_ai_chat( 'hero_subtitle' ) ); ?></p>
			<p class="ai-chat-hero__lead"><?php echo esc_html( page_ai_chat( 'hero_lead' ) ); ?></p>
			<div class="pps-btn-group">
				<a class="pps-btn pps-btn--primary ai-chat-btn-glow" href="<?php echo esc_url( page_ai_chat( 'hero_cta_url' ) ); ?>">
					<?php echo esc_html( page_ai_chat( 'hero_cta' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
				<a class="pps-btn pps-btn--ghost ai-chat-btn-ghost" href="<?php echo esc_url( page_ai_chat( 'hero_cta_2_url' ) ); ?>">
					<?php echo esc_html( page_ai_chat( 'hero_cta_2' ) ); ?>
				</a>
			</div>
			<ul class="ai-chat-hero__badges">
				<li><i class="fa-solid fa-clock" aria-hidden="true"></i> 24/7 engagement</li>
				<li><i class="fa-solid fa-filter" aria-hidden="true"></i> Smart screening</li>
				<li><i class="fa-solid fa-calendar-check" aria-hidden="true"></i> EMR booking</li>
			</ul>
		</div>

		<div class="ai-chat-hero__visual pps-reveal" aria-hidden="true">
			<div class="ai-chat-float ai-chat-float--live">
				<span class="ai-chat-float__pulse"></span>
				<i class="fa-solid fa-circle"></i>
				<span>Live on homepage</span>
			</div>
			<div class="ai-chat-float ai-chat-float--booked">
				<i class="fa-solid fa-calendar-check"></i>
				<span>Appointment booked</span>
			</div>

			<div class="ai-chat-browser">
				<header class="ai-chat-browser__bar">
					<span class="ai-chat-browser__dot"></span>
					<span class="ai-chat-browser__dot"></span>
					<span class="ai-chat-browser__dot"></span>
					<div class="ai-chat-browser__url">
						<i class="fa-solid fa-lock"></i>
						<span>yourpractice.com</span>
					</div>
				</header>
				<div class="ai-chat-browser__page">
					<div class="ai-chat-browser__hero-block"></div>
					<div class="ai-chat-browser__lines">
						<span></span><span></span><span></span>
					</div>
					<div class="ai-chat-browser__cards">
						<span></span><span></span><span></span>
					</div>
				</div>
			</div>

			<div class="ai-chat-widget">
				<header class="ai-chat-widget__head">
					<span class="ai-chat-widget__avatar"><i class="fa-solid fa-robot"></i></span>
					<div>
						<strong>Practice Assistant</strong>
						<small>Online · replies instantly</small>
					</div>
					<button type="button" aria-label="Minimize"><i class="fa-solid fa-minus"></i></button>
				</header>
				<div class="ai-chat-widget__body">
					<div class="ai-chat-bubble ai-chat-bubble--bot">
						Hi! I can answer questions about our services, insurance, and help you book an appointment. How can I help today?
					</div>
					<div class="ai-chat-bubble ai-chat-bubble--user">
						Do you accept Blue Cross? I need PT for my knee.
					</div>
					<div class="ai-chat-bubble ai-chat-bubble--bot">
						Yes — we accept Blue Cross PPO and most major plans. Would you like to schedule an evaluation this week?
					</div>
					<div class="ai-chat-bubble ai-chat-bubble--user ai-chat-bubble--choice">
						Yes, Thursday works
					</div>
					<div class="ai-chat-bubble ai-chat-bubble--bot ai-chat-bubble--success">
						<i class="fa-solid fa-circle-check"></i>
						Perfect — you're booked for Thu at 2:00 PM. Confirmation sent!
					</div>
				</div>
				<footer class="ai-chat-widget__foot">
					<input type="text" readonly value="Type a message…" aria-hidden="true">
					<span class="ai-chat-widget__send"><i class="fa-solid fa-paper-plane"></i></span>
				</footer>
			</div>
		</div>
	</div>
</section>

<section class="ai-chat-metrics" aria-label="<?php esc_attr_e( 'Key benefits', 'perform-practice' ); ?>">
	<div class="pps-container">
		<div class="ai-chat-metrics__grid">
			<?php
			$metric_icons = array( 'fa-comments', 'fa-filter', 'fa-calendar-check' );
			for ( $i = 1; $i <= 3; $i++ ) :
				?>
				<article class="ai-chat-metric pps-reveal">
					<span class="ai-chat-metric__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $metric_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<div>
						<h2><?php echo esc_html( page_ai_chat( "highlight_{$i}_title" ) ); ?></h2>
						<p><?php echo esc_html( page_ai_chat( "highlight_{$i}_text" ) ); ?></p>
					</div>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-chat-capabilities" id="capabilities">
	<div class="pps-container">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_chat( 'cap_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_chat( 'cap_title' ) ); ?></h2>
			<p class="pps-section-lead"><?php echo esc_html( page_ai_chat( 'cap_lead' ) ); ?></p>
		</div>
		<p class="ai-chat-capabilities__intro pps-reveal"><?php echo esc_html( page_ai_chat( 'cap_intro' ) ); ?></p>

		<div class="ai-chat-bento">
			<?php
			$cap_icons = array(
				'fa-circle-question',
				'fa-clipboard-list',
				'fa-calendar-plus',
				'fa-moon',
				'fa-right-left',
				'fa-wand-magic-sparkles',
			);
			for ( $i = 1; $i <= 6; $i++ ) :
				$wide = ( 1 === $i || 3 === $i );
				?>
				<article class="ai-chat-bento__card pps-reveal<?php echo $wide ? ' ai-chat-bento__card--wide' : ''; ?>">
					<span class="ai-chat-bento__icon" aria-hidden="true">
						<i class="fa-solid <?php echo esc_attr( $cap_icons[ $i - 1 ] ); ?>"></i>
					</span>
					<h3><?php echo esc_html( page_ai_chat( "cap_{$i}_title" ) ); ?></h3>
					<p><?php echo esc_html( page_ai_chat( "cap_{$i}_text" ) ); ?></p>
				</article>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-chat-flow" id="flow">
	<div class="pps-container">
		<div class="ai-chat-flow__panel pps-reveal">
			<div class="ai-chat-flow__glow" aria-hidden="true"></div>
			<div class="ai-chat-flow__head">
				<p class="ai-chat-flow__eyebrow"><?php esc_html_e( 'Visitor journey', 'perform-practice' ); ?></p>
				<h2><?php esc_html_e( 'From first click to confirmed appointment', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'Every conversation follows a clear path — answer, qualify, book, and sync to your EMR without staff intervention.', 'perform-practice' ); ?></p>
			</div>
			<ol class="ai-chat-flow__steps">
				<li>
					<span class="ai-chat-flow__num">01</span>
					<div>
						<strong><?php esc_html_e( 'Visitor lands', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Chatbot greets instantly', 'perform-practice' ); ?></span>
					</div>
				</li>
				<li>
					<span class="ai-chat-flow__num">02</span>
					<div>
						<strong><?php esc_html_e( 'Questions answered', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Services, insurance, hours', 'perform-practice' ); ?></span>
					</div>
				</li>
				<li>
					<span class="ai-chat-flow__num">03</span>
					<div>
						<strong><?php esc_html_e( 'Lead screened', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Intake questions qualify fit', 'perform-practice' ); ?></span>
					</div>
				</li>
				<li>
					<span class="ai-chat-flow__num">04</span>
					<div>
						<strong><?php esc_html_e( 'Appointment booked', 'perform-practice' ); ?></strong>
						<span><?php esc_html_e( 'Written to EMR in real time', 'perform-practice' ); ?></span>
					</div>
				</li>
			</ol>
		</div>
	</div>
</section>

<section class="pps-section ai-chat-faq" id="faq">
	<div class="pps-container pps-container--narrow">
		<div class="pps-section-head pps-section-head--center pps-reveal">
			<p class="pps-eyebrow" style="justify-content:center;"><?php echo esc_html( page_ai_chat( 'faq_eyebrow' ) ); ?></p>
			<h2 class="pps-section-title"><?php echo esc_html( page_ai_chat( 'faq_title' ) ); ?></h2>
		</div>
		<div class="faq-list">
			<?php for ( $i = 1; $i <= 5; $i++ ) : ?>
				<div class="faq-item pps-reveal">
					<button class="faq-item__question" type="button" aria-expanded="false">
						<span><?php echo esc_html( page_ai_chat( "faq_{$i}_q" ) ); ?></span>
						<span class="faq-item__icon" aria-hidden="true"><i class="fa-solid fa-plus"></i></span>
					</button>
					<div class="faq-item__answer">
						<p><?php echo esc_html( page_ai_chat( "faq_{$i}_a" ) ); ?></p>
					</div>
				</div>
			<?php endfor; ?>
		</div>
	</div>
</section>

<section class="pps-section ai-chat-cta">
	<div class="pps-container">
		<div class="ai-chat-cta-panel pps-reveal">
			<div class="ai-chat-cta-panel__glow" aria-hidden="true"></div>
			<div>
				<h2 class="pps-section-title"><?php echo esc_html( page_ai_chat( 'cta_title' ) ); ?></h2>
				<p><?php echo esc_html( page_ai_chat( 'cta_text' ) ); ?></p>
			</div>
			<a class="pps-btn pps-btn--light" href="<?php echo esc_url( page_ai_chat( 'cta_button_url' ) ); ?>">
				<?php echo esc_html( page_ai_chat( 'cta_button' ) ); ?>
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
				<p><?php esc_html_e( 'Tell us about your website and scheduling workflow. We’ll show you how a custom chatbot can convert more visitors into booked patients.', 'perform-practice' ); ?></p>
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
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php esc_attr_e( 'Tell us about your website traffic and scheduling needs.', 'perform-practice' ); ?>"></textarea>
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
