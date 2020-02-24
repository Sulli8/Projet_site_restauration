<?php

session_start();
var_dump($_SESSION);
$id = $_SESSION['id'];
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','root');
// Création de l'objet PDO
$mdp = $_POST["mdp"];
$req = $bdd->prepare('UPDATE adherent SET mot_de_passe=:mot_de_passe WHERE ID=:ID');
$modification = $req->execute(array('mot_de_passe'=>$mdp,'ID'=>$id));
//On modifie la base de donnée
if($modification ==  true){
  // on redirige vers la page index
  header("Location:../vu/restaurant.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../vu/mot_de_passe.php");
}

 ?>
