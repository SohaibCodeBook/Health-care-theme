<?php
/**
 * Blog post tag pills.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$tags = get_the_tags();
if ( ! $tags ) {
	return;
}
?>
<div class="blog-tags">
	<span class="blog-tags__label"><?php esc_html_e( 'Tags', 'perform-practice' ); ?></span>
	<ul class="blog-tags__list">
		<?php foreach ( $tags as $tag ) : ?>
			<li>
				<a class="blog-tags__pill" href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>">
					<?php echo esc_html( $tag->name ); ?>
				</a>
			</li>
		<?php endforeach; ?>
	</ul>
</div>
