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

	<main>
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
              <img src="<?php bloginfo('template_url'); ?>/assets/imgIntro.png" class="imgIntro" alt="Image pour Intro">
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
          <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/caroussel_1.png" alt="Art Caroussel 1"></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/caroussel_2.png" alt="Art Caroussel 2"></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/caroussel_3.png" alt="Art Caroussel 3"></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/caroussel_4.png" alt="Art Caroussel 3"></div>
          <div class="swiper-slide"><img src="<?php bloginfo('template_url'); ?>/assets/caroussel_5.png" alt="Art Caroussel 3"></div>
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
      </div>
    </div>

    
    <div class="container">
      <!--Services-->
      <div class="row">
        <div class="acceuil service ">
        <h2> Service offert</h2>
        </div>       
      </div>
    </div>
    <div class="container">
          <!--Bouton pour service-->
      <div class="service offert">
      
            <button class="button_service" type="button"> Ateliers</button>
        
            <button class="button_service" type="button"> Collection</button>
          
            <button class="button_service" type="button"> Évènements</button>
         
     
      </div>
    </div>



    <div class="container">
    <!--Nouvelle-->
      <div class="row">
        <div class="acceuil new">
        <h2> Nouvelles récentes</h2>
        </div>       
      </div>
    </div>
    <!--card Nouvelle récente-->
    <div class="container">
      <div class="row">
      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img  class="card-img-top" src="../assets/miroir_baniere.PNG" >
          <div class="card-body vert">
            <h3 class="card-title">Clôture de miroir miroir 2e édition</h3>
            <p class="card-text"> Miroir Miroir est une démarche
              artistique et philanthropique qui rassemble de façon ludique les gens
              qui fréquentent nos ateliers et le public généreux. L’idée est simple
              et efficace : voir le regard que porte sur soi une personne qui vit
              des problèmes de santé mentale. Ainsi, un puissant échange est engagé,
              en plus de supporter la tenue des ateliers artistiques, le cœur de
              notre action.</p>
            <a class="navbar-brand stretched-link" href="nouvelles.html"></a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img  class="card-img-top" src="../assets/miroir_baniere.PNG" >
          <div class="card-body rose">
            <h3 class="card-title">Clôture de miroir miroir 2e édition</h3>
            <p class="card-text"> Miroir Miroir est une démarche
              artistique et philanthropique qui rassemble de façon ludique les gens
              qui fréquentent nos ateliers et le public généreux. L’idée est simple
              et efficace : voir le regard que porte sur soi une personne qui vit
              des problèmes de santé mentale. Ainsi, un puissant échange est engagé,
              en plus de supporter la tenue des ateliers artistiques, le cœur de
              notre action.</p>
            <a class="navbar-brand stretched-link" href="nouvelles.html"></a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4">
        <div class="card">
            <img  class="card-img-top" src="../assets/miroir_baniere.PNG" >
          <div class="card-body bleu">
            <h3 class="card-title">Clôture de miroir miroir 2e édition</h3>
            <p class="card-text"> Miroir Miroir est une démarche
              artistique et philanthropique qui rassemble de façon ludique les gens
              qui fréquentent nos ateliers et le public généreux. L’idée est simple
              et efficace : voir le regard que porte sur soi une personne qui vit
              des problèmes de santé mentale. Ainsi, un puissant échange est engagé,
              en plus de supporter la tenue des ateliers artistiques, le cœur de
              notre action.</p>
              <a class="navbar-brand stretched-link" href="nouvelles.html"></a>
          </div>
        </div>
      </div>
    </div>

</main>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>
