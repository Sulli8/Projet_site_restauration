
<?php

require_once('classe_reservation.php');
require_once('classe_manager.php');

$event_3 = new reservation(['nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],'mail'=>$_POST['mail'],'telephone'=>$_POST['telephone'],'date'=>$_POST['date'],'nombre_de_personne'=>$_POST['nombre_de_personne'],'heure'=>$_POST['heure']]);
$reservation= new manager();
$req_3 = $reservation->reservation($event_3);


 ?>
