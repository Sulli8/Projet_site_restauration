<?php
//on se connecte a la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
 }
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
//on appelle la methode query de l'objet pdo
$bdd->query('INSERT INTO panier (repas) VALUES("10.90")');
//on redirige vers le fichier Voir tous les menus
header("Location:../vu/Voir_tous_les_menus.php");
 ?>
