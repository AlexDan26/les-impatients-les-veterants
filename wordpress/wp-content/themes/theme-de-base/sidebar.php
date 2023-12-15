<?php 
/**
 * 	Modèle de la barre latérale (Sidebar).
 *  (N'affiche que si spécifié dans l'admin)
*/

if ( ! dynamic_sidebar( 'barre-laterale-principale' ) ) : 
	/* Si dans le tableau de bord rien n'a été mis dans la barre latérale, afficher ceci */ ?>
<?php endif; 
 // Fermeture de la barre latérale (Sidebar) 
 ?>