<?php
try {
    $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
 }
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
$bdd->query('INSERT INTO panier (repas) VALUES("10.90")');

header("Location:../vu/Voir_tous_les_menus.php");
 ?>
