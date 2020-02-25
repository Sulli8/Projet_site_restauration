<?php
//on se coneccte
try {
  //on se connecte 
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}

$barre_recherche = $_POST["barre_recherche"];
//si ^barre de recher exite alors on redirige
if(isset($barre_recherche)){
  header("Location:../vu/$barre_recherche.php");
}
else{
  //on effiche recherche introuvable
  echo "recherche introuvable";
}

 ?>
