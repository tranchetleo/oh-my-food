<?php
/**
 * Header template for the Oh My Food child theme.
 *
 * @package OhMyFood
 */
?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">
		<?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?>
	</a>

	<header id="masthead" class="site-header omf-header">
		<div class="omf-header__inner">
			<div class="omf-header__branding">
				<?php if ( has_custom_logo() ) : ?>
					<div class="omf-header__logo">
						<?php the_custom_logo(); ?>
					</div>
				<?php endif; ?>
			</div>

			<nav class="omf-header__nav" aria-label="<?php esc_attr_e( 'Primary menu', 'twentytwentyone' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'primary',
						'container'      => false,
						'menu_class'     => 'omf-header__menu',
						'fallback_cb'    => false,
						'depth'          => 2,
					)
				);
				?>
			</nav>
		</div>
	</header>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
