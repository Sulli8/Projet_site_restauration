<?php
//on redirige vers le fichier classse erreur resrvation.php
require_once('classe_erreur_reservation.php');
//on redirigie vers le fichier classe_reservation.php
require_once('classe_reservation.php');
class classe_manager_reservation {

  public function __construct(){

  }
  public function reservation(reservation $reservation){
    //on se connecte a la bdd
    try {
      //on declare la variable bdd  de type pdo
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');

     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
//on declare la varibale req 2 puis on appelle la methode prepare de l'objet pdo
    $req_2 = $bdd->prepare('INSERT INTO reservation(nom,prenom,mail,telephone,dates,nombre_de_personne,heure) VALUES(?,?,?,?,?,?,?)');
//On appelle la methode execute de l'objet pdo
    $req_2->execute(array(
    $reservation->getNom(),
    $reservation->getPrenom(),
    $reservation->getMail(),
    $reservation->getTelephone(),
    $reservation->getDates(),
    $reservation->getNombre_de_personne(),
    $reservation->getHeure()));
//Si req_2 existe alors on fait ...
    if($req_2 == true){
      //on redirige vers le fichier restaurant.php
      header("Location: ../vu/restaurant.php");
    }
    //Sinon on redirige vers le fichier formulair_reservation.php
    else {
      header("Location: ../vu/formulaire_reservation.php");
    }


  }
}


 ?>
