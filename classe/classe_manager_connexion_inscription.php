<?php
//On redirige vers le fichier classe source.php
require_once('classe_source.php');
//on redirige vers le fichier classe erreur_connexion . php
require_once('classe_erreur_connexion.php');
class Manager{


  public function inscription(tableau $donnees){
    //on seconnecte a la BDDD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
    //On declare la varibale req puis on applle la methode prepare de l'objet pdo
    $req = $bdd->prepare('INSERT INTO adherent(nom,prenom,mail,adresse,telephone,mot_de_passe) VALUES(?,?,?,?,?,?)');
    //on delcare la varibale a puis on appelle la methode execute de l'objet pdo
    $a = $req->execute(array(
    $donnees->getNom(),
    $donnees->getPrenom(),
    $donnees->getMail(),
    $donnees->getAdresse(),
    $donnees->getNumero(),
    $donnees->getMot_de_passe()));
  }


  public function connexion(tableau $donnees){
  //on seconnecte a la BDDD
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }
//On déclare la variable req  puis on appele la methode prepare de l'objet PD0
    $req = $bdd->prepare('SELECT * FROM  adherent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
//On appelle la fonction execute de la classe PD0
    $req->execute(array('mail'=>$donnees->getMail(),'mot_de_passe'=>$donnees->getMot_de_passe()));
    //On declare la varibale connexion puis on appelle la methode fetch de l'objet pdo
    $connexion = $req->fetch();
// Si connexion existe alors on fait ....
    if($connexion == true){
      //on démarre une session
      session_start();
      //on declare la varibale $_SESSION['id']  de type session
        $_SESSION['id'] = $connexion['ID'];
        //on declare la varibale   $_SESSION['nom'] de type session
        $_SESSION['nom']=$connexion['nom'];
        //on declare la variable   $_SESSION['prenom'] de type session
        $_SESSION['prenom']=$connexion['prenom'];
        //on delcare la variable $_SESSION['mail'] de type session
        $_SESSION['mail'] =  $connexion['mail'];
        //On declare la varible     $_SESSION['mot_de_passe']  de type session
        $_SESSION['mot_de_passe'] =  $connexion['mot_de_passe'];
        //on redirige vers le fichier restaurant.php
        header("Location: ../vu/restaurant.php");
    }
//Sinon on fait ...
    else{
      //On redirigie vers le fichier formulaire_connexion.php
      header("Location: ../vu/formulaire_connexion.php");
    }
  }





}


 ?>
