<?php
/**
 * Blog post meta line — date, categories, reading time.
 *
 * @package Perform_Practice
 */

defined( 'ABSPATH' ) || exit;

$show_reading_time = true;
if ( isset( $args ) && is_array( $args ) && array_key_exists( 'reading_time', $args ) ) {
	$show_reading_time = (bool) $args['reading_time'];
}
?>
<ul class="blog-meta">
	<li>
		<i class="fa-regular fa-calendar" aria-hidden="true"></i>
		<time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>"><?php echo esc_html( get_the_date() ); ?></time>
	</li>
	<?php
	$categories = get_the_category();
	if ( $categories ) :
		?>
		<li>
			<i class="fa-regular fa-folder-open" aria-hidden="true"></i>
			<?php
			$cat_links = array();
			foreach ( $categories as $category ) {
				$cat_links[] = sprintf(
					'<a href="%1$s">%2$s</a>',
					esc_url( get_category_link( $category->term_id ) ),
					esc_html( $category->name )
				);
			}
			echo wp_kses_post( implode( ', ', $cat_links ) );
			?>
		</li>
	<?php endif; ?>
	<?php if ( $show_reading_time && function_exists( 'pps_blog_reading_time' ) ) : ?>
		<li>
			<i class="fa-regular fa-clock" aria-hidden="true"></i>
			<?php
			$minutes = pps_blog_reading_time();
			printf(
				/* translators: %d: minutes */
				esc_html( _n( '%d min read', '%d min read', $minutes, 'perform-practice' ) ),
				(int) $minutes
			);
			?>
		</li>
	<?php endif; ?>
</ul>
