<?php
//on se connecte a la BDD
try {
    $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
 }
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
//on declare la varaible req puis on appelle la methode query de l'objet pdo 
$req = $bdd->query('INSERT INTO panier (repas) VALUES("20.90")');

header("Location:../vu/Voir_tous_les_menus.php");
 ?>
