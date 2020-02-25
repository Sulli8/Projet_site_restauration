<?php
//on redirigie vers le fichier source .php
require_once('classe_source.php');
//on redirige vers le fichier classe erreur Connexion
require_once('classe_erreur_connexion.php');
//on redirige vers le fichier classe erreur reservation
require_once('classe_erreur_reservation.php');
class Manager{

  public function __construct(){

  }

  public function inscription(tableau $donnees){
      //on se connecte a la bdd
    try {
          //on declare la variable bdd  de type pdo
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    //on declare la varibale b puis on applle la methode prepare de l'objet pdo
    $b =  $req = $bdd->prepare('INSERT INTO adherent(nom,prenom,mail,adresse,telephone,mot_de_passe) VALUES(?,?,?,?,?,?)');
    //on declare la variable a puis on appelle la methode execute de l'objet pdo
     $a = $req->execute(array(
    $donnees->getNom(),
    $donnees->getPrenom(),
    $donnees->getMail(),
    $donnees->getAdresse(),
    $donnees->getNumero(),
    $donnees->getMot_de_passe()));
  }

  public function connexion(tableau $donnees){
//on se connecte à la BDD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
//on declare la varaible req puis on appelle la methode prepare de l'objet pdo
    $req = $bdd->prepare('SELECT * FROM  adherent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
  //on appelle al methode execute de l'objet pdo
    $req->execute(array('mail'=>$donnees->getMail(),'mot_de_passe'=>$donnees->getMot_de_passe()));
        //on declare la varible connexion de type tableau
    $connexion = $req->fetch();
//Si connexion existe alors on fait ...
    if($connexion == true){
      //on demarre une session
      session_start();
      //on delcare la varibale $_SESSION['id'] de type session
        $_SESSION['id']=$connexion['id'];
            //on delcare la varibale $_SESSION['nom'] de type session
        $_SESSION['nom']=$connexion['nom'];
            //on delcare la varibale $_SESSION['prenom] de type session
        $_SESSION['prenom']=$connexion['prenom'];
        //on redirige vers le fichier restaurant.php
      header("Location: ../vu/restaurant.php");
    }
//sinon on fait..
    else{
      //on redirigie vers le fichier formulaire_connexion.php
      header("Location: ../vu/formulaire_connexion.php");
    }
  }

  public function reservation(reservation $reservation){
    //On se connecete a la base de donnee
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    //on declare la varible req_2 puis on appelle la methode prepare de l'objet pdo
    $req_2 = $bdd->prepare('INSERT INTO reservation(nom,prenom,mail,telephone,dates,nombre_de_personne,heure) VALUES(?,?,?,?,?,?,?)');
    //on declare la varible reservation puis on appelle la methode execute de l'objet pdo
     $reservation_2 = $req_2->execute(array(
    $reservation->getNom(),
    $reservation->getPrenom(),
    $reservation->getMail(),
    $reservation->getTelephone(),
    $reservation->getDate(),
    $reservation->getNombre_de_personne(),$reservation->getHeure()));
//Si la varibale reservation existe alors on fait...

    if($reservation_2 == true){
      //on redirige vers le fichier restaurant.php
        header("Location: ../vu/restaurant.php");
    }
    //sinon on redirige vers le fichier vers le fichier formulaire_reservation.php
    else {
        header("Location: ../vu/formulaire_reservation.php");
    }


  }



}


 ?>
