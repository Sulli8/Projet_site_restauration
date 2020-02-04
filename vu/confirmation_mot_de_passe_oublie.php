
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <title></title>
<style>


</style>

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



    <form    style="  margin: 230px auto;
      margin-top:150px;
        width:400px;
        padding:10px;
        height:400px;
        padding:10px 20px;
         opacity : 0.9;
        background-color:#990017;
        box-shadow: 0 15px 25px rgba(0,0,0,.5);
        border-radius: 10px;" action="..\traitement\traitement_confirmation_mot_de_passe.php" method="post">
      <h1 style="color:#fff;">Réinitialiser mot de passe</h1>

      <label class="label" style="color:#fff;" >Entrez votre nouveau mot de passe : </label>
      <div class="inputbox">

        <input style="background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="password" name="password" placeholder="Nouveau Mot de passe" required=""/>

      </div>

      <label class="label" style="color:#fff;">Confirmation mot de passe :</label>
      <div class="inputbox" >

        <input style="background:none;border-left:none;border-right:none;border-bottom:1px solid white;border-top:none;cursor:text;display:block;margin-left:0px;" type="password" name="mot_de_passe" placeholder="Confirmation Mot de passe" required=""/>

      </div>

      <div>
        <input style="background-color:white;margin-top:15px;color:#990017;" type="submit" value="Envoyer"/>
      </div>
    </form>

    <?php include "footer.php"  ?>

  </body>
</html>
