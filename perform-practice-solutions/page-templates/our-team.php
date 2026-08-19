<?php
/**
 * Template Name: Our Team
 * Description: Leadership team grid. Content is editable via Customizer → PPS — Service Pages → Our Team.
 *
 * @package Perform_Practice
 */

get_header();

$members = pps_team_members();
?>

<section class="team-page" id="top">
	<div class="pps-container">
		<article class="kevin-panel pps-reveal">
			<figure class="kevin-panel__photo">
				<?php
				$kevin_image = page_team( 'kevin_image' );
				$kevin_path  = str_replace( PPS_THEME_URI, PPS_THEME_DIR, $kevin_image );
				$kevin_ver   = file_exists( $kevin_path ) ? (string) filemtime( $kevin_path ) : PPS_THEME_VERSION;
				?>
				<img
					src="<?php echo esc_url( $kevin_image . ( false === strpos( $kevin_image, '?' ) ? '?ver=' . rawurlencode( $kevin_ver ) : '' ) ); ?>"
					alt="<?php echo esc_attr( page_team( 'kevin_name' ) ); ?>"
					width="640"
					height="800"
					loading="eager"
					decoding="async"
				>
			</figure>
			<div class="kevin-panel__body">
				<p class="kevin-panel__badge"><?php echo esc_html( page_team( 'kevin_badge' ) ); ?></p>
				<h1 class="kevin-panel__name"><?php echo esc_html( page_team( 'kevin_name' ) ); ?></h1>
				<p class="kevin-panel__bio"><?php echo esc_html( page_team( 'kevin_bio' ) ); ?></p>
				<p class="kevin-panel__highlight"><?php echo esc_html( page_team( 'kevin_highlight' ) ); ?></p>
				<ul class="kevin-panel__bullets">
					<li><?php echo esc_html( page_team( 'kevin_bullet_1' ) ); ?></li>
					<li><?php echo esc_html( page_team( 'kevin_bullet_2' ) ); ?></li>
					<li><?php echo esc_html( page_team( 'kevin_bullet_3' ) ); ?></li>
				</ul>
				<div class="kevin-panel__meta">
					<div>
						<h2><?php echo esc_html( page_team( 'kevin_edu_title' ) ); ?></h2>
						<ul class="kevin-panel__creds">
							<li>
								<span class="kevin-panel__mark" aria-hidden="true">NS</span>
								<span>
									<strong><?php echo esc_html( page_team( 'kevin_edu_1_org' ) ); ?></strong>
									<small><?php echo esc_html( page_team( 'kevin_edu_1_det' ) ); ?></small>
								</span>
							</li>
							<li>
								<span class="kevin-panel__mark" aria-hidden="true">CB</span>
								<span>
									<strong><?php echo esc_html( page_team( 'kevin_edu_2_org' ) ); ?></strong>
									<small><?php echo esc_html( page_team( 'kevin_edu_2_det' ) ); ?></small>
								</span>
							</li>
						</ul>
					</div>
					<div>
						<h2><?php echo esc_html( page_team( 'kevin_aff_title' ) ); ?></h2>
						<ul class="kevin-panel__creds">
							<li>
								<span class="kevin-panel__mark kevin-panel__mark--brand" aria-hidden="true">R</span>
								<span><strong><?php echo esc_html( page_team( 'kevin_aff_1_role' ) ); ?></strong>, <?php echo esc_html( page_team( 'kevin_aff_1_org' ) ); ?></span>
							</li>
							<li>
								<span class="kevin-panel__mark kevin-panel__mark--brand" aria-hidden="true">H</span>
								<span><strong><?php echo esc_html( page_team( 'kevin_aff_2_role' ) ); ?></strong>, <?php echo esc_html( page_team( 'kevin_aff_2_org' ) ); ?></span>
							</li>
							<li>
								<span class="kevin-panel__mark kevin-panel__mark--brand" aria-hidden="true">W</span>
								<span><strong><?php echo esc_html( page_team( 'kevin_aff_3_role' ) ); ?></strong>, <?php echo esc_html( page_team( 'kevin_aff_3_org' ) ); ?></span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</article>

		<header class="team-page__head pps-reveal">
			<h2 class="team-page__title"><?php echo esc_html( page_team( 'page_title' ) ); ?></h2>
		</header>

		<div class="team-grid">
			<?php foreach ( $members as $member ) : ?>
				<article class="team-card pps-reveal">
					<?php if ( ! empty( $member['image'] ) ) : ?>
						<figure class="team-card__photo">
							<img
								src="<?php echo esc_url( $member['image'] ); ?>"
								alt="<?php echo esc_attr( $member['name'] ); ?>"
								width="420"
								height="520"
								loading="lazy"
							>
						</figure>
					<?php endif; ?>

					<h2 class="team-card__name"><?php echo esc_html( $member['name'] ); ?></h2>
					<p class="team-card__role"><?php echo esc_html( $member['title'] ); ?></p>
					<p class="team-card__bio">
						<?php echo esc_html( $member['bio'] ); ?>
						<span class="team-card__more"><?php esc_html_e( 'Read More', 'perform-practice' ); ?></span>
					</p>

					<ul class="team-card__contact">
						<?php if ( ! empty( $member['phone'] ) ) : ?>
							<li>
								<i class="fa-solid fa-phone" aria-hidden="true"></i>
								<span>
									<strong><?php esc_html_e( 'Phone:', 'perform-practice' ); ?></strong>
									<a href="<?php echo esc_url( 'tel:' . preg_replace( '/[^0-9+]/', '', $member['phone'] ) ); ?>">
										<?php echo esc_html( $member['phone'] ); ?>
									</a>
								</span>
							</li>
						<?php endif; ?>
						<?php if ( ! empty( $member['email'] ) ) : ?>
							<li>
								<i class="fa-solid fa-envelope" aria-hidden="true"></i>
								<span>
									<strong><?php esc_html_e( 'Email:', 'perform-practice' ); ?></strong>
									<a href="<?php echo esc_url( 'mailto:' . $member['email'] ); ?>">
										<?php echo esc_html( $member['email'] ); ?>
									</a>
								</span>
							</li>
						<?php endif; ?>
					</ul>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();
