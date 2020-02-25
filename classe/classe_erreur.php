<?php
//On démarre un session
session_start();
//On redirige vers le fichier manager _connexion _ inscription
require_once('classe_manager_connexion_inscription.php');
//on redirige vers le fichier classe_source.php
require_once('classe_source.php');
//Si les post sont vides alors on fait..
if(empty($_POST['nom'])|| empty($_POST['prenom'])|| empty($_POST['adresse'])|| empty($_POST['mail'])||empty($_POST['numero'])||empty($_POST['mot_de_passe'])){

//on redirige vers le formulaire
  header("Location:../vu/formualaire_inscription.php");
}
//sinon
else {
  //on declare la varible de type tableau
  $event = new tableau(['nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'mail'=>$_POST['mail'],'adresse'=>$_POST['adresse'],'numero'=>$_POST["numero"],'mot_de_passe'=>$_POST['mot_de_passe']]);
//on declare la varibale inscription de type manager
  $inscription = new manager();
  //on delcare la varibale de type inscription 
  $req = $inscription->inscription($event);
}









 ?>
