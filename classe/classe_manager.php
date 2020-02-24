<?php

require_once('classe_source.php');
require_once('classe_erreur_connexion.php');
require_once('classe_erreur_reservation.php');
class Manager{

  public function __construct(){

  }

  public function inscription(tableau $donnees){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    $b =  $req = $bdd->prepare('INSERT INTO adherent(nom,prenom,mail,adresse,telephone,mot_de_passe) VALUES(?,?,?,?,?,?)');
     $a = $req->execute(array(
    $donnees->getNom(),
    $donnees->getPrenom(),
    $donnees->getMail(),
    $donnees->getAdresse(),
    $donnees->getNumero(),
    $donnees->getMot_de_passe()));
  }

  public function connexion(tableau $donnees){

    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    $req = $bdd->prepare('SELECT * FROM  adherent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
    var_dump($req);
    $req->execute(array('mail'=>$donnees->getMail(),'mot_de_passe'=>$donnees->getMot_de_passe()));
    $connexion = $req->fetch();
    var_dump($connexion);
    if($connexion == true){
      session_start();
        $_SESSION['id']=$connexion['id'];
        $_SESSION['nom']=$connexion['nom'];
        $_SESSION['prenom']=$connexion['prenom'];
      header("Location: ../vu/restaurant.php");
    }

    else{
      header("Location: ../vu/formulaire_connexion.php");
    }
  }

  public function reservation(reservation $reservation){
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    $c =  $req_2 = $bdd->prepare('INSERT INTO reservation(nom,prenom,mail,telephone,dates,nombre_de_personne,heure) VALUES(?,?,?,?,?,?,?)');
     $reservation_2 = $req_2->execute(array(
    $reservation->getNom(),
    $reservation->getPrenom(),
    $reservation->getMail(),
    $reservation->getTelephone(),
    $reservation->getDate(),
    $reservation->getNombre_de_personne(),$reservation->getHeure()));


    if($reservation_2 == true){
        header("Location: ../vu/restaurant.php");
    }
    else {
        header("Location: ../vu/formulaire_reservation.php");
    }


  }



}


 ?>
