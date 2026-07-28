<?php
/**
 * Blog posts index (Posts page).
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="blog-archive-hero">
	<div class="pps-container blog-archive-hero__inner">
		<p class="pps-eyebrow blog-archive-hero__eyebrow"><?php esc_html_e( 'Practice Insights', 'perform-practice' ); ?></p>
		<h1 class="blog-archive-hero__title">
			<?php
			if ( is_home() && ! is_front_page() ) {
				single_post_title();
			} else {
				esc_html_e( 'Blog', 'perform-practice' );
			}
			?>
		</h1>
		<p class="blog-archive-hero__lead"><?php echo esc_html( pps_blog_archive_lead() ); ?></p>
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

			<nav class="blog-pagination" aria-label="<?php esc_attr_e( 'Blog pagination', 'perform-practice' ); ?>">
				<?php
				the_posts_pagination(
					array(
						'mid_size'  => 2,
						'prev_text' => '<i class="fa-solid fa-arrow-left" aria-hidden="true"></i> ' . esc_html__( 'Previous', 'perform-practice' ),
						'next_text' => esc_html__( 'Next', 'perform-practice' ) . ' <i class="fa-solid fa-arrow-right" aria-hidden="true"></i>',
					)
				);
				?>
			</nav>
		<?php else : ?>
			<div class="blog-empty pps-reveal">
				<h2><?php esc_html_e( 'No posts yet', 'perform-practice' ); ?></h2>
				<p><?php esc_html_e( 'When you publish your first article, it will appear here automatically.', 'perform-practice' ); ?></p>
			</div>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
