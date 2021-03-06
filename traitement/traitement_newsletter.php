<?php
//ondemarre la session 
session_start();
//declare la varibale mailto de type POST
$mailto = $_POST['adresse'];
//on seconnecte a la BDD
try {
  $bdd = new PDO('mysql:host=localhost;dbname=restauration;charset=utf8','root','root');
}
catch(Exception $e)
{
  die('ERREUR:'.$e->getMessage());
}
$req = $bdd->prepare('SELECT * FROM adherent WHERE mail=:mail');
$req->execute(array('mail'=>$mailto));
$connexion = $req->fetch();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// Load Composer's autoloader
require '../vendor/autoload.php';
// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'sullivan.sextius@gmail.com';                     // SMTP username
    $mail->Password   = 'mk8yi7eaqM';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    //Recipients
    $mail->setFrom('sullivan.sextius@gmail.com', 'Sullivan');
    $mail->addAddress($mailto);     // Add a recipient
if(isset($connexion)){
  if(isset($mail)){
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Nouveaute hippopotamus :';
    $mail->Body    = "Découvrez nos nouveaux plat et les nouveaux restaurants : <p style='color:red;'>En ce moment le Bullshouse rénove ses <a href='http://localhost:8888/Projet_site_Restauration/vu/nouveau_menu.php'>locaux</a></p>"."\n";
    $mail->Body .="<a href='http://localhost:8888/Projet_site_Restauration/img/plat.png'>Voir le nouveau plat du jour</a>"."\n";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail client';
    $mail->send();
    header("Location: ../vu/restaurant.php");

}
}
else{
  header("Location: ../vu/evenement.php");
}
}
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
 ?>
