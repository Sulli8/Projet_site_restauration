<?php
session_start();
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

            <li><a href="../vu/restaurant.php">Restaurant</a></li>
            <li><a href="../vu/localisation.php">Localisations</a></li>
            <li><a href="../vu/galerie.php">Galerie</a></li>
            </li>
            <li class="menu-has-children"><a href="../vu/evenement.php">Evènements</a>
            </li>
            <li><a href="../vu/contact.php">Contact</a></li>
            <?php
//Si la session est vide alors on fait ...
             if(empty($_SESSION)){
//On affiche les liste html
                ?>
           <li><a href="../vu/formulaire_connexion.php">Connexion</a></li>
          <li><a href="../vu/formulaire_inscription.php">inscription</a></li>

         <?php }
//Sinon on fait ...
          else {

//On affiche lesliste HTMl 
            ?>


              <li><a href="../vu/reservation.php">Réservation</a></li>
                <li><a href="../vu/formulaire_modification.php">Modification</a></li>
</div>

<div style="font-size:15px;margin-left: 10px;color:white;list-style: none;">
                <li ><a href="../vu/formulaire_connexion_admin.php" class="red" ><i class="fas fa-user-alt"></i> Profil Admin</a></li>
                <li ><a class="red" href="../vu/se_deconnecter.php"><i class="fas fa-power-off"></i>Déconnexion</a></li>






          <?php } ?>
          </ul>
        </nav><!-- #nav-menu-container -->

  </div>
</header><!-- #header -->
