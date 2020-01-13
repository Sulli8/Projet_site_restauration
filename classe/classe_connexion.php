
<?php
class Connexion {

  private $_mail;
  private $_mdp;

  public function __construct($mail,$mdp){
    $this->setmail($mail);
    $this->setmdp($mdp);

  }
  public function setmail($mail){
    if(empty($mail)){
      header("Location:../vu/formulaire_connexion.php");
      return;
    }
    $this->_mail = $mail;
  }

  public function setmdp($mdp){
    if(empty($mdp)){
      header("Location:../vu/formulaire_connexion.php");
      return;
    }
    $this->_mdp = $mdp;
  }

  public function connexion(){

    if(isset($this->_mdp) && isset($this->_mail)){

      session_sart();


    try {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');

    }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }


    $req = $bdd->prepare('SELECT * FROM  adherent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
    $req->execute(array('mail'=>$this->_mail,'mot_de_passe'=>md5($this->_mdp)));
    $connexion = $req->fetch();
    var_dump($connexion);
    if($connexion == true){
        $_SESSION['id']=$connexion['id'];
        $_SESSION['nom']=$connexion['nom'];
        $_SESSION['prenom']=$connexion['prenom'];
      header("Location: ../vu/index.php");
    }

    else{
      header("Location: ../vu/index.php");
    }

    }




  }
}


$connexion = new Connexion($_POST["mail"],$_POST["mdp"]);
$connexion->connexion();

 ?>
