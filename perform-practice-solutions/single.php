<?php
/**
 * Single blog post template.
 *
 * @package Perform_Practice
 */

get_header();

while ( have_posts() ) :
	the_post();
	?>
	<article <?php post_class( 'blog-single' ); ?>>
		<header class="blog-single-hero">
			<div class="pps-container blog-single-hero__inner">
				<p class="pps-eyebrow blog-single-hero__eyebrow"><?php esc_html_e( 'Blog', 'perform-practice' ); ?></p>
				<?php get_template_part( 'template-parts/blog/meta' ); ?>
				<h1 class="blog-single-hero__title"><?php the_title(); ?></h1>
			</div>
			<?php if ( has_post_thumbnail() ) : ?>
				<div class="pps-container blog-single-hero__media-wrap">
					<figure class="blog-single-hero__media">
						<?php the_post_thumbnail( 'full', array( 'class' => 'blog-single-hero__image' ) ); ?>
					</figure>
				</div>
			<?php endif; ?>
		</header>

		<div class="pps-section blog-single-body">
			<div class="pps-container">
				<div class="blog-single-layout">
					<div class="entry-content blog-entry">
						<?php the_content(); ?>
					</div>

					<aside class="blog-single-aside">
						<div class="blog-aside-card">
							<h2><?php esc_html_e( 'Article details', 'perform-practice' ); ?></h2>
							<?php get_template_part( 'template-parts/blog/meta' ); ?>
						</div>

						<div class="blog-aside-card blog-aside-card--cta">
							<h2><?php esc_html_e( 'Grow your practice', 'perform-practice' ); ?></h2>
							<p><?php esc_html_e( 'Talk with our team about billing, credentialing, marketing, or AI automation for your practice.', 'perform-practice' ); ?></p>
							<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( home_url( '/contact-us/#contact' ) ); ?>">
								<?php esc_html_e( 'Book a Strategy Session', 'perform-practice' ); ?>
								<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
							</a>
						</div>
					</aside>
				</div>

				<footer class="blog-single-footer">
					<?php get_template_part( 'template-parts/blog/tags' ); ?>
					<a class="blog-back-link" href="<?php echo esc_url( pps_blog_url() ); ?>">
						<i class="fa-solid fa-arrow-left" aria-hidden="true"></i>
						<?php esc_html_e( 'Back to all articles', 'perform-practice' ); ?>
					</a>
				</footer>
			</div>
		</div>
	</article>
	<?php
endwhile;

get_footer();
