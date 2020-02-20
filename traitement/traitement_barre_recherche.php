<?php

try {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}

$barre_recherche = $_POST["barre_recherche"];

if(isset($barre_recherche)){
  header("Location:../vu/$barre_recherche.php");
}
else{
  echo "recherche introuvable";
}

 ?>
