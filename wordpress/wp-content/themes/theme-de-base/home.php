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
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		<?php the_content(); // Contenu principal de la page ?>
		

	</article>
	<article>
	<?php
  	$service = new WP_Query('post_type=service');
  	while ($service->have_posts()) : $service->the_post(); 
	?>
    <h2 class="card__title">allo</h2>
	<?php
  endwhile; 
  wp_reset_postdata(); 
?>
</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>