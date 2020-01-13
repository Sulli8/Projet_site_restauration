<?php




class connexion{
  private $_mail;
  private $_mdp;


  public function __construct($mail,$mdp){
    $this->setmail($mail);
    $this->setmdp($mdp)

  }

  public function setmail($mail){
    if(isset($mail)){
      header("Location:traitement_formulaire_conexion.php");
      return;
    }
    $this->$mail = $_mail;
  }

  public function setmdp($mdp){
    if(isset($mdp)){
        header("Location:traitement_formulaire_conexion.php");
        return;
    }
    $this->$mdp = $_mdp;
  }


  public function connexion(){

    session_start();
    try {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');

    }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }

    $this->_mail = $_POST["mail"];
    $this->_mdp = md5($_POST["mot_de_passe"]);
    $req = $bdd->prepare('SELECT * FROM  profil_parent WHERE mail=:mail and mot_de_passe=:mot_de_passe');
    $req->execute(array('mail'=>$this->_mail,'mot_de_passe'=>$this->_mdp));
    $connexion = $req->fetch();
    var_dump($connexion);
    if($connexion == true){
        $_SESSION['id']=$connexion['id'];
        $_SESSION['nom']=$connexion['nom'];
        $_SESSION['prenom']=$connexion['prenom'];
      header("Location: ../index.html");
    }

    else{
      header("Location: ../formulaire_connexion.php");
    }

  }
}


connexion($_POST["mail"],$_POST["mdp"]);








 ?>
