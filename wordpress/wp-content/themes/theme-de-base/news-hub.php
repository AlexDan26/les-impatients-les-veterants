<?php
/**
 * 	Template Name: Hub de nouvelles
 *  Template Post Type: post, page, groupe,nouvelles
 */
get_header(); // Affiche header.php
$nouvelles = new WP_Query('post_type=nouvelles');
?>
<main>  
    <div class="container">
      <h1 class="top_title">Les impatients</h1>
      <!--Hero-->
      <div class="hero main-container">
        <div class="first-container share">
          <!--h2 class="article title">NOS NOUVELLES</h2-->
          <h1><span id="one">N</span><span>o</span><span>s</span>
            <span>N</span><span>o</span><span>u</span><span>v</span><span>e</span><span>l</span><span>l</span><span>e</span><span>s</span>
          </h1>
        </div>
      </div>
	  <article>
      <div class="row">
        <!--CARD NOUVELLE-->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card first">
		  <?php
		  if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
			  // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
			  while ( $Nouvelles->have_posts()) : $Nouvelles->the_post(); 
		  ?>
            <img class="card-img-top" src="<?php the_field('logo'); ?>">
            <div class="card-body bleu">
              <h3 class="card-title"><?php the_field('Titre'); ?></h3>
              <p class="card-text"><?php the_field('Description'); ?></p>
              <a class="navbar-brand stretched-link" href="nouvelles.html"></a>
            </div>
          </div>
		  <?php endwhile; wp_reset_postdata(); // Fermeture de la boucle
    ?>
        </div>
        </div>
	</article>
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