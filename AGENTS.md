# AGENTS.md

## Contexte Projet

- Projet local WordPress `Ohmyfood` realise dans le cadre d'un projet OpenClassrooms.
- Environnement local via `Local`.
- Theme enfant actif : `wp-content/themes/oh-my-food`.
- Theme parent : `Twenty Twenty-One`.
- Toutes les modifications front doivent etre faites dans le theme enfant uniquement.
- Le projet doit rester compatible avec un WordPress classique, sans plugin supplementaire impose pour le front.

## Fichiers Theme Enfant Deja Utilises

- `wp-content/themes/oh-my-food/header.php`
- `wp-content/themes/oh-my-food/footer.php`
- `wp-content/themes/oh-my-food/style.css`
- `wp-content/themes/oh-my-food/functions.php`
- `wp-content/themes/oh-my-food/page-accueil.php`
- `wp-content/themes/oh-my-food/page-a-propos.php`
- `wp-content/themes/oh-my-food/page-restaurant.php`
- `wp-content/themes/oh-my-food/script.js`

## Etat Actuel Connu

- Le header du theme enfant est personnalise et conserve `wp_head()`, `wp_body_open()` et la structure WordPress standard.
- Le menu principal du header est dynamique via `wp_nav_menu()` sur l'emplacement `primary`.
- Le label `Home` du menu principal est remappe en `Accueil` via un filtre dans `functions.php`.
- Le footer du theme enfant est personnalise et conserve `wp_footer()`.
- Le footer contient deja :
  - une newsletter via shortcode Contact Form 7
  - un bloc `Liens utiles`
  - un paragraphe descriptif
  - un menu footer dynamique si un menu est assigne a l'emplacement `footer`
- La page d'accueil utilise `page-accueil.php` avec une hero section personnalisee.
- La hero utilise actuellement une image de fond declaree dans `style.css` : `home_hero.jpg`.
- Le logo du header et du footer repose sur le logo natif WordPress via `the_custom_logo()`.

## Regles WordPress A Respecter

- Ne jamais supprimer `wp_head()`.
- Ne jamais supprimer `wp_footer()`.
- Ne jamais casser `get_header()` ni `get_footer()`.
- Conserver `wp_nav_menu()` pour garder les menus administrables dans WordPress.
- Privilegier les fonctions WordPress natives : `home_url()`, `get_permalink()`, `get_page_by_path()`, `esc_url()`, `esc_html()`, `esc_attr()`.
- Echapper les sorties PHP autant que possible.
- Garder des templates propres, lisibles et modulaires.

## Charte Graphique

### Couleurs

- Background global : `#EDEBE7`
- Background light : `#F8F6F2`
- Primary : `#A8843C`
- Primary light : `#C6A75E`
- Foreground : `#111111`
- Foreground light : `#333333`

### Typographies

- Police des titres : `DM Serif Display`
- Police des textes : `Roboto`

### Echelle Typographique

- `h1` : `64px`
- `h2` : `36px`
- `h3` : `28px`
- Boutons principaux : `18px`
- Texte courant : `15px`
- Petits textes : `12px`

## Direction UI A Suivre

- Interface elegante, premium et chaleureuse.
- Utiliser la palette beige/dore/noir fournie comme base principale.
- Maintenir des contrastes corrects pour l'accessibilite.
- Utiliser des ombres discretes, des rayons de bordure doux et une mise en page aeree.
- Garder les CTA principaux visuellement mis en avant avec la couleur `primary`.

## Bonnes Pratiques Front

- Utiliser une structure CSS coherente avec les classes deja en place, prefixees en `omf-`.
- Privilegier Flexbox pour les structures principales.
- Garantir un rendu responsive desktop, tablette et mobile.
- Menu horizontal sur desktop, vertical sur mobile.
- Eviter les surcharges CSS inutiles et les selecteurs trop generiques.
- Reutiliser les variables CSS du `:root` avant d'ajouter de nouvelles couleurs.
- Eviter d'introduire une nouvelle charte sans validation.
- Si un nouveau composant est ajoute, suivre le meme niveau de finition que le header, la hero, la newsletter et le footer.

## Accessibilite

- Garder une hierarchie de titres logique.
- Preserver le lien `skip-link` vers `#content`.
- Fournir des etats `:hover` et `:focus-visible` visibles.
- Verifier le contraste des textes sur image ou sur fond colore.
- Eviter les contenus purement decoratifs sans alternative quand ils portent de l'information.
- Viser une base Lighthouse accessibilite > 80.

## Regles De Modification

- Toujours verifier d'abord les fichiers existants avant de modifier la structure.
- Ne pas casser les contenus deja relies a l'administration WordPress.
- Ne pas supprimer la newsletter existante du footer sans demande explicite.
- Ne pas remplacer les menus dynamiques par des liens statiques sauf besoin tres cible.
- Ne pas modifier le theme parent.
- Centraliser les styles dans `wp-content/themes/oh-my-food/style.css` sauf demande contraire.

## Points D'Attention

- Le projet contient deja des contenus et ajustements manuels. Il faut travailler avec l'existant, pas le reinitialiser.
- En cas de doute sur un slug de page comme `contact`, `a-propos` ou `mentions-legales`, preferer une verification avant d'introduire des liens supplementaires.
- Si une ressource image est utilisee dans le front, verifier qu'elle existe bien dans le theme enfant avant de la referencer.
