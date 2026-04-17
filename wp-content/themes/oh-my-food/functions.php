<?php

/* Chargement des fichier css */

// Ajout du fichier reset.css plus d'explication dans le fichier
add_action( 'wp_enqueue_scripts', 'my_child_reset_styles', 21 );
function my_child_reset_styles() {
    wp_enqueue_style( 'child-reset', get_stylesheet_directory_uri() . '/reset.css', array(), '1.0' );
}


// Ajout du fichier style.css
function theme_enqueue_styles() {
	
  $file_name = '/style.css'; // Nom du fichier CSS
	$style_path =  get_stylesheet_directory() . $file_name; // Chemin vers votre fichier CSS
	wp_enqueue_style(
        'oh-my-food-style', // Identifiant unique pour votre style
        get_stylesheet_directory_uri(). $file_name,
        array(), // Dépendances, le cas échéant
        file_exists($style_path) ? filemtime($style_path) : false // Version du fichier basée sur la date de dernière modification ( pour les probleme de cache)
    );
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles', 20 );

/* Chargement du fichier script.js */

add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_scripts' );
function wpchild_enqueue_scripts(){
  $file_name = '/script.js';
  $script_path = get_stylesheet_directory() . $file_name;

  wp_enqueue_script(
    'oh-my-food-script',
    get_stylesheet_directory_uri() . $file_name,
    array(),
    file_exists( $script_path ) ? filemtime( $script_path ) : false,
    true
  );
}

/*
 * IDs fixes des formulaires Contact Form 7 utilises par le theme enfant.
 * Ajuster ces valeurs pour qu'elles correspondent aux IDs presents en admin.
 */
if ( ! defined( 'OH_MY_FOOD_CF7_RESERVATION_FORM_ID' ) ) {
	define( 'OH_MY_FOOD_CF7_RESERVATION_FORM_ID', '3f739c8' );
}

if ( ! defined( 'OH_MY_FOOD_CF7_CONTEST_FORM_ID' ) ) {
	define( 'OH_MY_FOOD_CF7_CONTEST_FORM_ID', '8cccb11' );
}

/**
 * Retourne le rendu d'un formulaire Contact Form 7.
 */
function oh_my_food_render_cf7_form( $form_id, $form_title, $html_class ) {
	$form_id = sanitize_text_field( (string) $form_id );

	if ( '' === $form_id || ! shortcode_exists( 'contact-form-7' ) ) {
		if ( current_user_can( 'manage_options' ) ) {
			return '<p class="omf-form-notice">Contact Form 7 est inactif ou l ID du formulaire est invalide.</p>';
		}

		return '';
	}

	$shortcode = sprintf(
		'[contact-form-7 id="%1$s" title="%2$s" html_class="%3$s"]',
		$form_id,
		esc_attr( $form_title ),
		esc_attr( $html_class )
	);

	return do_shortcode( $shortcode );
}

/* Renomme l'item Home du menu principal en Accueil sans casser le menu WordPress. */
add_filter( 'wp_nav_menu_objects', 'oh_my_food_rename_home_menu_item', 10, 2 );
function oh_my_food_rename_home_menu_item( $items, $args ) {
    if ( empty( $args->theme_location ) || 'primary' !== $args->theme_location ) {
        return $items;
    }

    foreach ( $items as $item ) {
        if ( isset( $item->title ) && 'Home' === trim( wp_strip_all_tags( $item->title ) ) ) {
            $item->title = 'Accueil';
        }
    }

    return $items;
}
