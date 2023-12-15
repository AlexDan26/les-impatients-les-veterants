<?php
/**
 * 	Template Name: Service
 *  Template Post Type: service
 * 
 */
get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
<div class="container">
<h1 class="top_title">Les impatients </h1>
    <div class="hero main-container">
      <!--Le titre de la page-->
      <div class="first-container share">
        <h1><span>N</span><span>o</span><span>s</span>
          <span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span>
        </h1>
      </div>
    </div>

    
    <?php 
        $image = get_field('imageservice');
        if( !empty( $image ) ): ?>
        <img class="hero" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
        <!--Le titre du service-->
        <h2 itemprop="name" class="article title"><?php the_field('titre'); ?></h2>
        <!--La descrition du service-->
        <p itemprop="description" class="article texte">
		<?php the_field('description'); ?>
        </p>
		<!--Ateliers-->
        <h2>Ateliers</h2>
        <p><?php the_field('ateliers'); ?></p>
		<!--Horaire-->
        <h2>Horaire</h2>
        <p><?php the_field('horaire'); ?></p>
        <!--Coordonnées-->
        <h2>Coordonnées</h2>
        <p><?php the_field('cordonnees'); ?></p>
        
        <div class="suivante_new">
                <?php
                $next_post = get_next_post();
                if (!empty($next_post)) :
                ?>
                <a href="<?php echo get_permalink($next_post); ?>" target="_blank" rel="noreferrer noopener">Service Suivant</a>
                <?php endif; ?>
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