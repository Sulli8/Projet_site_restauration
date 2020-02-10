
<?php
//Code de modification mail
session_start();
var_dump($_SESSION);
$id = $_SESSION['id'];
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','root');
// Création de l'objet PDO
$nom = $_POST["nom"];
$req = $bdd->prepare('UPDATE adherent SET nom=:nom WHERE ID=:ID');
$modification = $req->execute(array('nom'=>$nom,'ID'=>$id));
//On modifie la base de donnée
if($modification ==  true){
  // on redirige vers la page index
  header("Location:../vu/index.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../vu/telephone.php");
}


 ?>
