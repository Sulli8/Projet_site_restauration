<?php
require_once("classe_erreur_reservation.php");
class reservation {
  public $_nom,$_prenom,$_mail,$_telephone,$_date,$_nombre_de_personne,$_heure;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }
  public function hydrate($donnees){
    foreach($donnees as $key => $value){
      $method = 'set'.ucfirst($key);
      if(method_exists($this,$value)){
        $this->$method($value);
      }
    }
  }
  public function setNom($nom){
    if(empty($nom)){
      header("Location:../vu/formulaire_reservation.php");
    }
    $this->_nom = $nom;
  }

  public function setPrenom($prenom){
    if(empty($prenom)){
      header("Location:../vu/formulaire_reservation.php");
    }
    $this->_prenom = $prenom;
  }

  public function setMail($mail){
    if(empty($mail)){
        header("Location:../vu/formulaire_reservation.php");

    }
    $this->_mail = $mail;
  }

  public function setTelephone($telephone){
    if(empty($telephone)){
        header("Location:../vu/formulaire_reservation.php");
    }
    $this->_telephone = $telephone;
  }
  public function setDate($date){
    if(empty($date)){
        header("Location:../vu/formulaire_reservation.php");
    }
    $this->_date = $date;
  }
  public function setNombre_de_personne($_nombre_de_personne){
    if(empty($nombre_de_personne)){
        header("Location:../vu/formulaire_reservation.php");
    }
    $this->_nombre_de_personne = $nombre_de_personne;
  }
  public function setHeure($heure){
    if(empty($heure)){
        header("Location:../vu/formulaire_reservation.php");
    }
    $this->_heure = $heure;

  }

  public function getNom(){return $this->_nom;}
  public function getPrenom(){return $this->_prenom;}
  public function getMail(){return $this->_mail;}
  public function getTelephone(){return $this->_telephone;}
  public function getDate(){return $this->_date;}
  public function getNombre_de_personne(){return $this->nombre_de_personne;}
  public function getHeure(){return $this->_heure;}


}


 ?>
