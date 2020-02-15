

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

  <?php   include("header.php");  ?>



<?php
if($_POST["mail"] == $_SESSION['mail'] && $_POST["mot_de_passe"] == $_SESSION['mot_de_passe']){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
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
<div style="margin-bottom:200px;background-color:black;margin-left:100px;margin-top:200px;height:300px;width:600px;border:1px solid white;color:white;font-size:20px;">


<?php

      $tableau = array("nom"=>$modification["nom"]."<br />","prenom"=>$modification["prenom"]."<br />","mail"=>$modification["mail"]."<br />","adresse"=>$modification["adresse"]."<br />","telephone"=>$modification['telephone']."<br />","Mot_de_passe"=>$modification["mot_de_passe"]."<br />");
function hydrate($tableau){
  foreach($tableau as $key => $value){
    ?>

      <a href="../vu/<?php echo $key; ?>.php">Modifier </a> <?php echo ucfirst($key)." : ".$value; ?> <br />

  <?php } ?>

<?php } ?>
<?php
hydrate($tableau);


?>
</div>


<?php  }


else{
  header("Location:index.php");
}

include("footer.php");
 ?>
