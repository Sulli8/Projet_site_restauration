<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin</title>


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
<script>



function bouton(){
  formulaire();
}

function formulaire(){
  var label = document.getElementById('label');
  label.innerHTML = 'Ecrivez une commission :';
  var input = document.getElementById('input');
  input.innerHTML = "<textarea name='textarea' style='width: 50%; height: 150px;padding: 12px 15px;'/>";
  var submit = document.getElementById('submit');
  submit.innerHTML = "<input ows='5' size='50' style='margin-top:20px;' type='submit' name='submit' value='Envoyer une commission'/>";

}

</script>

        <style>

#formulaire{
  margin-left: 800px;
  margin-top:50px ;
}

#label{
  color:white;
}


        </style>
  </head>


  <body style="  background-image:url(../img/tableau/admin.jpeg);
    height: 1000px;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;">


<?php
require_once('classe_erreur_connexion_admin.php');
?>

<?php
include "classe_header.php";

class connexion_admin {

public function admin_connexion(admin $donnees){
  if($donnees->getMail_admin() === "az" && $donnees->getMdp_admin() === "az"){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    $admin_req = $bdd->query('SELECT * FROM  reservation');
    $query = $admin_req->fetch();
    $result = array_unique($query);

?>

<div style="margin-bottom:200px;background-color:black;margin-left:150px;margin-top:-100px;height:700px;width:600px;border:1px solid white;color:white;font-size:20px;">
<p style="text-align:center;color:white;">Les réservations :</p>


<?php
    foreach($result as $key => $value){
      ?>

      <?php

      echo ucfirst($key)." : ".$value."</br>";

    }
  }

  else{
    header("Location:../vu/index.php");
  }

}


}

?>

</div>
<input id="bouton"  type="button" style="color:white;background-color:#990017;margin-top:300px ;margin-left:800px;" value="Déposer une commision" onclick="bouton()"/>

<form method="POST" action="../vu/index.php" id="formulaire">

<div id="label"></div>
<div id="input"></div>
<div id="submit"></div>

</form>

  </body>

</html>
