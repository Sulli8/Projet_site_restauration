
<?php
//Code de modification mail
session_start();
$id = $_SESSION['id'];
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','');
// Création de l'objet PDO
$adresse = $_POST["adresse"];
$req = $bdd->prepare('UPDATE adherent SET adresse=:adresse WHERE ID=:ID');
$modification = $req->execute(array('adresse'=>$adresse,'ID'=>$id));
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
