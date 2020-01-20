<?php

session_start();
// Inclusion des classes "event_management.php" et "eventClass.php"
require_once('classe_manager.php');
require_once('classe_source.php');

if(empty($_POST['nom'])|| empty($_POST['prenom'])|| empty($_POST['adresse'])|| empty($_POST['mail'])||empty($_POST['numero'])||empty($_POST['mot_de_passe'])){
  echo "formulaire Incomplet";
}
else {
  $event = new tableau(['nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'mail'=>$_POST['mail'],'adresse'=>$_POST['adresse'],'numero'=>$_POST["numero"],'mot_de_passe'=>$_POST['mot_de_passe']]);
  $inscription = new manager();
  $req = $inscription->inscription($event);
}




 ?>
