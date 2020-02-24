
<?php
//Code de modification mail
session_start();
var_dump($_SESSION);
$id = $_SESSION['id'];
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','root');
// Création de l'objet PDO
$prenom = $_POST["prenom"];
$req = $bdd->prepare('UPDATE adherent SET prenom=:prenom WHERE ID=:ID');
$modification = $req->execute(array('prenom'=>$prenom,'ID'=>$id));
//On modifie la base de donnée
if($modification ==  true){
  // on redirige vers la page index
  header("Location:../vu/restaurant.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../vu/telephone.php");
}


 ?>
