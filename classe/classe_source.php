
<?php

//on redirige
require_once('classe_manager_connexion_inscription.php');
class tableau {
  //on declare le varibale public $_nom,$_prenom,$_mail,$_adresse,$_numero,$_mdp;
  public $_nom,$_prenom,$_mail,$_adresse,$_numero,$_mdp;

  public function __construct(array $donnees){
    //on apelle la methode hydrate
    $this->hydrate($donnees);
  }

public function hydrate($donnees){
//on parcours le tableau $donees
  foreach($donnees as $key => $value){
    //on delcare la varible method
      $method = 'set'.ucfirst($key);
//on verifie si la methode existe
      if(method_exists($this,$method)){
        $this->$method($value);
      }
  }

}
  public function setNom($nom){
    //Si nom est vide on fait
    if(empty($nom)){
      //on redirige
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
        //on declare de la variable nom  puis on appelle la varibale prive nom
    $this->_nom = $nom;
  }

  public function setPrenom($prenom){
        //Si prenom est vide on fait
    if(empty($prenom)){
      header("Location:../vu/formulaire_inscription.php");
      return;


        //on declare de la variable prenom puis on appelle la varibale prive prenom
    $this->_prenom = $prenom;
  }

  public function setMail($mail){
        //Si mail est vide on fait
    if(empty($mail)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
        //on declare de la variable mail puis on appelle la varibale prive mail
    $this->_mail = $mail;
  }

  public function setAdresse($adresse){
        //Si adresse est vide on fait
    if(empty($adresse)){
      header("Location:../vu/formulaire_inscription.php");
      return;
    }
        //on declare de la variable adresse  puis on appelle la varibale prive adresse
    $this->_adresse = $adresse;
  }

  public function setNumero($numero){
        //Si numero est vide on fait
    if(empty($numero)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
        //on declare de la variable numero  puis on appelle la varibale prive numero
    $this->_numero = $numero;
  }

  public function setMot_de_passe($mdp){
        //Si mdp est vide on fait
    if(empty($mdp)){
      header("Location:../vu/formulaire_inscription.php");
      return;
    }
    //on declare de la varaible mdp puis on appelle la varibale prive mdp
    $this->_mdp = $mdp;
  }

  public function getNom(){return $this->_nom;} // on retourne nom
  public function getPrenom(){return $this->_prenom;} // on retourne prenom
  public function getMail(){return $this->_mail;} // on retourne mail
  public function getAdresse(){return $this->_adresse;} // on retourne adresse
  public function getNumero(){return $this->_numero;} // on retourne numero
  public function getMot_de_passe(){return $this->_mdp;} // on retourne mdp

}







 ?>
