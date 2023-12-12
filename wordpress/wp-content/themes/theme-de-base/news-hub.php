<?php
/**
 * Template Name: Hub de nouvelles
 * Template Post Type: post, page, groupe, nouvelles
 */
get_header(); // Affiche header.php
$nouvelles = new WP_Query(array('post_type' => 'nouvelles'));
?>

<main>  
    <div class="container">
        <h1 class="top_title">Les impatients</h1>
        <!-- Hero -->
        <div class="hero main-container">
            <div class="first-container share">
                <h1><span id="one">N</span><span>o</span><span>s</span>
                    <span>N</span><span>o</span><span>u</span><span>v</span><span>e</span><span>l</span><span>l</span><span>e</span><span>s</span>
                </h1>
            </div>
        </div>

        <div class="row">
            <!-- CARD NOUVELLE -->
            <?php
            while ($nouvelles->have_posts()) : $nouvelles->the_post();
            ?>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="card first">
                        <img class="card-img-top" src="<?php the_field('logo'); ?>">
                        <div class="card-body bleu">
                            <h3 class="card-title"><?php the_field('Titre'); ?></h3>
                            <p class="card-text"><?php the_field('Description'); ?></p>
                            <a class="navbar-brand stretched-link" href="<?php the_permalink(); ?>"></a>
                        </div>
                    </div>
                </div>
            <?php
            endwhile;
            wp_reset_postdata(); // Fermeture de la boucle
            ?>
        </div>
    </div>
</main>

<?php
get_sidebar(); // Affiche le contenu de sidebar.php
get_footer(); // Affiche footer.php 
?>

