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
  wp_enqueue_script( 'oh-my-food-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '', true );
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



