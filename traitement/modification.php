

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
  <body style="  background-image:url(../img/formulaire_connexion.jpg);
    height: 500px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">

  <?php   include("../vu/header.php");  ?>

<?php

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
 ?>
 <?php
    $req_4 = $bdd->query('SELECT * FROM  adherent');
    $modification = $req_4->fetch();

?>
<div style="margin-left:500px;margin-top:300px;height:300px;width:300px;border:1px solid white;color:white;font-size:20px;">


<?php

      $tableau = array("nom"=>"Nom : ".$modification["nom"]."<br />","prenom"=>"Prénom : ".$modification["prenom"]."<br />","mail"=>"Mail : ".$modification["mail"]."<br />","adresse"=>"Adresse :".$modification["adresse"]."<br />","telephone"=>"Téléphone :".$modification['telephone']."<br />","Mot_de_passe"=>"Mot de passe :".$modification["mot_de_passe"]."<br />")
function hydrate($tableau){
  foreach($tableau as $key => $value){
    ?>

      <a href="../vu/<?php echo $key; ?>.php">Modifier </a> <?php echo $value; ?> <br />

  <?php } ?>

<?php } ?>
<?php
hydrate($tableau);
var_dump($_SESSION);

?>
</div>


<?php  include("../vu/footer.php"); ?>