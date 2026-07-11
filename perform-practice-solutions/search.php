<?php
/**
 * Search results template (blog-ready).
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="page-shell">
	<div class="pps-container">
		<header class="pps-section-head">
			<h1 class="page-shell__title">
				<?php
				printf(
					/* translators: %s: search query */
					esc_html__( 'Search results for: %s', 'perform-practice' ),
					esc_html( get_search_query() )
				);
				?>
			</h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="row g-4">
				<?php
				while ( have_posts() ) :
					the_post();
					?>
					<article <?php post_class( 'col-md-6' ); ?>>
						<div class="service-card">
							<h2 class="service-card__title" style="font-size:1.15rem;">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<p class="service-card__text"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
						</div>
					</article>
				<?php endwhile; ?>
			</div>
			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p><?php esc_html_e( 'No results matched your search.', 'perform-practice' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
