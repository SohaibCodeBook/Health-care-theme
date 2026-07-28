<?php
/**
 * Main index template fallback.
 *
 * @package Perform_Practice
 */

if ( is_home() ) {
	load_template( get_template_directory() . '/home.php', true );
	return;
}

get_header();
?>

<section class="pps-section blog-archive">
	<div class="pps-container">
		<header class="pps-section-head">
			<h1 class="page-shell__title"><?php esc_html_e( 'Latest Posts', 'perform-practice' ); ?></h1>
		</header>

		<?php if ( have_posts() ) : ?>
			<div class="blog-grid">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/blog/card' );
				endwhile;
				?>
			</div>
			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Posts pagination', 'perform-practice' ); ?>">
				<?php the_posts_pagination(); ?>
			</nav>
		<?php else : ?>
			<p><?php esc_html_e( 'No posts are available yet.', 'perform-practice' ); ?></p>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
