<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
<?php 
  /*wp_nav_menu(array(
    'theme_location' => 'footer-menu',
    
  ));*/
?>
    <!--logo pour footer-->
  <div class="logo">
    <a class="navbar-brand" href="https://les-veterans.tim-momo.com/wordpress/messageintro/les-impatients/">
      <img src="<?php bloginfo('template_url'); ?>/assets/impatient_noir.png">
    </a>
  </div>

  <!--container pour contenu du footer-->
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-4">
            <!--partenaire-->
        <div class="commandite">
          <div class="sponsor">
            <p>Nos partenaires</p>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-12 col-md-6">
                  <a href="https://www.desjardins.com/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Desjardins.png" alt=""></a>
                  <a href="https://www.bloomberg.com/profile/company/0244431D:CN"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Capinabel.png" alt=""></a><!--Désolé, on a vraiment rien trouvé au sujet de leur site Web-->
                  <a href="https://www.canadahelps.org/fr/organismesdebienfaisance/fondation-robert-dutton/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Dutton.png" alt=""></a>
                  <a href="https://www.fieracapital.com/fr"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Fiera.png" alt=""></a>
                </div>

                <div class="col-12  col-md-6">
                  <a href="https://nesbittburns.bmo.com/gerald.perron/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Perron.png" alt=""></a>
                  <a href="https://phaneuf.ca/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Phaneuf.png" alt=""></a>
                  <a href="https://www.canadahelps.org/fr/organismesdebienfaisance/fondation-phila/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Phila.png" alt=""></a>
                  <a href="https://www.ophq.gouv.qc.ca/"><img class="img-fluid" src="<?php bloginfo('template_url'); ?>/assets/logo_Qc.png" alt=""></a>
                </div>
            </div>
          </div>
        </div>
      </div>

            <!--bouton de donation-->
      <div class="col-12 col-md-4">
        <a class="nav-link" href="https://impatients.ca/faire-un-don/">
        <div class="buttonspace buttonDonateFoot"><button>Faire un don</button>
        </div>
        </a>
      </div>
            <!--section contact-->
      <div class="col-12 col-md-4 ">
        <div class="contact">
          <h1>Contact</h1>
        </div>
        <div class="contact">
          <p>(514)-842-1043 </p>
          <p>Boutique:(438)-393-9121</p>
          <p>reception@impatients.ca</p>
          <a
            href="https://www.google.com/maps/place/Les+Impatients/@45.5137226,-73.5691323,15z/data=!4m6!3m5!1s0x4cc91a4b05e4a1f5:0xd18026e341f51e99!8m2!3d45.5137226!4d-73.5691323!16s%2Fg%2F11c76pbghf?entry=ttu">
            <p>Trois Sapins 131A, rue <br> Sherbrooke Est Montreal(QuéBec H2X1C5)</p>
          </a>
              <!--réseaux sociaux-->
          <div class="reseaux">
            <a href="https://www.facebook.com/organisme.les.impatients/"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/lesimpatients/"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/user/LesImpatients"><i class="bi bi-youtube"></i></a>
          </div>
        </div>
      </div>
     <!--mention pour projets scolaire-->
     <div class="mention">
        <p> © 2023 Les Impatients. Tous droits réservés. Conception par Les vétérans</p>
      </div>
    </div>
  </div>


</footer>
<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
	 
?>

</body>
<foot>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/MotionPathPlugin.min.js"></script>
<script src="scripts/script.js"></script>
</foot>
</html>
