
<?php
//ON redirige vers le fichier classe_reservation
require_once('classe_reservation.php');
//On redirige vers le fichier classe_MAnager _reservation
require_once('classe_manager_reservation.php');

//Si les post des input sont vide alors on fait ....
if(empty($_POST['nom'])|| empty($_POST['prenom'])|| empty($_POST['mail'])|| empty($_POST['telephone'])||empty($_POST['dates'])||empty($_POST['nombre_de_personne']) || empty($_POST['heure'])){
//On redirige vers le formulaire
  header("Location:../vu/reservation.php");
}


else{
  //On declare la varibale de type reservation
  $event_3 = new reservation(['nom'=>$_POST['nom'],'prenom'=>$_POST['prenom'],
  'mail'=>$_POST['mail'],'telephone'=>$_POST['telephone'],
  'dates'=>$_POST['dates'],'nombre_de_personne'=>$_POST['nombre_de_personne'],
  'heure'=>$_POST['heure']]);
  //On declare la varibale de type classe_manager _reservation
  $reservation = new classe_manager_reservation();
  //On declare la varible req_3 de l'objet reservation
  $req_3 = $reservation->reservation($event_3);
}


 ?>
