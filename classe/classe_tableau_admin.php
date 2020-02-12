<?php
require_once('classe_erreur_connexion_admin.php');

class admin {
  public $_mail_admin,$_mdp_admin;

  public function __construct($tableau){
    $this->hydrate($tableau);
  }

  public function hydrate($tableau){
    foreach ($tableau as $key => $value) {
      $method = 'set'.ucfirst($key);
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

    public function setMail_admin($_mail_admin){
      if(!is_string($_mail_admin)){
          header("Location:../vu/formulaire_connexion_admin.php");
        return;
      }
      $this->_mail_admin = $_mail_admin;

    }
    public function setMdp_admin($_mdp_admin){
          if(!is_string($_mdp_admin)){
            header("Location:../vu/formulaire_connexion_admin.php");
            return;
          }
          $this->_mdp_admin = $_mdp_admin;
    }
    public function getMail_admin(){return $this->_mail_admin;}
    public function getMdp_admin(){return $this->_mdp_admin;}



}


 ?>
