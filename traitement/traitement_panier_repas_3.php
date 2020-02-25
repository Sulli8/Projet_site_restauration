<?php
//on se connecte a la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
 }
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
//on declare la baribale req puis on apelle la methode query de l'objet pdo
$req = $bdd->query('INSERT INTO panier (repas) VALUES("25.90")');
//on redirige vers le fichier Voir tous les menus
header("Location:../vu/Voir_tous_les_menus.php");
 ?>
