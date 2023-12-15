<?php
/**
 * 	Template Name: Équipe
 */
get_header(); // Affiche header.php

if ( have_posts() ) : // Est-ce que nous avons des pages à afficher ? 
	// Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
	while ( have_posts() ) : the_post(); 
?>

<article>
    <?php if (!is_front_page()) : // Si nous ne sommes PAS sur la page d'accueil ?>
    <h2>

    </h2>
    <main>

        <div class="container">
            <div class="row">
                <h1 class="top_title">Les impatients </h1>
                <div class="hero main-container">
                    <div class="first-container share">
                        <h1> <span>É</span><span>q</span><span>u</span><span>i</span><span>p</span><span>e</span></h1>
                    </div>
                </div>
                <h1 class="top_title text-reset mt-5 mb-0"><?php the_field('secteur_1');?></h1>
                <!-- employé 1 -->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
					<img class="card-img-top" <?php 
						$image = get_field('photo_1');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>

                        </a>
                        <div class="card-body cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_1');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_1');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-50"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-md">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php the_field('modal_1');?> </div>
                                        <div class="modal-footer">
                                            <button type="button " class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 2 -->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_2');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe vert">
                            <h3 class="card-title fs-3"><?php the_field('nom_2');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_2');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_2');?> 
                                        </div>
                                        <div class="modal-footer ">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 3-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_3');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe rose">
                            <h3 class="card-title fs-3"><?php the_field('nom_3');?> </h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_3');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_3');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 4-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_4');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body  cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_4');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_4');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_4');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <h1 class="top_title text-reset mt-5 mb-0"><?php the_field('secteur_2');?></h1>
                <!-- employé 5-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_5');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_5');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_5');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_5');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- employé 6-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_6');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe vert">
                            <h3 class="card-title fs-3"><?php the_field('nom_6');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_6');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_6');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 7-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_7');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe rose">
                            <h3 class="card-title fs-3"><?php the_field('nom_7');?> </h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_7');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php the_field('modal_7');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 8-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_8');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_8');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_8');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_8');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <h1 class="top_title text-reset mt-5 mb-0"><?php the_field('secteur_3');?></h1>
                <!-- employé 9-->
                <div class="col-12 col-md-6 col-lg-3 p-4 mr-3">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_9');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_9');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_9');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_9');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 10-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_10');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe vert">
                            <h3 class="card-title fs-3"><?php the_field('nom_10');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_10');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                        <?php the_field('modal_10');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 11-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_11');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe rose">
                            <h3 class="card-title fs-3"><?php the_field('nom_11');?></h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_11');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_11');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- employé 12-->
                <div class="col-12 col-md-6 col-lg-3 p-4 ">
                    <div class="cardEmploye  ">
                        <img class="card-img-top" <?php 
						$image = get_field('photo_12');
						if( !empty( $image ) ): ?>
   						 src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
						<?php endif; ?>
                        </a>
                        <div class="card-body cardEquipe bleu">
                            <h3 class="card-title fs-3"><?php the_field('nom_12');?> </h3>
                            <h4 class="card-title fs-5"><?php the_field('poste_12');?></h4>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn fs-6 fw-bold position-static top-0 start-100"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">
                                En savoir plus <i class="bi bi-book"></i>

                            </button>

                            <!-- Modal -->
                            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-sm">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Biographie</h5>
                                            <button type="button " class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
										<?php the_field('modal_12');?> 
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
    </main>
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