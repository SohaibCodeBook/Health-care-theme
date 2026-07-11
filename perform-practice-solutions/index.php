<?php
/**
 * Main index template (blog-ready fallback).
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="page-shell">
	<div class="pps-container">
		<?php if ( have_posts() ) : ?>
			<header class="pps-section-head">
				<h1 class="page-shell__title">
					<?php
					if ( is_home() && ! is_front_page() ) {
						single_post_title();
					} else {
						esc_html_e( 'Latest Posts', 'perform-practice' );
					}
					?>
				</h1>
			</header>

			<div class="row g-4">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'col-md-6 col-lg-4' ); ?>>
						<div class="service-card">
							<h2 class="service-card__title" style="font-size:1.15rem;">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="service-card__text"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
							<a class="service-card__link" href="<?php the_permalink(); ?>">
								<?php esc_html_e( 'Read more', 'perform-practice' ); ?>
								<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<div class="mt-5">
				<?php the_posts_pagination(); ?>
			</div>
		<?php else : ?>
			<h1 class="page-shell__title"><?php esc_html_e( 'Nothing found', 'perform-practice' ); ?></h1>
			<p><?php esc_html_e( 'No posts are available yet.', 'perform-practice' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
