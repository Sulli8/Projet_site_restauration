<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  <link rel="stylesheet" href="../CSS/formulaire2.css">-->
    <title>Mot de passe </title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
      <!--
      CSS
      ============================================= -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
        <!--
        CSS
        ============================================= -->
            <link rel="stylesheet" href="../css/css_formulaire_connexion/formulaire_connexion.css">
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
  <body style="  background-image:url(../img/formulaire_connexion.jpg);
    height: 500px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">
    <?php include "header.php" ?>


<div>

</div>

    <form style="  margin: 230px auto;;
      width:400px;
      padding:10px;
      height:400px;
      padding:10px 20px;
       opacity : 0.9;
      background-color:#990017;
      box-shadow: 0 15px 25px rgba(0,0,0,.5);
      border-radius: 10px;" class="box" action="../traitement/traitement_mot_de_passe.php" method="post">
      <h1 style="color:white;">Modification </h1>
      <label  style="color:white;" >Entrez votre nouveau mot de passe : </label>
      <div class="inputbox">

        <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="text" name="mdp" placeholder="Mot de passe" required=""/>

      </div>


      <div>
        <input style="color:red;margin-top:10px;"  type="submit" value="Modification"/>
      </div>

    </form>
<?php include "footer.php" ?>
  </body>
</html>
