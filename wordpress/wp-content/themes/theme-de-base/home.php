<?php
/**
 * 	Template Name: Accueil
 *  Template Post Type: service, nouvelle, messageintro
 */

get_header(); // Affiche header.php

// Est-ce que nous avons des posts qui correspondent à notre requête ?
// Dans le cas de la page d'accueil, les billets les plus récents serons affichés
if ( have_posts() ) : 
	// Si oui, bouclons au travers pour tous les afficher
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
              <h2>CAMPAGNE DE LEVÉE DE FONDS
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
        <h2> Services</h2>
        </div>       
      </div>
    </div>
    <div class="container">
          <!--Bouton pour service-->
      <div class="service offert">
      <?php
  $services = new WP_Query(array('post_type'=>'service', 'posts_per_page' => 3));
  while ($services->have_posts()) : $services->the_post(); 
?>
		
        <!-- 👆 Début boucle while -->
		<a href="<?php echo get_permalink(); ?>">
        <button class="button_service"  type="button"><?php the_field("titre") ?></button>
		</a>
        <!-- 👇 Fin boucle while -->
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
<div class="container">
    <!--Nouvelle-->
      <div class="row">
        <div class="acceuil new">
        <h2> Nouvelles récentes</h2>
        </div>       
      </div>
    </div>
<div class="container">
  <div class="row">
<?php
   $nouvelles = new WP_Query(array('post_type'=>'nouvelle', "posts_per_page"=>3));
  while ($nouvelles->have_posts()) : $nouvelles->the_post();
?>
            <!-- 👆 Début boucle while -->
           
                <!--CARD NOUVELLE-->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card <?php the_field('first'); ?>">
                        <img class="card-img-top" src="<?php the_post_thumbnail('medium'); ?>"/>
                        <div class="card-body <?php the_field('couleur'); ?>">
                            <h3 class="card-title"><?php the_field('titre'); ?></h3>
                            <p class="card-text"><?php the_field('description'); ?></p>
                            <a class="navbar-brand stretched-link" href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                </div>


            <!-- 👇 Fin boucle while -->
            <?php endwhile;
            wp_reset_postdata();
            ?>
            </div>
            </div>
            
            <div class="container">
                <!--Témoignages-->
                <div class="row">
                    <div class="acceuil temoignage">
                        <h2><?php the_field('temoignage'); ?></h2>
                        <p> <?php the_field('description_video');  ?></p>
                    </div>
                </div>
                <div class="container">

                    <div class="row">
                        <iframe
                            src=<?php echo esc_attr( get_field('video') ); ?><?php echo esc_attr( get_field('video') ); ?>
                            width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </div>  
            <div class=container>
            <a class="nav-link" href="https://impatients.ca/faire-un-don/">
            <div class="buttonspace buttonDonateFoot"><button>Faire un don</button></a>
        </div>
            </div>


     
      </div>
    </div>
	</article>

<?php endwhile; wp_reset_postdata(); // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>