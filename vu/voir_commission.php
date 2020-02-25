<?php session_start(); ?>
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
  <body  style="  background-image:url(../img/tableau/comission.jfif);
    height: 1000px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">>
    <?php
include "../vu/header.php"; ?>


<div style="margin-bottom:100px;color:white;margin-top:200px;margin-left:400px;border:1px solid white;height:500px;width:500px;background-color:black;">
<div style="color:white;margin-left:100px;"> Voici la commisson de l'administrateur :</div>
<p><?php // On affiche 
 echo $_SESSION["commision"];?></p></div>

     <?php include "../vu/footer.php"; ?>
  </body>
</html>
