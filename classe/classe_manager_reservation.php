<?php

require_once('classe_erreur_reservation.php');
require_once('classe_reservation.php');
class classe_manager_reservation {

  public function __construct(){

  }
  public function reservation(reservation $reservation){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');

     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    $req_2 = $bdd->prepare('INSERT INTO reservation(nom,prenom,mail,telephone,dates,nombre_de_personne,heure) VALUES(?,?,?,?,?,?,?)');

    $req_2->execute(array(
    $reservation->getNom(),
    $reservation->getPrenom(),
    $reservation->getMail(),
    $reservation->getTelephone(),
    $reservation->getDates(),
    $reservation->getNombre_de_personne(),
    $reservation->getHeure()));
        var_dump($req_2);
    if($req_2 == true){
      header("Location: ../vu/restaurant.php");
    }
    else {
      header("Location: ../vu/formulaire_reservation.php");
    }


  }
}


 ?>
