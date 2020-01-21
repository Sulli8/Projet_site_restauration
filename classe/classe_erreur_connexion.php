<?php

require_once('classe_manager.php');
require_once('classe_source.php');

$event_2 = new tableau(['mail'=>$_POST['mail'],'mot_de_passe'=>$_POST['mot_de_passe']]);
$connexion = new manager();
$req_2 = $connexion->connexion($event_2);



 ?>
