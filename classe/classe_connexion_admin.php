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
  </head>
  <body style="  background-image:url(../img/tableau/admin.jpeg);
    height: 800px;
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
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    $admin_req = $bdd->query('SELECT * FROM  reservation');
    $query = $admin_req->fetch();
    $result = array_unique($query);
  
?>
<div style="margin-bottom:200px;background-color:black;margin-left:100px;margin-top:200px;height:700px;width:600px;border:1px solid white;color:white;font-size:20px;">
<p style="text-align:center;color:white;">Les réservations :</p>
<?php
    foreach($result as $key => $value){
      ?>

      <?php

      echo ucfirst($key)." : ".$value."</br>";

    }
  }

}


}

?>
</div>

  </body>

</html>
