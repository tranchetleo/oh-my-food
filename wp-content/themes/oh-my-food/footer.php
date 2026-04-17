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

	<div id="omf-contest-popup" class="omf-popup" aria-hidden="true" hidden>
		<div class="omf-popup__overlay" data-omf-popup-close></div>
		<div
			class="omf-popup__dialog"
			role="dialog"
			aria-modal="true"
			aria-labelledby="omf-popup-title"
			aria-describedby="omf-popup-description omf-popup-sr-note"
		>
			<button
				type="button"
				class="omf-popup__close"
				data-omf-popup-close
				aria-label="<?php esc_attr_e( 'Fermer la fenetre du jeu concours', 'oh-my-food' ); ?>"
			>
				<span aria-hidden="true">&times;</span>
			</button>

			<div class="omf-popup__content">
				<div class="omf-popup__media">
					<img
						class="omf-popup__image"
						src="<?php echo esc_url( get_stylesheet_directory_uri() . '/service_1.jpg' ); ?>"
						alt="<?php esc_attr_e( 'Visuel temporaire de la roue du jeu concours Ohmyfood', 'oh-my-food' ); ?>"
						loading="lazy"
					/>
				</div>

				<div class="omf-popup__body">
					<p class="omf-popup__eyebrow"><?php esc_html_e( 'Jeu concours', 'oh-my-food' ); ?></p>
					<h2 id="omf-popup-title" class="omf-popup__title"><?php esc_html_e( 'Tentez votre chance !', 'oh-my-food' ); ?></h2>
					<p id="omf-popup-description" class="omf-popup__text">
						<?php esc_html_e( 'Participez au tirage et gagnez une experience gastronomique exclusive dans un restaurant partenaire.', 'oh-my-food' ); ?>
					</p>

					<?php
					echo oh_my_food_render_cf7_form(
						OH_MY_FOOD_CF7_CONTEST_FORM_ID,
						'Jeu concours',
						'omf-popup__form omf-cf7 omf-cf7--contest'
					);
					?>

					<p id="omf-popup-sr-note" class="screen-reader-text">
						<?php esc_html_e( 'Le formulaire envoie votre participation au jeu concours.', 'oh-my-food' ); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
