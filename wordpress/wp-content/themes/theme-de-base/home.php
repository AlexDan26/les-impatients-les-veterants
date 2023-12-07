<?php
/**
 * 	Template Name: Accueil
 *  Template Post Type: service
 */
get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
	<div class="container">
          <h1 class="top_title">Les impatients </h1>
          <!--Titre et description-->
          <div class="row">
            <div class="col-12 col-md-8">
              <p>Les Impatients viennent en aide aux personnes ayant des problèmes de santé mentale par le biais de l’expression
                artistique.</p>
        
              <br>
              <h2>CAMPAGNE DE LE VÉE DE FONDS
                PARLE-MOI D’AMOUR ET D’ESPOIR</h2>
              <p>Il y a quelques semaines, nous avons
                fêté nos 30 ans. Pour notre
                anniversaire, on a soufflé des
                chandelles…et la maison a brûlé.
                Aidez-nous à maintenir nos activités
                et accueillir nos Impatients.</p>
            </div>
            <div class="col-12 col-md-4">
              <img src="assets/imgIntro.png" class="imgIntro" alt="Image pour Intro">
            </div>
          </div>
        </div>
		<div class="container containCaroussel">
      <!--Caroussel-->
      <!-- Slider main container -->
      <div class="swiper caroussel">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide"><img src="assets/caroussel_1.png" alt="Art Caroussel 1"></div>
          <div class="swiper-slide"><img src="assets/caroussel_2.png" alt="Art Caroussel 2"></div>
          <div class="swiper-slide"><img src="assets/caroussel_3.png" alt="Art Caroussel 3"></div>
          <div class="swiper-slide"><img src="assets/caroussel_4.png" alt="Art Caroussel 3"></div>
          <div class="swiper-slide"><img src="assets/caroussel_5.png" alt="Art Caroussel 3"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>
		

	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>
