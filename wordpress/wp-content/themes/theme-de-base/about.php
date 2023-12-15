<?php 
/**
 * 	Template Name: À propos
 * 	Identique à page, mais avec une barre latérale
 */

get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>




	<article>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				
				<main>
      <div class="container">
      <div class="container">
        <h1 class="top_title">Les impatients </h1>
          <div class="hero main-container">
            <div class="first-container share">
        
             <h1> <span>À</span> <span>P</span><span>r</span><span>o</span><span>p</span><span>o</span><span>s</span></h1>        
            </div>
            </div>
        
        </div>
        <div class="container">
    <div class="mission">   
         <div class="info"> 
        <div class="row"> 
          <h1><?php the_field('titre_mission'); // Titre de la page ?></h1>
      <p>
	  <?php the_field('description_mission');  ?>
      </p>

      <h1><?php the_field('titre_valeur'); // Titre de la page ?></h1>
      
        <p><?php the_field('description_valeur');  ?></p>
       
        <div class="francois"> 
          <h1>
		  <?php the_field('titre_video');  ?>
          </h1> 
           <iframe src=<?php echo esc_attr( get_field('video') ); ?><?php echo esc_attr( get_field('video') ); ?> width="440" height="260" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
         
        </div>
        
      
    </div> 
    </div>    

          </div>   
          
       
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