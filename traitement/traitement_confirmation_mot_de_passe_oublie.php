
<?php
//Code de modification mot_de_passe
//on demarre une session 

session_start();
$bdd = new PDO("mysql:host=localhost;dbname=restauration;",'root','root');
// Création de l'objet PDO
$mail = $_SESSION["mail"];
$mdp = $_POST["password"];
$newpassword = $_POST["mot_de_passe"];
$new = $bdd->prepare('UPDATE adherent SET mot_de_passe=:mot_de_passe WHERE mail=:mail');
$new_mdp = $new->execute(array('mail'=>$mail,'mot_de_passe'=>$mdp));
//On modifie la base de donnée
if($new_mdp==  true && $mdp == $newpassword){
  // on redirige vers la page index
  header("Location:../vu/restaurant.php");
}
else {
  // on redirige vers le formulaire
  header("Location: ../vu/confirmation_mot_de_passe_oublie.php");
}


 ?>
