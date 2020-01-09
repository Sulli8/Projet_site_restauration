
<?php

class Connexion {

  private $_mail;
  private $_mdp;

  public function __construct($mail,$mdp){
    $this->setmail($mail);
    $this->setmdp($mdp);

  }
  public function setmail($mail){
    if(isset($mail)){
      header("Location:formulaire_connexion.php");
      return;
    }
    $this->_mail = $mail;
  }

  public function setmdp($mdp){
    if(isset($mdp)){
      header("Location:formulaire_connexion.php");
      return;
    }
    $this->_mdp = $mdp;
  }

  public function connexion(){
    echo $this->_mail." ".$this->_mdp;


  }
}


$connexion = new Connexion($_POST["mail"],$_POST["mdp"]);
$connexion->connexion();

 ?>
