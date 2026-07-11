<?php
/**
 * Theme header.
 *
 * @package Perform_Practice
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#main-content"><?php esc_html_e( 'Skip to content', 'perform-practice' ); ?></a>

<div class="nav-backdrop" id="nav-backdrop" hidden></div>

<header class="site-header" id="site-header">
	<div class="pps-container site-header__inner">
		<div class="site-branding">
			<?php pps_the_logo( 'header' ); ?>
		</div>

		<button
			class="nav-toggle"
			id="nav-toggle"
			type="button"
			aria-controls="primary-navigation"
			aria-expanded="false"
			aria-label="<?php esc_attr_e( 'Toggle navigation', 'perform-practice' ); ?>"
		>
			<span class="nav-toggle__bars" aria-hidden="true">
				<span></span><span></span><span></span>
			</span>
		</button>

		<nav class="primary-nav" id="primary-navigation" aria-label="<?php esc_attr_e( 'Primary', 'perform-practice' ); ?>">
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_class'     => 'primary-menu',
					'container'      => false,
					'fallback_cb'    => 'pps_fallback_menu',
					'walker'         => new PPS_Nav_Walker(),
					'depth'          => 2,
				)
			);
			?>
			<div class="mobile-nav-cta d-lg-none">
				<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( site_data( 'cta_url' ) ); ?>">
					<?php echo esc_html( site_data( 'cta_label' ) ); ?>
					<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
				</a>
			</div>
		</nav>

		<div class="header-cta d-none d-lg-block">
			<a class="pps-btn pps-btn--primary" href="<?php echo esc_url( site_data( 'cta_url' ) ); ?>">
				<span><?php echo esc_html( site_data( 'cta_label' ) ); ?></span>
				<i class="fa-solid fa-arrow-right" aria-hidden="true"></i>
			</a>
		</div>
	</div>
</header>

<main id="main-content">
