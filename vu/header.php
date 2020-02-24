<?php
//session_start();
 ?>
	<script src="https://kit.fontawesome.com/e1924a5c8f.js" crossorigin="anonymous"></script>
<style>


.red{
    color:#FFF;
}

.red:hover{
  color:red;
}
.main-menu {
    padding-bottom: 25px;
    padding-top: 10px;
    border-top: 1px solid rgba(255,255,255,0.2);
    border-bottom: 1px solid rgba(255,255,255,0.2);
    padding-left: 10px;
    padding-right: 10px;
}


</style>
<header style="width:1400px;" id="header">
  <div class="header-top">
    <div class="container">
        <div class="row justify-content-center">
        </div>
    </div>
  </div>
  <div class="container main-menu">
    <div style="margin-left: 40px;margin-top:20px;"class="row align-items-center justify-content-center d-flex">
      <div style="margin-left:20px;">
        <nav id="nav-menu-container">
          <ul class="nav-menu">

            <li><a href="index.php">Restaurant</a></li>
            <li><a href="localisation.php">Localisations</a></li>
            <li><a href="gallery.php">Galerie</a></li>
            </li>
            <li class="menu-has-children"><a href="evenement.php">Evènements</a>
            </li>
            <li><a href="contact.php">Contact</a></li>

            <?php if(empty($_SESSION)){   ?>
           <li><a href="formulaire_connexion.php">Connexion</a></li>
          <li><a href="formulaire_inscription.php">inscription</a></li>

         <?php } else { ?>

            <li><a href="se_deconnecter.php">Déconnexion</a></li>
              <li><a href="formulaire_reservation.php">Réservation</a></li>
                <li><a href="formulaire_modification.php">Modification</a></li>
</div>

<div style="margin-left: 10px;color:white;list-style: none;">
                <li ><a href="formulaire_connexion_admin.php" class="red" ><i class="fas fa-user-alt"></i> Profil Admin</a></li>
                <li><a href="panier.php" class="red"><i class="fas fa-shopping-cart"></i> Panier</a></li>




<div>

          <?php } ?>
          </ul>
        </nav><!-- #nav-menu-container -->
    </div>
  </div>
</header><!-- #header -->
