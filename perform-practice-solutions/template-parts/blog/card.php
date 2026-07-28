<?php
/**
 * Blog archive card.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;
?>
<article <?php post_class( 'blog-card pps-reveal' ); ?>>
	<a class="blog-card__media" href="<?php the_permalink(); ?>" tabindex="-1" aria-hidden="true">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php the_post_thumbnail( 'large', array( 'class' => 'blog-card__image' ) ); ?>
		<?php else : ?>
			<span class="blog-card__placeholder">
				<i class="fa-solid fa-newspaper" aria-hidden="true"></i>
			</span>
		<?php endif; ?>
	</a>
	<div class="blog-card__body">
		<?php get_template_part( 'template-parts/blog/meta' ); ?>
		<h2 class="blog-card__title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h2>
		<p class="blog-card__excerpt"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
		<a class="blog-card__link" href="<?php the_permalink(); ?>">
			<?php esc_html_e( 'Read article', 'perform-practice' ); ?>
			<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
		</a>
	</div>
</article>
