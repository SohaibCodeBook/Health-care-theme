<?php
/**
 * Default page template.
 *
 * @package Perform_Practice
 */

get_header();
?>

<section class="page-shell">
	<div class="pps-container">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
			<article <?php post_class(); ?>>
				<header class="pps-section-head">
					<h1 class="page-shell__title"><?php the_title(); ?></h1>
				</header>
				<div class="entry-content">
					<?php the_content(); ?>
				</div>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php
get_footer();
