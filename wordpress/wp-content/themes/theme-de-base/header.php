<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche l'entête (Header) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<?php 
	// Tous les .css et .js sont chargés dans le fichier functions.php
?>

<?php wp_head(); 
/* Cette fonction permet à WordPress et aux extensions d'instancier des fichier CSS et js dans le <head>
	 Supprimer cette fonction briserait vos extensions et diverses fonctionnalités WordPress. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>
</head>

<body 
	<?php body_class(); 
	/* Applique une classe contextuel sur le body
		 ex: sur la page d'accueil vous aurez la classe "home"
		 sur un article, "single postid-{ID}"
		 etc. */
	?>
>

<header>
<div class="container">
        <!--Logo-->
        <a class="navbar-brand" href="index.html">
          <img src="assets/logo.png">
        </a>
        <!--Bouton hamburger-->
        <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="hub_services.html">Nos Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="hub_nouvelle.html">Nos Nouvelles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="equipe.html">Équipe</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="apropos.html">À propos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="histoire.html">Notre Histoire</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo esc_url(faq_url( '/' ) );faq.html ?>"title="<?php bloginfo( 'FAQ' ); ?>"></a>
            </li>
            <!--Bouton don-->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <button class="buttonDonate" type="button">Faire un don</button></a>
            </li>
            <!--Bouton langue-->
            <li class="nav-item">
              <a class="nav-link" href="#">
                <button class="buttonLangue" type="button"> EN
                  <svg class="globe" xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor"
                    class="bi bi-globe-americas" viewBox="0 0 16 16">
                    <path
                      d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z" />
                  </svg>
                </button>
              </a>
            </li>
        </div>
      </div>

   
  <nav>   
            <?php 
  wp_nav_menu(array(
    'theme_location' => 'main-menu',
    'container' => 'nav', // Utiliser une balise nav pour le conteneur du menu
    'container_class' => 'navbar navbar-expand-lg navbar-light bg-light',
  ));
?>
  </nav>   
   
    
    <!--Bannière-->
    <div class="container-fluid warning">
      <div class="row">
        <h4 class="col-11">Ce site est un travail scolaire. Cliquez ici pour le site : <a
            href="https://impatients.ca/">Les impatients</a></h4>
        <svg class="col-1 iconeX" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
          class="bi bi-x-lg" viewBox="0 0 16 16">
          <path
            d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z" />
        </svg>
      </div>
    </div>
</header>

<main><!-- Débute le contenu principal de notre site -->
</main>
