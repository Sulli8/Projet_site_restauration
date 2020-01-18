
<?php
class Inscription {

  private $_nom;
  private $_prenom;
  private $_mail;
  private $_adresse;
  private $_numero;
  private $_mdp;

  public function __construct($nom,$prenom,$mail,$adresse,$numero,$mdp){
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setMail($mail);
    $this->setAdresse($adresse);
    $this->setNumero($numero);
    $this->setMdp($mdp);

    try {
       $bdd = new PDO('mysql:host=localhost;port=8889;dbname=restauration;','root','root');
     }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
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


  public function setMdp($mdp){
    if(empty($mdp)){
      header("Location:../vu/formulaire_inscription.php");
      return;

    }
    $this->_mdp = $mdp;
  }

  public function inscription(){

    if(isset($this->_nom) && isset($this->_prenom) && isset($this->_mail) && isset($this->_adresse) && isset($this->_numero) && isset($this->_mdp)){




    $req = $bdd->prepare('INSERT INTO adherent(nom,prenom,mail,adresse,numero,mot_de_passe) VALUES(:nom,:prenom,:mail,:adresse,:numero,:mot_de_passe)');
    $req->execute(array('nom'=>$this->_nom,'prenom'=>$this->_prenom,'mail'=>$this->_mail,'adresse'=>$this->_adresse,'numero'=>$this->_numero,'mot_de_passe'=>$this->_mdp));
    $inscription = $req->fetch();
    var_dump($inscription);
    if($inscription== true){
      header("Location: ../vu/index.php");
     }
     else{
       echo $inscription;
       }
     }
   }

}



$inscription = new Inscription($_POST["nom"],$_POST["prenom"],$_POST["mail"],$_POST["adresse"],$_POST["numero"],$_POST["mdp"]);
$inscription->inscription();

 ?>
