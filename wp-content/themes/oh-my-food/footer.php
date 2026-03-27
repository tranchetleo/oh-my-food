<?php
/**
 * Footer template for the Oh My Food child theme.
 *
 * @package OhMyFood
 */
?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<section class="newsletter-box omf-newsletter" aria-labelledby="newsletter-title">
		<div class="omf-newsletter__inner">
			<div class="omf-newsletter__content">
				<p id="newsletter-title" class="newsletter-title omf-newsletter__title">
					<?php esc_html_e( 'La newsletter Ohmyfood', 'oh-my-food' ); ?>
				</p>
				<p class="newsletter-text omf-newsletter__text">
					<?php esc_html_e( 'Recevez nos nouveautes, nos coups de coeur et les prochaines adresses a decouvrir directement dans votre boite mail.', 'oh-my-food' ); ?>
				</p>
			</div>

			<div class="omf-newsletter__form">
				<?php echo do_shortcode( '[contact-form-7 id="8cccb11" title="Formulaire newsletters"]' ); ?>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>

	<?php
	$home_url            = home_url( '/' );
	$about_page          = get_page_by_path( 'a-propos' );
	$contact_page        = get_page_by_path( 'contact' );
	$legal_notice_page   = get_page_by_path( 'mentions-legales' );
	$about_url           = $about_page ? get_permalink( $about_page ) : home_url( '/a-propos/' );
	$contact_url         = $contact_page ? get_permalink( $contact_page ) : home_url( '/contact/' );
	$legal_notice_url    = $legal_notice_page ? get_permalink( $legal_notice_page ) : home_url( '/mentions-legales/' );
	?>

	<footer id="colophon" class="site-footer omf-footer">
		<div class="omf-footer__inner">
			<div class="omf-footer__links-wrapper">
				<div class="omf-footer__links-block">
					<h2 class="omf-footer__heading"><?php esc_html_e( 'Liens utiles', 'oh-my-food' ); ?></h2>
					<ul class="omf-footer__links" role="list">
						<li><a href="<?php echo esc_url( $home_url ); ?>"><?php esc_html_e( 'Accueil', 'oh-my-food' ); ?></a></li>
						<li><a href="<?php echo esc_url( $about_url ); ?>"><?php esc_html_e( 'A propos', 'oh-my-food' ); ?></a></li>
						<li><a href="<?php echo esc_url( $contact_url ); ?>"><?php esc_html_e( 'Contact', 'oh-my-food' ); ?></a></li>
						<li><a href="<?php echo esc_url( $legal_notice_url ); ?>"><?php esc_html_e( 'Mentions legales', 'oh-my-food' ); ?></a></li>
					</ul>
				</div>

				<?php if ( has_nav_menu( 'footer' ) ) : ?>
					<nav class="omf-footer__nav" aria-label="<?php esc_attr_e( 'Footer menu', 'twentytwentyone' ); ?>">
						<h2 class="omf-footer__heading"><?php esc_html_e( 'Navigation', 'oh-my-food' ); ?></h2>
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'container'      => false,
								'menu_class'     => 'omf-footer__menu',
								'fallback_cb'    => false,
								'depth'          => 1,
							)
						);
						?>
					</nav>
				<?php endif; ?>
			</div>
			<div class="omf-footer__brand">
				<?php if ( has_custom_logo() ) : ?>
					<div class="omf-footer__brand-link omf-footer__brand-logo">
						<?php the_custom_logo(); ?>
					</div>
				<?php else : ?>
					<a class="omf-footer__brand-link" href="<?php echo esc_url( $home_url ); ?>">
						<span class="omf-footer__brand-text"><?php bloginfo( 'name' ); ?></span>
					</a>
				<?php endif; ?>

				<p class="omf-footer__description">
					<?php esc_html_e( 'Ohmyfood sélectionne avec exigence les meilleurs restaurants gastronomiques afin de vous garantir une expérience culinaire unique. Réservez facilement une table dans des établissements d’exception et profitez d’un service pensé pour les amateurs de haute gastronomie.', 'oh-my-food' ); ?>
				</p>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
