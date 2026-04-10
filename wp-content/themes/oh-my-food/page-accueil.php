<?php
/**
 * Template Name: Accueil
 */

$restaurant_page = get_page_by_path('restaurant');
$restaurant_url = $restaurant_page ? get_permalink($restaurant_page) : home_url('/restaurant/');

$restaurants = array(
	array(
		'image'   => 'resautant_1.jpg',
		'title'   => 'La bouchee de chef',
		'address' => '18 rue des Archives, Paris 4e',
		'rating'  => 4.5,
		'reviews' => 128,
		'is_new'  => true,
	),
	array(
		'image'   => 'resautant_2.jpg',
		'title'   => 'Maison Aveline',
		'address' => '7 place Bellecour, Lyon 2e',
		'rating'  => 4.0,
		'reviews' => 94,
	),
	array(
		'image'   => 'resautant_3.jpg',
		'title'   => 'L\'Atelier Mazarine',
		'address' => '42 boulevard Saint Germain, Paris 6e',
		'rating'  => 4.5,
		'reviews' => 173,
		'is_new'  => true,
	),
	array(
		'image'   => 'resautant_4.jpg',
		'title'   => 'Villa Celeste',
		'address' => '11 quai du Port, Marseille 2e',
		'rating'  => 3.5,
		'reviews' => 61,
	),
	array(
		'image'   => 'resautant_5.jpg',
		'title'   => 'Le Salon Vendome',
		'address' => '5 rue de la Paix, Paris 2e',
		'rating'  => 5.0,
		'reviews' => 212,
		'is_new'  => true,
	),
	array(
		'image'   => 'resautant_6.jpg',
		'title'   => 'Palais des Saveurs',
		'address' => '26 cours Mirabeau, Aix en Provence',
		'rating'  => 4.5,
		'reviews' => 147,
	),
	array(
		'image'   => 'resautant_7.jpg',
		'title'   => 'Le Jardin Imperial',
		'address' => '14 rue de la Monnaie, Lille',
		'rating'  => 4.0,
		'reviews' => 83,
	),
	array(
		'image'   => 'resautant_8.jpg',
		'title'   => 'Maison Saphir',
		'address' => '33 allee de Tourny, Bordeaux',
		'rating'  => 4.5,
		'reviews' => 156,
		'is_new'  => true,
	),
	array(
		'image'   => 'resautant_9.jpg',
		'title'   => 'Les Terrasses du Roy',
		'address' => '9 rue du Chapitre, Toulouse',
		'rating'  => 3.5,
		'reviews' => 58,
	),
	array(
		'image'   => 'resautant_10.jpg',
		'title'   => 'Le Comptoir Montaigne',
		'address' => '21 avenue Montaigne, Paris 8e',
		'rating'  => 4.0,
		'reviews' => 109,
	),
	array(
		'image'   => 'resautant_11.jpg',
		'title'   => 'Manoir des Brumes',
		'address' => '3 rue du General Lanrezac, Nantes',
		'rating'  => 4.5,
		'reviews' => 137,
	),
	array(
		'image'   => 'resautant_12.jpg',
		'title'   => 'Le Grand Cypres',
		'address' => '12 place du Theatre, Strasbourg',
		'rating'  => 4.0,
		'reviews' => 91,
	),
);

$star_icons = array(
	'full'  => get_stylesheet_directory_uri() . '/star-full.png',
	'half'  => get_stylesheet_directory_uri() . '/star-half.png',
	'empty' => get_stylesheet_directory_uri() . '/star-empty.png',
);

get_header();
?>

<section class="omf-hero" aria-labelledby="omf-hero-title">
	<div class="omf-hero__overlay">
		<div class="omf-hero__content">
			<h1 id="omf-hero-title" class="omf-hero__title">Reservez le menu qui vous convient</h1>
			<p class="omf-hero__subtitle">Decouvrez des restaurants d'exception, selectionnes par nos soins</p>
			<a class="omf-button omf-button--primary" href="<?php echo esc_url(home_url('/restaurant/')); ?>">
				Explorez nos restaurants
			</a>
		</div>
	</div>
</section>

<section id="restaurants" class="omf-home-restaurants" aria-labelledby="omf-home-restaurants-title">
	<div class="omf-home-restaurants__inner">
		<h2 id="omf-home-restaurants-title" class="omf-home-restaurants__title">Decouvrez les restaurants</h2>

		<div class="omf-home-restaurants__grid">
			<?php foreach ($restaurants as $restaurant): ?>
				<article class="omf-restaurant-card">
					<a class="omf-restaurant-card__link" href="<?php echo esc_url($restaurant_url); ?>">
						<div class="omf-restaurant-card__media">
							<?php if (! empty($restaurant['is_new'])) : ?>
								<span class="omf-restaurant-card__badge">Nouveau</span>
							<?php endif; ?>
							<img class="omf-restaurant-card__image"
								src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $restaurant['image']); ?>"
								alt="<?php echo esc_attr($restaurant['title']); ?>" loading="lazy" />
						</div>

						<div class="omf-restaurant-card__content">
							<?php
							$full_stars  = (int) floor($restaurant['rating']);
							$has_half    = ((float) $restaurant['rating'] - $full_stars) >= 0.5;
							$empty_stars = 5 - $full_stars - ($has_half ? 1 : 0);
							?>
							<div class="omf-restaurant-card__rating" aria-label="<?php echo esc_attr(sprintf('Note de %s sur 5', number_format((float) $restaurant['rating'], 1, ',', ''))); ?>">
								<div class="omf-restaurant-card__rating-left">
									<?php for ($i = 0; $i < $full_stars; $i++) : ?>
										<img class="omf-restaurant-card__star" src="<?php echo esc_url($star_icons['full']); ?>" alt="" aria-hidden="true" loading="lazy" />
									<?php endfor; ?>

									<?php if ($has_half) : ?>
										<img class="omf-restaurant-card__star" src="<?php echo esc_url($star_icons['half']); ?>" alt="" aria-hidden="true" loading="lazy" />
									<?php endif; ?>

									<?php for ($i = 0; $i < $empty_stars; $i++) : ?>
										<img class="omf-restaurant-card__star" src="<?php echo esc_url($star_icons['empty']); ?>" alt="" aria-hidden="true" loading="lazy" />
									<?php endfor; ?>

									<span class="omf-restaurant-card__rating-value"><?php echo esc_html(number_format((float) $restaurant['rating'], 1, ',', '')); ?></span>
								</div>
								<span class="omf-restaurant-card__reviews">(<?php echo esc_html($restaurant['reviews']); ?> avis)</span>
							</div>
							<h3 class="omf-restaurant-card__title"><?php echo esc_html($restaurant['title']); ?></h3>
							<p class="omf-restaurant-card__subtitle"><?php echo esc_html($restaurant['address']); ?></p>
						</div>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();
