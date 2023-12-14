<?php
/**
 * Template Name: FAQ
 */
get_header(); // Affiche header.php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (have_posts()) : // Est-ce que nous avons des pages à afficher ?
    // Si oui, bouclons au travers les pages (logiquement, il n'y en aura qu'une)
    while (have_posts()) : the_post();
?>

<main>
    <div class="container">
        <h1 class="top_title">Les impatients</h1>
        <!--Hero-->
        <div class="hero main-container">
            <div class="first-container share">
                <!--h2 class="article title">FAQ</h2-->
                <h1><span>F</span><span>A</span><span>Q</span></h1>
            </div>
        </div>
        <!--ACCORDÉONS-->
        <div class="accordion " id="accordionExample">
 
            <?php
            // Initialisation de la variable $index
            $index = 1;
 
            // Exemple de données pour les questions et réponses
            $faq_data = array(
                array(
                    'question' => "Allez-vous organiser prochainement des ateliers à Laval ?",
                    'answer' => "Prochainement, nous ne prévoyons pas d'ateliers dans la région de Laval, mais c'est une chose à laquelle nous pensons faire dans l'avenir."
                ),
                array(
                    'question' => "Pour s’inscrire, doit-t'on fournir les coordonnées d’un psychiatre?",
                    'answer' => "Pas nécessairement d'un psychiatre, mais pour l’inscription, on doit fournir les coordonnées d’une personne du milieu de la santé qui assure son suivi psychosocial ou médical. Cela peut-être un psychologue, travailleur social etc. Les modalités d’inscription varient d’un point de service à l’autre. Consultez la fiche du point de service qui vous intéresse."
                ),
                array(
                    'question' => "Combien de points de services avez-vous actuellement?",
                    'answer' => "Nous avons 21 points de service dans 13 villes au Québec qui comptent 900 participations par semaine."
                ),
                array(
                    'question' => "Est-ce que c'est gratuit et comment ça fonctionne ?",
                    'answer' => "Les Impatients offrent gratuitement des ateliers d’art aux personnes ayant un problème de santé mentale. Le seul prérequis pour la personne qui s’inscrit est d’avoir un intérêt à s’exprimer par l’art. Elle est accompagnée d’un·e art-thérapeute ou d’un·e artiste dans des ateliers où elle est libre et sans contraintes. Les ateliers sont d’une durée de deux heures par semaine. Le matériel est fourni."
                ),
            );
 
            // Boucle while pour générer les questions et réponses
            foreach ($faq_data as $faq_item) :
                // Utilisation de $index pour créer des identifiants uniques
                $index = "item" . $index;
            ?>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $index; ?>" aria-expanded="true" aria-controls="<?php echo $index; ?>">
                            <?php echo $faq_item['question']; ?>
                        </button>
                    </h2>
                    <div id="<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $index; ?>" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <?php echo $faq_item['answer']; ?>
                        </div>
                    </div>
                </div>
            <?php
                // Incrémentation de $index à la fin de la boucle
                $index++;
            endforeach;
            ?>
 
        </div>
    </div>
</main>

<?php endwhile; // Fermeture de la boucle

else : // Si aucune page n'a été trouvée
    get_template_part('partials/404'); // Affiche partials/404.php
endif;

get_footer(); // Affiche footer.php 
?>

