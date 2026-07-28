<?php
/**
 * Search results template.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="blog-archive-hero blog-archive-hero--compact">
	<div class="pps-container blog-archive-hero__inner">
		<p class="pps-eyebrow blog-archive-hero__eyebrow"><?php esc_html_e( 'Search', 'perform-practice' ); ?></p>
		<h1 class="blog-archive-hero__title">
			<?php
			printf(
				/* translators: %s: search query */
				esc_html__( 'Results for “%s”', 'perform-practice' ),
				esc_html( get_search_query() )
			);
			?>
		</h1>
	</div>
</section>

<section class="pps-section blog-archive">
	<div class="pps-container">
		<?php if ( have_posts() ) : ?>
			<div class="blog-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/card' );
				endwhile;
				?>
			</div>
			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Search pagination', 'perform-practice' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<div class="blog-empty">
				<p><?php esc_html_e( 'No results matched your search.', 'perform-practice' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
