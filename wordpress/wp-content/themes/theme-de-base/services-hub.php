<?php
/**
 * 	Template Name: hub de services
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

<div class="row">
    
        <?php
  $services = new WP_Query(array('post_type'=>'service', 'posts_per_page' => 3));
  while ($services->have_posts()) : $services->the_post(); 
?>
        <!-- 👆 Début boucle while -->
		<div class="col-lg-4 colServices">
		<div class="card cardService <?php the_field('couleur'); ?>">
    <?php 
        $image = get_field('imagecarteservice');
        if( !empty( $image ) ): ?>
        <img class="card-img-top" style="object-fit: contain" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
    <?php endif; ?>
          <div class="card-body <?php the_field('couleur'); ?>">
            <h3 class="card-title"><?php the_field('titrecarte'); ?></h3>
            <p class="card-text"><?php the_field('descriptcarte'); ?></p>
            <!--Le lien vers le service-->
            <a class="navbar-brand stretched-link" href="<?php echo get_permalink(); ?>"></a>
          </div>

        </div>
		</div>
        <!-- 👇 Fin boucle while -->
        <?php
  endwhile; 
  wp_reset_postdata(); 
?>
    
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