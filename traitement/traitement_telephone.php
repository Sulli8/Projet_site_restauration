
<?php
//Code de modification mail
session_start();
$id = $_SESSION['id'];
//on se connecte a la BDD
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','root');
// Création de l'objet PDO
$telephone = $_POST["telephone"];
$req = $bdd->prepare('UPDATE adherent SET telephone=:telephone WHERE ID=:ID');
$modification = $req->execute(array('telephone'=>$telephone,'ID'=>$id));
//On modifie la base de donnée
if($modification ==  true){
  // on redirige vers la page restaurant
  header("Location:../vu/restaurant.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../vu/telephone.php");
}


 ?>
