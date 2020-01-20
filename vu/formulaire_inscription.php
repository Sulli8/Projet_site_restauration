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
        style="  margin: 230px auto;;
          width:400px;
          padding:10px;
          height:400px;
          padding:10px 20px;
           opacity : 0.9;
          background-color:#990017;
          box-shadow: 0 15px 25px rgba(0,0,0,.5);
          border-radius: 10px;">
        <h1>Inscription</h1>
        <div>
          <label class="label" for="">Nom</label>
          <input type="text" name="nom" placeholder="Nom"/>
        </div>

        <div>
          <label>Prenom</label>
          <input type="text" name="prenom" placeholder="Prenom"/>
        </div>

        <div>
          <label class="label"  for="">Mail</label>
          <input type="text" name="mail"  placeholder="Mail"value=""/>
        </div>

<div>
  <label class="label" for="">Adresse</label>
    <input type="text" name="adresse" placeholder="Adresse">
</div>


        <label class="label" for="">Numéro de téléphone</label>

<input type="text" name="numero" placeholder="Numéro"/>

<label class="label" for="">Mot de passe</label>
          <input type="password" name="mot_de_passe" placeholder="Mot de passe"/>

          <input type="submit" value="S'inscrire"/>

      </form>
      <?php include "footer.php" ?>
  </body>
</html>
