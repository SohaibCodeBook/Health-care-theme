<?php
/**
 * Single agent deep-dive card for agent suite sections.
 *
 * @package Perform_Practice
 * Expects $agent array in scope.
 */

defined( 'ABSPATH' ) || exit;

if ( empty( $agent ) ) {
	return;
}

$card_class = 'ai-suite-deepdive pps-reveal';
if ( ! empty( $agent['featured'] ) ) {
	$card_class .= ' ai-suite-deepdive--featured';
}
$avatar_url = pps_ai_agent_avatar_url( $agent['name'] );
$agent_url  = ! empty( $agent['slug'] ) ? pps_ai_agent_page_url( $agent['slug'] ) : '';
if ( $agent_url ) {
	$card_class .= ' ai-suite-deepdive--link';
}
?>
<article class="<?php echo esc_attr( $card_class ); ?>">
	<header class="ai-suite-deepdive__head">
		<?php if ( $avatar_url ) : ?>
			<div class="ai-suite-deepdive__avatar">
				<img src="<?php echo esc_url( $avatar_url ); ?>" alt="<?php echo esc_attr( $agent['name'] ); ?>" width="96" height="96" loading="lazy" decoding="async">
			</div>
		<?php else : ?>
			<div class="ai-suite-deepdive__mark" aria-hidden="true"><?php echo esc_html( $agent['letter'] ); ?></div>
		<?php endif; ?>
		<div>
			<?php if ( $agent_url ) : ?>
				<h3><a href="<?php echo esc_url( $agent_url ); ?>"><?php echo esc_html( $agent['name'] ); ?></a></h3>
			<?php else : ?>
				<h3><?php echo esc_html( $agent['name'] ); ?></h3>
			<?php endif; ?>
			<p class="ai-suite-deepdive__title"><?php echo esc_html( $agent['title'] ); ?></p>
			<p class="ai-suite-deepdive__audience"><?php echo esc_html( $agent['audience'] ); ?></p>
		</div>
	</header>
	<p class="ai-suite-deepdive__placement"><?php echo esc_html( $agent['placement'] ); ?></p>
	<ul class="ai-suite-acronym ai-suite-acronym--inline">
		<?php foreach ( $agent['letters'] as $part ) : ?>
			<li><span><?php echo esc_html( $part['l'] ); ?></span> <?php echo esc_html( $part['w'] ); ?></li>
		<?php endforeach; ?>
	</ul>
	<p class="ai-suite-deepdive__bio"><?php echo esc_html( $agent['bio'] ); ?></p>
	<blockquote class="ai-suite-deepdive__voice">
		<p><?php echo esc_html( $agent['voice'] ); ?></p>
		<cite><?php esc_html_e( 'Sample voice line', 'perform-practice' ); ?></cite>
	</blockquote>
	<?php if ( $agent_url ) : ?>
		<a class="ai-suite-deepdive__cta" href="<?php echo esc_url( $agent_url ); ?>">
			<?php echo esc_html( sprintf( /* translators: agent name */ __( 'Meet %s', 'perform-practice' ), $agent['name'] ) ); ?>
			<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
		</a>
	<?php endif; ?>
</article>
