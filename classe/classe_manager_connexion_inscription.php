<?php

require_once('classe_source.php');
require_once('classe_erreur_connexion.php');
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
    if($connexion == true){
      session_start();
        $_SESSION['id'] = $connexion['ID'];
        $_SESSION['nom']=$connexion['nom'];
        $_SESSION['prenom']=$connexion['prenom'];
      header("Location: ../vu/index.php");
    }

    else{
      header("Location: ../vu/formulaire_connexion.php");
    }
  }





}


 ?>
