<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--  <link rel="stylesheet" href="../CSS/formulaire2.css">-->
    <title>Réservation</title>

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
    height: 1000px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">

<<?php include "header.php" ?>
<section class=" section-gap relative">
  <div class=""></div>
  <div class="container">
    <div class="row justify-content-between align-items-center">
      <div class="col-lg-6 reservation-left">

      </div>
      <div class="col-lg-5 reservation-right">
        <form action="../classe/classe_erreur_reservation.php" method="post"   style="
        margin-left:-320px;
            width:400px;
            padding:10px;
            height:700px;
            padding:10px 20px;
             opacity : 0.9;
            background-color:#990017;
            box-shadow: 0 15px 25px rgba(0,0,0,.5);
            border-radius: 10px;">
            <h1 style="color:white;">Réservation</h1>


<div>
  <label style="color:white;">Nom </label>
  <input type="text" class="form-control" name="nom" placeholder="Nom" />
</div>
<div>
  <label style="color:white;">Prénom</label>
  <input type="text" class="form-control" name="prenom" placeholder="Prénom"/>
</div>
        <div>
          <label style="color:white;">Email</label>
            <input type="text" class="form-control" name="mail" placeholder="Adresse e-mail" >
        </div>

        <div>
          <label for="" style="color:white;">Téléphone</label>
            <input type="text" class="form-control" name="telephone" placeholder="Numéro de téléphone"  >
        </div>


        <div>
          <label for=""style="color:white;">Date de réservation </label>
            <input type="text" class="form-control date-picker" name="dates" placeholder="Réservez une date"  >
        </div>

        <div>

          <label style="color:white;">Nombre de personnes</label>
          <input type="text" class="form-control" name="nombre_de_personne" placeholder="Nombre de personnes"  >
        </div>

          <div >
              <label for="" style="color:white;">Heure de réservation </label>
              <input type="text" class="form-control" name="heure" placeholder="Heure de réservation" />

          </div>

<div style="padding:20px;margin-left:-15px;">
        <input type="submit" value="Réservation"class="primary-btn text-uppercase mt-20"></input>
</div>

        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>
