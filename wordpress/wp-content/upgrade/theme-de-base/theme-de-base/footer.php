<?php
	/*-----------------------------------------------------------------------------------*/
	/* Affiche le pied de page (Footer) sur toutes vos pages
	/*-----------------------------------------------------------------------------------*/

// Fermeture de la zone de contenu principale ?>
</main>

<footer>
<footer>
    <!--logo pour footer-->
  <div class="logo">
    <a class="navbar-brand" href="index.html">
      <img src="assets/impatient_noir.png">
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
                  <img class="img-fluid" src="assets/logo_Desjardins.png" alt="">
                  <img class="img-fluid" src="assets/logo_Capinabel.png" alt="">
                  <img class="img-fluid" src="assets/logo_Dutton.png" alt="">
                  <img class="img-fluid" src="assets/logo_Fiera.png" alt="">
                </div>

                <div class="col-12  col-md-6">
                  <img class="img-fluid" src="assets/logo_Perron.png" alt="">
                  <img class="img-fluid" src="assets/logo_Phaneuf.png" alt="">
                  <img class="img-fluid" src="assets/logo_Phila.png" alt="">
                  <img class="img-fluid" src="assets/logo_Qc.png" alt="">
                </div>
            </div>
          </div>
        </div>
      </div>

            <!--bouton de donation-->
      <div class="col-12 col-md-4">
        <div class="buttonspace buttonDonateFoot"><button>Faire un don</button>
        </div>
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
</footer>

<?php wp_footer(); 
/* Espace où WordPress peut insérer des fichiers .js et autres. Par exemple pour des extensions (plugins). 
	 Si vous enlevez cette fonction, vous désactiverez du même coup toutes vos extensions (plugins) 🤷. 
	 Vous pouvez la déplacer si désiré, mais garder là. */
?>

</body>
</html>
