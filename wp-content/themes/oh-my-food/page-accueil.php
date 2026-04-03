<?php
/**
 * Template Name: Accueil
 */

$restaurant_page = get_page_by_path('restaurant');
$restaurant_url = $restaurant_page ? get_permalink($restaurant_page) : home_url('/restaurant/');

$restaurants = array(
	array(
		'image' => 'resautant_1.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Menu signature et service raffine',
	),
	array(
		'image' => 'resautant_2.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Cuisine de saison et accords gourmands',
	),
	array(
		'image' => 'resautant_3.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Ambiance chaleureuse au coeur de la ville',
	),
	array(
		'image' => 'resautant_4.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Terrasse elegante et carte creative',
	),
	array(
		'image' => 'resautant_5.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Adresse intimiste pour diners d exception',
	),
	array(
		'image' => 'resautant_6.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Saveurs francaises revisitees avec finesse',
	),
	array(
		'image' => 'resautant_7.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Cadre lumineux et cuisine inspiree',
	),
	array(
		'image' => 'resautant_8.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Selection premium pour vos repas d affaires',
	),
	array(
		'image' => 'resautant_9.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Carte contemporaine et produits choisis',
	),
	array(
		'image' => 'resautant_10.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Atmosphere feutree et presentation soignee',
	),
	array(
		'image' => 'resautant_11.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Escapade culinaire au decor authentique',
	),
	array(
		'image' => 'resautant_12.jpg',
		'title' => 'La bouchee de chef',
		'subtitle' => 'Cuisine de chef pour moments memorables',
	),
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

<section class="omf-home-restaurants" aria-labelledby="omf-home-restaurants-title">
	<div class="omf-home-restaurants__inner">
		<h2 id="omf-home-restaurants-title" class="omf-home-restaurants__title">Decouvrez les restaurants</h2>

		<div class="omf-home-restaurants__grid">
			<?php foreach ($restaurants as $restaurant): ?>
				<article class="omf-restaurant-card">
					<a class="omf-restaurant-card__link" href="<?php echo esc_url($restaurant_url); ?>">
						<div class="omf-restaurant-card__media">
							<img class="omf-restaurant-card__image"
								src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $restaurant['image']); ?>"
								alt="<?php echo esc_attr($restaurant['title']); ?>" loading="lazy" />
						</div>

						<div class="omf-restaurant-card__content">
							<h3 class="omf-restaurant-card__title"><?php echo esc_html($restaurant['title']); ?></h3>
							<p class="omf-restaurant-card__subtitle"><?php echo esc_html($restaurant['subtitle']); ?></p>
						</div>
					</a>
				</article>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php
get_footer();
