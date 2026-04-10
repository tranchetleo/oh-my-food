<?php
/**
 * Template Name: Restaurant
 */

$restaurant = array(
	'name'              => 'La bouchee de chef',
	'address'           => '7 rue des Champs Elysees',
	'rating'            => 5.0,
	'tags'              => array('Vegetarien', 'Gluten Free'),
	'hero_image'        => 'resautant_1.jpg',
	'reservation_image' => 'resautant_11.jpg',
);

$description_paragraphs = array(
	'Situé à quelques pas de l’avenue des Champs-Élysées, La Bouchée du Chef est un restaurant gastronomique qui célèbre la cuisine française contemporaine. Dans un cadre élégant et chaleureux, l’établissement propose une expérience culinaire raffinée où chaque détail est pensé pour sublimer les produits de saison.',
	'Aux commandes de la cuisine, le chef revisite les grands classiques de la gastronomie française avec créativité et précision. Les plats mettent en avant des ingrédients soigneusement sélectionnés auprès de producteurs locaux et sont présentés avec un dressage artistique qui reflète l’exigence et la passion de la brigade.',
	'La carte évolue au fil des saisons afin de garantir fraîcheur et authenticité. Les convives peuvent ainsi découvrir des créations originales qui allient tradition et modernité, accompagnées d’une sélection de vins choisis pour sublimer chaque plat.',
	'Que ce soit pour un dîner romantique, une soirée entre amis ou une occasion spéciale, La Bouchée du Chef promet une expérience gastronomique mémorable au cœur de Paris.',
);

$reviews = array(
	array(
		'initials' => 'TL',
		'name'     => 'Thomas L.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Une expérience exceptionnelle. Les plats sont aussi beaux que délicieux et le service est irréprochable. Nous avons passé une soirée mémorable.',
		'tone'     => 'charcoal',
	),
	array(
		'initials' => 'CM',
		'name'     => 'Claire M.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Cuisine raffinée et créative. Chaque assiette était une surprise. Mention spéciale pour le dessert au chocolat qui était incroyable.',
		'tone'     => 'linen',
	),
	array(
		'initials' => 'JR',
		'name'     => 'Julien R.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Très bon restaurant gastronomique avec une ambiance élégante. Le service est attentif et les produits sont d’une grande qualité.',
		'tone'     => 'forest',
	),
	array(
		'initials' => 'SD',
		'name'     => 'Sophie D.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Une superbe découverte près des Champs-Élysées. Les saveurs sont parfaitement équilibrées et la présentation des plats est magnifique.',
		'tone'     => 'copper',
	),
	array(
		'initials' => 'MB',
		'name'     => 'Marc B.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Excellent dîner. Le menu dégustation vaut vraiment le détour. Le cadre est chic sans être trop formel.',
		'tone'     => 'plum',
	),
	array(
		'initials' => 'CP',
		'name'     => 'Camille P.',
		'date'     => '21 Fevrier 2026',
		'content'  => 'Un restaurant parfait pour une occasion spéciale. L’équipe est très accueillante et la cuisine est tout simplement remarquable.',
		'tone'     => 'ink',
	),
);

$star_icons = array(
	'full'  => get_stylesheet_directory_uri() . '/star-full.png',
	'half'  => get_stylesheet_directory_uri() . '/star-half.png',
	'empty' => get_stylesheet_directory_uri() . '/star-empty.png',
);

$rating_label    = sprintf('Note de %s sur 5', number_format((float) $restaurant['rating'], 1, ',', ''));
$reservation_url = get_permalink() ? get_permalink() . '#reservation' : '#reservation';

get_header();
?>

