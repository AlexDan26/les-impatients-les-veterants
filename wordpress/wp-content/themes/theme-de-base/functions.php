<?php
	/*-----------------------------------------------------------------------------------*/
	/* Ce fichier est présent sur chaque page
	/* Vous pouvez y ajouter des fonctions au besoin
	/*-----------------------------------------------------------------------------------*/

/* --------------------------------
Ajoute les vignettes dans les posts de type Article */
add_theme_support( 'post-thumbnails' );


/* --------------------------------
Déclare le menu principal */
register_nav_menus( 
	array(
		/* 
			1. 'main-menu' = Nom dans le code
			2. 'Menu principal' = Nom dans l'admin
			3. 'Menu principal du site' = Description dans l'admin */
		'main-menu' => __( 'Menu principal', 'Menu principal du site' ), 
		'footer-menu' => __('Menu secondaire', 'Menu du footer du site'), /* Dupliquer cette ligne si vous désirez déclarer d'autres menus */
	)
);


/* --------------------------------
Function déclarant la barre latérale principale */
function add_sidebars() {
	register_sidebar(array(	
		/* 
			1. 'main-sidebar' = Nom dans le code
			2. 'Barre laterale principale' = Nom dans l'admin
			3. 'Barre latérale principale du site' = Description dans l'admin */
		'main-sidebar' => __( 'Barre laterale principale', 'Barre latérale principale du site' ), 
		/* Dupliquer cette ligne si vous désirez déclarer d'autres sidebars */
	));
} 
/* Appel la fonction déclarant la barre latérale au moment de l'init des widgets */
add_action('widgets_init', 'add_sidebars');


/* -------------------------------- 
Function ajoutant les styles et scripts */
function add_style_and_js()  { 
	/* Ajoute le fichier style.css du theme WordPress actif 
	  1. 'default' = ID de référence à donner au à la feuille de style
		2. get_template_directory_uri() . '/style.css' = Chemin où ce trouve le fichier CSS en question
	*/
	wp_enqueue_style('default', get_template_directory_uri() . '/style.css?v='.time());
	wp_enqueue_style('default', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css");
	wp_enqueue_style('default', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css");
	wp_enqueue_style('font', "https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap");
	wp_enqueue_style('default', "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css");
	

	/* Pour ajoutez une feuille de style supplémentaire, copier la ligne précédente et ajuster le chemin du fichier de façon relative vers votre nouveau fichier CSS */

	/* Ajoute le fichier main.js du theme WordPress actif 
	   1. 'default' = ID de référence à donner au script
		 2. get_template_directory_uri() . '/main.js' = Chemin où ce trouve le fichier JS en question
		 3. array() = Liste des dépendances de ce script (généralement vide)
		 4. false = Si un no de version doit être ajouté (généralement à false)
		 5. true = Est-ce que le script doit-être ajouté à la fin du body. Si mis à false le script est ajouter dans le head à la place
	*/
	wp_enqueue_script('default', get_template_directory_uri() . '/main.js?v='.time(), array(), false, true);
	wp_enqueue_script('default', "https://code.jquery.com/jquery-3.2.1.slim.min.js", array(), false, true);
	wp_enqueue_script('default', "https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js", array(), false, true);
	wp_enqueue_script('default', "https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js", array(), false, true);
	wp_enqueue_script('default', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js", array(), false, true);
	wp_enqueue_script('default', "https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js", array(), false, true);
	wp_enqueue_script('default', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.jss", array(), false, true);
	wp_enqueue_script('default', "https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js", array(), false, true);
	/* Pour ajoutez un script, copier la ligne précédente et ajuster le chemin de façon relative vers votre nouveau fichier JS */
}

/* Appel de la fonction ajoutant les styles et scripts */
add_action('wp_enqueue_scripts', 'add_style_and_js'); 

/** Cours 7 - 11 octobre 2023 : Ajout d'e filtres utilitaires pour Bootstrap NavBar */
// Pour ajouter sur les <li>
function add_menu_list_item_class($classes, $item, $args) {
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
  }
 add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);
 // Pour ajouter sur les <a>
 function add_additional_class_on_a($classes, $item, $args){
    if (isset($args->link_item_class)) {
        $classes['class'] = $args->link_item_class;
    }
    return $classes;
}
add_filter('nav_menu_link_attributes', 'add_additional_class_on_a', 1, 3);

function filter_bootstrap_nav_menu_css_class($classes, $item, $args) {
  if (isset($args->bootstrap)) {
    $classes[] = 'nav-item';

    if (in_array('menu-item-has-children', $classes)) {
      $classes[] = 'dropdown';
    }

    if (in_array('dropdown-header', $classes)) {
      unset($classes[array_search('dropdown-header', $classes)]);
    }
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'filter_bootstrap_nav_menu_css_class', 10, 3);

/**
 * Add bootstrap attributes to individual link elements.
 */

function filter_bootstrap_nav_menu_link_attributes($atts, $item, $args, $depth) {
  if (isset($args->bootstrap)) {
    if (!$atts['class']) {
      $atts['class'] = '';
    }

    if ($depth > 0) {
      if (in_array('dropdown-header', $item->classes)) {
        $atts['class'] = 'dropdown-header';
      } else {
        $atts['class'] .= 'dropdown-item';
      }

      if ($item->description) {
        $atts['class'] .= ' has-description';
      }
    } else {
      $atts['class'] .= 'nav-link';

      if (in_array('menu-item-has-children', $item->classes)) {
        $atts['class'] .= ' dropdown-toggle';
        $atts['role'] = 'button';
        $atts['data-toggle'] = 'dropdown';
        $atts['aria-haspopup'] = 'true';
        $atts['aria-expanded'] = 'false';
      }
    }
  }
  return $atts;
}
add_filter('nav_menu_link_attributes', 'filter_bootstrap_nav_menu_link_attributes', 10, 4);

/**
 * Add bootstrap classes to dropdown menus.
 */

function filter_bootstrap_nav_menu_submenu_css_class($classes, $args, $depth) {
  if (isset($args->bootstrap)) {
    $classes[] = 'dropdown-menu';
  }
  return $classes;
}
add_filter('nav_menu_submenu_css_class', 'filter_bootstrap_nav_menu_submenu_css_class', 10, 3);