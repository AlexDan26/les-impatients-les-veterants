
<?php
/**
 *  Template Name: Hub de nouvelles
 *  Template Post Type: post, page, groupe
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
        <h1><span id="one">N</span><span>o</span><span>s</span>
            <span>N</span><span>o</span><span>u</span><span>v</span><span>e</span><span>l</span><span>l</span><span>e</span><span>s</span>
        </h1>
      </div>
    </div>
 
<div class="row">
   
        <?php
  $nouvelles = new WP_Query('post_type=nouvelles');
  while ($nouvelles->have_posts()) : $nouvelles->the_post();
?>
        <!-- 👆 Début boucle while -->
        <div class="row">
        <!--CARD NOUVELLE-->
        <div class="col-12 col-md-6 col-lg-4">
          <div class="card first">
            <img class="card-img-top" src="<?php /*MET LE NOM DE TON FEILD IMAGE ICI*/ ?>">
            <div class="card-body bleu">
              <h3 class="card-title"><?php the_field('titre'); ?></h3>
              <p class="card-text"><?php the_field('description'); ?></p>
              <a class="navbar-brand stretched-link" href="nouvelles.html"></a>
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