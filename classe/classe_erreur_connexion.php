<?php
//on redirige vrrsle fichier classe manager_ connexion _ inscription
require_once('classe_manager_connexion_inscription.php');
//on redirige vers le fichier classe_soucrce.php
require_once('classe_source.php');
//on déclare la variable de type tableau
$event_2 = new tableau(['mail'=>$_POST['mail'],'mot_de_passe'=>$_POST['mot_de_passe']]);
//On de clare la varibale de type manager();
$connexion = new manager();
//On appele la methode connecion de la varibale connexion
$req_2 = $connexion->connexion($event_2);



 ?>
