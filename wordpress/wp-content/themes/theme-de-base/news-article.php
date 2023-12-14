<?php
/**
 * 	Template Name: Article de nouvelles
 *  Template Post Type: post, page, groupe, nouvelle
 */
get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<main>
    <!--main-->
    <div class="container">
        <div itemscope itemtype="https://schema.org/Event" class="container">
            <h1 itemprop="organizer" class="top_title">Les impatients</h1>
            <!--Hero-->
            <div class="hero main-container">
                <div class="first-container share">
                    <!--h2 class="article title">nouvelle</h2-->
                    <h1><span
                            id="one">N</span><span>o</span><span>u</span><span>v</span><span>e</span><span>l</span><span>l</span><span>e</span><span>s</span>
                    </h1>
                </div>
            </div>

            <!--IMAGES ARTICLES-->
            <img itemprop="image" class="hero" src="<?php the_post_thumbnail('medium'); ?>">
			<!--titre ARTICLES-->
            <h2 itemprop="name" class="article title"><?php the_field('titre'); ?></h2>
            <!--date-->
			<p  class="article texte"><?php the_field('date'); ?></p>
            <!--DESCRIPTION-->
            <p itemprop="description" class="article texte"><?php the_field('description'); ?></p>
            <!--SOUS-TITRE-->
            <h3 itemprop="subjectOf" class="article sub_title"><?php the_field('soustitre'); ?></h3>
            <!--DESCRIPTION-->
            <p itemprop="description" class="article texte"><?php the_field('sousdescription'); ?></p>
            <!--CONTRIBUTOR-->
            <h3 itemprop="contributor" class="article sub_title"><?php the_field('soustitre2'); ?></h3>
            <!--DESCRIPTION-->
            <p itemprop="description" class="article texte"><?php the_field('sousdescription2'); ?></p>
            <!--SECTION NOUVELLE PHOTO-->
            <div class="row justify-content-evenly">
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="section_photo">
                        <?php 
							$image = get_field('image');
							if( !empty( $image ) ): ?>
                        <img itemprop="image" class="photo" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="section_photo">
                        <?php 
							$image = get_field('image2');
							if( !empty( $image ) ): ?>
                        <img itemprop="image" class="photo" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="section_photo">
                        <?php 
							$image = get_field('image3');
							if( !empty( $image ) ): ?>
                        <img itemprop="image" class="photo" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6">
                    <div class="section_photo">
                        <?php 
							$image = get_field('image4');
							if( !empty( $image ) ): ?>
                        <img itemprop="image" class="photo" src="<?php echo esc_url($image['url']); ?>"
                            alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!--bOUTON NOUVELLE SUIVANTE-->
            <div class="suivante_new">
                <?php
        		$next_post = get_next_post();
        		if (!empty($next_post)) :
    			?>
                <a href="<?php echo get_permalink($next_post); ?>" target="_blank" rel="noreferrer noopener">Nouvelle
                    suivante</a>
                <?php endif; ?>
            </div>

        </div>
</main>
<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
	get_template_part( 'partials/404' ); // Affiche partials/404.php
endif;


get_footer(); // Affiche footer.php 
?>