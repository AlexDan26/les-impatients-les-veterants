<?php
/**
 * 	Template Name: Article de nouvelles
 */
get_header(); // Affiche header.php
$nouvelles = new WP_Query('post_type=nouvelles');
?>

	<article>
<?php
	if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( $nouvelles->have_posts() ) : $nouvelles->the_post(); 
?>
		<?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
			<h2>
				<?php the_title(); // Titre de la page ?>
			</h2>
		<?php endif; ?>
		<!--IMAGES ARTICLES-->
        <img itemprop="image" class="hero" /><?php the_post_thumbnail(); ?><img />
		<?php the_content(); // Contenu principal de la page ?>
	</article>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;

get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>