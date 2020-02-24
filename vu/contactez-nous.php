<?php session_start(); ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>Macro</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link rel="stylesheet" href="../css/linearicons.css">
      <link rel="stylesheet" href="../css/font-awesome.min.css">
      <link rel="stylesheet" href="../css/bootstrap.css">
      <link rel="stylesheet" href="../css/magnific-popup.css">
      <link rel="stylesheet" href="../css/jquery-ui.css">
      <link rel="stylesheet" href="../css/nice-select.css">
      <link rel="stylesheet" href="../css/animate.min.css">
      <link rel="stylesheet" href="../css/owl.carousel.css">
      <link rel="stylesheet" href="../css/main.css">
  </head>
  <body>


    <?php include "header.php" ?>
    <form class="box" action="" method="post">
      <h1 >Contactez-nous : </h1>
      <label   class="label" >Entrez votre adresse mail : </label>
      <div class="inputbox">


        <input  type="Mail" name="mail" placeholder="Mail" required=""/>

      </div>

      <label  class="label">Entrez votre mot de passe :</label>
      <div class="inputbox" >

        <input type="password" name="mot_de_passe" placeholder="Mot de passe" required=""/>

      </div>

      <label  class="label">Laissez-nous un commentaire :</label>
      <div class="inputbox" >

        <input type="Commentaires" name="commentaires" placeholder="Commentaires" required=""/>

      </div>






      <div>
        <input type="submit" value="Connexion"/>
      </div>


      <div>
        <a style="color:white;" href="mot_de_passe_oublie.php">Mot de passe oublié?</a>

        <a  style="color:white;" href="formulaire_inscription.php">Inscription</a>
      </div>
    </form>

    <?php include "footer.php" ?>

  </body>
</html>
