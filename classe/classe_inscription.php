
<?php
class Inscription {

  private $_nom;
  private $_prenom;
  private $_mail;
  private $_adresse;
  private $_telephone;
  private $_mdp;

  $donnee = array('Nom'=>$nom,
  'Prenom'=>$prenom,
  'Mail'=>$mail,
  'Adresse'=>$adresse,
  'Telephone'=>$telephone,
  'Mdp'=>$mdp
);
  public function __construct($nom,$prenom,$mail,$adresse,$telephone,$mdp){
    $this->setNom($nom);
    $this->setPrenom($prenom);
    $this->setMail($mail);
    $this->setAdresse($adresse);
    $this->setTelephone($telephone);
    $this->setMdp($mdp);


  }

  public function hydrate(array $donnee){
    foreach($donnee as $key => $value){
        $method = 'set'.ucfirst($key);
        if(method_exist($this,$method)){
          $this->$method($value);
        }
      }


  }

  public function setNom($nom){
    if(empty($nom)){
      header("Location:../vu/formulaire_connexion.php");
      return;

    }
    $this->_nom = $nom;
  }

  public function setPrenom($prenom){
    if(empty($prenom)){
      header("Location:../vu/formulaire_connexion.php");
      return;

    }
    $this->_prenom = $prenom;
  }
  public function setMail($mail){
    if(empty($mail)){
      header("Location:../vu/formulaire_connexion.php");
      return;

    }
    $this->_mail = $mail;

  }

  public function setAdresse($adresse){
    if(empty($adresse)){
      header("Location:../vu/formulaire_connexion.php");
      return;

    }
    $this->_adresse = $adresse;
  }


  public function telephone($telephone){
    if(empty($telephone)){
      header("Location:../vu/formulaire_connexion.php");
      return;

    }
    $this->_telephone= $tlephone;
  }

  public function setmdp($mdp){
    if(empty($mdp)){
      header("Location:../vu/formulaire_connexion.php");
      return;
    }
    $this->_mdp = $mdp;
  }

  public function inscription(){

    if(isset($this->_nom) && isset($this->_prenom) && isset($this->_mail) && isset($this->_adresse) && isset($this->telephone) && isset($this->_mdp)){

    try {
      $bdd = new PDO('mysql:host=localhost;dbname=projet_site_lycee;charset=utf8','root','');

    }
    catch(Exception $e)
    {
      die('ERREUR:'.$e->getMessage());
    }


    $req = $bdd->prepare('INSERT INTO profil_adherent(nom,prenom,mail,adresse,telephone,mot_de_passe) VALUES(:nom,:prenom,:mail,:adresse,:telephone,:mot_de_passe)');
    $req->execute(array('nom'=>$this->_nom,'prenom'=>$this->_prenom,'mail'=>$this->_mail,'adresse'=>$this->_adresse,'telephone'=>$this->_telephone,'mot_de_passe'=>md5($this->_mdp)));
    $inscription = $req->fetch();
    var_dump($inscrpition);
    if($inscription== true){
      header("Location: ../vu/index.php");
    }

    else{
      header("Location: ../vu/formulaire_inscription.php");
    }

    }




  }
}


$inscription = new Inscription($_POST["nom"],$_POST["prenom"],$_POS["mail"],$_POST["adresse"],$_POST["telephone"],$_POST["mot_de_passe"]);
$inscription->inscription();

 ?>
