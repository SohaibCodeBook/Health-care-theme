<?php
/**
 * Template Name: AI Agent Profile
 * Description: Shared profile template for individual AI agents (Rosa, Vera, Rex, Cora, Ava).
 *
 * @package Perform_Practice
 */

$agent_slug = pps_ai_agent_current_slug();
$agent      = pps_ai_agent_get( $agent_slug );

if ( ! $agent ) {
	wp_safe_redirect( home_url( '/' ) );
	exit;
}

$avatar_url = pps_ai_agent_avatar_url( $agent['name'] );
pps_ai_agent_register_assets();
get_header();
pps_ai_agent_force_styles();
?>

<div class="ai-agent-page" data-agent="<?php echo esc_attr( $agent_slug ); ?>">

	<!-- Hero -->
	<section class="ai-agent-hero" id="top">
		<div class="ai-agent-hero__bg" aria-hidden="true">
			<div class="ai-agent-hero__glow ai-agent-hero__glow--orange"></div>
			<div class="ai-agent-hero__glow ai-agent-hero__glow--green"></div>
			<div class="ai-agent-hero__grid"></div>
		</div>

		<div class="pps-container ai-agent-hero__grid-inner">
			<div class="ai-agent-hero__content">
				<p class="ai-agent-eyebrow ai-agent-hero__enter">
					<span class="ai-agent-eyebrow__dot"></span>
					<?php echo esc_html( $agent['placement'] ); ?>
				</p>
				<h1 class="ai-agent-hero__title ai-agent-hero__enter ai-agent-hero__enter--2">
					<?php echo esc_html( $agent['hero_title'] ); ?>
				</h1>
				<p class="ai-agent-hero__lead ai-agent-hero__enter ai-agent-hero__enter--3">
					<?php echo esc_html( $agent['hero_lead'] ); ?>
				</p>
				<div class="ai-agent-hero__actions ai-agent-hero__enter ai-agent-hero__enter--4">
					<a class="pps-btn pps-btn--primary ai-agent-btn-glow" href="<?php echo esc_url( $agent['hero_cta_url'] ); ?>">
						<?php echo esc_html( $agent['hero_cta'] ); ?>
						<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
					</a>
					<a class="pps-btn pps-btn--secondary" href="#onboarding">
						<?php esc_html_e( 'See setup', 'perform-practice' ); ?>
					</a>
				</div>
				<p class="ai-agent-hero__note ai-agent-hero__enter ai-agent-hero__enter--5">
					<i class="fa-solid fa-circle-check" aria-hidden="true"></i>
					<?php echo esc_html( $agent['hero_note'] ); ?>
				</p>
			</div>

			<div class="ai-agent-hero__visual ai-agent-hero__enter ai-agent-hero__enter--3" aria-hidden="true">
				<div class="ai-agent-portrait">
					<div class="ai-agent-portrait__ring"></div>
					<div class="ai-agent-portrait__ring ai-agent-portrait__ring--2"></div>
					<?php if ( $avatar_url ) : ?>
						<img
							class="ai-agent-portrait__img"
							src="<?php echo esc_url( $avatar_url ); ?>"
							alt="<?php echo esc_attr( $agent['name'] ); ?>"
							width="420"
							height="420"
							loading="eager"
							decoding="async"
						>
					<?php else : ?>
						<div class="ai-agent-portrait__fallback"><?php echo esc_html( $agent['letter'] ); ?></div>
					<?php endif; ?>
					<div class="ai-agent-portrait__badge">
						<span><?php echo esc_html( $agent['name'] ); ?></span>
						<strong><?php echo esc_html( $agent['role'] ); ?></strong>
					</div>
				</div>

				<?php if ( ! empty( $agent['voice_sample'] ) ) : ?>
					<blockquote class="ai-agent-voice-float">
						<p>“<?php echo esc_html( $agent['voice_sample'] ); ?>”</p>
						<cite><?php echo esc_html( sprintf( /* translators: agent name */ __( '%s · sample voice', 'perform-practice' ), $agent['name'] ) ); ?></cite>
					</blockquote>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<!-- Tagline + highlight cards -->
	<section class="ai-agent-highlights" id="overview">
		<div class="pps-container">
			<p class="ai-agent-highlights__tagline pps-reveal"><?php echo esc_html( $agent['hero_tagline'] ); ?></p>
			<div class="ai-agent-highlights__grid">
				<?php foreach ( $agent['highlights'] as $i => $card ) : ?>
					<article class="ai-agent-hcard pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( $i * 0.06 ) ); ?>s">
						<span class="ai-agent-hcard__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $card['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo esc_html( $card['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Problem -->
	<section class="ai-agent-problem" id="problem">
		<div class="pps-container ai-agent-problem__inner">
			<div class="ai-agent-problem__copy pps-reveal">
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['problem_title'] ); ?></h2>
				<p><?php echo esc_html( $agent['problem_body'] ); ?></p>
				<p class="ai-agent-problem__close"><?php echo esc_html( $agent['problem_close'] ); ?></p>
				<a class="ai-agent-text-link" href="<?php echo esc_url( $agent['problem_cta_url'] ); ?>">
					<?php echo esc_html( $agent['problem_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
			<div class="ai-agent-problem__panel pps-reveal" aria-hidden="true">
				<div class="ai-agent-flow">
					<div class="ai-agent-flow__step is-done">
						<span>01</span>
						<em><?php esc_html_e( 'Referral lands', 'perform-practice' ); ?></em>
					</div>
					<div class="ai-agent-flow__step is-active">
						<span>02</span>
						<em><?php echo esc_html( sprintf( /* translators: agent name */ __( '%s reaches out', 'perform-practice' ), $agent['name'] ) ); ?></em>
					</div>
					<div class="ai-agent-flow__step">
						<span>03</span>
						<em><?php esc_html_e( 'Patient books', 'perform-practice' ); ?></em>
					</div>
					<div class="ai-agent-flow__step">
						<span>04</span>
						<em><?php esc_html_e( 'Loop closed', 'perform-practice' ); ?></em>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Onboarding -->
	<section class="ai-agent-onboard" id="onboarding">
		<div class="pps-container">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['onboard_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['onboard_title'] ); ?></h2>
				<p class="ai-agent-section-lead"><?php echo esc_html( $agent['onboard_intro'] ); ?></p>
			</div>

			<ol class="ai-agent-steps">
				<?php foreach ( $agent['onboard_steps'] as $i => $step ) : ?>
					<li class="ai-agent-step pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( $i * 0.05 ) ); ?>s">
						<span class="ai-agent-step__num"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
						<div>
							<h3><?php echo esc_html( $step['title'] ); ?></h3>
							<p><?php echo esc_html( $step['text'] ); ?></p>
						</div>
					</li>
				<?php endforeach; ?>
			</ol>

			<div class="ai-agent-section-cta pps-reveal">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( $agent['onboard_cta_url'] ); ?>">
					<?php echo esc_html( $agent['onboard_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Capabilities -->
	<section class="ai-agent-caps" id="capabilities">
		<div class="pps-container">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['cap_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['cap_title'] ); ?></h2>
				<p class="ai-agent-section-lead"><?php echo esc_html( $agent['cap_intro'] ); ?></p>
			</div>

			<div class="ai-agent-caps__grid">
				<?php foreach ( $agent['capabilities'] as $i => $item ) : ?>
					<article class="ai-agent-cap pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( ( $i % 4 ) * 0.04 ) ); ?>s">
						<span class="ai-agent-cap__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $item['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $item['title'] ); ?></h3>
						<p><?php echo esc_html( $item['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="ai-agent-section-cta pps-reveal">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( $agent['cap_cta_url'] ); ?>">
					<?php echo esc_html( $agent['cap_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Benefits cards -->
	<section class="ai-agent-benefits" id="benefits">
		<div class="pps-container">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['benefits_eyebrow'] ); ?></p>
				<p class="ai-agent-section-lead"><?php echo esc_html( $agent['benefits_intro'] ); ?></p>
			</div>

			<div class="ai-agent-benefits__grid">
				<?php foreach ( $agent['benefits'] as $i => $item ) : ?>
					<article class="ai-agent-benefit pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( $i * 0.06 ) ); ?>s">
						<span class="ai-agent-benefit__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $item['icon'] ); ?>"></i>
						</span>
						<div class="ai-agent-benefit__body">
							<h3><?php echo esc_html( $item['title'] ); ?></h3>
							<p><?php echo esc_html( $item['text'] ); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php include locate_template( 'template-parts/ai/agent-showcase.php' ); ?>

	<!-- Memory -->
	<section class="ai-agent-memory" id="memory">
		<div class="pps-container ai-agent-memory__inner">
			<div class="ai-agent-memory__intro pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['memory_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['memory_title'] ); ?></h2>
				<p class="ai-agent-section-lead"><?php echo esc_html( $agent['memory_intro'] ); ?></p>
				<a class="ai-agent-text-link" href="<?php echo esc_url( $agent['memory_cta_url'] ); ?>">
					<?php echo esc_html( $agent['memory_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
			<div class="ai-agent-memory__points">
				<?php foreach ( $agent['memory_points'] as $i => $point ) : ?>
					<article class="ai-agent-memory-card pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( $i * 0.07 ) ); ?>s">
						<span class="ai-agent-memory-card__idx"><?php echo esc_html( sprintf( '%02d', $i + 1 ) ); ?></span>
						<h3><?php echo esc_html( $point['title'] ); ?></h3>
						<p><?php echo esc_html( $point['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<!-- Security -->
	<section class="ai-agent-security" id="security">
		<div class="pps-container">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['security_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['security_title'] ); ?></h2>
				<p class="ai-agent-section-lead"><?php echo esc_html( $agent['security_intro'] ); ?></p>
			</div>

			<div class="ai-agent-security__grid">
				<?php foreach ( $agent['security_points'] as $i => $point ) : ?>
					<article class="ai-agent-security-card pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( $i * 0.06 ) ); ?>s">
						<span class="ai-agent-security-card__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $point['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $point['title'] ); ?></h3>
						<p><?php echo esc_html( $point['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="ai-agent-section-cta pps-reveal">
				<a class="ai-agent-text-link" href="<?php echo esc_url( $agent['security_cta_url'] ); ?>">
					<?php echo esc_html( $agent['security_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Why keep her -->
	<section class="ai-agent-why" id="why">
		<div class="pps-container">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['why_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['why_title'] ); ?></h2>
			</div>

			<div class="ai-agent-why__grid">
				<?php foreach ( $agent['why_cards'] as $i => $card ) : ?>
					<article class="ai-agent-why-card pps-reveal" style="--ai-delay: <?php echo esc_attr( (string) ( ( $i % 3 ) * 0.05 ) ); ?>s">
						<span class="ai-agent-why-card__icon" aria-hidden="true">
							<i class="fa-solid <?php echo esc_attr( $card['icon'] ); ?>"></i>
						</span>
						<h3><?php echo esc_html( $card['title'] ); ?></h3>
						<p><?php echo esc_html( $card['text'] ); ?></p>
					</article>
				<?php endforeach; ?>
			</div>

			<div class="ai-agent-section-cta pps-reveal">
				<a class="pps-btn pps-btn--primary ai-agent-btn-glow" href="<?php echo esc_url( $agent['why_cta_url'] ); ?>">
					<?php echo esc_html( $agent['why_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- FAQ -->
	<section class="ai-agent-faq" id="faq">
		<div class="pps-container ai-agent-faq__inner">
			<div class="ai-agent-section-head pps-reveal">
				<p class="ai-agent-eyebrow"><?php echo esc_html( $agent['faq_eyebrow'] ); ?></p>
				<h2 class="ai-agent-section-title"><?php echo esc_html( $agent['faq_title'] ); ?></h2>
			</div>

			<div class="ai-agent-faq__list">
				<?php foreach ( $agent['faqs'] as $i => $faq ) : ?>
					<div class="faq-item ai-agent-faq-item pps-reveal">
						<button class="faq-item__question" type="button" aria-expanded="false">
							<span><?php echo esc_html( $faq['q'] ); ?></span>
							<i class="fa-solid fa-plus" aria-hidden="true"></i>
						</button>
						<div class="faq-item__answer">
							<p><?php echo esc_html( $faq['a'] ); ?></p>
						</div>
					</div>
				<?php endforeach; ?>
			</div>

			<div class="ai-agent-section-cta pps-reveal">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( $agent['faq_cta_url'] ); ?>">
					<?php echo esc_html( $agent['faq_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Final CTA -->
	<section class="ai-agent-final" id="final-cta">
		<div class="pps-container">
			<div class="ai-agent-final__panel pps-reveal">
				<div class="ai-agent-final__glow" aria-hidden="true"></div>
				<?php if ( $avatar_url ) : ?>
					<img class="ai-agent-final__avatar" src="<?php echo esc_url( $avatar_url ); ?>" alt="" width="72" height="72" loading="lazy">
				<?php endif; ?>
				<h2><?php echo esc_html( $agent['final_title'] ); ?></h2>
				<p><?php echo esc_html( $agent['final_text'] ); ?></p>
				<a class="pps-btn pps-btn--primary ai-agent-btn-glow" href="<?php echo esc_url( $agent['final_cta_url'] ); ?>">
					<?php echo esc_html( $agent['final_cta'] ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section>

	<!-- Contact -->
	<section class="pps-section ai-agent-contact" id="contact">
		<div class="pps-container contact-layout">
			<div class="pps-reveal">
				<p class="pps-eyebrow"><?php esc_html_e( 'Get Started', 'perform-practice' ); ?></p>
				<h2 class="pps-section-title"><?php echo esc_html( $agent['contact_title'] ); ?></h2>
				<p><?php echo esc_html( $agent['contact_text'] ); ?></p>
				<ul class="contact-points">
					<li><i class="fa-solid fa-check" aria-hidden="true"></i> <?php echo esc_html( $agent['placement'] ); ?></li>
					<li><i class="fa-solid fa-check" aria-hidden="true"></i> <?php echo esc_html( $agent['audience'] ); ?></li>
					<li><i class="fa-solid fa-check" aria-hidden="true"></i> <?php echo esc_html( $agent['acronym'] ); ?></li>
				</ul>
			</div>
			<div class="contact-form pps-reveal">
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
						<textarea id="pps-message" name="message" rows="4" placeholder="<?php echo esc_attr( sprintf( /* translators: agent name */ __( 'Tell us about your practice and how %s could help.', 'perform-practice' ), $agent['name'] ) ); ?>"></textarea>
					</div>
					<button class="pps-btn pps-btn--primary" type="submit">
						<?php esc_html_e( 'Send Message', 'perform-practice' ); ?>
						<i class="fa-solid fa-paper-plane" aria-hidden="true"></i>
					</button>
					<div id="pps-form-message" class="form-message" role="status" aria-live="polite"></div>
				</form>
			</div>
		</div>
	</section>

</div>

<?php
get_footer();
