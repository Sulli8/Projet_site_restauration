<?php
session_start();

$stocker =  "<script>

  var cpt = 0;
function myfunction(){
  cpt+=1;
  document.getElementById('compteur').innerHTML = cpt;
  return cpt;
}
  </script>";

$_SESSION["compteur"] = $stocker;




 ?>
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>

<header style="width:1400px;" id="header">
  <div class="header-top">
    <div class="container">
        <div class="row justify-content-center">
        </div>
    </div>
  </div>
  <div class="container main-menu">
    <div class="row align-items-center justify-content-center d-flex">
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            <li><a href="index.php">Restaurant</a></li>
            <li><a href="localisation.php">Localisations</a></li>
            <li><a href="gallery.php">Galerie</a></li>
            <li class="menu-has-children"><a href="">Blog</a>
            </li>
            <li class="menu-has-children"><a href="">Evènements</a>
            </li>
            <li><a href="contact.php">Contact</a></li>

            <?php if(empty($_SESSION)){   ?>
           <li><a href="formulaire_connexion.php">Connexion</a></li>
          <li><a href="formulaire_inscription.php">inscription</a></li>

         <?php } else { ?>

            <li><a href="se_deconnecter.php">Déconnexion</a></li>
              <li><a href="formulaire_reservation.php">Réservation</a></li>
                <li><a href="formulaire_modification.php">Modification</a></li>

                <li><a href="panier.php"><p style="margin-left:920px;color:white;"  id="compteur"><?php echo $_SESSION["compteur"] ?></p><i style="margin-top:-50px;margin-left:1000px;font-size:20px;" class="fas fa-shopping-cart"></i></a></li>


          <?php } ?>
          </ul>
        </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header><!-- #header -->
