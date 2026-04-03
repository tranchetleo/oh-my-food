<?php
/**
 * Template Name: Accueil
 */

get_header();
?>

<section class="omf-hero" aria-labelledby="omf-hero-title">
	<div class="omf-hero__overlay">
		<div class="omf-hero__content">
			<h1 id="omf-hero-title" class="omf-hero__title">Reservez le menu qui vous convient</h1>
			<p class="omf-hero__subtitle">Decouvrez des restaurants d'exception, selectionnes par nos soins</p>
			<a class="omf-button omf-button--primary" href="<?php echo esc_url( home_url( '/restaurant/' ) ); ?>">
				Explorez nos restaurants
			</a>
		</div>
	</div>
</section>

<?php
get_footer();