<div class="omf-restaurant-page">
	<section class="omf-restaurant-hero" aria-labelledby="omf-restaurant-title">
		<div class="omf-restaurant-hero__inner">
			<div class="omf-restaurant-hero__media">
				<img
					class="omf-restaurant-hero__image"
					src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $restaurant['hero_image']); ?>"
					alt="<?php echo esc_attr($restaurant['name']); ?>"
				/>
			</div>

			<div class="omf-restaurant-hero__details">
				<div class="omf-restaurant-hero__text">
					<h1 id="omf-restaurant-title" class="omf-restaurant-hero__title"><?php echo esc_html($restaurant['name']); ?></h1>
					<p class="omf-restaurant-hero__address">
						<span class="omf-restaurant-hero__pin" aria-hidden="true"></span>
						<span><?php echo esc_html($restaurant['address']); ?></span>
					</p>

					<ul class="omf-restaurant-hero__tags" role="list">
						<?php foreach ($restaurant['tags'] as $tag) : ?>
							<li class="omf-restaurant-hero__tag"><?php echo esc_html($tag); ?></li>
						<?php endforeach; ?>
					</ul>
				</div>

				<div class="omf-restaurant-hero__actions">
					<div class="omf-restaurant-hero__rating" aria-label="<?php echo esc_attr($rating_label); ?>">
						<?php for ($i = 0; $i < 5; $i++) : ?>
							<img class="omf-restaurant-hero__star" src="<?php echo esc_url($star_icons['full']); ?>" alt="" aria-hidden="true" loading="lazy" />
						<?php endfor; ?>
					</div>

					<a class="omf-button omf-button--primary omf-restaurant-hero__cta" href="<?php echo esc_url($reservation_url); ?>">
						Reserver
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="omf-restaurant-section omf-restaurant-section--description" aria-labelledby="omf-restaurant-description-title">
		<div class="omf-restaurant-section__inner">
			<h2 id="omf-restaurant-description-title" class="omf-restaurant-section__title">Description</h2>

			<div class="omf-restaurant-description">
				<?php foreach ($description_paragraphs as $paragraph) : ?>
					<p><?php echo esc_html($paragraph); ?></p>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="omf-restaurant-section omf-restaurant-section--reviews" aria-labelledby="omf-restaurant-reviews-title">
		<div class="omf-restaurant-section__inner">
			<h2 id="omf-restaurant-reviews-title" class="omf-restaurant-section__title">Avis des utilisateurs</h2>

			<div class="omf-restaurant-reviews">
				<?php foreach ($reviews as $review) : ?>
					<article class="omf-restaurant-review omf-restaurant-review--<?php echo esc_attr($review['tone']); ?>">
						<div class="omf-restaurant-review__avatar" aria-hidden="true"><?php echo esc_html($review['initials']); ?></div>

						<div class="omf-restaurant-review__rating" aria-label="Avis note 5 sur 5">
							<?php for ($i = 0; $i < 5; $i++) : ?>
								<img class="omf-restaurant-review__star" src="<?php echo esc_url($star_icons['full']); ?>" alt="" aria-hidden="true" loading="lazy" />
							<?php endfor; ?>
						</div>

						<blockquote class="omf-restaurant-review__content">
							<p><?php echo esc_html($review['content']); ?></p>
						</blockquote>

						<p class="omf-restaurant-review__author"><?php echo esc_html($review['name']); ?></p>
						<p class="omf-restaurant-review__date"><?php echo esc_html($review['date']); ?></p>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section id="reservation" class="omf-restaurant-section omf-restaurant-section--reservation" aria-labelledby="omf-restaurant-reservation-title">
		<div class="omf-restaurant-section__inner">
			<div class="omf-restaurant-reservation">
				<div class="omf-restaurant-reservation__media">
					<img
						class="omf-restaurant-reservation__image"
						src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $restaurant['reservation_image']); ?>"
						alt="Interieur du restaurant <?php echo esc_attr($restaurant['name']); ?>"
						loading="lazy"
					/>
				</div>

				<div class="omf-restaurant-reservation__content">
					<h2 id="omf-restaurant-reservation-title" class="omf-restaurant-reservation__title">Faire une reservation</h2>
					<p id="omf-restaurant-reservation-note" class="screen-reader-text">Ce formulaire est presente a titre de demonstration visuelle et ne traite pas les soumissions.</p>

					<form class="omf-restaurant-form" action="<?php echo esc_url($reservation_url); ?>" method="post" aria-describedby="omf-restaurant-reservation-note">
						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-first-name">Prenom <span aria-hidden="true">*</span></label>
							<input id="omf-reservation-first-name" name="first_name" type="text" required />
						</div>

						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-last-name">Nom <span aria-hidden="true">*</span></label>
							<input id="omf-reservation-last-name" name="last_name" type="text" required />
						</div>

						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-email">Adresse mail <span aria-hidden="true">*</span></label>
							<input id="omf-reservation-email" name="email" type="email" required />
						</div>

						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-phone">N de telephone <span aria-hidden="true">*</span></label>
							<input id="omf-reservation-phone" name="phone" type="tel" required />
						</div>

						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-date">Date <span aria-hidden="true">*</span></label>
							<input id="omf-reservation-date" name="reservation_date" type="date" required />
						</div>

						<div class="omf-restaurant-form__field">
							<label for="omf-reservation-message">Message (optionnel)</label>
							<textarea id="omf-reservation-message" name="message" rows="3"></textarea>
						</div>

						<button class="omf-button omf-button--primary omf-restaurant-form__submit" type="submit">Reserver</button>
					</form>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
