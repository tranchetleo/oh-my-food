<?php
/**
 * Template Name: A propos
 */

$restaurants_anchor_url = home_url('/#restaurants');

$services = array(
	array(
		'image'   => 'service_1.webp',
		'title'   => 'Sélection des meilleurs restaurants',
		'content' => 'Ohmyfood propose une sélection rigoureuse de restaurants gastronomiques testés et validés par des critiques culinaires. Chaque établissement est choisi pour la qualité de sa cuisine, de son service et de son expérience globale.',
	),
	array(
		'image'   => 'service_2.webp',
		'title'   => 'Réservation simplifiée',
		'content' => 'La plateforme permet de réserver facilement une table dans des restaurants très demandés. Grâce aux partenariats établis avec les établissements, Ohmyfood facilite l’accès à des tables souvent difficiles à obtenir.',
	),
	array(
		'image'   => 'service_3.webp',
		'title'   => 'Découverte gastronomique',
		'content' => 'Ohmyfood met en avant les chefs, les cuisines et les univers culinaires des restaurants partenaires. Les visiteurs peuvent découvrir les spécialités, l’histoire des lieux et choisir l’expérience gastronomique qui correspond le mieux à leurs attentes.',
	),
);

$editorial_sections = array(
	array(
		'title'      => 'Qu’est-ce que Ohmyfood ?',
		'image'      => 'about_1.webp',
		'image_side' => 'left',
		'content'    => array(
			'Ohmyfood est une plateforme de réservation dédiée à la gastronomie et aux restaurants d’exception. Fondée en 2021 par François Baudouin, ancien critique gastronomique, l’entreprise est née d’un constat simple : il est souvent difficile de choisir un restaurant haut de gamme lorsque l’on souhaite vivre une expérience culinaire mémorable.',
			'Grâce à son expertise et à son réseau, François Baudouin a constitué une équipe composée de journalistes culinaires et de passionnés de gastronomie. Ensemble, ils parcourent les villes pour découvrir, tester et sélectionner les établissements qui méritent réellement l’attention des amateurs de bonne cuisine.',
			'Chaque restaurant présenté sur Ohmyfood est soigneusement évalué selon plusieurs critères : la qualité des produits, la créativité des plats, le savoir-faire du chef, le service en salle et l’expérience globale proposée aux clients.',
			'L’objectif d’Ohmyfood est de permettre aux visiteurs de choisir un restaurant en toute confiance. La plateforme met en avant des établissements qui partagent une même exigence de qualité et de passion pour la gastronomie.',
		),
	),
	array(
		'title'      => 'Comment fonctionne Ohmyfood ?',
		'image'      => 'about_2.webp',
		'image_side' => 'right',
		'content'    => array(
			'Ohmyfood ne se contente pas de référencer des restaurants. La plateforme travaille en étroite collaboration avec chacun de ses partenaires afin de proposer une expérience fluide et rassurante aux utilisateurs.',
			'L’équipe d’Ohmyfood sélectionne des établissements reconnus pour leur excellence culinaire et leur engagement envers la qualité des produits. Une attention particulière est également portée au respect des producteurs, aux circuits courts et à l’authenticité des cuisines proposées.',
			'Une fois les restaurants validés, Ohmyfood met en place des partenariats permettant de réserver plus facilement une table dans ces établissements très demandés. Certaines tables sont spécialement réservées pour les utilisateurs du service, ce qui permet de réduire considérablement les délais d’attente.',
			'Sur le site, chaque restaurant dispose d’une page dédiée présentant le chef, la cuisine proposée et l’univers du lieu. Les visiteurs peuvent ainsi découvrir les établissements, comparer les expériences et réserver rapidement la table qui correspond à leurs envies.',
			'Ohmyfood accompagne ainsi les amateurs de gastronomie dans leurs moments importants : un dîner d’exception, un anniversaire ou un événement à célébrer autour d’une grande table.',
		),
	),
);

get_header();
?>

<div class="omf-about-page">
	<section class="omf-hero omf-about-hero" aria-labelledby="omf-about-hero-title">
		<div class="omf-hero__overlay">
			<div class="omf-hero__content">
				<h1 id="omf-about-hero-title" class="omf-hero__title">A propos de OhMyFood</h1>
				<p class="omf-hero__subtitle">Apprenez à nous connaitre et découvrez comment nous vous aidons</p>
				<a class="omf-button omf-button--primary" href="<?php echo esc_url($restaurants_anchor_url); ?>">
					Explores nos restaurants
				</a>
			</div>
		</div>
	</section>

	<section class="omf-about-section omf-about-section--services" aria-labelledby="omf-about-services-title">
		<div class="omf-about-section__inner">
			<h2 id="omf-about-services-title" class="omf-about-section__title">Nos services</h2>

			<div class="omf-about-services">
				<?php foreach ($services as $service) : ?>
					<article class="omf-about-service-card">
						<div class="omf-about-service-card__media">
							<img
								class="omf-about-service-card__image"
								src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $service['image']); ?>"
								alt="<?php echo esc_attr($service['title']); ?>"
								loading="lazy"
							/>
						</div>
						<div class="omf-about-service-card__content">
							<h3 class="omf-about-service-card__title"><?php echo esc_html($service['title']); ?></h3>
							<p class="omf-about-service-card__text"><?php echo esc_html($service['content']); ?></p>
						</div>
					</article>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<?php foreach ($editorial_sections as $section) : ?>
		<section class="omf-about-section omf-about-section--story" aria-labelledby="<?php echo esc_attr(sanitize_title($section['title'])); ?>">
			<div class="omf-about-section__inner">
				<div class="omf-about-story <?php echo 'right' === $section['image_side'] ? 'omf-about-story--reverse' : ''; ?>">
					<div class="omf-about-story__media">
						<img
							class="omf-about-story__image"
							src="<?php echo esc_url(get_stylesheet_directory_uri() . '/' . $section['image']); ?>"
							alt="<?php echo esc_attr($section['title']); ?>"
							loading="lazy"
						/>
					</div>

					<div class="omf-about-story__content">
						<h2 id="<?php echo esc_attr(sanitize_title($section['title'])); ?>" class="omf-about-story__title"><?php echo esc_html($section['title']); ?></h2>
						<div class="omf-about-story__text">
							<?php foreach ($section['content'] as $paragraph) : ?>
								<p><?php echo esc_html($paragraph); ?></p>
							<?php endforeach; ?>
						</div>
					</div>
				</div>
			</div>
		</section>
	<?php endforeach; ?>
</div>

<?php
get_footer();
