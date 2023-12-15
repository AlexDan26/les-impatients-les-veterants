<?php
  /*-----------------------------------------------------------------------------------*/
  /* Affiche l'entête (Header) sur toutes vos pages
  /*-----------------------------------------------------------------------------------*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex" />
 
  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
  <!--Icônes Bootstrap-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <!--Scripts Bootstrap-->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <!--Fichiers CSS Bootstrap-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="...">
  <!--Fichiers Script et CSS pours les carroussel-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
  <!--Texte du titre de l'onglet-->
 
  <title>Les Impatients</title>
</head>
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
  <!--Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <!--Logo-->
        <a class="navbar-brand" href="https://les-veterans.tim-momo.com/wordpress/messageintro/les-impatients/">
          <img src="<?php bloginfo('template_url'); ?>/assets/logo.png">
        </a>
        <!--Bouton hamburger-->
        <button class="navbar-toggler burger" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <?php
        wp_nav_menu(array(
          'menu'            => 'main-menu',
          'container'       => false,
          'menu_id'         => "menuNav",
          'menu_class'      => 'navbar-nav',
          'bootstrap'       => true
        ));
      ?>
          <ul class="navbar-nav" id="menuNav">
           <!--Bouton don-->
           <li class="nav-item">
              <a class="nav-link" href="https://impatients.ca/faire-un-don/">
                <button class="buttonDonate" type="button">Faire un don</button></a>
            </li>
          </div>
      </ul>
      </div>
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