<?php

//on redirige vers le fichier "classe_erreur_reservation.php"
require_once("classe_erreur_reservation.php");
// onredirige vers le fichier "classe_manager_reservation.php"
require_once("classe_manager_reservation.php");
class reservation {
  //on declare les variable private $_nom,$_prenom,$_mail,$_telephone,$_dates,$_nombre_de_personne,$_heure;
  private $_nom,$_prenom,$_mail,$_telephone,$_dates,$_nombre_de_personne,$_heure;

  public function __construct(array $donnees){
    //on appelle la methode hydrate
    $this->hydrate($donnees);


  }
  public function hydrate($donnees){
    //on parcours le tableau donness
    foreach($donnees as $key => $value){
//on delcare lavarible method
      $method = 'set'.ucfirst($key);
//Si methode existe on fait..
      if(method_exists($this,$method)){
        //on apelle la methode
        $this->$method($value);
      }
    }
  }
  public function setNom($nom){
    //si nom est vide on fait...
    if(empty($nom)){
      header("Location:../vu/reservation.php");
    }
    //on declare la variable nom puis on appelle la varible privée nom
    $this->_nom = $nom;
  }

  public function setPrenom($prenom){
      //si prennom est vide on fait...
    if(empty($prenom)){
      //on redirige
      header("Location:../vu/reservation.php");
    }
    //on declare la variable prenom puis on appelle la varible privée prenom
    $this->_prenom = $prenom;
  }

  public function setMail($mail){
      //si mail est vide on fait...
    if(empty($mail)){
      //on redirige
      header("Location:../vu/reservation.php");

    }
    //on declare la variable mail puis on appelle la varible privée mail
    $this->_mail = $mail;
  }

  public function setTelephone($telephone){
      //si telephone  est vide on fait...
    if(empty($telephone)){
        //on redirige
      header("Location:../vu/reservation.php");
    }
    $this->_telephone = $telephone;
  }
  public function setDates($dates){
      //si date est vide on fait...
    if(empty($dates)){
      //on redirige
      header("Location:../vu/reservation.php");
    }
    //on declare la variable date puis on appelle la varible privée date
    $this->_dates = $dates;
  }
  public function setNombre_de_personne($nombre_de_personne){
      //si nom est vide on fait...
    if(empty($nombre_de_personne)){
        //on redirige
      header("Location:../vu/reservation.php");
    }
    //on declare la variable nombre_de_personne puis on appelle la varible privée nombre_de_personne
    $this->_nombre_de_personne = $nombre_de_personne;
  }
  public function setHeure($heure){
      //si nom est vide on fait...
    if(empty($heure)){
        //on redirige
      header("Location:../vu/reservation.php");
    }
    //on declare la variable heure puis on appelle la varible privée heure
    $this->_heure = $heure;

  }

  public function getNom(){return $this->_nom;} // on retourne nom
  public function getPrenom(){return $this->_prenom;}//on retourne prenom
  public function getMail(){return $this->_mail;}// on retourne le mail
  public function getTelephone(){return $this->_telephone;}// on retounre le telephone
  public function getDates(){return $this->_dates;}//on retourne date
  public function getNombre_de_personne(){return $this->_nombre_de_personne;}//on retourne nombre_de_personne
  public function getHeure(){return $this->_heure;}//on retourne heure 


}


 ?>
