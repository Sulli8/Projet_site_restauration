<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  <link rel="stylesheet" href="../CSS/formulaire2.css">-->
    <title>Inscription</title>

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
  <body  style="  background-image:url(../img/formulaire_connexion.jpg);
    height: 500px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">
    <?php include "header.php" ?>

      <form class="" action="../classe/classe_erreur.php" method="post"
        style="  margin: 230px auto;
        margin-top:150px;
          width:400px;
          padding:10px;
          height:500px;
          padding:10px 20px;
           opacity : 0.9;
          background-color:#990017;
          box-shadow: 0 15px 25px rgba(0,0,0,.5);
          border-radius: 10px;">
        <h1 style="text-align:center;">Inscription</h1>
        <label class="label" style="color:white;"for="">Entrez votre nom :</label>
        <div>
          <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="text" name="nom" placeholder="Nom"/>
        </div>

        <div>
          <label style="color:white;">Prenom :</label>
          <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="prenom" placeholder="Prenom"/>
        </div>

        <div>
          <label class="label" style="color:white;" for="">Mail :</label>
          <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="mail"  placeholder="Mail"value=""/>
        </div>

<div>
  <label class="label" style="color:white;" for="">Adresse :</label>
    <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="adresse" placeholder="Adresse">
</div>


        <label class="label" style="color:white;" for="">Numéro de téléphone :</label>

<input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="text" name="numero" placeholder="Numéro"/>

<label class="label" style="color:white;" for="">Mot de passe :</label>
          <input style="width:300px;background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;"  type="password" name="mot_de_passe" placeholder="Mot de passe"/>

          <input  style="color:red;margin-top:10px;display:block;margin-left:0px;" type="submit" value="S'inscrire"/>

      </form>
      <?php include "footer.php" ?>
  </body>
</html>
