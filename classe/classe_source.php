
<?php
require_once('classe_manager_connexion_inscription.php');
class tableau {
  public $_nom,$_prenom,$_mail,$_adresse,$_numero,$_mdp;

  public function __construct(array $donnees){
    $this->hydrate($donnees);
  }

public function hydrate($donnees){

  foreach($donnees as $key => $value){
      $method = 'set'.ucfirst($key);

      if(method_exists($this,$method)){
        $this->$method($value);
      }
  }

}
  public function setNom($nom){
    if(empty($nom)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
    $this->_nom = $nom;
  }

  public function setPrenom($prenom){
    if(empty($prenom)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
    $this->_prenom = $prenom;
  }

  public function setMail($mail){
    if(empty($mail)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
    $this->_mail = $mail;
  }

  public function setAdresse($adresse){
    if(empty($adresse)){
      header("Location:../vu/formulaire_inscription.php");
      return;
    }
    $this->_adresse = $adresse;
  }

  public function setNumero($numero){
    if(empty($numero)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
    $this->_numero = $numero;
  }

  public function setMot_de_passe($mdp){
    if(empty($mdp)){
      header("Location:../vu/formulaire_inscription.php");
      return;
    }
    $this->_mdp = $mdp;
  }

  public function getNom(){return $this->_nom;}
  public function getPrenom(){return $this->_prenom;}
  public function getMail(){return $this->_mail;}
  public function getAdresse(){return $this->_adresse;}
  public function getNumero(){return $this->_numero;}
  public function getMot_de_passe(){return $this->_mdp;}

}







 ?>
