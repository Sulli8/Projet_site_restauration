<?php
error_reporting(-1);
ini_set("display_errors",1);
//On redirige vers le fichier classe_connexion Admin
require_once('classe_connexion_admin.php');
//On redirige vers le fichier classe_tableau_admin
require_once('classe_tableau_admin.php');

// on declare la varible de type admin
$tableau_admin = new admin(['mail_admin'=>$_POST["mail_admin"],'mdp_admin'=>$_POST["mdp_admin"]]);
//on declare la varible de type connexion
$admin = new connexion_admin();
//On appelle la methode amdin connexion de la variable admin
$admin->admin_connexion($tableau_admin);
 ?>
