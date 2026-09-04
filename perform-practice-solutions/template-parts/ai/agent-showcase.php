<?php
/**
 * Agent product showcase — Sintra-style app mockup with bottom-peeking avatars.
 * Expects $agent and $avatar_url in scope.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

if ( empty( $agent['showcase'] ) || ! is_array( $agent['showcase'] ) ) {
	return;
}

$show = $agent['showcase'];
?>
<section class="ai-agent-showcase" id="showcase" aria-label="<?php echo esc_attr( sprintf( /* translators: agent name */ __( '%s product preview', 'perform-practice' ), $agent['name'] ) ); ?>">
	<div class="ai-agent-showcase__wash" aria-hidden="true"></div>

	<div class="pps-container">
		<div class="ai-agent-showcase__head pps-reveal">
			<h2 class="ai-agent-easy-title">
				<span class="ai-agent-easy-title__lead"><?php echo esc_html( $agent['benefits_title'] ); ?></span>
				<span class="ai-agent-easy-title__on"><?php esc_html_e( 'on', 'perform-practice' ); ?></span>
				<span class="ai-agent-easy-title__switch" aria-hidden="true">
					<span class="ai-agent-easy-title__knob"></span>
				</span>
				<?php if ( ! empty( $agent['benefits_title_accent'] ) ) : ?>
					<span class="ai-agent-easy-title__accent"><?php echo esc_html( $agent['benefits_title_accent'] ); ?>.</span>
				<?php endif; ?>
			</h2>
		</div>

		<div class="ai-agent-showcase__stage pps-reveal">
			<div class="ai-agent-app">
				<aside class="ai-agent-app__sidebar">
					<div class="ai-agent-app__profile">
						<?php if ( $avatar_url ) : ?>
							<img src="<?php echo esc_url( $avatar_url ); ?>" alt="" width="64" height="64" loading="lazy">
						<?php else : ?>
							<span class="ai-agent-app__profile-fallback"><?php echo esc_html( $agent['letter'] ); ?></span>
						<?php endif; ?>
						<div>
							<strong><?php echo esc_html( $agent['name'] ); ?></strong>
							<span><?php echo esc_html( $show['sidebar_role'] ); ?></span>
						</div>
					</div>
					<button class="ai-agent-app__new" type="button" tabindex="-1">
						<i class="fa-solid fa-plus" aria-hidden="true"></i>
						<?php echo esc_html( $show['new_chat_label'] ); ?>
					</button>
					<div class="ai-agent-app__history">
						<small><?php esc_html_e( 'Queue', 'perform-practice' ); ?></small>
						<p><?php echo esc_html( $show['history_empty'] ); ?></p>
					</div>
				</aside>

				<div class="ai-agent-app__main">
					<div class="ai-agent-app__thread">
						<div class="ai-agent-app__bubble ai-agent-app__bubble--user">
							<?php echo esc_html( $show['user_message'] ); ?>
						</div>
						<div class="ai-agent-app__reply">
							<?php if ( $avatar_url ) : ?>
								<img class="ai-agent-app__reply-avatar" src="<?php echo esc_url( $avatar_url ); ?>" alt="" width="28" height="28" loading="lazy">
							<?php endif; ?>
							<div class="ai-agent-app__reply-body">
								<p><?php echo esc_html( $show['agent_message'] ); ?></p>
								<ul class="ai-agent-app__status">
									<?php foreach ( $show['status_items'] as $status ) : ?>
										<li>
											<i class="fa-solid fa-circle-check" aria-hidden="true"></i>
											<span><?php echo esc_html( $status ); ?></span>
										</li>
									<?php endforeach; ?>
								</ul>
							</div>
						</div>
					</div>

					<div class="ai-agent-app__composer">
						<span class="ai-agent-app__composer-icon" aria-hidden="true"><i class="fa-solid fa-paperclip"></i></span>
						<span class="ai-agent-app__composer-placeholder"><?php echo esc_html( $show['input_placeholder'] ); ?></span>
						<span class="ai-agent-app__composer-send" aria-hidden="true"><i class="fa-solid fa-arrow-up"></i></span>
					</div>
				</div>
			</div>

			<?php if ( $avatar_url ) : ?>
				<figure class="ai-agent-showcase__peek ai-agent-showcase__peek--left">
					<img src="<?php echo esc_url( $avatar_url ); ?>" alt="" width="280" height="280" loading="lazy" decoding="async">
				</figure>
				<figure class="ai-agent-showcase__peek ai-agent-showcase__peek--right">
					<img src="<?php echo esc_url( $avatar_url ); ?>" alt="" width="240" height="240" loading="lazy" decoding="async">
				</figure>
			<?php endif; ?>

			<a class="ai-agent-showcase__cta pps-btn pps-btn--primary ai-agent-btn-glow" href="<?php echo esc_url( $show['cta_url'] ); ?>">
				<?php echo esc_html( $show['cta_label'] ); ?>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</section>
