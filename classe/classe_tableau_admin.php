<?php
//on redirige
require_once('classe_erreur_connexion_admin.php');

class admin {
  //on declare les varibale $_mail_admin,$_mdp_admin;
  public $_mail_admin,$_mdp_admin;

  public function __construct($tableau){
      //on apelle la methode hydrate
    $this->hydrate($tableau);
  }

  public function hydrate($tableau){
    //on parcours le tableau tableau
    foreach ($tableau as $key => $value) {
      //on declare methode 
      $method = 'set'.ucfirst($key);

      //on verifie si la methode existe
      if(method_exists($this,$method)){
        $this->$method($value);
      }
    }
  }

    public function setMail_admin($_mail_admin){
      //Si mail n'est pas une string on fait .....
      if(!is_string($_mail_admin)){
        //on redirige
          header("Location:../vu/formulaire_connexion_admin.php");
        return;
      }
              //on declare de la variable mail_admin  puis on appelle la varibale prive mail_admin
      $this->_mail_admin = $_mail_admin;

    }
    public function setMdp_admin($_mdp_admin){
      //Si mdp n'est pas un string on fait......
          if(!is_string($_mdp_admin)){
            //on redirige
            header("Location:../vu/formulaire_connexion_admin.php");
            return;
          }
      //on declare de la variable mdp_admin  puis on appelle la varibale prive mdp_admin
          $this->_mdp_admin = $_mdp_admin;
    }
    public function getMail_admin(){return $this->_mail_admin;}// on retourne mail_admin
    public function getMdp_admin(){return $this->_mdp_admin;}//on retourne mdp_admin



}


 ?>
