<?php
error_reporting(-1);
ini_set("display_errors",1);

require_once('classe_connexion_admin.php');
require_once('classe_tableau_admin.php');


$tableau_admin = new admin(['mail_admin'=>$_POST["mail_admin"],'mdp_admin'=>$_POST["mdp_admin"]]);
$admin = new connexion_admin();
$admin->admin_connexion($tableau_admin);
 ?>
