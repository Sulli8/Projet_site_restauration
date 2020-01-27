
<?php

require_once('classe_reservation.php');
require_once('classe_manager_reservation.php');


if(empty($_POST['nom'])|| empty($_POST['prenom'])|| empty($_POST['mail'])|| empty($_POST['telephone'])||empty($_POST['dates'])||empty($_POST['nombre_de_personne']) || empty($_POST['heure'])){
  echo "Formulaire Incomplet";
}


else{
  $event_3 = new reservation(['nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],
  'mail'=>$_POST['mail'],'telephone'=>$_POST['telephone'],
  'dates'=>$_POST['dates'],'nombre_de_personne'=>$_POST['nombre_de_personne'],
  'heure'=>$_POST['heure']]);
  $reservation = new classe_manager_reservation();
  $req_3 = $reservation->reservation($event_3);
}


 ?>
