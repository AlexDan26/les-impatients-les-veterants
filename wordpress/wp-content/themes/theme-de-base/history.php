<?php
/**
 * 	Template Name: Historique
 */
get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>

				<main id="main">

				<div class="container">
      <div class="container">
        <h1 class="top_title">Les impatients </h1>
          <div class="hero main-container">
            <div class="first-container share">
        
             <h1> <span>H</span><span>i</span><span>s</span><span>t</span><span>o</span><span>r</span><span>i</span><span>q</span><span>u</span><span>e</span></h1>        
            </div>
            </div>

<div class="container">
  <div class="row">
	<section class="timeline">
	  <ul>
		<li>
		  <div class="One">
			<time> <?php the_field('annee_1');?></time>
			<div class="discovery one">
			  <h1> <?php the_field('titre_1');?></h1>
			  <p>
			  <?php the_field('description_1');?></p>
			</div>
		  </div>
		</li>
		<li>
		  <div class="Two">
			<time><?php the_field('annee_2');?></time>
			<div class="discovery two">
			  <h1><?php the_field('titre_2');?></h1>
			
			  <p>
			  <?php the_field('description_2');?> </p>
			</div>
		  </div>
		</li>
		<li>
		  <div class="Three">
			<time><?php the_field('annee_3');?></time>
			<div class="discovery three">
			  <h1><?php the_field('titre_3');?></h1>
			  <p><?php the_field('description_3');?></p>
			</div>
		  </div>
		</li>
		<li>
		  <div class="Four">
			<time><?php the_field('annee_4');?></time>
			<div class="discovery four">
			  <h1><?php the_field('titre_4');?></h1>
			  <p>
			  <?php the_field('description_4');?> </p>
			</div>
		  </div>
		</li>
	  </ul>
	</section>
  </div>
</div>
</main>

			</h2>
		<?php endif; ?>
		
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>