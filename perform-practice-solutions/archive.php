<?php
/**
 * Archive template — categories, tags, dates, authors.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="blog-archive-hero">
	<div class="pps-container blog-archive-hero__inner">
		<p class="pps-eyebrow blog-archive-hero__eyebrow"><?php esc_html_e( 'Practice Insights', 'perform-practice' ); ?></p>
		<h1 class="blog-archive-hero__title"><?php the_archive_title(); ?></h1>
		<?php if ( get_the_archive_description() ) : ?>
			<div class="blog-archive-hero__lead"><?php the_archive_description(); ?></div>
		<?php endif; ?>
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
			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Archive pagination', 'perform-practice' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<div class="blog-empty">
				<p><?php esc_html_e( 'No posts found in this archive.', 'perform-practice' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
